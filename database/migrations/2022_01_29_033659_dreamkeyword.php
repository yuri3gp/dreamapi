<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dreamkeyword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("dreamkeyword",function(Blueprint $table){
            $table->increments('id');
            $table->integer("dream_id")->unsigned();
            $table->integer("keyword_id")->unsigned();
            $table->foreign("dream_id")->references("id")->on("dream")->onDelete('cascade');
            $table->foreign("keyword_id")->references("id")->on("keyword")->onDelete('cascade');
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
        Schema::drop("dreamkeyword");
    }
}
