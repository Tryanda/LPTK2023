<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::firstOrCreate([
            'name' => 'Administrator',
        ],[
            'name' => 'Administrator',
            'guard_name' => 'web'
        ]);

        Role::firstOrCreate([
            'name' => 'Manager',
        ],[
            'name' => 'Manager',
            'guard_name' => 'web'
        ]);

        Role::firstOrCreate([
            'name' => 'Verifikator',
        ],[
            'name' => 'Verifikator',
            'guard_name' => 'web'
        ]);
    }
}
