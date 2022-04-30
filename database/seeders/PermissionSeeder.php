<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderServices = new Permission();
        $orderServices->name = 'Order services';
        $orderServices->slug = 'order-services';
        $orderServices->save();

        $createOrder = new Permission();
        $createOrder->name = 'Create Order';
        $createOrder->slug = 'create-order';
        $createOrder->save();
    }
}
