<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class
CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('area')->unique();
            $table->string('description')->nullable();
            $table->string('address')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->float('budget');
            $table->float('contractor_budget')->nullable();
            $table->float('supplier_budget')->nullable();
            $table->float('engineer_budget')->nullable();
            $table->enum('status',['pending','under construction','delayed','completed','cancelled'])->default('pending');
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
        Schema::dropIfExists('projects');
    }
}
