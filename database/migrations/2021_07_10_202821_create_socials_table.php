<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('whatsapp')->nullable()->unique();
            $table->boolean('whatsapp_privacy')->nullable();
            $table->string('facebook')->nullable()->unique();
            $table->boolean('facebook_privacy')->nullable();
            $table->string('instagram')->nullable()->unique();
            $table->boolean('instagram_privacy')->nullable();
            $table->string('linkedin')->nullable()->unique();
            $table->boolean('linkedin_privacy')->nullable();
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
        Schema::dropIfExists('socials');
    }
}
