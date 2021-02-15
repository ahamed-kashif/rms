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

            $table->integer('customer_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->string('flat_number');
            $table->boolean('is_avail_loan')->default(false);
            $table->boolean('is_installable')->default(false);
            $table->float('installment_amount');
            $table->text('installment_duration')->unsigned();
            $table->float('booking_amount');

            $table->float('flat_amount');
            $table->float('flat_utility');
            $table->float('flat_car_parking');
            $table->float('flat_total_received');
            $table->float('flat_initial_received');
            $table->float('flat_balance');


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
