<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');

            $table->text('apresentation_section')->nullable();
            $table->text('section_1');
            $table->text('section_2')->nullable();
            $table->text('section_3')->nullable();
            $table->text('section_4')->nullable();
            $table->text('section_5')->nullable();
            $table->text('section_6')->nullable();
            $table->text('section_7')->nullable();
            $table->text('section_8')->nullable();
            $table->text('section_9')->nullable();
            $table->text('section_10')->nullable();
            
            $table->string('apresentation_video')->nullable();
            $table->string('video_1')->nullable();
            $table->string('video_2')->nullable();
            $table->string('video_3')->nullable();
            $table->string('video_4')->nullable();
            $table->string('video_5')->nullable();
            $table->string('video_6')->nullable();
            $table->string('video_7')->nullable();
            $table->string('video_8')->nullable();

            $table->string('apresentation_image')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->string('image_7')->nullable();
            $table->string('image_8')->nullable();
            

            $table->unsignedInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpdate('CASCADE');

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
        Schema::dropIfExists('contents');
    }
}
