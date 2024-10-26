<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([UserSeeder::class]);
        // $this->call([NotificationSeeder::class]);
        // $this->call([SupplierSeeder::class]);
        // $this->call([CategoriesSeeder::class]);
        // $this->call([PurchaseSeeder::class]);
        // $this->call([ProductSeeder::class]);
        // $this->call([SaleSeeder::class]);
        // $this->call([RoleAndPermissionSeeder::class]);

        // Seed the database with predefined data
        $this->call([
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,

            // NotificationSeeder::class,
            // SupplierSeeder::class,
            // CategoriesSeeder::class,
            // PurchaseSeeder::class,
            // ProductSeeder::class,
            // SaleSeeder::class,
        ]);
    }
}
