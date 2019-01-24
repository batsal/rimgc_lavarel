<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientTestInfoModel extends Model
{
    protected $table= "imgc_medical_test";
    public $timestamps = false;


    public function patient_info()
    {
          return $this -> belongsTo("App\PatientInfoModel","patient_info_id");
    }
}
