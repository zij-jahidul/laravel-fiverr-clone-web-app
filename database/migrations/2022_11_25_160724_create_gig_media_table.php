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
        Schema::create('gig_media', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('gig_create_id')->nullable();
            $table->string('gig_image_one')->nullable();
            $table->string('gig_image_two')->nullable();
            $table->string('gig_image_three')->nullable();
            $table->string('video')->nullable();
            $table->string('document_pdf_one')->nullable();
            $table->string('document_pdf_two')->nullable();
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
        Schema::dropIfExists('gig_media');
    }
};
