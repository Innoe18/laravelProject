<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('memes', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('image_path'); // To store the image filename or URL
        $table->text('description')->nullable();
        $table->unsignedBigInteger('user_id')->nullable(); // If you allow user submissions
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
        Schema::dropIfExists('memes');
    }
}
