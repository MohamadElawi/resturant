<?php

namespace App\Models;

use App\Models\meal;
use App\Models\drink;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $Tables = "customers" ;
    protected $fillable =['name','number'];
    protected $hidden =[];
    public $timestamps =true;

    public function drinks()
        {
            return $this->belongsToMany('App\Models\drink','customer_drinks','customer_id', 'drink_id','id','id');
    }

    public function meals(){
        return $this -> belongstomany('App\Models\meal','customer_meals','customer_id','meal_id','id','id');
    }
}



