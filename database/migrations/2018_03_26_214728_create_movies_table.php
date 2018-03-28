<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
          $table->increments('ID')->index();
              $table->string('DIRECTOR',50)->nullable();
              $table->integer('DURATION')->nullable();
              $table->string('ACTOR_2',50)->nullable($value=false);
              $table->string('GENERS',100)->nullable($value=false);
              $table->string('ACTOR_1',50)->nullable($value=false);
              $table->string('TITLE',1000)->nullable($value=false);
              $table->string('ACTOR_3',50)->nullable($value=false);
              $table->string('IMDB_LINK',100)->nullable();
              $table->string('LANGUAGE',25)->nullable($value=false);
              $table->string('COUNTRY',50)->nullable($value=false);
              $table->integer('YEAR')->nullable($value=false);
              $table->float('IMDB_SCORE')->nullable();
              $table->float('SITE_SCORE')->nullable();
              $table->integer('NUM_OF_VOTES')->default(1);
              $table->string('DESCRIBTION',1000)->nullable()->charset('utf8')->collation=('utf8_unicode_ci');
              $table->string('IMAGEPATH',100)->nullable();
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
        Schema::dropIfExists('movies');
    }
}
