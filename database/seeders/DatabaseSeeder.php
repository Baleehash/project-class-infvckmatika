<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Home;
use App\Models\Members;
use App\Models\Projects;
use App\Models\Galleries;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Members::factory(14)->create();
        // Projects::factory(9)->create();
        // Galleries::factory(18)->create();

        Home::create([
            'hero_image' => 'hero.webp',
            'hero_title' => 'Sedikit anggota tapi selalu bersama sama',
            'hero_text' => 'Setiap kelas di sini bukan hanya sekadar pembelajaran, tapi juga petualangan yang tak terlupakan. Dari kode-kode keren hingga proyek-proyek seru.',
            'about_image' => 'about.PNG',
            'about_title' => 'Gimana sih Kelas Teknik Informatika ?',
            'about_text' => 'Kelas ini adalah kelas yang gak biasa. Bukan cuma belajar, tapi bisa main game dan bikin proyek bareng bareng yang keren yang langsung berguna. Seru, kan? Di sini, kita suka saling bantu, sharing ide, dan bikin suasana belajar yang menyenangkan ! 💻🚀 Siapa aja sih membernya ?'
        ]); 

        User::create([
            'name' => 'Ilhan Haffiyan Juldan',
            'username' => 'han',
            'email' => 'ilhanzuldan11@gmail.com',
            'password' => bcrypt('123123123'),
        ]);


        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
        // Members::create([
        //     'image' => 'abe.png',
        //     'name'=> 'Ilhan Haffiyan Juldan',
        //     'nickname' => 'Nickkurtdale',
        //     'quotes'=> 'Consistent is the key of this life'
        // ]); 
    }
}
