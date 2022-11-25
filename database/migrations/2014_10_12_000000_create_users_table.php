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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('slug')->nullable();
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable();
            $table->integer('otp_code')->default(0);
            $table->boolean('isVerified')->default(0);
            $table->string('password');
            $table->string('verification_code')->nullable();
            $table->enum('gender', ['male', 'female', 'others'])->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('user_type')->nullable();
            // 2nd
            $table->string('short_description')->nullable();
            $table->string('member_since')->nullable();
            $table->string('last_delivery')->nullable();
            $table->string('available_set_type')->nullable();
            // 3nd
            $table->longText('long_description')->nullable();
            $table->string('language')->nullable();
            $table->bigInteger('fiverr_choice_type')->nullable();
            $table->bigInteger('level_id')->nullable();
            $table->bigInteger('badge_id')->nullable();
            $table->bigInteger('buy_request_id')->nullable();
            $table->bigInteger('bid_id')->nullable();
            $table->bigInteger('featured_id')->nullable();
            $table->string('live_status')->nullable();
            $table->string('live_date_time')->nullable();
            $table->string('valid_from')->nullable();
            $table->string('valid_till')->nullable();
            $table->string('banned')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->nullable();
            // payment_related
            $table->bigInteger('wallet_id')->nullable();
            $table->bigInteger('payment_id')->nullable();
            $table->bigInteger('transation_id')->nullable();
            $table->bigInteger('withdrawal_id')->nullable();
            // common field start
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
