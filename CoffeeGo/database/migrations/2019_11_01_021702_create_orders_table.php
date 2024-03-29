<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Not done, reqeures designing controller
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coffee');
            $table->string('name');
            $table->string('age');
            $table->string('tablenumber');
            //$table->string('classroom');
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
        Schema::dropIfExists('orders');
    }
}
