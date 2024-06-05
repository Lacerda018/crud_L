<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'street' => $this->faker->streetAddress(),
            'number' => $this->faker->buildingNumber(),
            'neighborhood' => $this->faker->name(),
            'city' => $this->faker->city(),
            'state' => $this->faker->name(),
            'zipcode' => $this->faker->postcode(),
            'country' => $this->faker->country(),
        ];
    }
}
