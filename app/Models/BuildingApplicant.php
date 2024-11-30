<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingApplicant extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'building_applicants';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'status',
        'documents',
        'applied_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'documents' => 'array',
        'applied_at' => 'datetime',
    ];

    /**
     * Relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
