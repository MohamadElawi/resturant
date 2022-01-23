<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mhd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
       Schema::create('mhd', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name')->nullable();
        $table->string ('lastName');
        $table->integer('number');
       }); 
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
