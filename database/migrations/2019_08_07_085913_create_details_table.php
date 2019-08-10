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
            $table->string('from_place');
            $table->string('to_place');    
            $table->string('from_address');
            $table->string('to_address');    
            $table->string('weight');
            $table->bigInteger('customers_id')->unsigned();
            $table->foreign('customers_id')->references('id')->on('customers');
            $table->string('frieght');
            $table->string('tuck_frieght');
            $table->string('loading')->nullable();
            $table->string('halting')->nullable();
            $table->string('comission')->nullable();
            $table->string('totalfrieght');
            $table->string('advance_type')->nullable();
            $table->string('advance_in_amount')->nullable();
            $table->string('advance_in_percentage')->nullable();
            $table->string('balance');
            $table->string('remark')->nullable();
            $table->string('note')->nullable();
            $table->string('driverno');
            $table->string('ownerno');
            $table->string('trcom');
            $table->string('profit');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('lr_number');
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
