<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('job_title')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('company')->nullable();
            $table->string('location')->nullable();
            $table->boolean('current_role')->nullable();
            $table->string('start_month')->nullable();
            $table->year('start_year')->nullable();
            $table->string('end_month')->nullable();
            $table->year('end_year')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
