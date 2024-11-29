<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    protected $fillable = [
        'utility_name',
        'description',
        'status',
        'cost',
        'billing_date',
    ];
}
