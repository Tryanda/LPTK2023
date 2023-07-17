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
            'nip'  => '210533616011',
            "place_of_birth" => 'Malang',
            "day_of_birth" => '18-11-02'
            "status",
            "nidn",
            "file",
            "manager",
            "university"
            'email' => 'admin@gmail.com',
            'phone' => '085769782101',
            'password' => bcrypt('123456789'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        $userAdministrator->assignRole(RoleEnum::ADMINISTRATOR);
    }
}
