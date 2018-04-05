<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
          $table->increments("id")->integer("id");
          $table->unsignedInteger("user_id")->index();
          $table->unsignedInteger("movie_id")->index();
          $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade')
              ->nullable($value=false);
          $table->foreign('movie_id')
              ->references('ID')
              ->on('movies')
              ->onDelete('cascade');
            $table->integer('RATING');
            $table->boolean('WATCHED');
            $table->timestamps();
        });
        Schema::create('collections', function (Blueprint $table){
          $table->json('recomender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
}
