<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 255)->nullable();
            $table->string('title', 255);
            $table->text('url')->nullable();
            $table->text('thumbnail_image')->nullable();
            $table->text('small_image')->nullable();
            $table->text('large_image')->nullable();
            $table->text('short_description');
            $table->text('description')->nullable();
            $table->datetime('start_date')->nullable()->comment = "video start showing date.";
            $table->datetime('end_date')->nullable()->comment = "video end showing date.";
            $table->datetime('event_date')->nullable();
            $table->integer('display_order')->nullable()->default(0);
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('videos');
    }
}
