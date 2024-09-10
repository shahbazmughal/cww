<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'user_id', 'event_title', 'image', 'start_date', 'end_date', 'message'
    ];
}
