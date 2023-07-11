<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
            'created_at' => '2023/07/07 11:11:11'
        ]);
    }
}
