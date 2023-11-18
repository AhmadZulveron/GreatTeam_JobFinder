<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApplyingJobs>
 */
class ApplyingJobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'perusahaan_job_share_id' => fake()->jobTitle(),
            'user_id' => fake()->name(),
        ];
    }
}
