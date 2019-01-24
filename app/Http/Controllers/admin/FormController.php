<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Session;
use App\Http\Repositories\PatientInfoRepo;
use App\Http\Repositories\PatientTestInfoRepo;
use App\Http\Repositories\SampleRequestInfoRepo;
use Response;
use App\Http\Repositories\LabUsedRepo;
use App\PatientInfoModel;
use App\PatientTestInfoModel;

class FormController extends DataController
{

    public function __construct()
    {
          $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request ,PatientInfoRepo $patientInfo)
    { 
     
      $role  = \Auth::user()->roles()->first();
      $infos = PatientInfoRepo::with('test')->get();
      $race  = Self::$race;
      $ethnicity   = Self::$ethnicity;
      $sample_type = Self::$primarySample;
      $columns     = $patientInfo -> getTableColumns();
     
      return view("admin.form.list2")->with(array('infos'=>$infos,'role_name'=>$role->name,'race'=>$race,'ethnicity' => $ethnicity,'sample_type' =>$sample_type,'columns' => $columns));
      
    }

  public function list_w_edit(Request $request ,PatientInfoRepo $patientInfo)
    { 
     

      $role  = \Auth::user()->roles()->first();
      $infos = PatientInfoRepo::with('test')->orderByDesc('study_id')->get();
      $race  = Self::$race;
      $ethnicity   = Self::$ethnicity;
      $sample_type = Self::$primarySample;
      $columns     = $patientInfo -> getTableColumns();
     
     
      return view("admin.form.list2")->with(array('infos'=>$infos,'role_name'=>$role->name,'race'=>$race,'ethnicity' => $ethnicity,'sample_type' =>$sample_type,'columns' => $columns));
      
    }
    

    public function advanced_search(Request $request ,PatientInfoRepo $patientInfo)
    { 
     

      $role  = \Auth::user()->roles()->first();
      $infos = PatientInfoRepo::with('test')->orderByDesc('study_id')->get();
      $race  = Self::$race;
      $ethnicity   = Self::$ethnicity;
      $sample_type = Self::$primarySample;
      $columns     = $patientInfo -> getTableColumns();
     
     
      return view("admin.form.list")->with(array('infos'=>$infos,'role_name'=>$role->name,'race'=>$race,'ethnicity' => $ethnicity,'sample_type' =>$sample_type,'columns' => $columns));
      
    }

    public function lists(Request $request)
    { 
      $infos = PatientInfoRepo::with('test')->orderBy('study_id','desc')->get();

      return view("admin.form.list")->with('infos', $infos);

    }

    public function list2(Request $request)
    { 
      if(!$request->user()->authorizeRoles(['employee', 'manager','admin'])){
            return view('errors.error');
      }
      $role = \Auth::user()->roles()->first();
      $infos = PatientInfoModel::with('test')->orderBy('study_id','desc')->get();
     
      return view("admin.form.list2")->with(array('infos'=>$infos,'role_name'=>$role->name));
      // return view("admin.form.listalldata")->with('infos', $infos);

    }

