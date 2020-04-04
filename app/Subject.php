<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
        'subject_name'
    ];

    public function students(){
        return $this->belongsToMany('App\Student');
    }
}
