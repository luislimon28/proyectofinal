<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profesor::factory(30)->create();
    }
}