    public function search1(Request $request)
    { 
      $infos = PatientInfoRepo::with('test')->get();
     
   
      foreach($infos as $object)
      {
          $dataArray[] = $object->toArray();
      }


$results = array(
"sEcho" => 1,
"iTotalRecords" => count($dataArray),
"iTotalDisplayRecords" => count($dataArray),
"aaData" => $dataArray
);
echo json_encode($results);
      // return view("admin.form.list")->with('infos', $infos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 
      if(!$request->user()->authorizeRoles(['manager','admin'])){
            return view('errors.error');
      }

      $lab = LabUsedRepo::all();
      $maxFamilyId = PatientInfoRepo::getMaxFamilyId();
      return view("admin.form.form",compact(array('lab','maxFamilyId')));


    }
//changes search.blace.php
    //app adding new thing    
 public function search(Request $request)
    { 
      if(!$request->user()->authorizeRoles(['manager','admin'])){
            return view('errors.error');
      }

      $lab = LabUsedRepo::all();
      $maxFamilyId = PatientInfoRepo::getMaxFamilyId();
      return view("admin.form.search",compact(array('lab','maxFamilyId')));


    }

public function searchandlistorg(Request $request,PatientInfoRepo $patientInfo){
      // echo $request -> get('gender');exit;
  $infos = PatientInfoRepo::
  where('enrolled', 'like', '%' . $request -> get('enrolled'). '%')
  
  ->where('tube_type', 'like', '%' .$request -> get('tube_type'). '%');
  
  $infos = $infos->get();
  var_dump(count($infos));     

}


public function searchandlist(Request $request,PatientInfoRepo $patientInfo){

      // echo $request -> get('gender');exit;
  $infos = PatientInfoRepo::
  where('enrolled', 'like', '%' . $request -> get('enrolled'). '%');
  // ->where('study_id', 'like', '%' .$request -> get('study_id'). '%')
  // ->where('enrolled_study', 'like', '%' .$request -> get('enrolled_study'). '%')
  // ->where('enrolled_study_irb', 'like', '%' .$request -> get('enrolled_study_irb'). '%')
  // ->where('enrolled_study_pi', 'like', '%' .$request -> get('enrolled_study_pi'). '%')
  
  // ->where('subject', 'like', '%' .$request -> get('subject'). '%')
  // ->where('mrn', 'like', '%' .$request -> get('mrn'). '%')
  // ->where('last_name', 'like', '%' .$request -> get('last_name'). '%')
  
  // ->where('sdg_id', 'like', '%' .$request -> get('sdg_id'). '%')
  
  // ->where('affected', 'like', '%' .$request -> get('affected'). '%')
  // ->where('family_option', 'like', '%' .$request -> get('family_option'). '%')
  // ->where('dna_biobank', 'like', '%' .$request -> get('dna_biobank'). '%')
  // ->where('lcl_biobank', 'like', '%' .$request -> get('lcl_biobank'). '%')
  // ->where('race', 'like', '%' .$request -> get('race'). '%')
  // ->where('sample', 'like', '%' .$request -> get('sample'). '%')
  // ->where('tube_type', 'like', '%' .$request -> get('tube_type'). '%');
  // ->where('other_member', 'like', '%' .$request -> get('other_member'). '%')
  // ->where('ethnicity', 'like', '%' .$request -> get('ethnicity'). '%')
  // ->where('ethnicity_follow_up', 'like', '%' .$request -> get('ethnicity_follow_up'). '%')
  // // ->where('primary_language', 'like', '%' .serialize($request -> post('primary_language')). '%')

  // ->where('non_chop_exome', 'like', '%' .$request -> get('non_chop_exome'). '%')
  // // ->where('lab_used', 'like', '%' .$request -> get('lab_used'). '%')
  // ->where('comment', 'like', '%' .$request -> get('comment'). '%')
  // ->where('project_name', 'like', '%' .$request -> get('project_name'). '%')

  // ->where('dna_vials_submission', 'like', '%' .$request -> get('dna_vials_submission'). '%')
  // ->where('lcl_vials_submission', 'like', '%' .$request -> get('lcl_vials_submission'). '%')
  // ->where('other_vials_submission', 'like', '%' .$request -> get('other_vials_submission'). '%');
  
  
  
 // ->where('primary_sample_type', 'like', '%' .serialize($request -> get('sample_type')). '%')
//   ->where('dna_ratio', 'like', '%' .$request -> get('dna_ratio'). '%')
//   ->where('dna_conc', 'like', '%' .$request -> get('dna_conc'). '%')
//   ->where('volume', 'like', '%' .$request -> get('volume'). '%')
//   ->where('biorc_id', 'like', '%' .$request -> get('biorc_id'). '%')
//   ->where('tube_barcode', 'like', '%' .$request -> get('tube_barcode'). '%')
//   ->where('other_barcode', 'like', '%' .$request -> get('other_barcode'). '%')
//   ->where('box_number_details', 'like', '%' .$request -> get('box_number_details'). '%')
//   // ->where('plate_position', 'like', '%' .$request -> get('plate_position'). '%')
//   ->where('other_sample_info', 'like', '%' .$request -> get('other_sample_info'). '%')
//   ->where('other_note_biorc', 'like', '%' .$request -> get('other_note_biorc'). '%')
//   ->where('passage', 'like', '%' .$request -> get('passage'). '%')
//   ->where('sample_age', 'like', '%' .$request -> get('sample_age'). '%')
//   // ->where('derived_sample_type', 'like', '%' .is_array($request -> post('derived_sample_type')) ? serialize($request -> post('derived_sample_type')):''. '%')
//   ->where('genomic_data', 'like', '%' .$request -> get('genomic_data'). '%')
//   // ->where('file_type_available', 'like', '%' .serialize($request -> post('file_type_available')). '%')
//   // ->where('filename', 'like', '%' .$request -> get('filename'). '%')
  
  
//   ->where('lab_name', 'like', '%' .$request -> get('lab_name'). '%')
//   // ->where('available_test_data', 'like', '%' .serialize($request -> post('available_test_data')). '%')
//   ->where('other_test_data', 'like', '%' .$request -> get('other_test_data'). '%')
//   ->where('exome_genome', 'like', '%' .$request -> get('exome_genome'). '%')
//   ->where('platform', 'like', '%' .$request -> get('platform'). '%');

//   if ($request -> get('enrolled_date')) {
//     $infos->where('enrolled_date', '=', $request -> get('enrolled_date'));
// }
//   if ($request -> get('sample_recorded_date')) {
//     $infos->where('sample_recorded_date', '=', $request -> get('sample_recorded_date'));
// }
//   if ($request -> get('dob')) {
//    $infos->where('dob', '=', $request -> get('dob'));
// }
//   if ($request -> get('first_submission_date')) {
//     $infos->where('first_submission_date', '=', $request -> get('first_submission_date'));
// }
//   if ($request -> get('second_submission_date')) {
//     $infos->where('second_submission_date', '=', $request -> get('second_submission_date'));
// }
//   if ($request -> get('third_submission_date')) {
//     $infos->where('third_submission_date', '=', $request -> get('third_submission_date'));
// }
//  if ($request -> get('receipt_date')) {
//     $infos->where('receipt_date', '=', $request -> get('receipt_date'));
// }
 if ($request -> get('tube_type')) {
    $infos->where('tube_type', '=', $request -> get('tube_type'));
}
if ($request -> get('gender')) {
   $infos->where('gender', '=', $request -> get('gender'));
}
if ($request -> get('genomic_data')) {
   $infos->where('genomic_data', '=', $request -> get('genomic_data'));
}
if ($request -> get('sample')) {
   $infos->where('sample', '=', $request -> get('sample'));
}
if ($request -> get('hpo')) {
  $infos->join('rimgc_hpo', 'study_id', '=' , 'rimgc_hpo.rimgc_id');
  $infos->where('rimgc_hpo.hpo_term', '=', $request -> get('hpo'));
}

if ($request -> get('test_result')) {
  $infos->join('rimgc_tests', 'study_id', '=' , 'rimgc_tests.rimgc_id');
  $infos->where('rimgc_tests.results', '=', $request -> get('test_result'));
}

  // ->where('family_id', 'like', '%' .$request -> get('enrolled'). '%')
  // ->where('family_id', 'like', '%' .$request -> get('enrolled'). '%')
  $infos = $infos->get();
  
//   return view("admin.form.listdata")->with(array('infos'=>$infos,'role_name'=>$role->name,'race'=>$race,'ethnicity' => $ethnicity,'sample_type' =>$sample_type,'columns' => $columns));
 
  if(!empty($infos)){
      foreach($infos as $object)
      {
          $dataArray[] = $object->toArray();
      }
      $results = array(
        "sEcho" => 1,
        "iTotalRecords" => count($dataArray),
        "iTotalDisplayRecords" => count($dataArray),
        "aaData" => $dataArray
      );
echo json_encode($dataArray);

  }
else{
  echo 1;
}



// echo json_encode(1);

      

}

//    public function searchandlist(equest $request, PatientInfoRepo $patientInfo){
//        return 2;
//    }

public function searchandlist1(PatientInfoRepo $patientInfo){
  $role  = \Auth::user()->roles()->first();
      $infos = PatientInfoRepo::with('test')->get();
      $race  = Self::$race;
      $ethnicity   = Self::$ethnicity;
      $sample_type = Self::$primarySample;
      $columns     = $patientInfo -> getTableColumns();
  $infos = PatientInfoRepo::
  where('enrolled', 'like', '%' .''. '%');
  // where('enrolled', 'like', '%' .'no'. '%')
  // ->where('study_id', 'like', '%' .''. '%')
  // ->where('enrolled_date', '=', '2020-11-10')
  // ->where('enrolled_study', 'like', '%' .''. '%')
  // ->where('enrolled_study_irb', 'like', '%' .''. '%')
  // ->where('enrolled_study_pi', 'like', '%' .''. '%')
  // ->where('sample_recorded_date', 'like', '%' .''. '%')
  // ->where('subject', 'like', '%' .''. '%')
  // ->where('mrn', 'like', '%' .''. '%')
  // ->where('last_name', 'like', '%' .''. '%')
  // ->where('dob', 'like', '%' .''. '%')
  // ->where('sdg_id', 'like', '%' .''. '%')
  // ->where('gender', 'like', '%' .''. '%')
  // ->where('affected', 'like', '%' .''. '%')
  // ->where('family_option', 'like', '%' .''. '%')
  // ->where('dna_biobank', 'like', '%' .''. '%')
  // ->where('lcl_biobank', 'like', '%' .''. '%')
  // ->where('race', 'like', '%' .''. '%')
  // ->where('sample', 'like', '%' .''. '%')
  // ->where('tube_type', 'like', '%' .''. '%')
  // ->where('other_member', 'like', '%' .''. '%')
  // ->where('ethnicity', 'like', '%' .''. '%')
  // ->where('ethnicity_follow_up', 'like', '%' .''. '%')
  // ->where('primary_language', 'like', '%' .''. '%')

  // ->where('non_chop_exome', 'like', '%' .''. '%')
  // // ->where('lab_used', 'like', '%' .$request -> get('lab_used'). '%')
  // ->where('comment', 'like', '%' .''. '%')
  // ->where('project_name', 'like', '%' .''. '%')

  // ->where('dna_vials_submission', 'like', '%' .''. '%')
  // ->where('lcl_vials_submission', 'like', '%' .''. '%')
  // ->where('other_vials_submission', 'like', '%' .''. '%')
  // ->where('first_submission_date', 'like', '%' .''. '%')
  // ->where('second_submission_date', 'like', '%' .''. '%')
  // ->where('third_submission_date', 'like', '%' .''. '%')
  // ->where('primary_sample_type', 'like', '%' .''. '%')
  // ->where('dna_ratio', 'like', '%' .''. '%')
  // ->where('dna_conc', 'like', '%' .''. '%')
  // ->where('volume', 'like', '%' .''. '%')
  // ->where('biorc_id', 'like', '%' .''. '%')
  // ->where('tube_barcode', 'like', '%' .''. '%')
  // ->where('other_barcode', 'like', '%' .''. '%')
  // ->where('box_number_details', 'like', '%' .''. '%')
  // // ->where('plate_position', 'like', '%' .$request -> get('plate_position'). '%')
  // ->where('other_sample_info', 'like', '%' .''. '%')
  // ->where('other_note_biorc', 'like', '%' .''. '%')
  // ->where('passage', 'like', '%' .''. '%')
  // ->where('sample_age', 'like', '%' .''. '%')
  // ->where('derived_sample_type', 'like', '%' .''. '%')
  // ->where('genomic_data', 'like', '%' .''. '%')
  // ->where('file_type_available', 'like', '%' .''. '%')
  // ->where('filename', 'like', '%' .''. '%')
  // ->where('receipt_date', 'like', '%' .''. '%')
  // ->where('transfer_date', 'like', '%' .''. '%')
  // ->where('lab_name', 'like', '%' .''. '%')
  // ->where('available_test_data', 'like', '%' .''. '%')
  // ->where('other_test_data', 'like', '%' .''. '%')
  // ->where('exome_genome', 'like', '%' .''. '%')
  // ->where('platform', 'like', '%' .''. '%');
  // ->where('family_id', 'like', '%' .$request -> get('enrolled'). '%')
  // ->where('family_id', 'like', '%' .$request -> get('enrolled'). '%')
// if ($request -> get('hpo')) {
  $infos->join('rimgc_hpo', 'study_id', '=' , 'rimgc_hpo.rimgc_id');
  $infos->where('rimgc_hpo.hpo_term', '=', 'Failure to thrive');
// }
  $infos=$infos->get();

  var_dump(count($infos));
  // return view("admin.form.listdata")->with(array('infos'=>$infos,'role_name'=>$role->name,'race'=>$race,'ethnicity' => $ethnicity,'sample_type' =>$sample_type,'columns' => $columns));
      

}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        request()->validate([
            'family_id'  => 'required|numeric',
            'subject'    => 'required',
            'study_id'   => 'required',
            #'family_option' => 'required',
            #'project_name'  => 'required',
            'last_name'  => 'required',
            'first_name' => 'required',
            'gender'     => 'required',
            #'ethnicity'  => 'required',
            #'affected'   => 'required',
            'mrn'        => 'required|size:8',
        ]);
       
