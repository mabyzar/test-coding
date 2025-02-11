<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin; 
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'first_name' => 'Admin',
            'last_name' => 'Super',
            'email' => 'admin@example.com',
            'birth_date' => '1990-01-01',
            'gender' => 'Laki-laki',
            'password' => Hash::make('12345678'),
        ]);
    }
}
