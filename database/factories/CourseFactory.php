<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_code' => strtoupper($this->faker->bothify('CS###')),
            'course_name' => $this->faker->words(3, true),
            'credits'     => $this->faker->numberBetween(1, 5),
        ];
    }
}
