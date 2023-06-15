<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'nickname' => $this->faker->word,
            'image' => $this->faker->image,
            'relation' => $this->faker->word,
            'birthday' => $this->faker->date,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->safeEmail,
            'address' => $this->faker->address,
        ];
    }
}
