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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        (new \App\Models\User())->create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('password'),
            'role'=>\App\Enums\UserRole::Admin->value,
        ]);

        (new \App\Models\User())->create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>'admin123',
            'role'=> 'admin',
        ]);

        $this->call([
            CategorySeeder::class,
            HotelSeeder::class,
        ]);
    }
}
