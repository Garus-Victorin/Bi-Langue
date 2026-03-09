<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CompteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin account
        \App\Models\Compte::create([
            'nom' => 'Admin',
            'prenom' => 'Admin',
            'email' => 'admin@gmail.com',
            'mot_de_passe' => Hash::make('admin123'),
            'type_de_compte' => 'admin',
            'status' => 'online',
        ]);

        // User account
        \App\Models\Compte::create([
            'nom' => 'User',
            'prenom' => 'Admin',
            'email' => 'admin@site.com',
            'mot_de_passe' => Hash::make('user123'),
            'type_de_compte' => 'user',
            'status' => 'offline',
        ]);
    }
}

