<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser');
            $table->integer('idPrioridad');
            $table->integer('idLabelNews');
            $table->integer('idTipoGaleria');
            $table->string('nameEditor');
            $table->text('title');
            $table->text('titleUrl');
            $table->text('summary');
            $table->string('dirImagePortada');
            $table->timestamp('fechaPublicacion')->nullable();
            $table->integer('estado');
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
        Schema::dropIfExists('news');
    }
}
