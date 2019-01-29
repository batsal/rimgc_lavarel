@extends("admin.layout.main")
@section('content')


<form name="research" class="form-horizontal" method="post" role="form" action='{{route("form.update",$id)}}'>
      {{ csrf_field() }}
      <div class="row">
        <div class="container-fluid">
                <div class="col-lg-6 m-t">
                  <!--<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>-->
                  <!-- <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="icon_document_alt"></i>Forms</li>
                    <li><i class="fa fa-file-text-o"></i>Form elements</li>
                  </ol> -->
                </div>
                 <div class="col-lg-6 m-t">
                 <section class="pull-right">
                       <a href="{{route('form.create')}}" class="btn btn-primary">Enroll New Subjects</a>&nbsp;&nbsp;
                       <a href="{{route('form.index')}}" class="btn btn-primary">View All enrolled subjects</a>&nbsp;&nbsp;

                       @if(Auth::user()->authorizeRoles(['admin']))

                       @endif
                       <a href="{{route('dashboard')}}" class="btn btn-primary">BackToMain</a>&nbsp;&nbsp;

                  </section>
                </div>
      </div>
    </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <!-- Basic Forms & Horizontal Forms-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
                  <section class="panel head-f">
                    <div class="col-md-offset-1  panel-body">
                        <div class="col-md-4 inline text-left">
                          <label for="family_id" class="col-md-6 control-label">Family ID</label>
                          <div class="col-md-6"><h5>{{$edit -> family_id}}</h5></div>
                        </div>
                        <div class="col-md-4 inline text-left">
                          <label for="study_id" class="col-md-6 control-label">Study ID</label>
                          <div class="col-md-6"><h5>{{$edit -> study_id}}</h5></div>
                        </div>
                        <div class="col-md-4 inline text-left">
                          <div class="col-md-6"><h5>
                            <a href="{{route('form.sample_requests' ,$edit -> study_id)}}">
                              View Sample Requests
                            </a>
                          </h5></div>
                        </div>
                      </div>
                  </section>
        </div>
      </div>
    </div>

<h4><u><b> Demographics </b></u></h4>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10">
          <section class="panel">

            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">First Name:</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> first_name}}</div>
            </div>
            <div class="col-sm-5 panel-body">
              <div class="col-sm-6 text-right">
                    <label for="enrolled_study">Last Name:</label></div>
                     <div class="col-sm-6 text-left">{{$edit -> last_name}}</div>
            </div>
            <div class="col-sm-5 panel-body">
                <div class="col-sm-6 text-right">
                    <label for="enrolled_study">MRN:</label></div>
                     <div class="col-sm-6 text-left">{{$edit -> mrn}}</div>
                </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                  <label for="enrolled_study_irb">DOB</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> dob}}</div>
                </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                  <label for="enrolled_study_irb">Gender</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> gender}}</div>
                </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                  <label for="enrolled_study_irb">Subject Type</label></div>
                  <div class="col-sm-6 text-left">
                    <?php
                      if ($edit -> subject=='P'){
                        echo 'Proband';
                      }
                      elseif($edit -> subject=='F') {
                        echo 'Father';
                      }
                      elseif($edit -> subject=='M') {
                        echo 'Mother';
                      }
                      elseif($edit -> subject=='S') {
                        echo 'Sibling';
                      }
                      elseif($edit -> subject=='O') {
                        echo 'Other';
                      }
                      ?>

                      </div>
                </div>
            <div class="col-sm-5 panel-body">
                <div class="col-sm-6 text-right">
                    <label for="enrolled_study">Race:</label></div>
                     <div class="col-sm-6 text-left">
                     <?php
                        if (!empty($edit->ethnicity)){
                         $racedata = new \App\PatientInfoModel();
                         echo $racedata->race($edit->race);
                         }
                       else {
                        echo 'Not obtained';
                       }
                         ?>
                     </div>
                </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                  <label for="enrolled_study_irb">Ethnicity:</label></div>
                  <div class="col-sm-6 text-left">
                  <?php
                      if (!empty($edit->ethnicity)){
                         $ethnicitydata = new \App\PatientInfoModel();
                         echo $ethnicitydata->ethnicity($edit->ethnicity);
                       }
                       else {
                        echo 'Not obtained';
                       }
                         ?>

                     </div>
                </div>

            </section>
          </div>
        </div>
<hr class="divider">


<h4><u><b> Enrollment </b></u></h4>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10">
          <section class="panel">

            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Enrolled:</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> enrolled}}</div>
            </div>
            <div class="col-sm-5 panel-body">
              <div class="col-sm-6 text-right">
                    <label for="enrolled_study">Date of Enrollment:</label></div>
                     <div class="col-sm-6 text-left">{{$edit -> enrolled_date}}</div>
            </div>
            <div class="col-sm-5 panel-body">
                <div class="col-sm-6 text-right">
                    <label for="enrolled_study">Enrolling Study:</label></div>
                     <div class="col-sm-6 text-left">{{$edit -> enrolled_study}}</div>
                </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                  <label for="enrolled_study_irb">Enrolling IRB</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> enrolled_study_irb}}</div>
                </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                  <label for="enrolled_study_irb">Enrolling Study PI</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> enrolled_study_pi}}</div>
                </div>

            </section>
          </div>
        </div>
<hr class="divider">

