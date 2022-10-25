<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shinwari = User::create([
            'first_name' => "Inayatullah",
            'last_name' => "Shinwari",
            'username' => "shinwari",
            'email' => "Inayatullahoffical@gmail.com",
            'email_verified_at' => now(),
            // 'profile_photo_url' => 'https://images.unsplash.com/photo-1499996860823-5214fcc65f8f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YW5pbWUlMjBmYWNlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'password' => Hash::make("admin"),
            'remember_token' => Str::random(10),
        ]);
        User::factory(10)->create();
    }
}
