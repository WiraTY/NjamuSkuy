<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel_jamus';
    use HasFactory;
    protected $fillable = ['id', 'judul_artikel','artikel', 'jamus_id'];
    protected $guard = [];
}
