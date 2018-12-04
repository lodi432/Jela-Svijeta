<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJelaSastojciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jela_sastojci', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('jela_id')->unsigned()->index();
            $table->foreign('jela_id')->references('id')->on('jelas')->onDelete('cascade');
            $table->integer('sastojci_id')->unsigned()->index();
            $table->foreign('sastojci_id')->references('id')->on('sastojcis')->onDelete('cascade');
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
        Schema::dropIfExists('jela_sastojci');

    }
}
