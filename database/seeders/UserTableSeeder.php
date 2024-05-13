<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'nama' => 'Aan',
        //     'email' => 'firdausnanda46@gmail.com',
        //     'no_telepon' => '088227032410',
        //     'level' => 'superadmin',
        //     'password' => Hash::make('password'),
        //     'username' => 'aan'
        // ]);

        // User::create([
        //     'nama' => 'Agus',
        //     'email' => 'agus@gmail.com',
        //     'no_telepon' => '088227032410',
        //     'level' => 'admin',
        //     'password' => Hash::make('password'),
        //     'username' => 'agus'
        // ]);

        // User::create([
        //     'nama' => 'Doni',
        //     'email' => 'doni@gmail.com',
        //     'no_telepon' => '088227032410',
        //     'level' => 'user',
        //     'password' => Hash::make('password'),
        //     'username' => 'doni'
        // ]);

        User::factory(50)->create();
    }
}
