<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public static $primarySample=array(
                 '1'=>'Whole Blood',
                 '2'=>'Serum',
                 '3'=>'Plasma',
                 '4'=>'DNA',
                 '5'=>'Cell line (LCL)',
                 '6'=>'Tissue',
                 '7'=>'Saliva',
                 '8'=>'Other'
    );

    public static $derivedSample=array(
                 '1'=>'Whole Blood',
                 '2'=>'Serum',
                 '3'=>'Plasma',
                 '4'=>'DNA',
                 '5'=>'Cell line (LCL)',
                 '6'=>'Tissue',
                 '7'=>'Other'
                 
    );

    public static $testData=array(
                 '1'=>'Whole Exome Sequencing',
                 '2'=>'Whole Genome Sequencing',
                 '3'=>'Panel',
                 '4'=>'Array',
                 '5'=>'Other NGS',
                 '6'=>'RNASeq',
                 '7'=>'Transcriptomic',

                 
    );

    public static $fileType=array(
                 '1'=>'BAM',
                 '2'=>'FASTQ',
                 '3'=>'VCF',
                 '4'=>'GVCF',
               
                 
    );

    public static $otherGender=array(
                 '1'=>'Not tested',
                 '2'=>'XX genotype/Female',
                 '3'=>'XY genotype/Male',
                 '4'=>'XXY Klinefelter`s Syndrome',
                 '5'=>'XO Turner`s Syndrome',
                 '6'=>'XXXY syndrome',
                 '7'=>'XXYY syndrome',
                 '8'=>'Mosaic including XXXXY',
                 '9'=>'Penta X syndrome',
                 '10'=>'XYY',
                 '11'=>'Unknown',
                 '12'=>'Other'
                 
    );

    public static $platform=array(
                 '1'=>'Illumina Omni-1630',
                 '2'=>'Illumina 610507',
                 '3'=>'Illumina850k_CytoSNP318',
                 '4'=>'Illumina Omni-5293',
                 '5'=>'Other'            
    );

    public static $race=array(
                 '5'=>'White',
                 '3'=>'Black or African American',
                 '7'=>'Hispanic/Latino',
                 '2'=>'Asian',
                 '1'=>'American Indian or Alaska Native',
                 '4'=>'Native Hawaiian or Other Pacific Islander',
                 '6'=>'More than one race',
                 '8'=>'Unknown',
                 '9'=>'Not reported'
                           
    );

    public static $ethnicity=array(
                 '1'=>'Non-Hispanic',
                 '2'=>'Hispanic or Latino',
                 '3'=>'Unknown',
                                  
    );

    public static $ethnicityFollowUp=array(
                 '1'=>'Ashkenazi Jewish',
                 '2'=>'Amish',
                 '3'=>'French Canadian',
                 '4'=>'None of the above',
                 '5'=>'Unknown',
                                  
    );

    public static $projectName=array(
                 '1'=>'GRIN',
                 '2'=>'RIMGC',
                 '3'=>'EGRP (Ingo`s epilepsy)',
                 '4'=>'PediSeq',
                 '5'=>'Hearing Loss (Ian)',
                 '6'=>'CdLS',
                                  
    );

    public static $clinicType =array(
                 '1'=>'RIMGC - General Genetics',
                 '2'=>'RIMGC - HL',
                 '3'=>'RIMGC - DSD',
                 '4'=>'CdLS',
                 '5'=>'Kabuki Syndrome',
                 '6'=>'NICUSeq',
                 '7'=>'RIMGC - Inpatient consult',
                 '8'=>'Metabolism',
                 '9'=>'CHOPS'
    );

    public static $affected =array(
                 'A'=>'Affected',
                 'U'=>'Unaffected',
                 'O'=>'Unknown'
    );
}
