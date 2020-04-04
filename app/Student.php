<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'grade_id',
    ];

    public function grade(){
        return $this->belongsTo('App\Grade');
    }

    public function subjects(){
        return $this->belongsToMany('App\Subject');
    }

}
