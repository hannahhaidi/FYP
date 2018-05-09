<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturers extends Model
{
    public function Students()
    {
        return $this->hasMany('App\Students', 'lecturer_id');
    }

    protected $table = 'admins';
    protected $primaryKey = 'id';
    
}
