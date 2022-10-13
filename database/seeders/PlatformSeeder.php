<?php

namespace Database\Seeders;

use App\Models\platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        platform::create([
            'name' => 'Youtube'
        ]);

        platform::create([
            'name' => 'Vimeo' 
        ]);
    }
}
