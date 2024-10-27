<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Authentication\database\seeders\AuthenticationModuleSeeder;
use Modules\Suppliers\database\seeders\SuppliersModuleSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Modules
            AuthenticationModuleSeeder::class,
            SuppliersModuleSeeder::class,

            // App
            LogLevelSeeder::class,

            //
            AdminUserSeeder::class,
        ]);
    }
}
