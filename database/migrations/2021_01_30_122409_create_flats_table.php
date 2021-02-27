<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->string('flat_title');

            $table->integer('customer_id')->unsigned()->nullable();
            $table->integer('project_id')->unsigned()->nullable();
            $table->string('flat_number');
            $table->boolean('is_avail_loan')->default(0);
            $table->boolean('is_installable')->default(0);
            $table->bigInteger('installment_amount');
            $table->integer('installment_duration')->unsigned()->nullable();
            $table->bigInteger('booking_amount');

            $table->bigInteger('flat_amount');
            $table->bigInteger('flat_utility');
            $table->bigInteger('flat_car_parking');
            $table->bigInteger('flat_total_received');
            $table->bigInteger('flat_initial_received');
            $table->bigInteger('flat_balance');


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
        Schema::dropIfExists('flats');
    }
}
