<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            ['name' => 'Gestión del sistema', 'icon' => 'fa-gear', 'pid' => 0, 'level' => 1, 'url' => '#'],
            ['name' => 'Gestión de administrador', 'icon' => 'fa-user', 'pid' => 1, 'level' => 2, 'url' => '/adminuser'],
            ['name' => 'Gestión de roles', 'icon' => 'fa-group', 'pid' => 1, 'level' => 2, 'url' => '/role'],
            ['name' => 'gestión de autoridad', 'icon' => 'fa-gear', 'pid' => 1, 'level' => 2, 'url' => '/permission'],
            ['name' => 'Gestión de menú', 'icon' => 'fa-cog', 'pid' => 1, 'level' => 2, 'url' => '/menu']
        ]);
        DB::table('menu_role')->insert([
            ['menu_id'=>1,'role_id'=>1],
            ['menu_id'=>2,'role_id'=>1],
            ['menu_id'=>3,'role_id'=>1],
            ['menu_id'=>4,'role_id'=>1],
            ['menu_id'=>5,'role_id'=>1],
        ]);
    }
}
