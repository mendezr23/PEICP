<?php

namespace Database\Factories;

use App\Models\Axi;
use App\Models\Municipality;
use App\Models\Organism;
use App\Models\Quadrant;
use App\Models\Region;
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
            'nomenclature' => $this->faker->text(15),
            'area' => $this->faker->randomNumber(2),
            'perimeter' => $this->faker->randomNumber(2),
            'region_id' => Region::all()->random()->id,
            'state' => $this->faker->text(10),
            'axi_id' => Axi::all()->random()->id,
            'municipality_id' => Municipality::all()->random()->id,
            'parish' => $this->faker->text(5),
            'town' => $this->faker->text(5),
            'sector' => $this->faker->text,
            'type_id'=> Type::all()->random()->id,
            'organism_id'=> Organism::all()->random()->id,
            'user_id'=> User::all()->random()->id
            
        ];
    }
}