<h4><u><b>Sample </b></u></h4>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10">
          <section class="panel">

            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Sample Collected:</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> sample}}</div>
            </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Tube type:</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> tube_type}}</div>
            </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Sample Rec Date</label></div>
                  <div class="col-sm-6 text-left">
                    <?php
                      if (!empty($edit->sample_recorded_date)){
                         echo (date('m/d/Y',strtotime($edit -> sample_recorded_date)));
                       }
                       else {
                        echo '';
                       }
                         ?></div>
            </div>
            <!--
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Family member Relationship</label></div>
                  <div class="col-sm-6 text-left">

                    {{$edit -> subject}}</div>

            </div>
          -->
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Primary Sample</label></div>
                  <div class="col-sm-6 text-left">{{App\Http\Controllers\admin\FormController::get_format($edit->primary_sample_type,'primarySample')}}</div>
            </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Derived Sampletype</label></div>
                  <div class="col-sm-6 text-left">
                  {{App\Http\Controllers\admin\FormController::get_format($edit->derived_sample_type,'derivedSample')}}</div>
            </div>
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Genomic Data Obtained?</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> genomic_data}}
                  </div>
            </div>
            <!--
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Available test data</label></div>
                  <div class="col-sm-6 text-left">
                  {{App\Http\Controllers\admin\FormController::get_format($edit->available_test_data,'available_test_data')}}</div>
            </div>
          -->
            <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">File Types Available</label></div>
                  <div class="col-sm-6 text-left">
                    {{App\Http\Controllers\admin\FormController::get_format($edit->file_type_available,'file_type')}}
                    </div>
            </div>
            </section>
          </div>
        </div>
              <!--
                </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="subject">Family Member Relationship</label>
                </div>
                 <div class="col-md-6">
                  <select class="form-control  m-bot15" name="subject" id="subject">
                      <option value="F"   @if(old('subject') =='F') selected @elseif("F"==$edit->subject)   selected @endif >Father</option>
                      <option value="M"   @if(old('subject') =='M') selected @elseif("M"==$edit->subject)   selected @endif>Mother</option>
                      <option value="O"    @if(old('subject') =='O') selected @elseif("O"==$edit->subject)    selected @endif>Other</option>
                      <option value="P"  @if(old('subject') =='P') selected @elseif("P"==$edit->subject)  selected @endif>Proband</option>
                      <option value="S"@if(old('subject') =='S') selected @elseif("S"==$edit->subject) selected @endif>Sibling</option>
                  </select>
                </div>
              </div>


                <div class="col-sm-5 panel-body">
                  <div class="col-sm-6 text-right">
                    <label for="enrolled">Affected Status</label></div>
                  <div class="col-sm-6 text-left">{{$edit -> affected}}</div>
            </div>
                 <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Affected Status</label>
                    </div>
                    <div class="col-md-6">
                      <label class="label_radio" for="radio-01">
                            <input name="affected" id="radio-01" value="A" type="radio"
                            @if(old('affected') =='A') checked @elseif("A"==$edit->affected) checked @endif /> Affected
                      </label>
                      <label class="label_radio" for="radio-02">
                            <input name="affected" id="radio-02" value="U" type="radio"
                            @if(old('affected') =='U') checked
                            @elseif("U"==$edit->affected)   checked @endif /> Unaffected
                      </label>
                      <label class="label_radio" for="radio-03">
                            <input name="affected" id="radio-03" value="O" type="radio"
                            @if(old('affected') =='O') checked elseif("O"==$edit->affected) checked @endif/> Unknown
                      </label>
                  </div>
                  </div>


                <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Other Family Member</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="other_member" name="other_member"
                       value="@if(old('sample')){{ old('other_member') }} @elseif( $edit ->other_member ) {{$edit ->other_member}} @endif">
                    </div>


              -->
 <hr class="divider">

<h4><u><b> Sample Available </b></u></h4>

<?php

$db = pg_connect('host=127.0.0.1 dbname=rimgc user=devkotab password=');
    $study_id = "{$edit -> study_id}";
    #echo $study_id;
    $query = "SELECT * FROM biobank_sample WHERE external_subject_id = '$study_id'";
    #echo $query;
    $result = pg_query($query);
    $resultArr = pg_fetch_all($result);

    if (!$result) {
        echo "Problem with query " . $query . "<br/>";
        echo pg_last_error();
        exit();
    }

    #echo ($resultArr);


    if (!empty($resultArr))
    {

      echo "<table border='1'>
        <tr>
        <th>SDG Name</th>
        <th>Primary Sample Type</th>
        <th>Barcode</th>
        <th>Conc</th>
        <th>Ratio</th>
        <th>Vol</th>
        <th>Box</th>
        <th>Plate Position </th>


        </tr>";

      foreach($resultArr as $array)

      echo '<tr>
          <td>'. $array['sdg_name'].'</td>
           <td>'. $array['primary_sample_type'].'</td>
           <td>'. $array['barcode'].'</td>
           <td>'. $array['conc'].'</td>
           <td>'. $array['ratio'].'</td>
           <td>'. $array['vol'].'</td>
           <td>'. $array['box'].'</td>
           <td>'. $array['plate_position'].'</td>

          </tr>';
      }
      else{
          echo "<tr> No Sample information available .</tr>";
    }

    echo '</table>';
 ?>


<hr class="divider">
<h4><u><b> Biobank </b></u></h4>

<?php
/*
$db = pg_connect('host=eigdw.research.chop.edu dbname=roberts_imgc_data_integrated user=roberts_imgc_data_integrated_admin password=89k7ac2x');
    $sdg_id = "{$edit -> sdg_id}";
    #echo $sdg_id;
    $query = "SELECT sample_subject_name,aliquot_name, sample_type,secondary_sample_type, specimen_category, collect_method, collect_date_time FROM nautilus_aliquot where sample_subject_name = '$sdg_id'";
    #echo $query;
    $result = pg_query($query);
    $resultArr = pg_fetch_all($result);

    if (!$result) {
        echo "Problem with query " . $query . "<br/>";
        echo pg_last_error();
        exit();
    }

    if (!empty($resultArr))
    {
    echo "<table border='1'>
    <tr>
    <th>SDG Name</th>
    <th>Aliquot Name</th>
    <th>Sample Type</th>
    <th>Secondary Sample Type</th>
    <th>Specimen category</th>
    <th>Collection Method</th>
    <th>Collection Date time</th>
    </tr>";


    foreach($resultArr as $array)

    echo '<tr>
            <td>'. $array['sample_subject_name'].'</td>
            <td>'. $array['aliquot_name'].'</td>
            <td>'. $array['sample_type'].'</td>
            <td>'. $array['secondary_sample_type'].'</td>
            <td>'. $array['specimen_category'].'</td>
            <td>'. $array['collect_method'].'</td>
            <td>'. $array['collect_date_time'].'</td>
          </tr>';
    } else
    {
        echo "<tr>No samples in the Biobank yet.</tr>";
      }
    echo '</table>';
*/

 ?>




