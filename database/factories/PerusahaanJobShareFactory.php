<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PerusahaanJobShareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'posisi' => fake()->jobTitle(),
            'gaji_min' => fake()->bothify('##'),
            'gaji_max' => fake()->bothify('##'),
            'kategori' => fake()->word(),
            'skill' => fake()->word(),
            'pengalaman' => fake()->randomDigit(),
            'syarat_file' => fake()->word(),
        ];
    }
}
