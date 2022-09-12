<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use App\Models\Caja;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Caja::insert([
            'caja_name' => 'Caja Principal',
            'caja_cantidad' => 200
        ]);
        User::insert([
            'name' => 'Kevin',
            'email' => 'pazortizkevindaniel@gmail.com',
            'rol' => 'administrador',
            'user_caja_id'=>1,
            'password' => Hash::make('Loco2541003'),
        ]);
    }
}
