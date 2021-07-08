<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['name'=> 'RURAL', ]);
        Type::create(['name'=> 'URBANO', ]);
        Type::create(['name'=> 'MARITIMO', ]);
        Type::create(['name'=> 'LACUSTRE', ]);

    }
}
