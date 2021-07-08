<?php

namespace Database\Seeders;

use App\Models\Organism;
use Illuminate\Database\Seeder;

class OrganismSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organism::create(['name'=> 'GUARDIA NACIONAL BOLIVARIANA', ]);
        Organism::create(['name'=> 'POLICIA DEL ESTADO MIRANDA', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE ACEVEDO', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE ANDRES BELLO', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE BARUTA', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE BRION', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE BUROZ', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE CARRIZAL', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE CHACAO', ]);
        Organism::create(['name'=> 'POLICIA NACIONAL BOLIVARIANA', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE CRISTOBAL ROJAS', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DEL HATILLO', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE GUAICAIPURO', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE INDEPENDENCIA', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE LANDER', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE LOS SALIAS', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE PAEZ', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE PAZ CASTILLO', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE PEDRO GUAL', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE PLAZA', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE SIMON BOLIVAR', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE SUCRE', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE URDANETA', ]);
        Organism::create(['name'=> 'POLICIA MUNICIPAL DE ZAMORA', ]);
    }
}
