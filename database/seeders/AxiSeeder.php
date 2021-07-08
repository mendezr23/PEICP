<?php

namespace Database\Seeders;

use App\Models\Axi;
use Illuminate\Database\Seeder;

class AxiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Axi::create(['name'=> 'BARLOVENTO', ]);
        Axi::create(['name'=> 'METROPOLITANO', ]);
        Axi::create(['name'=> 'ALTOS MIRANDINOS', ]);
        Axi::create(['name'=> 'VALLES DEL TUIY', ]);
        Axi::create(['name'=> 'GUARENAS - GUATIRE', ]);
        Axi::create(['name'=> 'SUCRE', ]);
    }
}
