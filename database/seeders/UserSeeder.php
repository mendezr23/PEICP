<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name'=> 'Domingo Mendez',
            'email'=>'mendezr23@gmail.com',
            'cedula'=>'14565444',
            'phone_number'=>'04249100999',
            'password'=>bcrypt('12345678')
        ])->assignRole('Admin');
        //User::factory(50)->create();

    }
}
