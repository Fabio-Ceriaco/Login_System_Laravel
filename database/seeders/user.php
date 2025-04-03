<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new ModelsUser();

        $user->email = "admin@test.com";
        $user->password = Hash::make('aaabbb');
        $user->save();
    }
}
