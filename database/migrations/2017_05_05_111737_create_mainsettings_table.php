<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainsettings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitename');
            $table->boolean('status')->default(0);
            $table->string('facebook');
            $table->string('googleplus');
            $table->string('twitter');
            $table->string('logo');
            $table->text('site_des');
            $table->string('copyright');



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
        Schema::dropIfExists('mainsettings');
    }
}
