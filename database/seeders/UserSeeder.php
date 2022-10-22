<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'password' => Hash::make("admin"),
        ]);    
        User::factory(10)->create();
    }

}
