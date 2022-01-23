<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer_drink extends Model
{
    protected $Tables = 'customer_drinks';
    protected $fillable =['customer_id','drink_id'];
    protected $hidden =[];
    public $timestamps =false;
}

