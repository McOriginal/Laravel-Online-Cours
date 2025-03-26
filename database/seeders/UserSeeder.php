<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name"=> "Amedi Cisse",
                "email"=> "amedi@gmail.com",
                "password"=> bcrypt(12345678),
                "role"=> "student"
            ],
            [
                "name"=> "Mohamed Cisse",
                "email"=> "mohamed@gmail.com",
                "password"=> bcrypt(12345678),
                "role"=> "instructor"
            ],

        ];
        User::insert($users);
    }
}
