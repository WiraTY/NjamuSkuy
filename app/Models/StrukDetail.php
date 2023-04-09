<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukDetail extends Model
{
    protected $table = 'struk_details';
    use HasFactory;
    protected $fillable = ['jamu_id', 'struk_id','jumlah', 'jumlah_harga'];
    protected $guard = [];
}
