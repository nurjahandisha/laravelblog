<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new  User();
        $user->name = 'Disha';
        $user->email = 'disha@gmail.com';
        $user->password = Hash::make('password');     
        $user->save();

    }
}
