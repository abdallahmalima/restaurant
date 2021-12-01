<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       // \App\Models\Crud::factory(101)->create();
        \App\Models\Message::factory(1001)->create();
        \App\Models\FoodMenu::factory(10)->create();
    }
}
