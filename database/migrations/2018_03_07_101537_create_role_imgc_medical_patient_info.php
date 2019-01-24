<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleImgcMedicalPatientInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgc_medical_patient_info', function (Blueprint $table) {
            $table->increments('patient_info_id');
            $table->integer('family_id');
            $table->string('study_id');
            $table->string('subject');
            $table->date('sample_recorded_date')->nullable();
            $table->integer('mrn')->nullable();
            $table->string('affected')->nullable();
            $table->smallInteger('number')->nullable();
            $table->string('enrolled')->nullable();
            $table->string('sample')->nullable();
            $table->string('tube_type')->nullable();
            $table->string('sample_type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('sdg_id')->nullable();
            $table->string('dna_biobank')->nullable();
            $table->string('lcl_biobank')->nullable();
            $table->string('non_chop_exome')->nullable();
            $table->string('lab_used')->nullable();
            $table->text('comment')->nullable();
            $table->string('race')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('future_relink')->nullable();
            $table->string('future_contact')->nullable();
            $table->string('nih_deidentified')->nullable();
            $table->string('nih_access')->nullable();
            $table->string('lab_data')->nullable();
            $table->string('share_for_profit')->nullable();
            $table->string('photo_permission')->nullable();
            $table->string('photo_usage_purpose')->nullable();
            $table->string('consent_obtaining_person')->nullable();
            $table->date('consent_obtaining_date')->nullable();
            $table->string('consent_authorized_person')->nullable();
            $table->date('consent_authorized_date')->nullable();
            $table->string('consent_subject_relation')->nullable();
            $table->string('able_assent_child')->nullable();
            $table->string('unable_assent_child')->nullable();
            $table->date('able_assent_child_date')->nullable();
            $table->date('unable_assent_child_date')->nullable();
            $table->string('able_assent_adult')->nullable();
            $table->string('able_assent_adult_date')->nullable();
            $table->string('unable_assent_adult')->nullable();
            $table->string('unable_assent_adult_date')->nullable();
            $table->text('hpo')->nullable();
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
        Schema::dropIfExists('imgc_medical_patient_info');
    }
}
