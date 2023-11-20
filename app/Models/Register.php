<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable =[
        'Nama',
        'NIM',
        'Nomor Telepon',
        'Kelas/Prodi',
        'Email',
        'Password',

    ];
}
