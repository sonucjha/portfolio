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
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'username' => 'adminuser',
            'phone' => '9865582418',
            'role' => 'admin',
            'status' => 'active',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Normal User',
            'email' => 'user@gmail.com',
            'username' => 'normaluser',
            'phone' => '9865582418',
            'role' => 'user',
            'status' => 'active',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Vendor User',
            'email' => 'vendor@gmail.com',
            'username' => 'vendoruser',
            'phone' => '9865582418',
            'role' => 'vendor',
            'status' => 'active',
            'password' => Hash::make('123'),
        ]);
    }
}
