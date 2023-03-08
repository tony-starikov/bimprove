<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('title_ua')->nullable();
            $table->text('title_en')->nullable();
            $table->text('description_ua')->nullable();
            $table->text('description_en')->nullable();
            $table->text('slug')->nullable();
            $table->text('image_small')->nullable();
            $table->text('image_slider')->nullable();
            $table->text('image_background')->nullable();
            $table->text('image_big')->nullable();
            $table->text('content')->nullable();
            $table->text('files')->nullable();
            $table->text('presentation_url')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('services');
    }
}
