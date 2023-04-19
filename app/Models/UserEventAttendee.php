<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEventAttendee extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'event_id'];

    public function user(){
        return $this->belongsTo(User::class,'id')->withPivot('id', 'user_id');
        // return $this->belongsTo('\App\User','user_id')
        // ->withPivot('id');
    }

    public function event(){
        return $this->belongsTo(Event::class,'id')->withPivot('id', 'event_id');
    }
}
