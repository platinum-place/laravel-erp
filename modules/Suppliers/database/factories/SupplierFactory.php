<?php

namespace Modules\Suppliers\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Authentication\app\Models\User;
use Modules\Suppliers\app\Models\Supplier;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'phone' => fake()->phoneNumber,
            'identification' => fake()->unique()->bothify('###-#######-#')
        ];
    }
}
