<?php

namespace Database\Seeders;

use App\Models\Guru;
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
        User::create([
            'nama_lengkap' => 'Naufal Aqil Himawan',
            'nama_pengguna' => 'Aqil',
            'tanggal_lahir' => '2001-09-05',
            'nik' => '1202194271',
            'nohp' => '0892128282939',
            'email' => 'naufal@gmail.com',
            'password' => Hash::make('user'),
        ]);
        User::create([
            'nama_lengkap' => 'Admin JARSA',
            'nama_pengguna' => 'Admin',
            'tanggal_lahir' => '2001-09-05',
            'nik' => '12021212900',
            'nohp' => '08123983472',
            'email' => 'adminjarsa@gmail.com',
            'password' => Hash::make('admin'),
            'is_admin' => true,
        ]);
        User::create([
            'nama_lengkap' => 'Guru JARSA',
            'nama_pengguna' => 'Guru',
            'tanggal_lahir' => '2001-09-05',
            'nik' => '12021212900',
            'nohp' => '08123983472',
            'email' => 'gurujarsa@gmail.com',
            'password' => Hash::make('guru'),
            'is_guru' => true,
        ]);

        // guru
        Guru::create([
            'link_video' => 'https://www.youtube.com/embed/B2IldXHBDA0',
        ]);
    }
}