       $patientInfo = new PatientInfoRepo; 
       
       $patientInfo -> family_id = $request -> post('family_id');
       $patientInfo -> subject = $request -> post('subject');
       $patientInfo -> affected = $request -> post('affected');
       $patientInfo -> family_option = $request -> post('family_option');
       $patientInfo -> ethnicity = $request -> post('ethnicity');
       $patientInfo -> last_name = $request -> post('last_name');
       $patientInfo -> first_name = $request -> post('first_name');
       $patientInfo -> study_id = $request -> post('study_id');
       $patientInfo -> clinic_type = $request -> post('clinic_type');
       #$patientInfo -> project_name = $request -> post('project_name');
       
       
       $patientInfo -> enrolled = $request -> post('enrolled');

       $patientInfo -> enrolled_date = $request -> post('enrolled_date');

       $patientInfo -> enrolled_study = $request -> post('enrolled_study');
       $patientInfo -> enrolled_study_irb = $request -> post('enrolled_study_irb');
       $patientInfo -> enrolled_study_pi = $request -> post('enrolled_study_pi');

       $patientInfo -> sample = $request -> post('sample');
       $patientInfo -> tube_type = $request -> post('tube_type');
       $patientInfo -> mrn = $request -> post('mrn');

       $patientInfo -> lab_id = $request -> post('lab_used');
       // $patientInfo -> affected = $request -> post('affected');

