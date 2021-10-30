<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kode_role = array('sys', 'usr');
        $nama_role = array('SYSTEM ADMINISTRATOR', 'USER');

        for ($i=0; $i < 2 ; $i++) {
            $role = new Role;
            $role->kode_role = $kode_role[$i];
            $role->nama_role = $nama_role[$i];
            $role->save();
        }
    }
}
