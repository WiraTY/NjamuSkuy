<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamu extends Model
{
    protected $table = 'jamus';
    use HasFactory;
    protected $fillable = ['id', 'nama_jamu', 'gambar_jamu','deskripsi', 'harga'];
    protected $guard = [];
}
