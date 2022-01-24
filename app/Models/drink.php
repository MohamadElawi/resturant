<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class drink extends Model
{
    protected $Tables = "drinks" ;
    protected $fillable =['name','price'];
    protected $hidden =['created_at','updated_at','pivot'];
    public $timestamps =true;

    public function customer(){
        return $this-> belongstomany('App\Models\customers','customer_drinks','drink_id','customer_id');
    }
}
