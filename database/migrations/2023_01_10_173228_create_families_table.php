<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->text('title_en')->nullable();
            $table->text('title_ua')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ua')->nullable();
            $table->text('image')->nullable();
            $table->text('file')->nullable();
            $table->integer('show_status')->default(1);
            $table->integer('recommend')->default(0);
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
        Schema::dropIfExists('families');
    }
}
