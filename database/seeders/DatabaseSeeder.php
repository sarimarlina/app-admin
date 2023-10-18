<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Guesser\Name;
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
        User::create([
            'name'=>'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'is_admin'=> 1
            ]);
         User::create([
            'name'=>'pegawai',
            'email' => 'pegawai@gmail.com',
            'password' => bcrypt('pegawai'),
            'is_admin'=> 0
            ]);
    }
}
