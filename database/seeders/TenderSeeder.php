<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        foreach (range(1,20) as $value){
            //Seeder tender belum berjalan
            DB::table('informasi_tenders')->insert([
                'kode_rup'=>$faker-> randomNumber(7, true),
                'nama_paket'=> $faker->sentence(3),
                'pagu'=> $faker->numerify('############'),
                'hps'=> $faker->numerify('############'),
                'satuan_kerja'=>$faker->company(),
                'tahap'=> 'Tender Belum Berjalan',
                'peserta'=>$faker->numberBetween(1,25)  
            ]);

            //Seeder tender sedang berjalan
            DB::table('informasi_tenders')->insert([
                'kode_tender'=>$faker->randomNumber(7, true),
                'kode_rup'=>$faker-> randomNumber(7, true),
                'nama_paket'=> $faker->sentence(3),
                'pagu'=> $faker->numerify('############'),
                'hps'=> $faker->numerify('############'),
                'satuan_kerja'=>$faker->company(),
                'tahap'=> 'Tender Sedang Berjalan',
                'peserta'=>$faker->numberBetween(1,25)  
            ]);

            //seeder tender telah selesai
            DB::table('informasi_tenders')->insert([
                'kode_tender'=>$faker->randomNumber(7, true),
                'kode_rup'=>$faker-> randomNumber(7, true),
                'nama_paket'=> $faker->sentence(3),
                'pagu'=> $faker->numerify('############'),
                'hps'=> $faker->numerify('############'),
                'satuan_kerja'=>$faker->company(),
                'tahap'=> 'Tender Telah Selesai',
                'peserta'=>$faker->numberBetween(1,25)  
            ]);

            //seeder tender gagal
            DB::table('informasi_tenders')->insert([
                'kode_tender'=>$faker->randomNumber(7, true),
                'kode_rup'=>$faker-> randomNumber(7, true),
                'nama_paket'=> $faker->sentence(3),
                'pagu'=> $faker->numerify('############'),
                'hps'=> $faker->numerify('############'),
                'satuan_kerja'=>$faker->company(),
                'tahap'=> 'Tender Gagal',
                'peserta'=>$faker->numberBetween(1,25)  
            ]);
        }
    }
}
