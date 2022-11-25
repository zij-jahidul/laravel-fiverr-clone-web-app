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
        Schema::create('hired_and_delivered_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gig_create_id');
            $table->bigInteger('user_id');
            $table->longText('expert')->nullable();
            $table->string('duration')->nullable();
            $table->bigInteger('currency_id')->nullable();
            $table->float('budget')->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->longText('comments')->nullable();
            $table->date('delivery_date')->nullable();
            $table->bigInteger('gallery_id')->nullable();
            //cancle status
            $table->longText('cancle_status')->nullable();
            $table->bigInteger('cancle_by_user_id')->nullable();
            //feedback
            $table->longText('client_user_feedback')->nullable();
            $table->longText('hired_user_feedback')->nullable();
            $table->bigInteger('review_id')->nullable();
            // status
            $table->enum('biddable', ['true', 'false'])->default('false');
            $table->enum('private', ['true', 'false'])->default('false');
            $table->enum('closed', ['true', 'false'])->default('false');
            $table->enum('status', ['true', 'false'])->default('true');
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
        Schema::dropIfExists('hired_and_delivered_users');
    }
};
