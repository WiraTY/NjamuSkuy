<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class struk extends Model
{
    protected $table = 'struks';
    use HasFactory;
    protected $fillable = ['user_id', 'jumlah_harga', 'status_pembayaran'];
    protected $guard = [];
}
