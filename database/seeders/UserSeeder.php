<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->count(10)->create();

        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john.doe@example.com',
        //     'password' => Hash::make('secret'),
        //     // ... other attributes
        // ])->assignRole('');


        $user = User::create([
            'name' => "Jamal Admin",
            'email' => "admin@admin.com",
            'password' => Hash::make('admin'),
        ]);
        $user->assignRole('super-admin');

    }
}
