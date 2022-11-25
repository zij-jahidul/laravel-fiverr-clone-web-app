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
        Schema::create('gig_bids', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gig_create_id')->nullable();
            $table->bigInteger('bid_by_user_id')->nullable();
            $table->float('amount')->nullable();
            $table->date('duration_time')->nullable();
            $table->longText('massage')->nullable();
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
        Schema::dropIfExists('gig_bids');
    }
};
