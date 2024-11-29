<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'team_id', 'position_id', 'salary', 'hire_date', 'status'];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Team
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    // Relationship with Position
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
