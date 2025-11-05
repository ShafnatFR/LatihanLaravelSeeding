<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perpustakaan>
 */
class PerpustakaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_perpustakaan' => $this->faker->company(). 'Perpustakaan',
            'kode_perpustakaan' => strtoupper($this->faker->bothify('PK##')),
        ];
    }
}
