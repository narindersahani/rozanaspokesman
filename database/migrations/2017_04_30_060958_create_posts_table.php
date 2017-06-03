<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('short_description');
            $table->text('description')->nullable();
            $table->datetime('start_date')->nullable()->comment = "post start showing date.";
            $table->datetime('end_date')->nullable()->comment = "post end showing date.";
            $table->datetime('event_date')->nullable();
            $table->integer('display_order')->default(0);
            $table->boolean('is_featured')->nullable()->default(false);
            $table->boolean('show_on_banner')->default(false);
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
        Schema::dropIfExists('posts');
    }
}
