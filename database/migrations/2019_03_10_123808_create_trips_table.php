<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment("Trip Name");
            $table->string('description');
            $table->text('details')->nullable();

            $table->bigInteger('user_id');
            $table->bigInteger('category_id');

            $table->boolean('active')->default(true);


            /*
            $table->integer('price')->unsigned();
            $table->enum('trans_method', ['plane', 'bus', 'car', 'train']);
            $table->date('from');
            $table->date('to');



            $table->boolean('active')->default(true);
            */
            //$table->foreign('category_id')->references('id')->on('categories');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
