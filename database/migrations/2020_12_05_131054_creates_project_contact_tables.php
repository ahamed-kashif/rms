<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesProjectContactTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('contactable_id');
            $table->string('contactable_type');
            $table->string('purpose');
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
        Schema::dropIfExists('project_contacts');
    }
}
