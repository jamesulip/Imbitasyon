<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invited extends Model
{
    use HasFactory;
    protected $table = 'invited';
    protected $fillable = ['name', 'code', 'event_id', 'response_id', 'attending', 'last_opened'];
    public function response()
    {
        return $this->belongsTo(Response::class, 'response_id');
    }
}
