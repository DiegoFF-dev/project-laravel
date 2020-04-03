<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ascape')->nullable();
            $table->string('source')->nullable();
            $table->string('finality')->nullable();
            $table->string('goal')->nullable();
            $table->string('vision')->nullable();
            $table->string('activities')->nullable();
            $table->string('place')->nullable();            
            $table->string('next')->nullable();
            $table->double('amount', 8, 2)->nullable();
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
        Schema::dropIfExists('contents');
    }
}
