<?php

namespace Database\Seeders;

use App\Models\Indicator;
use App\Models\Quadrant;
use App\Models\Organism;
use App\Models\Period;
use App\Models\Type;
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

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Indicator::factory(62)->create();
        Type::factory(4)->create();
        Organism::factory(24)->create();
        Quadrant::factory(25)->create();
        Period::factory(10)->create();
        
    }
}
