<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeePosition;

class EmployeePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EmployeePosition::factory()
        ->count(100)
        ->create();
    }
}