<hr class="divider">

<h4><u><b> HPO </b></u></h4>

<?php

    $db = pg_connect('host=127.0.0.1 dbname=rimgc user=devkotab password=');
    $study_id = "{$edit -> study_id}";
    #echo $study_id;
    $query = "SELECT * FROM rimgc_hpo where rimgc_id = '$study_id'";
    #echo $query;
    $result = pg_query($query);
    $resultArr = pg_fetch_all($result);

    if (!$result) {
        echo "Problem with query " . $query . "<br/>";
        echo pg_last_error();
        exit();
    }

    if (gettype($resultArr) == "array" && count($resultArr) > 1)
      echo "<table border='1'>
        <tr>
        <th>HPO ID</th>
        <th>HPO Term</th>

        </tr>";


    try{



      foreach($resultArr as $array)

      echo '<tr>
           <td>'. $array['hpoid'].'</td>
           <td>'. $array['hpo_term'].'</td>
          </tr>';
      } catch (Exception $e){
        echo "<tr>No HPO terms for the sample.</tr>";
      }
    echo '</table>';
 ?>

<hr class="divider">

<!--
<hr class="divider">


              </div>
                <div class="col-md-offset-1 col-lg-9">
                    <section class="panel non-chop">
                      <label>
                        Non CHOP Exome
                      </label>
                      <div class="panel-body" style="display: inline-block; float: right;">
                          <div class="form-group">
                            <div class="checkbox"><input type="checkbox" name="non_chop_exome" value="1"
                                @if(old('non_chop_exome') == '1' ) checked="true" @elseif($edit -> non_chop_exome=='1') checked="true"  @endif>
                              <p>Data Transfer Outside Source</p><label class="" for="labUsed" style="font-weight: 600; width: 28%">Lab Used</label>
                              <select class="form-control  m-bot15" name="lab_used" id="lab_used" style="width: 65%;">
                                    <option value="0">-----Select-----</option>

                                    @foreach($lab as $l)
                                        <option value="{{$l->lab_id}}" @if(old('lab_used') ==$l->lab_id) selected @elseif($l->lab_id == $edit -> lab_id) selected @endif>{{$l->lab_name}}</option>
                                    @endforeach

                              </select>
                            </div>
                        </div>

                      </div>
                    </section>

                </div>
                <div class="form-group">
                   <label for="project_name" class="col-md-4 text-right control-label">Project name</label>
                    <div class="radios col-md-6" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-01" value="1" type="radio" @if(old('project_name') == '1' )
                                                          checked="true"
                                                  @elseif($edit->project_name == '1')
                                                      checked="true"
                                                        @endif /> GRIN
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="2" type="radio" @if(old('project_name') == '2' )
                                                          checked="true"

                                                        @elseif($edit->project_name == '2')
                                                         checked="true"
                                                        @endif/> IMGC
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="3" type="radio" @if(old('project_name') == '3' )
                                                          checked="true"
                                                        @elseif($edit->project_name == '3')
                                                         checked="true"
                                                        @endif/> EGRP (Ingo's epilepsy)
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="4" type="radio" @if(old('project_name') == '4' )
                                                          checked="true"
                                                        @elseif($edit->project_name == '4')
                                                         checked="true"

                                                        @endif/> PediSeq
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="5" type="radio" @if(old('project_name') == '5' )
                                                          checked="true"
                                                        @elseif($edit->project_name == '5')
                                                         checked="true"

                                                        @endif/> Hearing Loss (Ian)
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="6" type="radio" @if(old('project_name') == '6' )
                                                          checked="true"
                                                        @elseif($edit->project_name == '6')
                                                         checked="true"

                                                        @endif/> CdLS
                                                      </label>

                    </div>
                </div>

              -->

               <!--  <div class="form-group">


                   <label for="status_affected_member" class="col-md-4 text-right control-label">Affected status for family members</label>
                    <div class="radios col-md-6" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-01" value="Unaffected" type="radio" @if(old('status_affected_member') ==   'Unaffected' )
                                                          checked="true"
                                                  @elseif($edit->status_affected_member == 'Unaffected')
                                                         checked="true"
                                                  @elseif(empty(old('status_affected_member')))
                                                         checked="true"
                                                        @endif /> Unaffected
                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-02" value="Affected" type="radio"
                                                @if(old('status_affected_member') == 'Affected' )
                                                          checked="true"
                                                @elseif($edit->status_affected_member == 'Affected')
                                                         checked="true"
                                                @endif/> Affected
                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-03" value="Unknown" type="radio" @if(old('status_affected_member') == 'Unknown' )
                                                          checked="true"
                                                  @elseif($edit->status_affected_member == 'Unknown')
                                                         checked="true"
                                                  @endif/> Unknown
                      </label>

                    </div>

                </div>






                    </div>
                  </div>
                   <div class="form-group other_derived_sample"  @if(is_array(unserialize($edit->derived_sample_type )) && in_array('7',unserialize($edit->derived_sample_type))) style="display: block"  @else style="display: none" @endif>
                    <label for="sdgId" class="col-lg-4 text-right control-label">Other Derived Type</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_derived_sample" name="other_derived_sample" value="@if(old('other_derived_sample'))
                              {{ old('other_derived_sample') }} @elseif($edit->other_derived_sample)
                            {{$edit->other_derived_sample}} @endif">
                    </div>
                </div>



                <!--


                <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">Genomic Data Obtained?</label>
                    <div class="radios col-md-6" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                            <input name="genomic_data" id="status_affected_member-01" value="Yes" type="radio" @if(old('genomic_data') == 'Yes' )
                                                        checked="true"
                                                @elseif(empty(old('genomic_data')))
                                                        checked="true"
                                                @elseif($edit->genomic_data == 'Yes')
                                                        checked="true"
                                                @endif /> Yes
                      </label>
                      <label class="label_radio" for="project_name">
                            <input name="genomic_data" id="status_affected_member-02" value="No" type="radio" @if(old('genomic_data') == 'No' )
                                                          checked="true"
                                                @elseif($edit->genomic_data =='No')
                                                        checked="true"
                                                @endif/> No
                      </label>
                      <label class="label_radio" for="project_name">
                            <input name="genomic_data" id="status_affected_member-03" value="Pending" type="radio" @if(old('genomic_data') == 'Pending' )
                                                          checked="true"
                                                        @endif/> Pending
                      </label>

                    </div>
                </div>

                <div class="form-group">
                  <label for="lab_name" class="col-lg-4 text-right control-label">Name of the Lab</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="lab_name" name="lab_name"
                    value="@if(old('lab_name'))
                              {{ old('lab_name') }}
                      @elseif($edit->lab_name)
                            {{$edit->lab_name}} @endif">
                  </div>
                </div>

                 <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">Type of test data available</label>
                    <div class="radios col-md-6 " style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-01" value="1" type="checkbox"
                                                @if(is_array(old('available_test_data')) &&
                                                            in_array('1', old('available_test_data')))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit->available_test_data) ) && in_array('1',unserialize($edit->available_test_data)))
                                                         checked="true"

                                                        @endif
                                                /> Whole Exome Sequencing
                                            </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-02" value="2" type="checkbox"
                                                @if(is_array(old('available_test_data')) &&
                                                            in_array('2', old('available_test_data')))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit->available_test_data)) && in_array('2',unserialize($edit->available_test_data)))
                                                         checked="true"
                                                        @endif
                                                        /> Whole Genome Sequencing
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-03" value="3" type="checkbox"
                                                @if(is_array(old('available_test_data')) &&
                                                            in_array('3', old('available_test_data')))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit->available_test_data)) && in_array('3',unserialize($edit->available_test_data)))
                                                         checked="true"
                                                        @endif

                                                /> Panel
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-04" value="4" type="checkbox" @if(is_array(old('available_test_data')) &&
                                                            in_array('4', old('available_test_data')))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit->available_test_data)) && in_array('4',unserialize($edit->available_test_data)))
                                                         checked="true"
                                                        @endif/> Array
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="5" type="checkbox" @if(is_array(old('available_test_data')) &&
                                                            in_array('5', old('available_test_data')))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit->available_test_data )) && in_array('5',unserialize($edit->available_test_data)))
                                                         checked="true"
                                                        @endif/>  Other NGS
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="6" type="checkbox" @if(is_array(old('available_test_data')) &&
                                                            in_array('6', old('available_test_data')))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit->available_test_data )) && in_array('6',unserialize($edit->available_test_data)))
                                                         checked="true"
                                                        @endif/>  RNASeq
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="7" type="checkbox" @if(is_array(old('available_test_data')) &&
                                                            in_array('7', old('available_test_data')))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit->available_test_data )) && in_array('7',unserialize($edit->available_test_data)))
                                                         checked="true"
                                                        @endif/>  Transcriptomic
                      </label>

                    </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other type of test data</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_test_data" name="other_test_data" value="@if(old('other_test_data'))
                              {{ old('other_test_data') }}
                            @elseif($edit->other_test_data)
                              {{$edit->other_test_data}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">If exome/genome: Singleton/Trio/Quad</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="exome_genome" name="exome_genome" value="@if(old('exome_genome'))
                              {{ old('exome_genome') }}
                            @elseif($edit->exome_genome)
                              {{$edit->exome_genome}} @endif">
                  </div>
                </div>

                <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">Platform</label>
                    <div class="radios col-md-6" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-01" value="1" type="radio" @if(old('platform') == '1' )
                                                          checked="true"
                                                  @elseif(empty(old('platform')) =='1')
                                                         checked="true"
                                                  @elseif($edit->platform =='1')
                                                         checked="true"
                                                  @endif /> Illumina Omni-1630
                                            </label>
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-02" value="2" type="radio" @if(old('platform') == '2' )
                                                          checked="true"
                                                         @elseif($edit->platform =='2')
                                                          checked="true"
                                                         @endif/> Illumina 610507
                                                      </label>
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-03" value="3" type="radio" @if(old('platform') == '3' )
                                                          checked="true"
                                                         @elseif($edit->platform =='3')
                                                         checked="true"
                                                        @endif/> Illumina850k_CytoSNP318
                                                      </label>
                       <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-04" value="4" type="radio" @if(old('platform') == '4' )
                                                          checked="true"
                                                         @elseif($edit->platform =='4')
                                                         checked="true"
                                                        @endif/>  Illumina Omni-5293
                                                      </label>
                       <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-05" value="5" type="radio" @if(old('platform') == '5' )
                                                          checked="true"
                                                        @elseif($edit->platform =='5')
                                                         checked="true"
                                                        @endif/> Other
                                                      </label>

                    </div>
                </div>

                <div class="form-group other_platform" @if($edit->derived_sample_type == '5') style="display: block"  @else style="display: none" @endif>
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other Platform</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_platform" name="other_platform" value="@if(old('other_platform'))
                              {{ old('other_platform') }}
                            @elseif($edit->other_platform)
                              {{$edit->other_platform}} @endif">
                  </div>
                </div>


            </div>
          </section>
        </div>

        <div class="col-lg-6">
          <div class="panel">

            <div class="panel-body">

                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="inputEmail1" class="control-label">Study ID</label>
                </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="study_id" name="study_id"
                    value="@if(!empty(old('study_id'))) {{old('study_id')}}  @elseif(!empty($edit)){{@$edit -> study_id}}@endif">

                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="mrn" class="control-label">MRN</label>
                </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="mrn" name="mrn"
                    value="@if(!empty(old('mrn'))) {{old('mrn')}}  @elseif(!empty($edit)){{@$edit -> mrn}}@endif">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="lastName" class="control-label">Last Name</label>
                </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="last_name" name="last_name"
                    value="@if(!empty(old('family_id'))) {{old('family_id')}}  @elseif(!empty($edit)){{@$edit -> last_name}}@endif">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="firstName" class="control-label">First Name</label>
                </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="first_name" name="first_name"
                    value="@if(!empty(old('first_name'))) {{old('first_name')}}  @elseif(!empty($edit)){{@$edit -> first_name}}@endif">
                  </div>
                </div>
                <div class="form-group">
                  <label for="dob" class="control-label col-md-4 text-right">DOB</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" id="dp1"  name="dob"
                    value="@if(!empty(old('dob'))) {{old('dob')}} @elseif(!empty($edit)) {{date('m/d/Y',strtotime($edit -> dob))}} @endif">
                  </div>
                  <div class="col-md-3 text-right">
                  <label for="sex" class="col-lg-4 text-right control-label">Sex</label>

                  <select class="col-md-8 m-bot15 m-bot15" name="gender" style="border: 1px solid #ccc; color: #777; font-size: 11px; height: 22px;">
                                              <option value="Male" @if(old('gender') =='Male') selected @elseif("Male"==$edit->gender)   selected @endif>Male</option>
                                            <option value="Female" @if(old('gender') =='Female') selected @elseif("Female"==$edit->gender)   selected @endif>Female</option>
                                            <option value="Other" @if(old('gender') =='Other') selected @elseif("Other"==$edit->gender)   selected @endif>Other</option>
                                        </select>
                </div>
                </div>
                <div class="form-group other_gender" @if($edit -> gender == 'Other') style="display: block"  @else style="display: none" @endif>
                    <label for="race" class="col-lg-3 text-right control-label">Other gender</label>
                    <div class="col-lg-6">
                      <select class="form-control  m-bot15" name="other_gender">
                                                <option value="">---Select---</option>
                                                <option value="1"
                                                          @if(old('other_gender') == '1' )
                                                            selected="true"
                                                          @elseif($edit -> other_gender == '1')
                                                            selected ="true"
                                                          @endif
                                                >Not tested</option>
                                                <option value="2"
                                                        @if(old('other_gender') == '2' )
                                                            selected="true"
                                                        @elseif($edit -> other_gender == 2)
                                                            selected ="true"
                                                        @endif
                                                >XX genotype/Female</option>
                                                <option value="3"
                                                      @if(old('other_gender') == '3' )
                                                        selected="true"
                                                      @elseif($edit -> other_gender == '3')
                                                            selected ="true"
                                                      @endif
                                                >XY genotype/Male</option>
                                                <option value="4"
                                                      @if(old('other_gender') == '4' )
                                                          selected="true"
                                                      @elseif($edit -> other_gender == '4')
                                                            selected ="true"
                                                      @endif
                                                >XXY Klinefelter's Syndrome</option>
                                                <option value="5"
                                                      @if(old('other_gender') == '5' )
                                                                   selected="true"
                                                      @elseif($edit -> other_gender == '5')
                                                            selected ="true"
                                                      @endif
                                                >XO Turner's Syndrome</option>
                                                <option value="6"
                                                      @if(old('other_gender') == '6' )
                                                                    selected="true"
                                                      @elseif($edit -> other_gender == '6')
                                                            selected ="true"
                                                      @endif
                                                >XXXY syndrome</option>
                                                <option value="7"
                                                      @if(old('other_gender') == '7' )
                                                              selected="true"
                                                      @elseif($edit -> other_gender == '7')
                                                            selected ="true"
                                                      @endif
                                                >XXYY syndrome</option>
                                                <option value="8"
                                                      @if(old('other_gender') == '8' )
                                                               selected="true"
                                                      @elseif($edit -> other_gender == '8')
                                                            selected ="true"
                                                      @endif
                                                >Mosaic including XXXXY</option>
                                                <option value="9"
                                                      @if(old('other_gender') == '9' )
                                                              selected="true"
                                                      @elseif($edit -> other_gender == '9')
                                                            selected ="true"
                                                            @endif
                                                >Penta X syndrome</option>
                                                <option value="10"
                                                      @if(old('other_gender') == '10' )
                                                              selected="true"
                                                      @elseif($edit -> other_gender == '10')
                                                            selected ="true"
                                                      @endif
                                                >XYY</option>
                                                <option value="11"
                                                      @if(old('other_gender') == '11' )
                                                              selected="true"
                                                      @elseif($edit -> other_gender == '11')
                                                            selected ="true"
                                                      @endif
                                                >Unknown</option>
                                                 <option value="12"
                                                      @if(old('other_gender') == '12' )
                                                              selected="true"
                                                      @elseif($edit -> other_gender == '12')
                                                            selected ="true"
                                                      @endif
                                                >Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group additional_other_gender" @if($edit -> other_gender == '12') style="display: block"  @else style="display: none" @endif>
                    <label for="sdgId" class="col-lg-3 text-right control-label">Please specify Other gender</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="additional_other_gender"
                      name="additional_other_gender"

                      value="@if(old('additional_other_gender'))
                      {{ old('additional_other_gender') }} @elseif($edit -> additional_other_gender ) {{$edit -> additional_other_gender}} @endif">
                    </div>
                  </div>

                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="sdgId" class="control-label">SDG ID</label>
                </div>

                <h3>BioBank information</h3>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="sdgId" name="sdg_id"
                    value="@if(old('sdg_id')) {{old('sdg_id')}} @elseif($edit -> sdg_id ) {{$edit -> sdg_id}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dnaBioBank" class="col-lg-4 text-right control-label">DNA In Biobank</label>

                  <div class="col-lg-2" style="padding-right: 5px;">
                    <div class="radios">
                      <label class="label_radio" for="radio-01">
                                                <input name="dna_biobank" @if(old('dna_biobank') =='Yes') checked @elseif("Yes"==$edit->dna_biobank) checked @endif id="dna_biobank-01" value="Yes" type="radio" /> Yes
                                            </label>
                      <label class="label_radio" for="radio-02">
                                                <input name="dna_biobank" id="dna_biobank-02" value="No" type="radio"
                                                @if(old('dna_biobank') =='No') checked @elseif("No"==$edit->dna_biobank)   checked @endif/> No
                                            </label>

                    </div>
                  </div>

                  <div class="col-md-4 text-left">
                  <label for="lclBioBank" class="control-label">LCL In Biobank</label>

                    <div class="radios" style="display: inline-block; margin-left: 7px;">
                      <label class="label_radio" for="lcl_biobank1">
                                                <input name="lcl_biobank" id="lcl_biobank-01" value="Yes" type="radio" @if(old('lcl_biobank') =='Yes') checked
                                                @elseif("Yes"==$edit->lcl_biobank)  checked @endif /> Yes
                                            </label>
                      <label class="label_radio" for="lcl_biobank2">
                                                <input name="lcl_biobank" id="lcl_biobank-02" value="No" type="radio" @if(old('lcl_biobank') =='No') checked
                                                  @elseif("No"==$edit->lcl_biobank) checked  @endif/> No

                    </div>
                  </div>

                </div>

                <div class="form-group">
                <label for="race" class="col-lg-4 text-right control-label">Race</label>
                <div class="col-lg-2">
                  <select class="form-control  m-bot15" name="race">
                                            <option value="">---Select---</option>
                                            <option value="5"
                                            @if(old('race') =='5')  selected @elseif("5"==$edit->race)   selected @endif>White</option>
                                            <option value="3"
                                            @if(old('race') =='3') selected @elseif("3"==$edit->race)   selected @endif>Black/African American</option>
                                            <option value="7"
                                            @if(old('race') =='7') selected @elseif("7"==$edit->race)   selected @endif>Hispanic/Latino</option>
                                            <option value="2"
                                            @if(old('race') =='2') selected @elseif("2"==$edit->race)   selected @endif>Asian</option>
                                            <option value="1"
                                            @if(old('race') =='1') selected @elseif("1"==$edit->race)   selected @endif>American Indian/Alaska Native</option>
                                            <option value="4"
                                            @if(old('race') =='4') selected @elseif("4"==$edit->race)   selected @endif>Native Hawaiian/Other Pacific Islander</option>
                                            <option value="6"
                                            @if(old('race') =='6') selected @elseif("6"==$edit->race)   selected @endif>Multiple race</option>
                                            <option value="8"
                                            @if(old('race') =='8') selected @elseif("8"==$edit->race)   selected @endif>Unknown</option>
                                            <option value="9"
                                            @if(old('race') =='9') selected @elseif("9"==$edit->race)   selected @endif>Not available</option>
                  </select>
                </div>
                <label for="ethnicity" class="col-lg-1 text-right control-label">Ethnicity</label>
                <div class="col-lg-2">
                  <select class="form-control  m-bot15" name="ethnicity">
                                          <option value="">---Select---</option>
                                          <option value="1"
                                          @if(old('ethnicity') =='1') selected @elseif("1"==$edit->ethnicity)   selected @endif>Hispanic/latino</option>
                                          <option value="2"
                                          @if(old('ethnicity') =='2') selected @elseif("2"==$edit->ethnicity)   selected @endif>Non-Hispanic/latino</option>
                                          <option value="3"
                                          @if(old('ethnicity') =='3') selected @elseif("3"==$edit->ethnicity)   selected @endif>Unknown</option>
                                          <option value="4"
                                          @if(old('ethnicity') =='4') selected @elseif("4"==$edit->ethnicity) selected @endif>Not available</option>
                  </select>
                </div>
                </div>

                <div class="form-group">
                         <label for="ethnicity_follow_up" class="col-lg-4 text-right control-label">Ethnicity Follow up</label>
                    <div class="col-lg-6">
                    <select class="form-control  m-bot15" name="ethnicity_follow_up">
                                            <option value="">---Select---</option>
                                            <option value="1"
                                                  @if(old('ethnicity_follow_up') == '1' )
                                                      selected="true"

                                                  @elseif("1"==$edit->ethnicity)
                                                     selected
                                                  @endif>
                                            Ashkenazi Jewish</option>
                                            <option value="2"
                                                  @if(old('ethnicity_follow_up') == '2' )
                                                      selected="true"
                                                  @elseif("2"==$edit->ethnicity)
                                                     selected
                                                  @endif>
                                            Amish</option>
                                            <option value="3"
                                                  @if(old('ethnicity_follow_up') == '3' )
                                                    selected="true"
                                                  @elseif("3"==$edit->ethnicity)
                                                     selected
                                                  @endif>
                                             French Canadian</option>
                                            <option value="4"
                                                  @if(old('ethnicity_follow_up') == '4' )
                                                    selected="true"
                                                  @elseif("4"==$edit->ethnicity)
                                                     selected
                                                  @endif>
                                           None of the above</option>
                                           <option value="5"
                                                  @if(old('ethnicity_follow_up') == '5' )
                                                    selected="true"
                                                  @elseif("5"==$edit->ethnicity)
                                                     selected
                                                  @endif>
                                           Unknown</option>
                    </select>
                  </div>
                  </div>

                  <div class="form-group">
                         <label for="primary_language" class="col-lg-4 text-right control-label">Primary Language</label>
                       <div class="radios" style="display: inline-block; margin-left: 20px;">
                            <label class="label_radio" for="lcl_biobank1">
                                                  <input name="primary_language[]" id="primary_language-01" value="English" type="checkbox"
                                                  @if(is_array(old('primary_language')) &&
                                                  in_array('English', old('primary_language')))
                                                            checked="true"
                                                  @elseif(is_array(unserialize($edit->primary_language)) && in_array('English',unserialize($edit->primary_language) ))
                                                      checked="true"

                                                  @endif /> English
                            </label>
                            <label class="label_radio" for="lcl_biobank2">
                                                  <input name="primary_language[]" id="primary_language-02" value="Spanish" type="checkbox" @if(is_array(old('primary_language')) &&
                                                  in_array('Spanish', old('primary_language')))
                                                            checked="true"
                                                  @elseif(is_array(unserialize($edit->primary_language)) &&in_array('Spanish',unserialize($edit->primary_language) ))
                                                      checked="true"
                                                  @endif/> Spanish
                           </label>
                            <label class="label_radio" for="lcl_biobank2">
                                                  <input name="primary_language[]" id="primary_language-03" value="Other" type="checkbox"
                                                  @if(is_array(old('primary_language')) &&
                                                  in_array('Other', old('primary_language')))
                                                            checked="true"
                                                  @elseif(is_array(unserialize($edit->primary_language)) &&in_array('Other',unserialize($edit->primary_language)))
                                                      checked="true"

                                                  @endif/> Other
                           </label>

                      </div>

                  </div>
                   <div class="form-group other_language"
                   @if(is_array(unserialize($edit->primary_language)) && in_array('Other',unserialize($edit->primary_language))) style="display: block"  @else style="display: none" @endif>
                    <label for="other_language" class="col-lg-4 text-right control-label">Other Language</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_language" name="other_language"
                      value="@if(!empty(old('other_language'))) {{old('other_language')}}  @elseif(!empty($edit)) {{@$edit -> other_language}} @endif">
                    </div>
                  </div>



                <div class="form-group comment" style="margin-bottom: 10px;">
                    <label for="comment" class="col-lg-4 text-right control-label">Comments</label>
                    <div class="col-md-6">
                    <textarea class="form-control" name="comment" rows="6">
                      @if(!empty(old('comment'))) {{old('comment')}}  @elseif(!empty($edit)) {{@$edit -> comment}}@endif
                    </textarea>
                  </div>
                </div>
                <div class="form-group">
                    <label for="sdgId" class="col-lg-4 text-right control-label">Number of DNA vials submitted to BioRC</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="dna_vials_submission" name="dna_vials_submission" value="@if(old('dna_vials_submission'))
                              {{ old('dna_vials_submission') }} @elseif($edit->dna_vials_submission)
                            {{$edit->dna_vials_submission}} @endif">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sdgId" class="col-lg-4 text-right control-label">Number of LCL vials submitttedto BioRc</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="lcl_vials_submission" name="lcl_vials_submission" value="@if(old('lcl_vials_submission'))
                              {{ old('lcl_vials_submission') }} @elseif($edit->lcl_vials_submission)
                            {{$edit->lcl_vials_submission}} @endif">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sdgId" class="col-lg-4 text-right control-label">Number of other vials submitted to BioRC</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_vials_submission" name="other_vials_submission" value="@if(old('other_vials_submission'))
                              {{ old('lcl_vials_submission') }} @elseif($edit->other_vials_submission)
                            {{$edit->other_vials_submission}} @endif">
                    </div>
                </div>

                <div class="form-group">
                    <label for="first_submission_date" class="col-lg-4 text-right control-label">Date of BioRC submission (first submission)</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="first_submission_date" name="first_submission_date" value="@if(old('first_submission_date')){{ old('first_submission_date') }} @elseif($edit->first_submission_date) {{date('m/d/Y',strtotime($edit -> first_submission_date))}} @endif">
                    </div>
                </div>

                <div class="form-group">
                    <label for="second_submission_date" class="col-lg-4 text-right control-label">Date of BioRC submission (second submission)</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="second_submission_date" name="second_submission_date"
                      value="@if(old('second_submission_date')) {{ old('second_submission_date') }} @elseif($edit->second_submission_date) {{date('m/d/Y',strtotime($edit -> second_submission_date))}} @endif">
                    </div>
                </div>

                <div class="form-group">
                  <label for="third_submission_date" class="col-lg-4 text-right control-label">Date of BioRC submission (third submission)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="third_submission_date" name="third_submission_date" value="@if(old('third_submission_date'))
                              {{ old('third_submission_date') }} @elseif($edit->third_submission_date)
                            {{date('m/d/Y',strtotime($edit -> third_submission_date))}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dna_ratio" class="col-lg-4 text-right control-label">DNA Ratio (260/280)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="dna_ratio" name="dna_ratio"
                    value="@if(old('dna_ratio')) {{ old('dna_ratio') }} @elseif($edit->dna_ratio) {{$edit->dna_ratio}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dna_conc" class="col-lg-4 text-right control-label">DNA conc. (ng/ul)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="dna_conc" name="dna_conc"
                    value="@if(old('dna_conc')) {{ old('dna_conc') }} @elseif($edit->dna_conc) {{$edit->dna_conc}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="volume" class="col-lg-4 text-right control-label">Volume (ul)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="volume" name="volume"
                    value="@if(old('volume'))
                              {{ old('volume') }} @elseif($edit->volume)
                            {{$edit->volume}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="biorc_id" class="col-lg-4 text-right control-label">BioRC ID (SDG ID)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="biorc_id" name="biorc_id"
                    value="@if(old('biorc_id')) {{ old('biorc_id') }} @elseif($edit->biorc_id) {{$edit->biorc_id}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Tube Barcode</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="tube_barcode" name="tube_barcode" value="@if(old('tube_barcode'))
                              {{ old('tube_barcode') }} @elseif($edit->tube_barcode)
                            {{$edit->tube_barcode}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other Barcode </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_barcode" name="other_barcode" value="@if(old('other_barcode')) {{ old('other_barcode') }} @elseif($edit->other_barcode)  {{$edit->other_barcode}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Box Number/Other Box Details</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="box_number_details" name="box_number_details" value="@if(old('box_number_details'))
                              {{ old('box_number_details') }} @elseif($edit->box_number_details)
                            {{$edit->box_number_details}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Plate position</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="plate_position" name="plate_position" value="@if(old('plate_position'))  {{ old('plate_position') }} @elseif($edit->plate_position)  {{$edit->plate_position}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other Sample info or notes</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_sample_info" name="other_sample_info" value="@if(old('other_sample_info')) {{ old('other_sample_info') }} @elseif($edit->other_sample_info) {{$edit->other_sample_info}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other notes from BioRC </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_note_biorc"
                      name=" other_note_biorc" value="@if(old('other_note_biorc'))
                              {{ old('other_note_biorc') }}
                      @elseif($edit->other_note_biorc)
                            {{$edit->other_note_biorc}} @endif">
                  </div>
                </div>
                <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">File types available</label>
                    <div class="radios" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-01" value="BAM" type="checkbox"
                                                @if(is_array(old('file_type_available')) &&
                                                            in_array('BAM', unserialize(old('file_type_available'))))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit ->file_type_available )) &&
                                                            in_array('BAM', unserialize($edit ->file_type_available)) )
                                                            checked="true"

                                                        @endif /> BAM
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-02" value="FASTQ" type="checkbox"
                                                @if(is_array(old('file_type_available')) &&
                                                            in_array('FASTQ', unserialize(old('file_type_available'))))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit ->file_type_available )) &&
                                                            in_array('FASTQ', unserialize($edit ->file_type_available)) )
                                                            checked="true"
                                                        @endif/> FASTQ
                                                      </label>
                      <label class="label_radio" for="project_name">
                        <input name="file_type_available[]" id="file_type_available-03" value="VCF" type="checkbox"
                            @if(is_array(old('file_type_available')) &&
                                                            in_array('VCF', unserialize(old('file_type_available'))))
                                                            checked="true"
                                                @elseif(is_array(unserialize($edit ->file_type_available) ) &&
                                                            in_array('VCF', unserialize($edit ->file_type_available) ))
                                                            checked="true"
                                                @endif/> VCF
                      </label>

                      <label class="label_radio" for="project_name">
                        <input name="file_type_available[]" id="file_type_available-03" value="GVCF" type="checkbox"    @if(is_array(old('file_type_available')) &&
                                                            in_array('GVCF', unserialize(old('file_type_available'))))
                                                            checked="true"
                            @elseif(is_array(unserialize($edit ->file_type_available )) &&
                                                            in_array('GVCF', unserialize($edit ->file_type_available)) )
                                                            checked="true"
                                                        @endif/> GVCF
                      </label>

                    </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Filename</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="filename" name="filename" value="@if(old('filename'))
                              {{ old('filename') }}
                            @elseif($edit->filename)
                              {{$edit->filename}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Receipt Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="receipt_date" name="receipt_date" value="@if(old('receipt_date')) {{ old('receipt_date') }} @elseif($edit->receipt_date)
                    {{ date('m/d/Y',strtotime($edit->receipt_date))}} @endif">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Transfer Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="transfer_date" name="transfer_date" value="@if(old('transfer_date'))  {{ old('transfer_date') }} @elseif($edit->transfer_date) {{date('m/d/Y',strtotime($edit -> created_at))}} @endif">
                  </div>
                </div>
                </div>
             </div>
        </div>
        </div>
      </div>





@endsection
@section('style')
<style type="text/css">
  /*----- Tabs -----*/
.tabs {
width:100%;
display:inline-block;
}

/*----- Tab Links -----*/
/* Clearfix */
.tab-links:after {
display:block;
clear:both;
content:'';
}
.tab-links li {
margin:0px 5px;
float:left;
list-style:none;
}
.tab-links a {
padding:9px 15px;
display:inline-block;
border-radius:3px 3px 0px 0px;
background:#7FB5DA;
font-size:16px;
font-weight:600;
color:#4c4c4c;
transition:all linear 0.15s;
}
.tab-links a:hover {
background:#a7cce5;
text-decoration:none;
}
li.active a, li.active a:hover {
background:#fff;
color:#4c4c4c;
}
/*----- Content of Tabs -----*/
.tab-content {
padding:15px;
border-radius:3px;
box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
background:#fff;
}
.tab {
display:none;
}
.tab.active {
display:block;
}
</style>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function() {
  $('.tabs .tab-links a').on('click', function(e)  {
  var currentAttrValue = $(this).attr('href');
  // Show/Hide Tabs
  $('.tabs ' + currentAttrValue).show().siblings().hide();
  // Change/remove current tab to active
  $(this).parent('li').addClass('active').siblings().removeClass('active');
  e.preventDefault();
  });
  });
</script>

@endsection
