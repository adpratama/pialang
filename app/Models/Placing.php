<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Placing extends Model
{
    //
    public $incrementing = false;
    
    protected $fillable = [
        'date', 'insured', 'period', 'contract_details', 'scope', 'territorial', 'employee_details', 'vehicle_details', 'cover_type', 'coverage', 'rate', 'compensation', 'warranty', 'remarks', 'signfor'
    ];
}
