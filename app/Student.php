<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable=[
        'student_number',
        'full_name',
        'date_of_birth',
        'address',
    ];
        //1 to many relationship
    public function fees(){
        return $this->hasMany('App\Fees'); //Looks for user_id in the posts table
    }


}
