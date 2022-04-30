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
        $client->name = 'Client';
        $client->slug = 'client';
        $client->save();

        $staff = new Role();
        $staff->name = 'Staff';
        $staff->slug = 'staff';
        $staff->save();

        $admin = new Role();
        $admin->name = "Admin";
        $admin->slug = "admin";
        $admin->save();
    }
}
