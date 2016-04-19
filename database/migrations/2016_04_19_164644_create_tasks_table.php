<!--
@Author: Daven
@Date:   2016-04-19T09:46:44-07:00
@Email:  daven1919@gmail.com
@Last modified by:   Daven
@Last modified time: 2016-04-19T10:07:36-07:00
-->



<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
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
        Schema::drop('tasks');
    }
}
