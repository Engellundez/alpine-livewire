<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Engellundez',
            'email' => 'angel.lundez@hotmail.com',
            'password' => '$2y$10$2UeFQ2XOtVkcWhz7UNph5OgyV39qQwSKC0xOBd/zk4SSyZKgDnxFS', // Quesolulu23
        ]);
    }
}
