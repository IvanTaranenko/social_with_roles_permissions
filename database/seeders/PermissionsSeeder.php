<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'show tasks']);
        Permission::create(['name'=>'add tasks']);
        Permission::create(['name'=>'edit tasks']);
        Permission::create(['name'=>'delete tasks']);
    }
}
