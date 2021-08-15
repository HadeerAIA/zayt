<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("address");
            $table->string("country");
            $table->string("source");
            $table->bigInteger("quantity");
            $table->bigInteger("phone");
            $table->date("date");
            $table->string("bill");
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references('id')->on("users")->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asks');
    }
}
