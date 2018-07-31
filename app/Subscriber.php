<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
     //by default all the columns are protected
     protected $fillable = [
        'username',
        'first_name',
        'last_name'
    ];

    // protected $hidden = [
    //     'last_name',
    // ];

    protected $appends = [
        'humanCreatedAt',
    ];


    public function getFullName(){
        return $this->first_name . ' ' .$this->last_name;
    }

    public function scopeActive($query){
        return $query->where('activated', true);
    }

    public function getHumanCreatedAtAttribute(){
       return $this->created_at->diffForHumans();
    }

}
