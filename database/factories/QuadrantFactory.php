<?php

namespace Database\Factories;

use App\Models\Organism;
use App\Models\Quadrant;
use App\Models\User;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuadrantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quadrant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->randomNumber(2),
            'nomenclature' => $this->faker->text,
            'area' => $this->faker->randomNumber(2),
            'perimeter' => $this->faker->randomNumber(2),
            'region' => $this->faker->text,
            'state' => $this->faker->text(15),
            'axis' => $this->faker->text(15),
            'municipality' => $this->faker->text(5),
            'parish' => $this->faker->text(5),
            'town' => $this->faker->text(10),
            'sector' => $this->faker->text,
            'type_id'=> Type::all()->random()->id,
            'organism_id'=> Organism::all()->random()->id,
            'user_id'=> User::all()->random()->id
            
        ];
    }
}
