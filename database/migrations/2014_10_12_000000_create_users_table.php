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
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('nicName')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('whatsApp')->nullable()->unique();
            $table->string('addressLine1')->nullable();
            $table->string('addressLine2')->nullable();
            $table->string('addressLine3')->nullable();
            $table->string('nic')->nullable()->unique();
            $table->string('jobType')->nullable();
            $table->string('jobPost')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('feature')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('motherTongue')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('horoscope')->nullable();
            $table->string('school')->nullable();
            $table->string('education')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('hobby')->nullable();
            $table->string('sd')->nullable();
            $table->string('fb')->nullable()->unique();
            $table->string('ig')->nullable()->unique();
            $table->string('aboutYou')->nullable();
            $table->string('brother')->nullable();
            $table->string('sister')->nullable();
            $table->string('fatherName')->nullable();
            $table->string('motherName')->nullable();
            $table->string('otherDetails')->nullable();
            $table->string('image')->nullable();
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
