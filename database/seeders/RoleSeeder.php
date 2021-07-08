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
                        'description'=>'Modulo - Usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit',
                        'description'=>'Asignar un rol'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.roles.index',
                        'description'=>'Modulo - roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.create',
                        'description'=>'Crear rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.edit',
                        'description'=>'Editar un rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.destroy',
                        'description'=>'Eliminar un rol'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.indicators.index',
                        'description'=>'Modulo - Indicadores'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.indicators.create',
                        'description'=>'Crear Indicador'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.indicators.edit',
                        'description'=>'Actualizar Indicador'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.indicators.destroy',
                        'description'=>'Eliminar Indicador'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.quadrants.index',
                        'description'=>'Modulo - cuadrantes'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.quadrants.create',
                        'description'=>'Crear cuadrante'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.quadrants.edit',
                        'description'=>'Editar cuadrante'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.quadrants.destroy',
                        'description'=>'Eliminar cuadrante'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.organisms.index',
                        'description'=>'Modulo - organismos'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.organisms.create',
                        'description'=>'Crear organismo'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.organisms.edit',
                        'description'=>'Editar organismo'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.organisms.destroy',
                        'description'=>'Eliminar organismo'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.types.index',
                        'description'=>'Modulo- Tipos de cuadrantes'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.types.create',
                        'description'=>'Crear tipo de cuadrante'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.types.edit',
                        'description'=>'Editar tipo de cuadrante'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.types.destroy',
                        'description'=>'Eliminar tipo de cuadrante'])->syncRoles([$role1]);

        Permission::create(['name'=>'guest.periods.index',
                        'description'=>'Modulo - Registrar Indicador '])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'guest.periods.create',
                        'description'=>'Registrar fecha de indicador '])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'guest.periods.store',
                        'description'=>'Guardar fecha a indicador '])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'guest.periods.edit',
                        'description'=>'Editar fecha de indicador'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'guest.periods.show',
                        'description'=>'Mostrar Listado de indicadores procesados'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'guest.Indicator_period.create',
                        'description'=>'Registrar Indicador'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'admin.periods.index',
                        'description'=>'Modulo - Consultas '])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.periods.show',
                        'description'=>'Mostrar Consultas > Ver detalle '])->syncRoles([$role1]);                

    }

}
