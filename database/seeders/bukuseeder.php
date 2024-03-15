<?php

namespace Database\Seeders;

use App\Models\buku;
use Illuminate\Database\Seeder;
use Faker\Factory; // Import kelas Factory dari Faker


class bukuseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i = 0; $i < 10; $i++){
            buku::create([
                'judul' =>fake()->sentence(mt_rand(2,4)),
                'author' =>fake()->name(),
                'publish_date' =>fake()->date(),
            ]);
        }
    }
}
