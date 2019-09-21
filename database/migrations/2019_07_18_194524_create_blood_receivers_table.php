<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodReceiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_receivers', function (Blueprint $table) {
            $table->bigIncrements('receive_no');
            $table->string('NID');
            $table->integer('branch_id')->unsigned();
            $table->string('blood_type');
            $table->integer('blood_bag_quantity');
            $table->string('reason');
            $table->timestamps();

            $table->foreign('branch_id')
                ->references('branch_id')
                ->on('internal_blood_banks')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
