<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class JenisAsuransi extends Model
{
    //    
    use SoftDeletes;

    protected $fillable = [
        'id', 'input_kode', 'deskripsi'
    ];
}
