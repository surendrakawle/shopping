<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Role::truncate();

        //ADMIN , USER , ACCOUNT , AUTHOR
        Role::create(['name' => 'ADMIN']);
        Role::create(['name' => 'USER']);
        Role::create(['name' => 'ACCOUNT']);
        Role::create(['name' => 'AUTHOR']);
    }
}
