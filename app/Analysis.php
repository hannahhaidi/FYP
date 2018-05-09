<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
    public $fillable = ['user_id','cgpa', 'Final GEmS Point', 'No. of Activities', 'fundamental', 'personal', 'teamwork', 'leadership', 'validation' ];
}
