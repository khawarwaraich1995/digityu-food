<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Seeder;
use App\Models\Menu;
class TenantMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus=array(
            array(
                "id" => 1,
                "name" => "Header",
                "position" => "header",
                "data" => '[{"text":"Home","href":"/","icon":"","target":"_self","title":""},{"text":"Products","href":"/products","icon":"empty","target":"_self","title":""},{"text":"Contact","href":"/contact","icon":"empty","target":"_self","title":""},{"text":"Blogs","href":"/blog","icon":"empty","target":"_self","title":""}]',
                "lang" => "en",
                "status" => 1,
                "created_at" => "2021-12-01 18:19:55",
                "updated_at" => "2022-01-09 14:16:03"
            )
        );

        Menu::insert($menus);
    }
}
