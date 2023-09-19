<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Nabnit Jha',
            'email' => 'nabnit@gmail.com',
            'username' => 'nabnit',
            'phone' => '9865582418',
            'status' => 'active',
            'password' => Hash::make('123'),
        ]);
    }
}
