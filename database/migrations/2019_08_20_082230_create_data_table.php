<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('order_no')->nullable()->default(null);
            $table->string('order_date')->nullable()->default(null);
            $table->string('order_net')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->string('address_1')->nullable()->default(null);
            $table->string('district')->nullable()->default(null);
            $table->string('province')->nullable()->default(null);
            $table->string('zip')->nullable()->default(null);
            $table->string('ProductName')->nullable()->default(null);
            $table->string('quantity')->nullable()->default(null);
            $table->string('price')->nullable()->default(null);
            $table->string('discount')->nullable()->default(null);
            $table->string('inv');
            $table->integer('numinv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
