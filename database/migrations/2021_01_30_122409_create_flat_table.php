<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string('flat_number');
            $table->boolean('is_avail_loan');
            $table->boolean('is_installable');
            $table->float('installment_amount');
            $table->text('installment_duration')->unsigned();
            $table->float('amount');
            $table->float('utility');
            $table->float('car_parking');

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
        Schema::dropIfExists('flat');
    }
}
