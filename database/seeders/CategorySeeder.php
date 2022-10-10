<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'name' => 'Desarrollo web'
        ]);

        category::create([
            'name' => 'Diseño web'
        ]);

        category::create([
            'name' => 'Programación'
        ]);
    }
}
