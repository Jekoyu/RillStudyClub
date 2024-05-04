<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {;


        User::create([
            'nama_lengkap' => 'nama',
            'email' => 'email',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2001-01-01',
            'no_hp' => '082212121',
            'is_admin' => '1',
            'is_active' => '1',
            'password' => bcrypt('123')

        ]);
    }
}
