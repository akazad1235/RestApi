<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;

class RegistrationSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registration::create([
            'name' => 'Ak Azad',
            'email' => 'akazad33333@gmail.com',
            'phone' => 0172675714,
            'nid' => 2154541454,
            'gender' => 'male',
            'birth_day' => '41-52-1020',
            'address' => 'Dhaka, bangladesh',
            'image' => 'This is image',
            'password' => Hash::make(12345678)
        ]);
        
    }
}
