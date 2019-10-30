<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
    
     *
     * @return void
     */
    public function run()
    {
       Role::insert([
            ['name' => 'Admin'],
            ['name' => 'Receptionist'],
            ['name' => 'Manger'],
            ['name' => 'CEO'],

        ]);
    }
}
