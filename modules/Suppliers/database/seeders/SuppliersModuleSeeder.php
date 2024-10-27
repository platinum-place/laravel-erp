<?php

namespace Modules\Suppliers\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Authentication\database\seeders\PermissionSeeder;
use Modules\Authentication\database\seeders\RoleSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuppliersModuleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductTypeSeeder::class,
        ]);
    }
}
