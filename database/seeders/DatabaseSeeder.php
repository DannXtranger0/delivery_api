<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creamos un usuario por defecto
        
        \App\Models\User::factory()->create([
            "name" => "Robin Jimenez",
            "email" => "robinjf@gmail.com",
            "password" => bcrypt("contrasena") //Hashea la contrasena
        ]);

      
    }
}
