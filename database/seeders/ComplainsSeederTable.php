<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Complain;

class ComplainsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Complain::create([
            'reg_id' => 1,
            'complain_name' => 'Rape',
            'complain_type' => 'Rape',
            'image' => 'this is image',
            'address' => 'Dhaka, Mirpur, Bangladesh',
        ]);
      
    }
}
