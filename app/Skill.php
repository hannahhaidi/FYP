<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    protected $table = 'skills';
}
