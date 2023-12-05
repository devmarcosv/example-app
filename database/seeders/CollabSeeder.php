<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Collaborators;

class CollabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Collaborators::factory()
        ->count(100)
        ->create();
    }
}
