<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount', 10,2);
            $table->string('status')->default('Em processamento');
            $table->string('payers_name');
            $table->string('payment_processor'); //PayPal, Stripe, PayStack
            $table->string('payment_mode'); // Cred card, cash, online transfer

            $table->unsignedInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreignId('user_id')->constrained('user')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('payments');
    }
}
