<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Membuat satu pengguna dengan role default
        User::create([
            'name' => 'aqeela',
            'email' => 'aqeelamaisa@gmail.com',
            'password' => Hash::make('1711'), // Jangan lupa hash password
        ]);
    }
}
