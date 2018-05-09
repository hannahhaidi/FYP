<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Students extends Model
{
    public function Admins()
    {
        return $this->belongsTo('App\Admins', 'lecturer_id');
    }
    
    protected $table='students';
}
