<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = Role::where('slug','client')->first();
        $staff = Role::where('slug', 'staff')->first();

        $createOrder = Permission::where('slug','create-orders')->first();
        $orderServices = Permission::where('slug','order-services')->first();

        $user1 = new User();
        $user1->name = 'Den';
        $user1->email = 'dnk.garden@gmail.com';
        $user1->password = bcrypt('secret');
        $user1->save();
        $user1->roles()->attach($client);
        $user1->permissions()->attach($createOrder);
        $user2 = new User();
        $user2->name = 'Yura';
        $user2->email = 'lutaiyura@gmail.com';
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->roles()->attach($staff);
        $user2->permissions()->attach($orderServices);
        $user3 = new User();
        $user3->name = 'Ura Lutai';
        $user3->email = 'ura@lutaicom';
        $user3->password = bcrypt('secret');
        $user3->save();
        $user3->roles()->attach($client);
        $user3->permissions()->attach($createOrder);
    }
}
