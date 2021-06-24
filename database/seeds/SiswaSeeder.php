<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 1; $x <= 10; $x++){
          DB::table('siswa')->insert([
            'nama_depan' => $faker->Firstname,
            'nama_belakang' => $faker->lastname,
            'nis' => $faker->numerify('#####'),
            'jenis_kelamin' => $faker->randomElement(['Laki Laki', 'Perempuan']),
            'agama' => $faker->randomElement(['Islam', 'Katolik', 'Protestan', 'Hindu', 'Budha']),
            'alamat' => $faker->address,   
            'foto' => $faker->imageUrl($width = 640, $height = 480)  
            ]);
        }
    }
}
