<?php

namespace Modules\Suppliers\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Suppliers\app\Enums\ProductTypeEnum;
use Modules\Suppliers\app\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ProductTypeEnum::cases() as $enum) {
            ProductType::updateOrCreate([
                'id' => $enum->value,
            ], [
                'name' => $enum->getLabel('suppliers::enums'),
            ]);
        }
    }
}
