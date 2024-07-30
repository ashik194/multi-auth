<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                "name"      => "Md. Ashikur Rahman",
                "username"  => "admin",
                "email"     => "admin@mail.com",
                "password"  => Hash::make('admin025'),
                "role"      => "admin",
                "status"    => 1,
            ],
            [
                "name"      => "Trainer Name",
                "username"  => "trainer",
                "email"     => "trainer@mail.com",
                "password"  => Hash::make('trainer025'),
                "role"      => "trainer",
                "status"    => 1,
            ],
            [
                "name"      => "Student name",
                "username"  => "student",
                "email"     => "student@mail.com",
                "password"  => Hash::make('student025'),
                "role"      => "student",
                "status"    => 1,
            ],
        ]);
    }
}
