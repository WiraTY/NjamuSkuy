<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAdmin extends Model
{
    protected $table = 'users';
    use HasFactory;
    protected $fillable = ['id', 'nama', 'email', 'password', 'kelamin', 'tanggal_lahir', 'alamat', 'status'];
    protected $guard = [];
}