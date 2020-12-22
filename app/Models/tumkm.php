<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tumkm extends Model
{
    use HasFactory;

    protected$fillable = ['jenis', 'nama', 'alamat', 'kontak'];
}
