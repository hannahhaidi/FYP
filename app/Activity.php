<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    protected $table = 'activities';
    
    protected $casts = [

        'meta' => 'array',
        'meta1' => 'array',
        'meta2' => 'array',  
        'meta3' => 'array',
    ];

   protected $fillable = [
    'user_id', 'type', 'points', 'code', 'meta', 'meta1', 'meta2', 'meta3'
];
    
}
