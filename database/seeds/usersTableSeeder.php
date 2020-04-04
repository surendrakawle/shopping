<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        //ADMIN , USER , ACCOUNT , AUTHOR
        $adminRole = Role::where('name','ADMIN')->first();
        $userRole = Role::where('name','USER')->first();
        $accountRole = Role::where('name','ACCOUNT')->first();
        $authorRole = Role::where('name','AUTHOR')->first();
        
        $admin= User::create([
            'name'=> 'ADMIN USER',
            'email'=> 'admin@admin.com',
            'password'=> Hash::make('password')
        ]);
        $user= User::create([
            'name'=> 'GENERIC USER',
            'email'=> 'user@user.com',
            'password'=> Hash::make('password')
        ]);
        $account= User::create([
            'name'=> 'ACCOUNT USER',
            'email'=> 'account@account.com',
            'password'=> Hash::make('password')
        ]);
        $author= User::create([
            'name'=> 'AUTHOR USER',
            'email'=> 'author@author.com',
            'password'=> Hash::make('password')
        ]);
        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
        $account->roles()->attach($accountRole);
        $author->roles()->attach($authorRole);
    }
}