       $patientInfo -> member_number = $request -> post('member_number');
       $patientInfo -> other_member = $request -> post('other_member');

       $patientInfo -> dob = $request -> post('dob');
       $patientInfo -> gender = $request -> post('gender');
       $patientInfo -> other_gender = $request -> post('other_gender');
       $patientInfo -> additional_other_gender = $request -> post('additional_other_gender');
       $patientInfo -> sdg_id = $request -> post('sdg_id');
       $patientInfo -> dna_biobank = $request -> post('dna_biobank');
       $patientInfo -> lcl_biobank = $request -> post('lcl_biobank');
       $patientInfo -> non_chop_exome = ($request -> post('non_chop_exome'))?$request -> post('non_chop_exome'):'0';
       $patientInfo -> race = $request -> post('race');
       $patientInfo -> ethnicity_follow_up = $request -> post('ethnicity_follow_up');
       $patientInfo -> primary_language = serialize($request -> post('primary_language'));
       $patientInfo -> other_language = $request -> post('other_language');

       // $patientInfo -> status_affected_member = $request -> post('status_affected_member');

       $patientInfo -> sample_recorded = $request -> post('sample_recorded');
       $patientInfo -> sample_recorded_date = $request -> post('sample_recorded_date');
       $patientInfo -> passage = $request -> post('passage');
       $patientInfo -> sample_age = $request -> post('sample_age');
       $patientInfo -> tissue_type = $request -> post('tissue_type');
       
       $patientInfo -> primary_sample_type = serialize($request -> post('primary_sample_type'));
       $patientInfo -> primary_sample_type_other = $request -> post('primary_sample_type_other');

       $patientInfo -> derived_sample_type = is_array($request -> post('derived_sample_type'))?
                                             serialize($request -> post('derived_sample_type')):'';
       $patientInfo -> other_derived_sample = $request -> post('other_derived_sample');
       $patientInfo -> dna_vials_submission = $request -> post('dna_vials_submission');
       $patientInfo -> lcl_vials_submission = $request -> post('lcl_vials_submission');
       $patientInfo -> other_vials_submission = $request -> post('other_vials_submission');
       $patientInfo -> first_submission_date = $request -> post('first_submission_date');
       $patientInfo -> second_submission_date = $request -> post('second_submission_date');
       $patientInfo -> third_submission_date = $request -> post('third_submission_date');
       $patientInfo -> available_test_data = serialize($request -> post('available_test_data'));

       $patientInfo -> dna_ratio = $request -> post('dna_ratio');
       $patientInfo -> dna_conc = $request -> post('dna_conc');
       $patientInfo -> volume = $request -> post('volume');
       $patientInfo -> biorc_id = $request -> post('biorc_id');
       $patientInfo -> tube_barcode = $request -> post('tube_barcode');
       $patientInfo -> other_barcode = $request -> post('other_barcode');
       $patientInfo -> box_number_details = $request -> post('box_number_details');
       $patientInfo -> other_sample_info = $request -> post('other_sample_info');
       $patientInfo -> other_note_biorc = $request -> post('other_note_biorc');
       $patientInfo -> genomic_data = $request -> post('genomic_data');
       $patientInfo -> lab_name = $request -> post('lab_name');

       $patientInfo -> other_test_data = $request -> post('other_test_data');
       $patientInfo -> exome_genome = $request -> post('exome_genome');
       $patientInfo -> platform = $request -> post('platform');
       $patientInfo -> other_platform = $request -> post('other_platform');
       $patientInfo -> file_type_available = serialize($request -> post('file_type_available'));
       $patientInfo -> filename = $request -> post('filename');
       $patientInfo -> receipt_date = $request -> post('receipt_date');
       $patientInfo -> transfer_date = $request -> post('transfer_date');
       
