<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    protected $table = 'comments';
    use HasFactory;
    protected $fillable = ['id', 'nama_pengomen','email','subject', 'pesan'];
    protected $guard = [];
}
