<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    const GOING = 1;
    const MAYBE = 2;
    const NOT_GOING = 3;
    const NO_REPONSE = 4;

    use HasFactory;
    protected $fillable = ['name'];
    public $timestamps = false;
}