       $patientInfo -> comment = $request -> post('comment');
       $patientInfo -> hpo = $request -> post('hpo');
       $patientInfo -> future_relink = $request -> post('future_relink');
       $patientInfo -> future_contact = $request -> post('future_contact');
       $patientInfo -> nih_deidentified = $request -> post('nih_deidentified');
       $patientInfo -> nih_access = $request -> post('nih_access');
       $patientInfo -> lab_data = $request -> post('lab_data');
       $patientInfo -> share_for_profit = $request -> post('share_for_profit');
       $patientInfo -> photo_permission = $request -> post('photo_permission');
       $patientInfo -> photo_usage_purpose = $request -> post('photo_usage_purpose');
       $patientInfo -> consent_obtaining_person = $request -> post('consent_obtaining_person');
       $patientInfo -> consent_authorized_person = $request -> post('consent_authorized_person');
       $patientInfo -> consent_subject_relation = $request -> post('consent_subject_relation');
       $patientInfo -> consent_obtaining_date = $request -> post('consent_obtaining_date');
       $patientInfo -> consent_authorized_date = $request -> post('consent_authorized_date');
       $patientInfo -> consent_patient_type = $request -> post('consent_patient_type');

       $patientInfo -> able_assent_child = $request -> post('able_assent_child');
       $patientInfo -> unable_assent_child = $request -> post('unable_assent_child');
       $patientInfo -> able_assent_child_date = $request -> post('able_assent_child_date');
       $patientInfo -> unable_assent_child_date = $request -> post('unable_assent_child_date');
       $patientInfo -> able_assent_adult = $request -> post('able_assent_adult');
       $patientInfo -> unable_assent_adult = $request -> post('unable_assent_adult');
       $patientInfo -> able_assent_adult_date = $request -> post('able_assent_adult_date');
       $patientInfo -> unable_assent_adult_date = $request -> post('unable_assent_adult_date');
       
       $patientInfo -> created_by = \Auth::user()->id;
       $patientInfo -> created_at = date("Y-m-d H:i:s");
       $patientInfo -> updated_by = \Auth::user()->id;
       $patientInfo -> updated_at = date("Y-m-d H:i:s");
             
       $patientInfo -> save();


       $lastInsertedId = $patientInfo->patient_info_id;
             
       $test = $request -> post('test');
       
        for($i=0;$i<count($test['test_name']);$i++){
       
           $testInfo = new PatientTestInfoRepo;
           $testInfo ->test_name = $test['test_name'][$i];
           $testInfo ->lab_used = $test['lab_used'][$i];
           $testInfo ->date_ordered = $test['date_ordered'][$i];
           $testInfo ->patient_type = $test['patient_type'][$i];
           $testInfo ->sample_status = $test['sample_status'][$i];
           $testInfo ->diagnostic = $test['diagnostic'][$i];
           $testInfo ->result = isset($test['result'][$i])?$test['result'][$i]:'No';
           $testInfo ->img_ordered = isset($test['img_ordered_'.$i])?$test['img_ordered_'.$i]:'No';
           $testInfo ->lab_initiated = isset($test['lab_initiated_'.$i])?$test['lab_initiated_'.$i]:'No';
           $testInfo ->patient_info_id = $lastInsertedId;
           $testInfo -> created_by = \Auth::user()->id;
           $testInfo -> created_at = date("Y-m-d");
           $testInfo -> updated_by = \Auth::user()->id;
           $testInfo -> updated_at = date("Y-m-d");
           $testInfo -> save();

        }
 
      $sampleRequest = $request -> post('sample_requests');
       
