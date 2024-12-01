<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'generated_by',
        'generated_at',
        'status',
        'description',
    ];

    // Relationship to User model
    public function user()
    {
        return $this->belongsTo(User::class, 'generated_by');
    }
}
