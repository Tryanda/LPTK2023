<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'nip'  => '210533616011',
            "place_of_birth" => 'Malang',
            "day_of_birth" => '18-11-02',
            "nidn" => '210533616011',
            'password' => bcrypt('123456789'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userAdministrator->assignRole(RoleEnum::ADMINISTRATOR);

        $userVerifikator = User::firstOrCreate([
            'email' => 'verify@gmail.com'
        ],[
            'name' => 'Verifikator',
            'email' => 'verify@gmail.com',
            'nip'  => '210533616012',
            "place_of_birth" => 'Malang',
            "day_of_birth" => '18-11-02',
            "nidn" => '210533616012',
            'password' => bcrypt('123456789'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userVerifikator->assignRole(RoleEnum::VERIFIKATOR);

        $userVerifikator = User::firstOrCreate([
            'email' => 'verify@gmail.com'
        ],[
            'name' => 'Verifikator',
            'email' => 'verify@gmail.com',
            'nip'  => '210533616012',
            "place_of_birth" => 'Malang',
            "day_of_birth" => '18-11-02',
            "nidn" => '210533616012',
            'password' => bcrypt('123456789'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userVerifikator->assignRole(RoleEnum::VERIFIKATOR);
    }
}
