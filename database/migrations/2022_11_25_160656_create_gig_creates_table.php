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
        Schema::create('gig_creates', function (Blueprint $table) {
            $table->id();
            $table->string('gig_title')->nullable();
            $table->string('gig_slug')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->string('service_type')->nullable();
            $table->string('gig_meta_data')->nullable();
            $table->longText('search_tag')->nullable();
            // gig_price_table
            $table->longText('description')->nullable();
            // gig_media_table
            $table->enum('private', ['true', 'false'])->default('false');
            $table->enum('publish', ['true', 'false'])->default('true');
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
        Schema::dropIfExists('gig_creates');
    }
};
