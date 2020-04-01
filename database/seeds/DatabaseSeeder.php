<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'firstname' => 'Muhd',
            'lastname' => 'Awwal',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
            'role' => 2
        ]);
        
        User::create([
            'firstname' => 'Alamin',
            'lastname' => 'Yusuf',
            'email' => 'user@test.com',
            'password' => Hash::make('secret'),
            'role' => 1
        ]);
    }
}