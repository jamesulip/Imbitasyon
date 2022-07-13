<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // listed to event

    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'location',
        'start_date',
        'end_date',
        'max_guests',
        'created_by',
    ];

    public function invited()
    {
        return $this->hasMany(Invited::class, 'event_id');
    }
}
