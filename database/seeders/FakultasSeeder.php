<?php

namespace Database\Seeders;

use App\Models\ProgramStudi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fakultas::factory()
            ->count(5)
            ->has(ProgramStudi::factory()->count(3), 'programStudi')
            ->create();
    }
}
