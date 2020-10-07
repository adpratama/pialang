<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'insured_id', 'quotation_id', 'date', 'status', 'currency_id', 'kurs_to_idr', 'cover_type', 'insurance_id', 'policy_number', 'period_from', 'period_to', 'risk_location', 'sum_insured', 'payment_warranty', 'particulars', 'signfor', 'premium', 'policy_cost', 'stamp_duty', 'others_premium', 'others_mds', 'mds_commission', 'admin_cost', 'vat', 'outcome_commission', 'incoming_tax_net', 'incoming_tax_total'     
    ];

    public function insureds()
    {
        return $this->belongsTo(Insured::class, 'insured_id', 'id');
    }

    public function insurances()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id', 'id');
    }

    public function quotations()
    {
        return $this->belongsTo(Quotation::class, 'quotation_id', 'id');
    }
}
