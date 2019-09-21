<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorAtBloodBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_at_blood_banks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email',150)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('blood_type');
            $table->string('phone_no');
            $table->string('NID');
            $table->integer('age');
            $table->string('gender');
            $table->string('status')->default('active');
            $table->date('last_donation_date')->nullable();
            $table->integer('earned_point')->nullable();
            $table->string('police_station');
            $table->string('post_office');
            $table->string('post_code');
            $table->string('city');
            $table->string('division');
            $table->rememberToken();
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
        //
    }
}
