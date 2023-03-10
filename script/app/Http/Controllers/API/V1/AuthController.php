<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Requests\Api\Auth\Login;
use App\Http\Requests\Api\Auth\Registration;
class AuthController extends Controller
{
    /**
     * Register the Seller
     *
     * This endpoint allows you to register client and generate token for authentication.
     * Along token client details will be displayed. To call authorized endpoints you need access_token generated by this endpoint.
     *
     * @bodyParam email email required The valid email of the seller, its not required if google id or apple id  is given. Example: seller@gmail.com
     * @bodyParam google_id string The Google ID of seller, Its required if email or apple id is not given. Example: 12345678
     * @bodyParam apple_id string The Apple ID of seller, Its required if email or google id is not given. Example: 12345678
     * @bodyParam password string The Password of seller, Its required if email is given. Example: admin@123
     * @bodyParam account_type string The Password of seller. Example: seller
     * @bodyParam image string The Image Url of seller.
     *
     * @response {
     *   "status": true/false,
     *   "message": string,
     *   "data": {
     *       "email": string/null,
     *       "google_id": string/null,
     *       "apple_id": string/null,
     *       "status": 0/1
     *   },
     *   "access_token": string,
     *   "token_type": "Bearer"
     *   }
     *
     */
    public function register(Registration $request)
    {
        $token = "";
        $statusCode = 401;
        $message = "Fill the data in proper way";
        $data = $request->validated();
        $previousRecord = User::select(['id', 'name', 'role_id', 'email', 'password', 'status'])->where(['email' => $request->email]);
        $previousRecord = $previousRecord->first();
        if (isset($previousRecord->id) && !empty($previousRecord->id)) {
            $statusCode = 403;
            $message = "You are already registered please login.";
            $data = null;
        } else {
            $statusCode = 200;
            $message = "Register successfully";
            $data = array("name" => ($request->name ?? null), "email" => $request->email, "status" => 1, "password" =>(isset($data["password"]) && !empty($data["password"]) ? Hash::make($data["password"]) : null), "role_id" => $request->role_id);
            $data = User::create($data);
            $data = User::where("id", $data->id)->select('name', 'email', 'role_id')->first();
            $token = $data->createToken('digityu')->accessToken;
        }
        return response(['status' => ($statusCode == 200 ? true : false), 'message' => ($statusCode == 200 ? "Register successfully" : $message), "data" => ($data ?? array()), 'access_token' => $token, 'token_type' => 'Bearer'], $statusCode);
    }
    /**
     * Login the Seller
     *
     * This endpoint allows you to register client and generate token for authentication.
     * Along token client details will be displayed. To call authorized endpoints you need access_token generated by this endpoint.
     *
     * @bodyParam email email required The valid email of the seller, its not required if google id or apple id  is given. Example: seller@gmail.com
     * @bodyParam google_id string The Google ID of seller, Its required if email or apple id is not given. Example: 12345678
     * @bodyParam apple_id string The Apple ID of seller, Its required if email or google id is not given. Example: 12345678
     * @bodyParam password string The Password of seller, Its required if email is given. Example: admin@123
     * @bodyParam social_login string apple_id or google_id is not register. Then this api first register user using socail login and then generate token for authenticate.
     *
     * @response {
     *   "status": true/false,
     *   "message": string/null,
     *   "data": {
     *       "id": string/null,
     *       "fullname": string/null,
     *       "displayname": string/null,
     *       "email": string/null,
     *       "image": string/null,
     *       "account_type": string/null,
     *       "stripe_account_id": string/null,
     *       "stripe_status": true/false,
     *       "IsNewAccount": true/false,
     *       "accountLink": string/null
     *   },
     *   "access_token": string/null,
     *   "token_type": "Bearer"
     *  }
     */
    public function login(Login $request)
    {
        $token = "";
        $statusCode = 401;
        $message = "Invalid information";
        $data = User::select(['id', 'name', 'amount', 'role_id', 'status', 'email', 'password'])->where(['email' => $request->email])->first();
        if ($data) {
            if (!Hash::check($request->password, $data->password)) {
                return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
            }
            if (isset($data->status) && !empty($data->status)) {
                unset($data->status);
                $token = $data->createToken('digityu')->accessToken;
                $statusCode = 200;
                $message = "User login successfully.";
            } else {
                unset($data);
                $message = "You are temporary blocked from administrative";
            }
        } else {
            $message = "Please enter a valid email or password!";
            $statusCode = 401;
        }
        return response(['status' => ($statusCode == 200 ? true : false), 'message' => ($statusCode == 200 ? 'Login Successfully' : $message), "data" => ($data ?? array()), 'accessToken' => $token, 'token_type' => 'Bearer'], $statusCode);
    }
    public function logout (Request $request) {
        
        $request->user()->token()->revoke();
        $statusCode = 200;
        $message = 'You have been successfully logged out!';
  
        return response(['status' => ($statusCode == 200 ? true : false), 'message' => $message], $statusCode);
    }
}
