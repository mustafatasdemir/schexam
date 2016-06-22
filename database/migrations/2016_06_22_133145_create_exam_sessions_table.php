<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->integer('exam_term_id');
            $table->integer('classroom_id');
            $table->integer('course_exam_id');
            $table->integer('defined_session_date_id');
            $table->integer('defined_session_time_id');
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
        Schema::drop('exam_sessions');
    }
}
