<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('entity')->unique();
            $table->string('bvn')->nullable();
            $table->string('nin')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank')->nullable();
            $table->string('identity_type')->nullable();
            $table->string('identity_url')->nullable();
            $table->string('country')->nullable();
            $table->string('address_line1')->nullable();
            $table->string('lga')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('business_type')->nullable();
            $table->string('industry_type')->nullable();
            $table->string('rc_number')->nullable();
            $table->string('company_name')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('account_holder_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
