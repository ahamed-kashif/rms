<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('serial')->unique();
            $table->string('invoice_no')->unique();
            $table->integer('project_id')->unsigned()->nullable();//if project id is 0 then this invoice is for other purpose
            $table->unsignedBigInteger('person_id')->nullable();
            $table->string('person_type')->nullable();
            $table->boolean('is_office_expense')->default(0);//other purpose inside project
            $table->string('project_name')->nullable();
            $table->string('person_name')->nullable();
            $table->string('person_phone')->nullable();
            $table->boolean('is_checkin')->nullable();//0 for checkout 1 for checkin
            $table->bigInteger('amount')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('payment_method_id')->nullable();
            $table->timestamps();
            $table->boolean('is_checked')->default(0);
            $table->integer('balance_id')->unsigned()->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
