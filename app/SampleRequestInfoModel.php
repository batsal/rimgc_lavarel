<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SampleRequestInfoModel extends Model
{
    protected $table= "sample_requests";
    public $timestamps = false;


    public function patient_info()
    {
          return $this -> belongsTo("App\PatientInfoModel","patient_info_id");
    }
}
