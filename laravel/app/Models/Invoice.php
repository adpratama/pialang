<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'id', 'insured_id', 'up', 'date', 'currancy', 'kurs_to_idr', 'cover_type', 'insurer', 'policy', 'period', 'location_risk', 'insured_sum', 'warranty', 'particulars', 'premium', 'cost_policy', 'duty_stamp', 'others', 'cost_admin'
    ];
}
