<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleImgcMedicalTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgc_medical_patient_test', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_info_id')->unsigned();
            $table->string('img_ordered')->nullable();
            $table->text('lab_initiated')->nullable();
            $table->string('lab_used')->nullable();
            $table->string('date_ordered')->nullable();
            $table->string('patient_type')->nullable();
            $table->string('sample_status')->nullable();
            $table->string('result')->nullable();
            $table->string('diagnostic')->nullable();
            $table->string('test_not_performed')->nullable();
            $table->string('created_by');
            $table->string('updated_by');
         
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
        Schema::dropIfExists('imgc_medical_patient_test');
    }
}
