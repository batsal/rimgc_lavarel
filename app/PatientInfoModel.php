<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientInfoModel extends Model
{
    protected $table= "imgc_medical_patient_info";
    protected $primaryKey = 'patient_info_id';
   
    public function test()
    {
    	return $this->hasMany("App\PatientTestInfoModel","patient_info_id"); 
    }

    public function sample_requests()
    {
      return $this->hasMany("App\SampleRequestInfoModel","patient_info_id"); 
    }

    public function race($id)
    {

        $data = [
            '5' => 'White',
            '3' => 'Black or African American',
            '7' => 'Hispanic/Latino',
            '2' => 'Asian',
            '1' => 'American Indian or Alaska Native',
            '4' => 'Native Hawaiian or Other Pacific Islander',
            '6' => 'More than one race',
            '8' => 'Unknown',
            '9' => 'Not reported',

        ];
          return $data[$id]  ;

    }


    public function ethnicity($id)
    {

        $data = [
            '3' => 'Unknown',
            '2' => 'Non-Hispanic/Latino',
            '1' => 'Hispanic/Latino',
            '4' => 'Not Available'

        ];
          return $data[$id]  ;

    }


    public function lab()
    {
      return $this -> belongsTo("App\LabUsedModel",'lab_id');
    }
    public function getTableColumns() {
        $columns=array(
                
                       'Family ID',
                       'Study Id',
                       'Subject ',
                       'MRN',
                       'Affected' ,
                       'Family Member Number',
                       'Family ID Option' ,
                       'Other Member' ,
                       'Enrolled',
                       'Enrolled Study',
                       'Enrolled Study IRB',
                       'Enrolled Study PI',
                 
                       'Sample' ,
                       'Ttube Type',
                       'First Name' ,
                       'Last Name',
                       'DOB',
                       'Gender' ,
                       'Other Gender',
                       'Additional Other Gender',
                       'Sdg ID',
                       'DNA Biobank' ,
                       'LCL Biobank' ,
                       'Non Chop Exome' ,
                       'Lab Used',
                       'Comment',
                       'Race',
                       'Ethnicity',
                       'Ethnicity Follow Up' ,

                      
                       'Primary Language',
                       'Other Language',
                       'Project Name',
                       'Status Affected Member',
                       'Sample Recorded' ,
                       'Sample Recorded Date' ,
                       'Passage' ,
                       'Sample Age' ,
                       'Tissue Type',
                       
                       'Primary Sample Type' ,
                       'Primary Sample Type Other' ,
                       'Derived Sample Type' ,
                       'Other Derived Sample',
                       'DNA Vials Submission',
                       'LCL Vials Submission' ,
                       'Other Vials Submission',
                       'First Submission Date' ,
                       'Second Submission Date',
                       'Third Submission Date',

                       'DNA ratio' ,
                       'DNA Conc',
                       'Volume' ,
                       'Biorc ID',
                       'Tube Barcode', 
                       'Other Barcode' ,
                       'Box Number Details' ,
                       'Other Sample Info' ,
                       'Other Note Biorc' ,
                       'Genomic Data' ,
                       'Lab Name' ,
                       'Available Test Data' ,

                       'Other Test Data' ,
                       'Exome Genome' ,
                       'Platform' ,
                       'Other Platform' ,
                       'File Type Available' ,
                       'Filename' ,
                       'Receipt Date' ,
                       'Transfer Date' ,
                       
                       'Future Relink' ,
                       'Future Contact' ,
                       'NIH Deidentified',
                       'NIH Access' ,
                       'Lab Data' ,
                       'Share For Profit',
                       'Photo Permission',
                       'Photo usage Purpose',
                       'Consent Obtaining Person',
                       'Consent Obtaining Date',
                       'Consent Authorized Person',
                       'Consent Authorized Date',
                       'Consent Subject Relation',
   
                       'Able Assent Child',
                       'Unable Assent Child',
                       'Able Assent Child Date',
                       'Unable Assent Child Date',
                       'Able Assent Adult',
                       'Able Assent Adult Date',
                       'Unable Assent Adult',
                       'Unable Assent Adult Date',
                      
                );
        return $columns;
    }
}
