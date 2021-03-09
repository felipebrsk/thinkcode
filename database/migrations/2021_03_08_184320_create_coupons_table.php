<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 191);
            $table->string('type',  20); // Fixed, percent, free
            $table->decimal('value', 10,2)->nullable();
            $table->integer('percent')->nullable();
            $table->integer('total_available')->nullable();
            $table->integer('remaining')->nullable();
            $table->boolean('status')->default(1); // 1: on, 0: off
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
        Schema::dropIfExists('coupons');
    }
}
