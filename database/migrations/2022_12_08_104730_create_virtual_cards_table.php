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
        Schema::create('virtual_cards', function (Blueprint $table) {
            $table->id();
            $table->string('account_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('card_pan')->nullable();
            $table->string('masked_pan')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address_1')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('cvv')->nullable();
            $table->string('expiration')->nullable();
            $table->string('card_type')->nullable();
            $table->string('name_on_card')->nullable();
            $table->string('is_active')->nullable();
            $table->string('v_account_id')->nullable();
            $table->string('user_id')->nullable();

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
        Schema::dropIfExists('virtual_cards');
    }
};
