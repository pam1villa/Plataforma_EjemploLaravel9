<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name' => 'Pamela Villa Parra',
            'email' => 'pamelavill998@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        user::factory(99)->create();
    }
}
