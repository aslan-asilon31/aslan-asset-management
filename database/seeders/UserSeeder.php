<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            // 'role_id' => 1,
            // 'unique_user_number' => '00' . mt_rand(100, 500) . mt_rand(1, 9) . date('Y'),
            'name' => 'developer',
            'email' => 'developer@gmail.com',
            'email_verified_at' => now(),
            // 'gender' => 'Laki-laki',
            // 'phone_number' => '+628' . mt_rand(100, 400) . mt_rand(500, 700) . mt_rand(1000, 9000),
            // 'photo' => 'assets/images/profiles/default.png',
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            // 'role_id' => 2,
            // 'unique_user_number' => '00' . mt_rand(100, 500) . mt_rand(1, 9) . date('Y'),
            'name' => 'employee',
            'email' => 'employee@gmail.com',
            'email_verified_at' => now(),
            // 'gender' => 'Laki-laki',
            // 'phone_number' => '+628' . mt_rand(100, 400) . mt_rand(500, 700) . mt_rand(1000, 9000),
            // 'photo' => 'assets/images/profiles/default.png',
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            // 'role_id' => 3,
            // 'unique_user_number' => '00' . mt_rand(100, 500) . mt_rand(1, 9) . date('Y'),
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'email_verified_at' => now(),
            // 'gender' => 'Laki-laki',
            // 'phone_number' => '+628' . mt_rand(100, 400) . mt_rand(500, 700) . mt_rand(1000, 9000),
            // 'photo' => 'assets/images/profiles/default.png',
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10)
        ]);
    }
}
