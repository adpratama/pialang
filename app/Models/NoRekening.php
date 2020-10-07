<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NoRekening extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'id', 'input_kode', 'nama_bank', 'no_rekening', 'atas_nama'
    ];
}
