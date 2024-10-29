<?php

namespace Modules\Suppliers\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Suppliers\app\Models\Agent;
use Modules\Suppliers\app\Models\Vendor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Suppliers\app\Models\Vendor>
 */
class AgentFactory extends Factory
{
    protected $model = Agent::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'vendor_id' => Vendor::factory(),
        ];
    }
}
