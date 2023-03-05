<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeammatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teammates', function (Blueprint $table) {
            $table->id();
            $table->text('name_ua')->nullable();
            $table->text('name_en')->nullable();
            $table->text('surname_ua')->nullable();
            $table->text('surname_en')->nullable();
            $table->text('position_ua')->nullable();
            $table->text('position_en')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('teammates');
    }
}
