<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'score', 'user_id'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }
}
