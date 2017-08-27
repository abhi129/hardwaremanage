<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatEmp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employees',function($table){
            $table->increments($column='emp_id',$primary=true);
            $table->string($column='emp_name',$length=200);
            $table->string($column='emp_dept',$length=200);
            $table->string($column='emp_assign',$length=200);
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
        Schema::drop('Employee');
    }
}
