<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $Tables = "employees" ;
    protected $fillable =['name','salary','number','experience','created_at','updated_at'];
    protected $hidden =[];
    public $timestamp =false;
}
