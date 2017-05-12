<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('ufirst_name');
            $table->string('ulast_name');
            $table->string('u_country');
            
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
        Schema::dropIfExists('uinfos');
    }
}
