<?php

namespace Database\Factories;

use App\Models\Period;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Indicator;
use App\Models\Quadrant;

class PeriodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Period::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            
                'user_id'=> User::all()->random()->id,
                'date_regis' => $this->faker->date('Y-m-d','now'),
                'quadrant_id'=> Quadrant::all()->random()->id,
                //'indicator_id'=> Indicator::all()->random()->id,
            
            
        ];
    }
}
