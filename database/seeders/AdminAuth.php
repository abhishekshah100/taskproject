<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminAuth extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=new User();
        $admin->name='Admin';
        $admin->email='admin@admin.com';
        $admin->password=bcrypt('password');
    }
}
