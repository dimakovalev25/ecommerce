<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('admin'),
            'email_verified_at' => now(),
            'is_admin' => true
        ]);


    /*    DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('admin'),
            'email_verified_at' => now(),
            'is_admin' => true
        ]);*/
    }
}
