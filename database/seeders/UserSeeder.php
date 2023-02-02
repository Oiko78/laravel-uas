<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::factory()->create([
            'role_id' => 2,
            'gender_id' => 1,
            'first_name' => 'Oliver',
            'last_name' => 'Chico',
            'email' => 'oliverchiko2002@gmail.com',
            'password' => Hash::make('Chiko002'),
            'display_picture' => 'images/default.jpg'
        ]);
    }
}
