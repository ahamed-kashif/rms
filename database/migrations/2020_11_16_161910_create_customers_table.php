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
            $table->string('phone_number')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('nid')->nullable();
            $table->string('nominee_name');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('reference_person_name');
            $table->unsignedBigInteger('project_id')->nullable();
            $table->string('flat_number');
            $table->boolean('is_avail_loan')->default(false);
            $table->boolean('is_installable')->default(false);
            $table->float('installment_amount');
            $table->integer('installment_duration') ->unsigned();
            $table->float('booking_amount');
            $table->timestamps();

            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
