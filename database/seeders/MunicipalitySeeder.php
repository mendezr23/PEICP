<?php

namespace Database\Seeders;

use App\Models\Municipality;


use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
   
    public function run()
    {
        Municipality::create(['name'=> 'ACEVEDO', ]);
        Municipality::create(['name'=> 'PEDRO GUAL', ]);
        Municipality::create(['name'=> 'BUROZ', ]);
        Municipality::create(['name'=> 'ANDRÉS BELLO', ]);
        Municipality::create(['name'=> 'BARUTA', ]);
        Municipality::create(['name'=> 'BRIÓN', ]);
        Municipality::create(['name'=> 'CARRIZAL', ]);
        Municipality::create(['name'=> 'CHACAO', ]);
        Municipality::create(['name'=> 'CRISTÓBAL ROJAS', ]);
        Municipality::create(['name'=> 'EL HATILLO', ]);
        Municipality::create(['name'=> 'GUAICAIPURO', ]);
        Municipality::create(['name'=> 'INDEPENDENCIA', ]);
        Municipality::create(['name'=> 'LANDER', ]);
        Municipality::create(['name'=> 'LOS SALIAS', ]);
        Municipality::create(['name'=> 'PÁEZ', ]);
        Municipality::create(['name'=> 'PAZ CASTILLO', ]);
        Municipality::create(['name'=> 'PLAZA', ]);
        Municipality::create(['name'=> 'SIMÓN BOLÍVAR', ]);
        Municipality::create(['name'=> 'SUCRE', ]);
        Municipality::create(['name'=> 'URDANETA', ]);
        Municipality::create(['name'=> 'ZAMORA', ]);
    }
}
