<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\password;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([[
            'name' => 'Admin',
            'username' => 'admin',

            'image' => 'https://randomuser.me/api/portraits/men/1.jpg',
            'phone' => '0123456789',
            'address' => 'Bucharest, str. Apusului, nr.23, ap. 6, bl. M3',
            'position' => 'Manager',
            'service' => 'Primarie',
            'role' => 'admin',

            'status' => 'active',
            'email' => 'admin@youraddress.com',
            'password' => bcrypt('password'),

        ], [
            'name' => 'Clerk1',
            'username' => 'clerk1',
            'email' => 'clerk1@youraddress.com',
            'image' => 'https://randomuser.me/api/portraits/men/10.jpg',
            'phone' => '012336789',
            'address' => 'Bucharest, str. Calea Victoriei, nr.3, ap. 67, bl. M43',
            'role' => 'clerk',
            'position' => 'Manager',
            'service' => 'Populatie',
            'status' => 'active',
            'password' => bcrypt('password'),

        ], [
            'name' => 'Madalina Mardasu',
            'username' => 'madalinamardasu',
            'email' => 'madalinamardasu@youraddress.com',
            'image' => 'https://randomuser.me/api/portraits/woman/3.jpg',
            'phone' => '01234r89',
            'address' => 'Bucharest, str. Balariei, nr.13, ap. 7, bl. B43',
            'role' => 'clerk',
            'position' => '',
            'service' => '',
            'status' => 'active',
            'password' => bcrypt('password'),

        ]]);
    }
}
