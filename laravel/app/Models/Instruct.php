<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instruct extends Model
{
    //
    protected $fillable = [
        'date',
        'quotation_id',
        'insurance_id',
        'insured', 
        'insured_id', 
        'period', 
        'contract_details', 
        'scope', 
        // 'status', 
        'territorial', 
        'employee_details', 
        'vehicle_details', 
        'cover_type', 
        'coverage', 
        'premium',
        'policy_cost',
        'rate',  //kurs hari itu
        'warranty', 
        'other', 
        'signfor', 
        'confirmby'
    ];

    public function insurance()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id', 'id');
    }

    public function insureds()
    {
        return $this->belongsTo(Insured::class, 'insured_id', 'id');
    }
}

