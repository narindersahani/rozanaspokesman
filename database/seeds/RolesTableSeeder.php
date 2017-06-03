<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $roles = [
        	'Super Admin',
        	'Customer'
        ];

        foreach($roles as $key => $name) {
        	$role = new Role;
        	$role->name = $name;
        	$role->status = true;
        	$role->save();
        }
    }
}
