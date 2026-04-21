<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $judulBuku = [
            "Belajar Pemrograman dari Nol hingga Mahir",
            "Dasar-Dasar Coding untuk Pemula",
            "Algoritma dan Logika Pemrograman Modern",
            "Menjadi Programmer Andal di Era Digital",
            "Ngoding Itu Gampang: Panduan Praktis",
            "Dunia di Balik Baris Kode",
            "Pemrograman Kreatif: Dari Ide ke Aplikasi",
            "Rahasia Sukses Developer Profesional",
            "Debugging: Seni Memperbaiki Kode",
            "Langkah Cepat Menguasai Pemrograman"
        ];


        $faker = Faker::create('id_ID');

        $data = [];
        for($i=0; $i<5; $i++)
        $data[] = [
                // 'judul'=> $faker->sentence(mt_rand(3, 5)),	
                'judul'=> $faker->randomElement($judulBuku),	
                'penulis'=> $faker->name(),	
                'tahun_terbit' =>$faker->year(),	
                'kategori_id' => 2,	
                'created_at'=> now(),
                'updated_at' => now()
                ];
        DB::table('buku')->insert($data);
         //DB::table('buku')->delete();
    }
}