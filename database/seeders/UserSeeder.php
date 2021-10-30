<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = strtoupper('system administrator');
        $user->email = strtoupper('sysadmin@qurannote.com');
        $user->password = bcrypt('secret');
        $user->role_id = 1;
        $user->save();
    }
}
