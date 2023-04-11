<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEventsAttendee extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('\App\User','user_id')
        ->withPivot('id');
    }

    public function event(){
        return $this->belongsTo('\App\Event','id');
    }
}