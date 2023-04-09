<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';
    use HasFactory;
    protected $fillable = ['id', 'nama_staff', 'kelamin', 'tanggal_lahir', 'alamat', 'posisi'];
    protected $guard = [];
}
