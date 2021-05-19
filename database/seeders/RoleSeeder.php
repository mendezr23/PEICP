<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Funcionario']);

        Permission::create(['name'=>'admin.home',
                        'description'=>'Ver el Dasboard'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'admin.users.index',
                        'description'=>'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit',
                        'description'=>'Asignar un rol'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.roles.index',
                        'description'=>'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.create',
                        'description'=>'Crear rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.edit',
                        'description'=>'Editar un rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.destroy',
                        'description'=>'Eliminar un rol'])->syncRoles([$role1]);


        Permission::create(['name'=>'admin.indicators.index',
                        'description'=>'Ver itstado de Indicadores'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.indicators.create',
                        'description'=>'Crear Indicador'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.indicators.edit',
                        'description'=>'Actualizar Indicador'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.indicators.destroy',
                        'description'=>'Eliminar Indicador'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.quadrants.index',
                        'description'=>'Ver listado de cuadrantes'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.quadrants.create',
                        'description'=>'Crear cuadrante'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.quadrants.edit',
                        'description'=>'Editar cuadrante'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.quadrants.destroy',
                        'description'=>'Eliminar cuadrante'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.organisms.index',
                        'description'=>'Mostrar organismos'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.organisms.create',
                        'description'=>'Crear organismo'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.organisms.edit',
                        'description'=>'Editar organismo'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.organisms.destroy',
                        'description'=>'Eliminar organismo'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.types.index',
                        'description'=>'Mostrar Tipos de cuadrantes'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.types.create',
                        'description'=>'Crear tipo de cuadrante'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.types.edit',
                        'description'=>'Editar tipo de cuadrante'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.types.destroy',
                        'description'=>'Eliminar tipo de cuadrante'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.records.index',
                        'description'=>'Mostrar Registro de Indicadores'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.records.create',
                        'description'=>'Crear Registro de indicador'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.records.edit',
                        'description'=>'Editar Registro de indicador'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.records.destroy',
                        'description'=>'Eliminar registro de indicador'])->syncRoles([$role1]);

        Permission::create(['name'=>'guest.records.index',
                        'description'=>'Listado de Indicadores - Funcionario'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'guest.records.create',
                        'description'=>'Crear Registro de indicador - Funcionario'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'guest.records.show',
                        'description'=>'Detalles de Indiacdores por Periodos'])->syncRoles([$role1,$role2]);
        

        Permission::create(['name'=>'guest.periods.index',
                        'description'=>'Listado de Periodos (fechas) '])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'guest.periods.edit',
                        'description'=>'Lista de detalles de periodos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'guest.periods.show',
                        'description'=>'Lista de detalles de periodos'])->syncRoles([$role1,$role2]);
    }

}
