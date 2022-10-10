<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        level::create([
            'name' => 'Nivel básico'
        ]);

        level::create([
            'name' => 'Nivel intermedio'
        ]);

        level::create([
            'name' => 'Nivel avanzado'
        ]);
    }
}
