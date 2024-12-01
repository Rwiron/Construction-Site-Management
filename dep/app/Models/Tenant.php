<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'unit_id',
        'lease_start_date',
        'lease_end_date',
        'rent_amount',
        'status',
    ];

    /**
     * Relationship with Unit Model.
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
