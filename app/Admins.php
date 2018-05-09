<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Admins;

class Admins extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Students()
    {
        return $this->hasMany('App\Students', 'lecturer_id');
    }

    public function LecturerActivity()
    {
        return $this->belongsTo('App\LecturerActivity', 'user_id');
    }

    protected $table='admins';
    protected $primaryKey = 'id';

    public function LecturerSkill()
    {
        return $this->hasOne('App\LecturerSkill', 'user_id');
    }

    public function Attendance()
    {
        return $this->hasMany('App\Attendance', 'lecturer_id');
    }

    
   
    
}