        for($i=0;$i<count($sample_requests['requester_name']);$i++){
       
           $sampleRequestInfo = new SampleRequestInfoRepo;
           $sampleRequestInfo ->requester_name = $sampleRequest['requester_name'][$i];
           $sampleRequestInfo ->institution = $sampleRequest['institution'][$i];
           $sampleRequestInfo ->sample_type = $sampleRequest['sample_type'][$i];
           $sampleRequestInfo ->date_sent = $sampleRequest['date_sent'][$i];
           $sampleRequestInfo ->number_of_vials = $sampleRequest['number_of_vials'][$i];
           $sampleRequestInfo ->delivered_by = $sampleRequest['delivered_by'][$i];
           $sampleRequestInfo ->comments = $sampleRequest['comments'][$i];
           $sampleRequestInfo ->rimgc_id = $patientInfo -> study_id;
           $sampleRequestInfo -> created_by = \Auth::user()->id;
           $sampleRequestInfo -> created_at = date("Y-m-d");
           $sampleRequestInfo -> updated_by = \Auth::user()->id;
           $sampleRequestInfo -> updated_at = date("Y-m-d");
           $sampleRequestInfo -> save();

        }
  
       
      return redirect()->route('form.index');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    { 
        $request->user()->authorizeRoles(['manager','admin']);
        $edit = PatientInfoRepo::with('test')->where('patient_info_id',$id)->first();

        $lab = LabUsedRepo::all();
        return view("admin.form.edit_form",compact(array('edit','id','lab')));

    }
    /* Edited by Batsal 12/21/2018 */
    public function show(Request $request,$id)
    { 
        $request->user()->authorizeRoles(['manager','admin']);
        $edit = PatientInfoRepo::with('test')->where('study_id',$id)->first();

        $lab = LabUsedRepo::all();
        return view("admin.form.show_sample",compact(array('edit','id','lab')));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
            'family_id'  => 'required|numeric',
            'subject'    => 'required',
            'study_id'   => 'required',
            #'family_option' => 'required',
            #'project_name'  => 'required',
            'last_name'  => 'required',
            'first_name' => 'required',
            'gender'     => 'required',
            #'ethnicity'  => 'required',

            #'affected'   => 'required',
            'mrn'        => 'required|size:8',

        ]);
       // echo "<pre>";print_r($request ->all());die;
       $patientInfo = PatientInfoRepo::find($id);

       
       $patientInfo -> family_id = $request -> post('family_id');
       $patientInfo -> subject = $request -> post('subject');
       $patientInfo -> affected = $request -> post('affected');
       $patientInfo -> family_option = $request -> post('family_option');
       $patientInfo -> ethnicity = $request -> post('ethnicity');
       $patientInfo -> last_name = $request -> post('last_name');
       $patientInfo -> first_name = $request -> post('first_name');
       $patientInfo -> study_id = $request -> post('study_id');
       $patientInfo -> project_name = $request -> post('project_name');
       

       $patientInfo -> enrolled_date = $request -> post('enrolled_date');
       $patientInfo -> enrolled = $request -> post('enrolled');
       $patientInfo -> enrolled_study = $request -> post('enrolled_study');
       $patientInfo -> enrolled_study_irb = $request -> post('enrolled_study_irb');
       $patientInfo -> enrolled_study_pi = $request -> post('enrolled_study_pi');

       $patientInfo -> sample = $request -> post('sample');
       $patientInfo -> tube_type = $request -> post('tube_type');
       $patientInfo -> clinic_type = $request -> post('clinic_type');
       $patientInfo -> mrn = $request -> post('mrn');

       $patientInfo -> lab_id = $request -> post('lab_used');
       // $patientInfo -> affected = $request -> post('affected');

       $patientInfo -> member_number = $request -> post('member_number');
       $patientInfo -> other_member = $request -> post('other_member');

       $patientInfo -> dob = $request -> post('dob');
       $patientInfo -> gender = $request -> post('gender');
       $patientInfo -> other_gender = $request -> post('other_gender');
       $patientInfo -> additional_other_gender = $request -> post('additional_other_gender');
       $patientInfo -> sdg_id = $request -> post('sdg_id');
       $patientInfo -> dna_biobank = $request -> post('dna_biobank');
       $patientInfo -> lcl_biobank = $request -> post('lcl_biobank');
       $patientInfo -> non_chop_exome = ($request -> post('non_chop_exome'))?$request -> post('non_chop_exome'):'0';
       $patientInfo -> race = $request -> post('race');
       $patientInfo -> ethnicity_follow_up = $request -> post('ethnicity_follow_up');
       $patientInfo -> primary_language =is_array($request -> post('primary_language'))?
                                         serialize($request -> post('primary_language')):"";
       $patientInfo -> other_language = $request -> post('other_language');

       // $patientInfo -> status_affected_member = $request -> post('status_affected_member');

       $patientInfo -> sample_recorded = $request -> post('sample_recorded');
       $patientInfo -> sample_recorded_date = $request -> post('sample_recorded_date');
       $patientInfo -> passage = $request -> post('passage');
       $patientInfo -> sample_age = $request -> post('sample_age');
       $patientInfo -> tissue_type = $request -> post('tissue_type');
       
       $patientInfo -> primary_sample_type =is_array($request -> post('primary_sample_type'))?
                                            serialize($request -> post('primary_sample_type')):"";
       $patientInfo -> primary_sample_type_other = $request -> post('primary_sample_type_other');
       
       $patientInfo -> derived_sample_type = is_array($request -> post('derived_sample_type'))?  serialize($request -> post('derived_sample_type')):'';
       $patientInfo -> other_derived_sample = $request -> post('other_derived_sample');
       $patientInfo -> dna_vials_submission = $request -> post('dna_vials_submission');
       $patientInfo -> lcl_vials_submission = $request -> post('lcl_vials_submission');
       $patientInfo -> other_vials_submission = $request -> post('other_vials_submission');
       $patientInfo -> first_submission_date = $request -> post('first_submission_date');
       $patientInfo -> second_submission_date = $request -> post('second_submission_date');
       $patientInfo -> third_submission_date = $request -> post('third_submission_date');
       $patientInfo -> available_test_data = is_array($request -> post('available_test_data'))?                                   serialize($request -> post('available_test_data')):"";

       $patientInfo -> dna_ratio = $request -> post('dna_ratio');
       $patientInfo -> dna_conc = $request -> post('dna_conc');
       $patientInfo -> volume = $request -> post('volume');
       $patientInfo -> biorc_id = $request -> post('biorc_id');
       $patientInfo -> tube_barcode = $request -> post('tube_barcode');
       $patientInfo -> other_barcode = $request -> post('other_barcode');
       $patientInfo -> box_number_details = $request -> post('box_number_details');
       $patientInfo -> other_sample_info = $request -> post('other_sample_info');
       $patientInfo -> other_note_biorc = $request -> post('other_note_biorc');
       $patientInfo -> genomic_data = $request -> post('genomic_data');
       $patientInfo -> lab_name = $request -> post('lab_name');

       $patientInfo -> other_test_data = $request -> post('other_test_data');
       $patientInfo -> exome_genome = $request -> post('exome_genome');
       $patientInfo -> platform = $request -> post('platform');
       $patientInfo -> other_platform = $request -> post('other_platform');
       $patientInfo -> file_type_available = serialize($request -> post('file_type_available'));
       $patientInfo -> filename = $request -> post('filename');
       $patientInfo -> receipt_date = $request -> post('receipt_date');
       $patientInfo -> transfer_date = $request -> post('transfer_date');
       
       $patientInfo -> comment = $request -> post('comment');
       $patientInfo -> hpo = $request -> post('hpo');
       $patientInfo -> future_relink = $request -> post('future_relink');
       $patientInfo -> future_contact = $request -> post('future_contact');
       $patientInfo -> nih_deidentified = $request -> post('nih_deidentified');
       $patientInfo -> nih_access = $request -> post('nih_access');
       $patientInfo -> lab_data = $request -> post('lab_data');
       $patientInfo -> share_for_profit = $request -> post('share_for_profit');
       $patientInfo -> photo_permission = $request -> post('photo_permission');
       $patientInfo -> photo_usage_purpose = $request -> post('photo_usage_purpose');
       $patientInfo -> consent_obtaining_person = $request -> post('consent_obtaining_person');
       $patientInfo -> consent_authorized_person = $request -> post('consent_authorized_person');
       $patientInfo -> consent_subject_relation = $request -> post('consent_subject_relation');
       $patientInfo -> consent_obtaining_date = $request -> post('consent_obtaining_date');
       $patientInfo -> consent_authorized_date = $request -> post('consent_authorized_date');
       $patientInfo -> consent_patient_type = $request -> post('consent_patient_type');

       $patientInfo -> able_assent_child = $request -> post('able_assent_child');
       $patientInfo -> unable_assent_child = $request -> post('unable_assent_child');
       $patientInfo -> able_assent_child_date = $request -> post('able_assent_child_date');
       $patientInfo -> unable_assent_child_date = $request -> post('unable_assent_child_date');
       $patientInfo -> able_assent_adult = $request -> post('able_assent_adult');
       $patientInfo -> unable_assent_adult = $request -> post('unable_assent_adult');
       $patientInfo -> able_assent_adult_date = $request -> post('able_assent_adult_date');
       $patientInfo -> unable_assent_adult_date = $request -> post('unable_assent_adult_date');


       $patientInfo -> created_by = $patientInfo -> created_by;
       $patientInfo -> created_at = $patientInfo -> created_at;
       $patientInfo -> updated_by = \Auth::user()->id;
       $patientInfo -> updated_at = date("Y-m-d");

       $patientInfo -> save();
       
            
       $test = $request -> post('test');
        
       $res=PatientTestInfoRepo::where('patient_info_id',$id)->delete();

       for($i=0;$i<count($test['test_name']);$i++){
       
         $testInfo = new PatientTestInfoRepo;
         $testInfo ->test_name = $test['test_name'][$i];
         $testInfo ->lab_used = $test['lab_used'][$i];
         $testInfo ->date_ordered = $test['date_ordered'][$i];
         $testInfo ->patient_type = $test['patient_type'][$i];
         $testInfo ->sample_status = $test['sample_status'][$i];
         $testInfo ->diagnostic = $test['diagnostic'][$i];
         $testInfo ->result = isset($test['result'][$i])?$test['result'][$i]:'No';
         $testInfo ->img_ordered = isset($test['img_ordered_'.$i])?$test['img_ordered_'.$i]:'No';
         $testInfo ->lab_initiated = isset($test['lab_initiated_'.$i])?$test['lab_initiated_'.$i]:'No';
         $testInfo ->test_not_performed = isset($test['test_not_performed_'.$i])?$test['test_not_performed_'.$i]:'No';
         $testInfo -> patient_info_id = $id;
         $testInfo -> created_by = $patientInfo -> created_by;
         $testInfo -> created_at = $patientInfo -> created_at;
         $testInfo -> updated_by = \Auth::user()->id;
         $testInfo -> updated_at = date("Y-m-d");
         $testInfo -> save();

       }


       SampleRequestInfoRepo::where('patient_info_id',$id)->delete();

       $sample_requests = $request -> post('sample_requests');
       
        for($i=0;$i<count($sample_requests['requester_name']);$i++){
       
           $sampleRequestInfo = new SampleRequestInfoRepo;
           $sampleRequestInfo ->requester_name = $sample_requests['requester_name'][$i];
           $sampleRequestInfo ->institution = $sample_requests['institution'][$i];
           $sampleRequestInfo ->sample_type = $sample_requests['sample_type'][$i];
           $sampleRequestInfo ->date_sent = $sample_requests['date_sent'][$i];
           $sampleRequestInfo ->number_of_vials = $sample_requests['number_of_vials'][$i];
           $sampleRequestInfo ->delivered_by = $sample_requests['delivered_by'][$i];
           $sampleRequestInfo ->comments = $sample_requests['comments'][$i];
           $sampleRequestInfo ->rimgc_id = $patientInfo -> study_id;
           $sampleRequestInfo -> patient_info_id = $id;
           $sampleRequestInfo -> created_by = $patientInfo -> created_by;
           $sampleRequestInfo -> created_at = $patientInfo -> created_at;
           $sampleRequestInfo -> updated_by = \Auth::user()->id;
           $sampleRequestInfo -> updated_at = date("Y-m-d");
           $sampleRequestInfo -> save();

        }


      return redirect()->route('form.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {  
         
      $request->user()->authorizeRoles(['manager','admin']);
      $task = PatientInfoRepo::with('test')->where('patient_info_id',$id)->delete();
     
      try
      {
          $task = PatientInfoRepo::with('test')->where('patient_info_id',$id)->delete();
      } catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";die;
      }

      Session::flash('flash_message', 'Task successfully deleted!');

      return redirect()->route('form.index');

    }
  

    public function dashboard()
    { 

      request()->user()->authorizeRoles(['admin']);
      return view("admin.form.dashboard");
    }

    public function dna_bank(PatientInfoRepo $patientInfo)
    {
      $biobank     = $patientInfo -> getBioBankInfo();
      return response()->json($biobank);
    }

    public function tissue_type(PatientInfoRepo $patientInfo)
    {
      $tissue_type = $patientInfo -> gettissueType();
      return response()->json($tissue_type);
    }

    public function proband (PatientInfoRepo $patientInfo)
    {
      $proband     = $patientInfo -> getProband();

      return response()->json($proband);
    }

    static function get_format($args,$field)
    {   
      $return ='';
      
      if(!empty($field) && !empty($args)){
        $unserializeData = unserialize($args);

        if($field == 'derivedSample'){
       
          if(is_array($unserializeData)){
              foreach ($unserializeData as $value) {
                $return .=self::$derivedSample[$value].',';
              }
          } 
        }


        if($field == 'primarySample'){
       
          if(is_array($unserializeData)){
              foreach ($unserializeData as $value) {
                $return .=self::$primarySample[$value].',';
              }
          } 
        }

        if($field == 'ethnicity'){
       
          if(is_array($unserializeData)){
              foreach ($unserializeData as $value) {
                $return .=self::$ethnicity[$value].',';
              }
          } 
        }

        if($field == 'ethnicityFollowUp'){
          if(is_array($unserializeData)){
              foreach ($unserializeData as $value) {
                $return .=self::$ethnicityFollowUp[$value].',';
              }
          } 
        }

        if($field == 'file_type'){
       
          if(is_array($unserializeData)){
              foreach ($unserializeData as $value) {
                $return .=$value.',';
              }
          } 
        }
        
        if($field == 'available_test_data'){
       
          if(is_array($unserializeData)){
              foreach ($unserializeData as $value) {
                $return .=self::$testData[$value].',';
              }
          } 
        }


        if($field == 'primary_language'){
       
          if(is_array($unserializeData)){
              foreach ($unserializeData as $value) {
                $return .=$value.',';
              }
          } 
        }

      }
            
      $return = rtrim($return ,',');
         return $return;
    }

    public function export($per,$page,PatientInfoRepo $patientInfo)
    { 
        
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=IMGC.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        
        $post    = (request() ->post('field'))?request() ->post('field'):array("0"=>"0");
        $reviews = PatientInfoRepo::orderBy('patient_info_id','DESC')->paginate($per,['*'],'page',$page);
        $columns = $patientInfo -> getTableColumns();
        $finalColumns = array_intersect_key($columns,$post);
               
       
        $callback = function() use ($reviews, $finalColumns  ,$post)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $finalColumns);
              foreach($reviews as $review) {

                 $project_name = Self::$projectName[$review -> project_name];
                 $affected     = Self::$affected[$review -> affected];
                 $primary_sample_type = $this -> get_format($review ->primary_sample_type,'primarySample');
                 $derived_sample_type = $this -> get_format($review ->derived_sample_type,'derivedSample');
                 $fileType            = $this -> get_format($review ->file_type_available ,'file_type');
                 $primary_language    = $this -> get_format($review ->primary_language ,'primary_language');
                 $available_test_data = $this -> get_format($review ->available_test_data ,'available_test_data');
                 $ethnicity           = empty($review ->ethnicity)?'0':self::$ethnicity[$review ->ethnicity];
                 $ethnicityFollowUp   = empty($review ->ethnicity_follow_up)?'0':self::$ethnicityFollowUp[$review ->ethnicity_follow_up];
                 $race                = empty($review ->race)?'0':self::$race[$review ->race];
                 $platform            = empty($review ->platform)?'0':self::$platform[$review ->platform];
                 $otherGender         = empty($review ->other_gender)?'0':self::$otherGender[$review ->other_gender]; 

                 $fetchData = array(
                
                       $review -> family_id,
                       $review -> study_id,
                       $review -> subject ,
                       $review -> mrn,
                       $affected ,
                       $review -> member_number,
                       $review -> family_option ,
                       $review -> other_member ,
                       $review -> enrolled,
                       $review -> enrolled_study,
                       $review -> enrolled_study_irb,
                       $review -> enrolled_study_pi,
                      
                       $review -> sample ,
                       $review -> tube_type,
                       $review -> first_name ,
                       $review -> last_name,
                       $review -> dob,
                       $review -> gender ,
                       $otherGender,
                       $review -> additional_other_gender,
                       $review -> sdg_id,
                       $review -> dna_biobank ,
                       $review -> lcl_biobank ,

                       $review -> non_chop_exome ,
                       $review -> lab_used,
                       $review -> comment,
                       $race,
                       $ethnicity ,
                       $ethnicityFollowUp,

                      
                       $primary_language,
                       $review -> other_language,
                       $project_name,
                       $review -> status_affected_member,
                       $review -> sample_recorded ,
                       $review -> sample_recorded_date ,
                       $review -> passage ,
                       $review -> sample_age ,
                       $review -> tissue_type,
                       
                       $primary_sample_type,
                       $review -> primary_sample_type_other ,
                       $derived_sample_type,
                       $review -> other_derived_sample,
                       $review -> dna_vials_submission,
                       $review -> lcl_vials_submission ,
                       $review -> other_vials_submission,
                       $review -> first_submission_date ,
                       $review -> second_submission_date,
                       $review -> third_submission_date,

                       $review -> dna_ratio ,
                       $review -> dna_conc,
                       $review -> volume ,
                       $review -> biorc_id,
                       $review -> tube_barcode, 
                       $review -> other_barcode ,
                       $review -> box_number_details ,
                       $review -> other_sample_info ,
                       $review -> other_note_biorc ,
                       $review -> genomic_data ,
                       $review -> lab_name ,
                       $available_test_data ,

                       $review -> other_test_data ,
                       $review -> exome_genome ,
                       $platform ,
                       $review -> other_platform ,
                       $fileType ,
                       $review -> filename ,
                       $review -> receipt_date ,
                       $review -> transfer_date ,
                       
                       $review -> future_relink ,
                       $review -> future_contact ,
                       $review -> nih_deidentified,
                       $review -> nih_access ,
                       $review -> lab_data ,
                       $review -> share_for_profit,
                       $review -> photo_permission,
                       $review -> photo_usage_purpose,
                       $review -> consent_obtaining_person,
                       $review -> consent_obtaining_date,
                       $review -> consent_authorized_person,
                       $review -> consent_authorized_date,
                       $review -> consent_subject_relation,
                                            
                       $review -> able_assent_child,
                       $review -> unable_assent_child,
                       $review -> able_assent_child_date,
                       $review -> unable_assent_child_date,
                       $review -> able_assent_adult,
                       $review -> able_assent_adult_date,
                       $review -> unable_assent_adult,
                       $review -> unable_assent_adult_date,
                      
                       
                );
            $finalData = array_intersect_key($fetchData,$post);
            fputcsv($file, $finalData);
                 
        }
                
           
            fclose($file);
        };
       
        return Response::stream($callback, 200, $headers);
        
    }

    


}

