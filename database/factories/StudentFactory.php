<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'first_name' => fake()->first_name(),
            // 'last_name'=> fake()->last_name(),
            // 'gender'=> fake()->gender(),
            // 'date_of_birth'=> fake()->date_of_birth(),
            // 'roll'=> fake()->roll(),
            // 'blood_group'=> fake()->blood_group(),
            // 'religion'=> fake()->religion(),
            // 'email'=> fake()->email(),
            // 'class'=> fake()->class(),
            // 'section'=> fake()->section(),
            // 'admission_id'=> fake()->admission_id(),
            // 'phone_number'=> fake()->phone_number(),
            // 'upload'=> fake()->upload(),
        ];
    }
}
