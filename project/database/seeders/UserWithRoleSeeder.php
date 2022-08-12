<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new User;
        $staff->name = 'Staff';
        $staff->username = 'Staff';
        $staff->password = bcrypt('password');
        $staff->role = 'staff';
        $staff->save();

        $kurir = new User;
        $kurir->name = 'kurir';
        $kurir->username = 'kurir';
        $kurir->password = bcrypt('password');
        $kurir->role = 'kurir';
        $kurir->save();

        $customer = new User;
        $customer->name = 'customer';
        $customer->username = 'customer';
        $customer->password = bcrypt('password');
        $customer->role = 'customer';
        $customer->save();
    }
}