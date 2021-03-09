<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 80)->unique();
            $table->integer('chapters')->nullable();
            $table->integer('challenges')->nullable();
            $table->string('chapter_name', 80)->nullable();
            $table->decimal('total_average', 10,2)->nullable();
            $table->string('picture')->nullable();
            $table->string('about_instructor')->nullable();
            $table->string('about')->nullable();
            $table->string('requirements')->nullable();
            $table->string('learn')->nullable();
            $table->string('features')->nullable();
            $table->decimal('price', 10,2);

            $table->unsignedInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE')->onUpdate('CASCADE');

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
        Schema::dropIfExists('courses');
    }
}
