<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'location', 'date'];

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('\App\User','user_id')
        ->withPivot('id');
    }
}
