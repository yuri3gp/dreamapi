<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Design extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("design",function(Blueprint $table){
            $table->increments('id');
            $table->string("design");
            $table->integer("dream_id")->unsigned();
            $table->foreign("dream_id")->references("id")->on("dream")->onDelete("cascade");
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
        Schema::drop("design");
    }
}
