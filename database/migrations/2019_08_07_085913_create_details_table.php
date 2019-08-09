<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('loading_date');
            $table->string('truckno');
            $table->string('weight');
            $table->bigInteger('customers_id')->unsigned();
            $table->foreign('customers_id')->references('id')->on('customers');
            $table->string('frieght');
            $table->string('tuck_frieght');
            $table->string('loading');
            $table->string('halting');
            $table->string('comission');
            $table->string('totalfrieght');
            $table->string('advance');
            $table->string('balance');
            $table->string('remark');
            $table->string('note');
            $table->string('driverno');
            $table->string('ownerno');
            $table->string('trcom');
            $table->string('profit');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
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
        Schema::dropIfExists('details');
    }
}
