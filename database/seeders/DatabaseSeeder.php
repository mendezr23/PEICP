<?php

namespace Database\Seeders;

use App\Models\Indicator;
use App\Models\Quadrant;
use App\Models\Period;
use App\Models\Indicator_period;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $this->call(RegionSeeder::class);
        $this->call(AxiSeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(OrganismSeeder::class);
        Quadrant::factory(25)->create();
        $periods = Period::factory(10)->create();
        
        foreach ($periods as $period ) {
            DB::table('indicator_period')->insert([
                'indicator_id' => Indicator::all()->random()->id,
                'period_id' => $period->id,
                'amount' => 30,
                'observation' => 'observacion prueba'

            ]);
        }
       

        
    }
}
