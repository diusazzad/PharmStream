<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();

        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john.doe@example.com',
        //     'password' => Hash::make('secret'),
        //     // ... other attributes
        // ]);
    }
}
