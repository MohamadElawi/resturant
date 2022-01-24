<?php

namespace App\Models;

use App\Models\customer;
use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    protected $Tables = "meal" ;
    protected $fillable =['name','price'];
    protected $hidden =['created_at','updated_at','pivot'];
    public $timestamps =true;

    public function customer(){
        return $this-> belongstomany('App\Models\customers','customer_meals','meal_id','customer_id');
    }
}