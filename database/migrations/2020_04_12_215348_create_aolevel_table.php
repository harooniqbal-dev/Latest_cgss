<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAolevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aolevel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('year');
            $table->string('name')->nullable();
            $table->string('phy')->nullable();
            $table->string('chem')->nullable();
            $table->string('biomath')->nullable();
            $table->string('class');
            $table->string('total_Grades');
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
        Schema::dropIfExists('aolevel');
    }
}
