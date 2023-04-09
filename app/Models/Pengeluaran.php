<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluarans';
    use HasFactory;
    protected $fillable = ['id', 'bentuk_pengeluaran','total_pengeluaran'];
    protected $guard = [];
}
