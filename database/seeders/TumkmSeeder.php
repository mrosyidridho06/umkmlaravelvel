<?php

namespace Database\Seeders;

use App\Models\tumkm;
use Illuminate\Database\Seeder;

class TumkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tumkm::factory(20)->create();
    }
}
