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
        $client = Role::where('name','client')->first();
        $staff = Role::where('name', 'staff')->first();

//        $createOrder = Permission::where('name','create-orders')->first();
//        $orderServices = Permission::where('name','order-services')->first();

        $adminRole = Role::where('name','admin')->first();
//        $adminPermissions = Permission::where('name','admin')->first();

        $userClient = new User();
        $userClient->name = 'Jhon Deo';
        $userClient->email = 'jhon@deo.com';
        $userClient->password = bcrypt('secret');
        $userClient->save();
        $userClient->roles()->attach($client);
//        $userClient->permissions()->attach($createOrder);

        $userStaff = new User();
        $userStaff->name = 'Mike Thomas';
        $userStaff->email = 'mike@thomas.com';
        $userStaff->password = bcrypt('secret');
        $userStaff->save();
        $userStaff->roles()->attach($staff);
//        $userStaff->permissions()->attach($orderServices);

        $userAdmin = new User();
        $userAdmin->name = 'root';
        $userAdmin->email = 'root@gmail.com';
        $userAdmin->password = bcrypt('root');
        $userAdmin->save();
        $userAdmin->roles()->attach($adminRole);
//        $userAdmin->permissions()->attach($adminPermissions);

    }
}
