<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_bags', function (Blueprint $table) {
            $table->bigIncrements('bag_id');
            $table->integer('branch_id')->unsigned();
            $table->string('blood_type');
            $table->date('stored_date');
            $table->date('exp_date');
            $table->string('donated_by');
            $table->string('received_by');
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
