<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabUsedModel extends Model
{
    protected $table= "imgc_lab_used";
    protected $primaryKey = 'lab_id';
    public $timestamps = false;


    public function patient_info()
    {
          return $this -> hasOne("App\PatientInfoModel","lab_id");
    }
}
