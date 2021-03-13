<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'laptop', 'keterangan', 'kelengkapan', 'status_barang', 'biaya', 'status_bayar'];
}
