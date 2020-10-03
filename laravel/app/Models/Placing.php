<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Placing extends Model
{
    //
    public $incrementing = true;
    
    protected $fillable = [
        'date', 
        'insurance_id',
        'status', 
        'insured', 
        'period', 
        'contract_details', 
        'scope', 'territorial', 
        'employee_details', 
        'vehicle_details', 
        'cover_type', 
        'coverage', 
        'rate', 
        'compensation', 
        'warranty', 
        'remarks', 
        'signfor', 
        'confirmby'
    ];

    public function insurance()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id', 'id');
    }
}
