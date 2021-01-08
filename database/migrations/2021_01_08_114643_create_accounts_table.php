<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('diagnosis_code');
            $table->integer('patient_id')->unsigned()->index();
            $table->integer('doctor_id')->unsigned()->index();
           
            $table->timestamps();
        });


        Schema::table('accounts', function (Blueprint $table) {
           
            
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
