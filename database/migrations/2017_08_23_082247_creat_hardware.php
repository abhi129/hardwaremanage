<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatHardware extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hardwares',function($table){
            $table->increments($column='hardware_id',$primary=true);
            $table->string($column='hard_name',$length=200);
            $table->string($column='hard_assign',$length=200);
       
            $table->string($column='emp_dur',$length=200);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Hardware');
    }
}
