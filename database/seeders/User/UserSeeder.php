<?php

namespace Database\Seeders\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Admin',
                'email' => 'superadmin@gmail.com',
                "role" => "admin",
                "phone" => "081234567888",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@mail.com',
                "role" => "user",
                "phone" => "081234567890",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@mail.com',
                "role" => "user",
                "phone" => "081234567891",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Alice Smith',
                'email' => 'alice@mail.com',
                "role" => "user",
                "phone" => "081234567892",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Bob Johnson',
                'email' => 'bob@mail.com',
                "role" => "user",
                "phone" => "081234567893",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Eve Wilson',
                'email' => 'eve@mail.com',
                "role" => "user",
                "phone" => "081234567894",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael@mail.com',
                "role" => "user",
                "phone" => "081234567895",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Olivia Davis',
                'email' => 'olivia@mail.com',
                "role" => "user",
                "phone" => "081234567896",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'William Wilson',
                'email' => 'william@mail.com',
                "role" => "mitra",
                "phone" => "081234567897",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Sophia Johnson',
                'email' => 'sophia@mail.com',
                "role" => "mitra",
                "phone" => "081234567898",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'James Davis',
                'email' => 'james@mail.com',
                "role" => "mitra",
                "phone" => "081234567899",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Emily Smith',
                'email' => 'emily@mail.com',
                "role" => "mitra",
                "phone" => "081234567900",
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Daniel Wilson',
                'email' => 'daniel@mail.com',
                "role" => "mitra",
                "phone" => "081234567901",
                'password' => bcrypt('123456789'),
            ],
        ]);
    }
}
