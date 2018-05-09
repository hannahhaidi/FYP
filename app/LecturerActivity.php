<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LecturerActivity extends Model
{
    public function Admins()
    {
        return $this->belongsTo('App\Admins', 'user_id');
    }

    
    protected $casts = [

        'meta' => 'array',
        'meta1' => 'array',
        'meta2' => 'array',  
        'meta3' => 'array',
    ];

   protected $fillable = [
    'user_id', 'type', 'points', 'code', 'meta', 'meta1', 'meta2', 'meta3'
   ];

   protected $table = 'lecturer_activities';
  

}
