<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSantri extends Model
{
        protected $table = 'santri';

        protected $fillable =[
            'IDSANTRI',
			'NAMASANTRI',
			'GENDER',
			'TGLLAHIR',
            'KOTALAHIR',
            'NAMAORTU',
            'ALAMATORTU',
            'HP',
            'EMAIL',
            'PASSWORD',
            'TANGGALMASUK',
            'AKTIF'
        ];



}
