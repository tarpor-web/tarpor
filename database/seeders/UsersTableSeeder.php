<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        User::create([
//            'name' => 'Super Admin',
//            'email' => 'super@admin.com',
//            'password' => bcrypt('password'), // Temporary password
//            'role' => 'super'
//        ]);

        $users = [
            [
                'name' => 'Parvez Ahmed',
                'email' => 'a@b.com',
                'password' => Hash::make('password'),
                'role' => 'super',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Alice Smith',
                'email' => 'alice@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Bob Johnson',
                'email' => 'bob@example.com',
                'password' => Hash::make('password'),
                'role' => 'guest',
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charlie@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'David Williams',
                'email' => 'david@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Eva Green',
                'email' => 'eva@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Frank White',
                'email' => 'frank@example.com',
                'password' => Hash::make('password'),
                'role' => 'super',
            ],
            [
                'name' => 'Grace Lee',
                'email' => 'grace@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Henry Brown',
                'email' => 'henry@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
        ];


        foreach ($users as $user) {
            User::create($user);
        }
    }
}
