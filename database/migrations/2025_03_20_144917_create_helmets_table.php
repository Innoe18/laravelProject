<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelmetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('helmets', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('image_path');
        $table->text('inspiration')->nullable();
        $table->integer('votes')->default(0);
        $table->boolean('is_winner')->default(false);
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
        Schema::dropIfExists('helmets');
    }
}
