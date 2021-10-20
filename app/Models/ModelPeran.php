<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPeran extends Model
{
    protected $table = 'peran';

    protected $fillable = [
        'IDPERAN',
        'PERAN',
        'AKTIF'
    ];
}
