<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'maintenance_type',
        'description',
        'status',
        'assigned_to',
        'start_date',
        'end_date',
        'priority',
    ];

    /**
     * Relationship with User Model.
     */
    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
