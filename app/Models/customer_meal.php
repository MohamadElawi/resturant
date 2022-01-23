<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer_meal extends Model
{
    protected $Tables = 'customer_meals' ;
    protected $fillable =['customer_id','meal_id'];
    protected $hidden =['created_at','updated_at','pivot'];
    public $timestamps =false;
}
