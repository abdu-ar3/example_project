<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin1 = new \App\Models\User;
        $admin1->username = "admin";
        $admin1->name = "Site Administrator";
        $admin1->email = "admin@gmail.com";
        $admin1->roles = json_encode(["ADMIN"]);
        $admin1->password = \Hash::make("example123");
        $admin1->avatar = "saat-ini-tidak-ada-file.png";
        $admin1->address = "Sarmili, Bintaro, Tangerang";
        $admin1->save();
        
        $admin2 = new \App\Models\User;
        $admin2->username = "admin2";
        $admin2->name = "Site Administrator";
        $admin2->email = "admin2@gmail.com";
        $admin2->roles = json_encode(["ADMIN"]);
        $admin2->password = \Hash::make("example123");
        $admin2->avatar = "saat-ini-tidak-ada-file.png";
        $admin2->address = "Sarmili, kops, Jakarta Selatan";
        $admin2->save();



    }
}
