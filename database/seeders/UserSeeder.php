<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        //seeder superadmin
            DB::table('users')->insert([
                'name' => 'Admin',
                'nik' => $faker->nik(),
                'nip' => $faker->nik(),
                'username' =>'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
            ]);

            //seeder banyak admin
            //  foreach (range(1,10) as $value){
            // DB::table('users')->insert([
            //     'name' => $faker->name(),
            //     'nik' => $faker->nik(),
            //     'nip' => $faker->nik(),
            //     'user_id' =>Str::random(10),
            //     'email' => $faker->unique()->safeEmail(),
            //     'password' => Hash::make('password'),
            // ]);
        // }
    }
}
