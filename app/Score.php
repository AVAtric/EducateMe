<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'score', 'user_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }
}
