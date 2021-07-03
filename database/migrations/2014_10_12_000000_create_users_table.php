<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('birthday')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nic_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('whatsapp')->nullable()->unique();
            $table->string('addressLine1')->nullable();
            $table->string('addressLine2')->nullable();
            $table->string('addressLine3')->nullable();
            $table->string('nic')->nullable()->unique();
            $table->string('job_type')->nullable();
            $table->string('job_post')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('feature')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('horoscope')->nullable();
            $table->string('school')->nullable();
            $table->string('education')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('hobby')->nullable();
            $table->string('sd')->nullable();
            $table->string('facebook')->nullable()->unique();
            $table->string('instagram')->nullable()->unique();
            $table->string('bio')->nullable();
            $table->integer('brothers')->nullable();
            $table->integer('sisters')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('other')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_blocked')->default(false);
            $table->boolean('is_activated')->default(false); // for registration purpose only
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
