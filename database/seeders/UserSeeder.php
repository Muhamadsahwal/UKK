<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Metadata\Uses;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> \bcrypt('admin145')
        ];
        User::insert($user);
    }
}
