<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //
            User::truncate();

            $adminRole = Role::where(['name'=>'admin'])->first();
            $authorRole = Role::where(['name'=>'autor'])->first();
            $guestRole = Role::where(['name'=>'gost'])->first();

       
            $admin = User::create([
                'name'=>'Admin',
                'email'=>'admin@backend.com',
                'password'=>'admin'
            ]);

            $author = User::create([
                'name'=>'Autor',
                'email'=>'autor@backend.com',
                'password'=>'autor'
            ]);

            $guest = User::create([
                'name'=>'Gost',
                'email'=>'gost@backend.com',
                'password'=>'gost'
            ]);

            $backend = User::create([
                'name'=>'Backend',
                'email'=>'backend@algebra.hr',
                'password'=>'12345678'
            ]);

            $admin->rolesUser()->attach($adminRole);
            $author->rolesUser()->attach($authorRole);
            $guest->rolesUser()->attach($guestRole); 
            $backend->rolesUser()->attach($adminRole); 



    }
}
