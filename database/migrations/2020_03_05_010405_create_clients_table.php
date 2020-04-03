<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 150);
            $table->date('birthday')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('children')->nullable();
            $table->string('enterprise')->nullable();
            $table->string('role')->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('pay')->nullable();
            $table->string('academic_education', 150)->nullable();
            $table->string('medicines', 150)->nullable();
            $table->string('special_needs', 150)->nullable();
            $table->string('food', 100)->nullable();
            $table->string('allergy', 200)->nullable();
            $table->string('message')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
