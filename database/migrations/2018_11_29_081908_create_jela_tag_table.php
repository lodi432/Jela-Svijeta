<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJelaTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jela_tag', function (Blueprint $table) {
            $table->increments('id');
            
           $table->integer('jela_id')->unsigned()->index();
           $table->foreign('jela_id')->references('id')->on('jelas')->onDelete('cascade');
           $table->integer('tag_id')->unsigned()->index();
           $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('jela_tag');
    }
}
