<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByPath;
use App\Http\Controllers\API\V1\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::group([
    'prefix'     => '/store/{tenant}',
    'middleware' => [InitializeTenancyByPath::class,'tenantenvironment'],
], function () {
    Route::get('cron/product-price-reset','Seller\CronController@ProductPriceReset');

});
Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::prefix('/auth')->group(function () {
        Route::post('/login', [AuthController::class, 'login'])->name('login.api');
        Route::post('/register', [AuthController::class, 'register'])->name('register.api');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout.api');
    });
});

//Auth API's