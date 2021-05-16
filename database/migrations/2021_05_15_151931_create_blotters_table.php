<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlottersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blotters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('case');
            $table->string('complainant');
            $table->string('dependant');
            $table->date('dateFile');
            $table->longText('description');
            $table->string('inCharge');
            $table->string('status');
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
        Schema::dropIfExists('blotters');
    }
}
