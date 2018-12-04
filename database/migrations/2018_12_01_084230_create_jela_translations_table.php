<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJelaTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jela_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jela_id')->unsigned();
            $table->string('naziv');
            $table->text('opis');
            $table->string('locale')->index();
            $table->unique(['jela_id','locale']);
            $table->foreign('jela_id')->references('id')->on('jelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jela_translations');
    }
}
