<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('campanias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser');
            $table->integer('idTipoGaleria');
            $table->text('title');
            $table->text('titleUrl');
            $table->text('summary');
            $table->string('dirImagePortada');
            $table->string('nameEditor');
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
        Schema::dropIfExists('campanias');
    }
}
