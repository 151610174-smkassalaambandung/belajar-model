<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['nama_produk','harga','diskon'];
    protected $visibel = ['nama_produk','harga','diskon'];
    public $timestamps = true;
}

