<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id', true);
            $table->text('review');
            $table->integer('rating');

            $table->integer('user_id')->unsigned();
            $table->integer('creator_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('reviews', function (Blueprint $table) {
            
            $table->foreign('creator_id')->references('id')->on('creators');
        });
      
    }

      /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
