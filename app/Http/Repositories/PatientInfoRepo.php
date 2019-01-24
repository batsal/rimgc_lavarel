<?php
namespace App\Http\Repositories;

use App\PatientInfoModel;
use DB;

class PatientInfoRepo extends PatientInfoModel {


public function __construct(){

 	
}

public function getBioBankInfo()
{
    $result = DB::select("SELECT count('lcl_biobank') as lcl ,count(dna_biobank) as dna FROM imgc_medical_patient_info WHERE lcl_biobank='Yes' OR dna_biobank='Yes' group by lcl_biobank,dna_biobank");
    if(isset($result[0])) return $result[0]; else return $result;
    
}

public function gettissueType()
{

   $result = DB::select("SELECT tissue_type,COUNT(*) as count FROM imgc_medical_patient_info WHERE tissue_type !='' GROUP BY tissue_type ORDER BY count DESC");
    
    return $result; 
}

public function getProband()
{
  
   $result = DB::select("SELECT gender,COUNT(*) as count FROM imgc_medical_patient_info WHERE gender !='other' GROUP BY gender ORDER BY gender ASC");
    
    return $result; 

}

static public function getMaxFamilyId()
{
	$max_family_id= DB::table('imgc_medical_patient_info')
    ->max('family_id');

    return $max_family_id;
}


}


?>