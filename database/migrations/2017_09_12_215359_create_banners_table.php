<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('texto');
            $table->string('icono_boton_1')->nullable();
            $table->string('texto_boton_1')->nullable();
            $table->string('style_boton_1')->nullable();
            $table->string('icono_boton_2')->nullable();
            $table->string('texto_boton_2')->nullable();
            $table->string('style_boton_2')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
