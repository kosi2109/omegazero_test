<?php

namespace Database\Seeders;

use App\Models\Transition;
use Illuminate\Database\Seeder;

class TransitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transition::factory(20)->create();
    }
}
