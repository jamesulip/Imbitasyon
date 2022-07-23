<?php

namespace App\Models;

use App\Models\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function invitedGoing()
    {
        return $this->hasMany(Invited::class, 'event_id')->where('response_id', Response::GOING);
    }
}
