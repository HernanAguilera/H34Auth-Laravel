<?php

namespace H34\Auth\Database\Factories;

use H34\Auth\Models\Permission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permission>
 */
class PermissionFactory extends Factory
{

    public function modelName()
    {
        return Permission::class;
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->randomElement(['permission1', 'permission2', 'permission3']),
        ];
    }
}
