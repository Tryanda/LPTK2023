<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\RoleEnum;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAdministrator = User::firstOrCreate([
            'email' => 'admin@gmail.com'
        ],[
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userAdministrator->assignRole(RoleEnum::ADMINISTRATOR);

        $userVerifikator = User::firstOrCreate([
            'email' => 'verify@gmail.com'
        ],[
            'name' => 'Verifikator',
            'email' => 'verify@gmail.com',
            'password' => bcrypt('123456789'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userVerifikator->assignRole(RoleEnum::VERIFIKATOR);

        $userManagerBadminton = User::firstOrCreate([
            'email' => 'badminton@gmail.com'
        ],[
            'name' => 'Manager Badiminton',
            'email' => 'badminton@gmail.com',
            'password' => bcrypt('123456789'),
            'cabor_id' => '1',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userManagerBadminton->assignRole(RoleEnum::MANAGER);

        $userManagerTenisLapangan = User::firstOrCreate([
            'email' => 'tenislapangan@gmail.com'
        ],[
            'name' => 'Manager Tenis Lapangan',
            'email' => 'tenislapangan@gmail.com',
            'password' => bcrypt('123456789'),
            'cabor_id' => '2',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userManagerTenisLapangan->assignRole(RoleEnum::MANAGER);

        $userManagerTenisMeja = User::firstOrCreate([
            'email' => 'tenismeja@gmail.com'
        ],[
            'name' => 'Manager Tenis Meja',
            'email' => 'tenismeja@gmail.com',
            'password' => bcrypt('123456789'),
            'cabor_id' => '3',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userManagerTenisMeja->assignRole(RoleEnum::MANAGER);
    }
}
