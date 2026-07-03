<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiItem extends Model
{
    protected $fillable = ['judul', 'deskripsi', 'gambar'];
}
