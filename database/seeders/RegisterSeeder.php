<?php

namespace Database\Seeders;

use App\Models\Register;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Register::create([
            'Nama' => 'Willa Wikarsi',
            'NIM' => '362258302162',
            'Nomor Telepon' => '085163622725',
            'Kelas/Prodi' => '2F/TRPL',
            'Email' => 'willa@gmail.com',
            'Password' =>'2725',
        ]);
    }
}
