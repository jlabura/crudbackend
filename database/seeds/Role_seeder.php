<?php

use Illuminate\Database\Seeder;
use App\Role;

class Role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::truncate(); //kako se ne bi duplicirali svaki put kad pokrenemo
        Role::create (['name'=>'admin']);
        Role::create (['name'=>'autor']);
        Role::create (['name'=>'gost']);
    }
}
