<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Perpustakaan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_buku' => $this->faker->jobTitle(),
            'kode_buku' => strtoupper($this->faker->bothify('BK###')),
            'perpustakaan_id' => Perpustakaan::factory(),
        ];
    }
}
