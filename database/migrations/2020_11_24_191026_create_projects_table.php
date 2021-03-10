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
            $table->boolean('is_investor_project')->default(0);
            $table->string('description')->nullable();
            $table->string('address')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->bigInteger('budget');
            $table->bigInteger('contractor_budget')->nullable();
            $table->bigInteger('supplier_budget')->nullable();
            $table->bigInteger('engineer_budget')->nullable();
            $table->boolean('is_active')->default(1);
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
