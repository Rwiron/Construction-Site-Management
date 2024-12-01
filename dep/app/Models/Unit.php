<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    // Specify the fillable fields based on the updated schema
    protected $fillable = ['name', 'description', 'status'];

    /**
     * Relationship with Tenant Model.
     * A unit can have multiple tenants.
     */
    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }
}
