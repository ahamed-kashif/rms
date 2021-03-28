<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();


            $table->string('full_name');
            $table->string('father_or_husband_name');
            $table->string('mother_name');
            $table->string('occupation')->nullable();
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('nid')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address');
            $table->integer('project_id')->unsigned();
//            $table->string('flat_number');
//            $table->boolean('is_avail_loan')->default(false);
//            $table->boolean('is_installable')->default(false);
//            $table->float('installment_amount');
//            $table->integer('installment_duration') ->unsigned();
//            $table->float('booking_amount');
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
        Schema::dropIfExists('customers');
    }
}
