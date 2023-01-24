<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //seeder laratrust
        $this->call(LaratrustSeeder::class);

        //seeder user
        $this->call(UserSeeder::class);

        //seeder tender
        $this->call(TenderSeeder::class);

        //seeder role
        $this->call(RoleSeeder::class);
    }
}
