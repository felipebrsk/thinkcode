<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapter')->default(1);
            $table->integer('challenge')->default(1);
            $table->decimal('average', 10,2)->nullable();
            $table->dateTime('paid_date')->nullable();
            $table->dateTime('expiry_date')->nullable();
            $table->string('plan')->nullable(); //monthly, quarterly, yearly, lifetime
            $table->decimal('paid_amount', 10,2)->nullable();
            $table->boolean('status')->default(0); //0 : off, 1: on

            $table->unsignedInteger('course_id')->unsigned()->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('user_courses');
    }
}
