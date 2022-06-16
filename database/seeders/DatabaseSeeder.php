<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rara Zahra Urava',
            'email' => 'rara@gmail.com',
            'address' => 'Pakis, Malang',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Jasmine Aqilah R.',
            'email' => 'jasmine@gmail.com',
            'address' => 'Sawojajar, Malang',
            'password' => bcrypt('23456')
        ]);

        Post::create([
            'title' => 'Harry Potter',
            'description' => 'Harry Potter adalah seri tujuh novel fantasi yang dikarang oleh penulis Inggris J. K. Rowling. Novel ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ronald Bilius Weasley dan Hermione Jean Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts.',
            'author' => 'J.K Rowling'
        ]);

        Post::create([
            'title' => 'The Chronicles of Narnia',
            'description' => 'The Chronicles of Narnia adalah serial epik fantasi dari Walden Media berdasarkan novel The Chronicles of Narnia yang ditulis oleh C. S. Lewis pada pertengahan tahun 1950-an.',
            'author' => 'C.S Lewis'
        ]);
    }
}
