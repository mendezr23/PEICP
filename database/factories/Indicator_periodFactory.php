<?php

namespace Database\Factories;

use App\Models\Indicator;
use App\Models\Indicator_period;
use App\Models\Period;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndicatorPeriodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Indicator_period::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'indicator_id' => Indicator::all()->random()->id,
            'period_id' => Period::all()->random()->id,
            'amount' => $this->faker->randomElement([20,40,60,80]),
            'observation' => $this->faker->text(50),
        ];
    }
}
