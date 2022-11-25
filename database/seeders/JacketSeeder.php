<?php

namespace Database\Seeders;

use App\Models\Jacket;
use Illuminate\Database\Seeder;

class JacketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Jacket::count() == 0) {
            Jacket::factory(10)->create();
        }
    }
}