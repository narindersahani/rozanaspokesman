<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->role_id = Role::SUPER_ADMIN;
        $user->name = 'Super Admin';
        $user->email = 'paul@gmail.com';
        $user->password = bcrypt('Paul@321');
        $user->status = true;
        $user->save();
    }
}
