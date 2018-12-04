<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->string('slug')->default('1');
            //  $table->integer('jela_id')->default('1');

            
        });

        // Schema::create('jelas_tagovi', function (Blueprint $table)
        // {
        //     $table->integer('jela_id')->unsigned()->index();
        //     $table->foreign('jela_id')->references('id')->on('jelas')->onDelete('cascade');
        //     $table->integer('tag_id')->unsigned()->index();
        //     $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('jela_tagovi');
    }
}
