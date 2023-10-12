<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 25; $i++) {

            $isbn = $faker->regexify('[A-Z]{5}[0-9]{8}');
            $judul = $faker->sentence(5);
            $halaman = $faker->numberBetween(0, 300);
            $kategori = $faker->text(5);
            $penerbit = $faker->sentence(3);
            $created_at = $faker->dateTimeBetween('-3 months', 'now');

            DB::table('books')->insert([
                'isbn' => $isbn,
                'judul' => $judul,
                'halaman' => $halaman,
                'kategori' => $kategori,
                'penerbit' => $penerbit,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);
        }
    }

}
