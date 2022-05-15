<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Role();
        $client->display_name = 'Client';
        $client->name = 'client';
        $client->save();

        $staff = new Role();
        $staff->display_name = 'Staff';
        $staff->name = 'staff';
        $staff->save();

        $admin = new Role();
        $admin->display_name = "Admin";
        $admin->name = "admin";
        $admin->save();
    }
}
