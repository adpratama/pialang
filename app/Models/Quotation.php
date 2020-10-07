<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = [
        'name','insured_id', 'insurance_id', 'status', 'date', 'insured', 'period', 'contract_details', 'scope', 'territorial', 'employee_details', 'vehicle_details', 'cover_type', 'coverage', 'rate', 'warranty', 'remarks', 'signfor', 'confirmby'
    ];

    public function insureds()
    {
        return $this->belongsTo(Insured::class, 'insured_id', 'id');
        
    }
    public function invoices()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
        
    }
}
