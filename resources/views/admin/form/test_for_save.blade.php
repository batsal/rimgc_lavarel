
@extends("admin.layout.main")
@section('content')
<form name="research" class="form-horizontal" method="post" role="form" action="{{url('form')}}">
      {{ csrf_field() }}
      <div class="container-fluid">
      <div class="row" >
                <div class="col-lg-6 m-t">
                  <h3 class="page-header" style="margin-top: 0px;"><i class="fa fa-file-text-o"></i>IMGC Research </h3>
                  <!-- <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="icon_document_alt"></i>Forms</li>
                    <li><i class="fa fa-file-text-o"></i>Form elements</li>
                  </ol> -->
                </div>
                 <div class="col-lg-6 m-t">
                   <section class="pull-right">                  
                         <a href="" class="btn btn-primary">Enroll New Subjects</a>&nbsp;&nbsp;

                         <a href="{{url('form')}}" class="btn btn-primary">View All enrolled Subjects</a>&nbsp;&nbsp;

                         <a href="" class="btn btn-primary">BackToMain</a>
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
         <div class="col-lg-12">
          <section class="head-f" style="margin-bottom: 10px;">
            
            <div class="col-md-offset-2">
                  <div class="inline text-left" >
                  <label for="createdBy" class="col-lg-5 text-left control-label">Created BY</label>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" id="createdBy" name="created_by" 
                    value="{{ Auth::user()->name }}" disabled="true">
                   
                  </div>
                </div>
             
                <div class="inline date text-left">
                  <label for="created_date" class="col-lg-6 text-left control-label">Created Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="dp1" class="datepicker" name="created_date" value="{{ old('created_date') }}">
                  </div>
                </div>
                  <div class="inline text-left">
                  <label for="inputPassword1" class="col-lg-3 text-left control-label">Family ID</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="family_id" name="family_id" required="true" value="{{ old('family_id') }}">
                  </div>
            </div>
            </div>
          </section>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5">
            <section class="panel">
              
              <div class="panel-body">
                
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                    <label for="sampleRecDate">Sample Rec Date</label>
                    </div>

                    <div class="col-md-6">
                    <input type="text" class="form-control" id="sampleRecDate" class="datepicker" name="sample_recorded_date" value="{{ old('sample_recorded_date') }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="subject">Family Member Relationship</label>
                    </div>
                    <div class="col-md-6">
                    <select class="form-control  m-bot15" name="subject" id="subject">
                        <option value="0">-----Select-----</option>
                        <option value="F" @if(old('subject') =='F') selected @endif>Father</option>
                        <option value="M" @if(old('subject') =='M') selected @endif>Mother</option>
                        <option value="P" @if(old('subject') =='P') selected @endif>Proband</option>
                        <option value="S" @if(old('subject') =='S') selected @endif>Sibbling</option>
                        <option value="O" @if(old('subject') =='O') selected @endif>Other</option>
                        
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Family Member Number</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="member_number" name="member_number"
                       value="{{ old('member_number') }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Other Family Member</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="other_member" name="other_member"
                       value="{{ old('other_member') }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Affected Status</label>
                    </div>
                    <div class="col-md-6">
                    <select class="form-control  m-bot15" name="affected" id="affected">
                        <option value="0">-----Select-----</option>
                        <option value="A" @if(old('affected') =='A') selected @endif>Affected</option>
                        <option value="U" @if(old('affected') =='U') selected @endif>Unaffected</option>
                        <option value="O" @if(old('affected') =='O') selected @endif>Unknown</option>
                    </select>
                  </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Family Id <span>Note (GRIN/IMGC/Project specific family ID)</span></label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="family_option" name="family_option"
                       value="{{ old('family_option') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Other Family Member</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="other_member" name="other_member"
                       value="{{ old('other_member') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="number">Number</label>
                    </div>
                     <div class="col-md-2">
                      <select class="form-control m-bot15" name="number">
                          <option value="0">-----Select-----</option>
                          <option value="1" @if(old('number') =='1') selected @endif>1</option>
                          <option value="2" @if(old('number') =='2') selected @endif>2</option>
                          <option value="3" @if(old('number') =='3') selected @endif>3</option>
                      </select>
                    </div>
                    <div class="col-md-1">
                      <label for="enrolled">Enrolled</label>
                    </div>
                    <div class="col-md-3">
                    <select class="form-control  m-bot15" name="enrolled">
                        <option value="No" @if(old('enrolled') =='No') selected  @endif>No</option>
                        <option value="Yes" @if(old('enrolled') =='Yes') selected @endif>Yes</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                    <label for="enrolled_study">Enrolling Study</label>
                    </div>

                    <div class="col-md-6">
                    <input type="text" class="form-control" id="enrolled_study" 
                     name="enrolled_study" value="{{ old('enrolled_study') }}" placeholder="Enter IMGC">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                    <label for="enrolled_study_irb">Enrolling Study IRB</label>
                    </div>

                    <div class="col-md-6">
                    <input type="text" class="form-control" id="enrolled_study_irb" 
                     name="enrolled_study_irb" value="{{ old('enrolled_study_irb') }}" placeholder="Enter 16-03231 ">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="enrolled_study_pi">Enrolling Study PI</label>
                    </div>

                    <div class="col-md-6">
                      <input type="text" class="form-control" id="enrolled_study_pi" 
                       name="enrolled_study_pi" value="{{ old('enrolled_study_pi') }}" 
                       placeholder="Enter Ian Krantz">
                    </div>
                  </div>
                 
                  <div class="radios">
                    <div class="col-md-4 text-right">
                      <label for="sample">Sample Collected ?</label>
                    </div>
                    <div class="col-md-6">
                        <label class="label_radio" for="radio-01">
                            <input name="sample" id="radio-01" value="Yes" type="radio" 
                            @if(old('sample') =='Yes') checked @endif /> Yes
                        </label>
                        <label class="label_radio" for="radio-02">
                            <input name="sample" id="radio-02" value="No" type="radio" 
                            @if(old('sample') =='No') checked @elseif(old('sample') =='') checked  @endif/> No
                        </label>
                        <label class="label_radio" for="radio-03">
                            <input name="sample" id="radio-03" value="Pending" type="radio" 
                            @if(old('sample') =='Pending') checked @endif/> Pending
                        </label>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-4 text-right">
                     <label for="tubeType">Tube Type</label>
                     </div>
                  <div class="col-md-6">
                    <select class="form-control m-bot15" name="tube_type">
                        <option value="0">---Select ---</option>
                        <option value="1p" @if(old('tube_type') =='1p') selected @endif>1p</option>
                        <option value="1g" @if(old('tube_type') =='1g') selected @endif>1g</option>
                        <option value="1y" @if(old('tube_type') =='1y') selected @endif>1y</option>
                        <option value="1p/1g" @if(old('tube_type') =='1p/1g') selected @endif>1p/1g</option>
                        <option value="2p/2g" @if(old('tube_type') =='2p/2g') selected @endif>2p/2g</option>
                        <option value="2p/2g" @if(old('tube_type') =='2p/2g') selected @endif>2p/1g</option>
                        <option value="1p/2g" @if(old('tube_type') =='1p/2g') selected @endif>1p/2g</option>
                        <option value="other" @if(old('tube_type') =='other') selected @endif>other</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                    <label for="sampleType">Sample Type</label>
                    </div>
                    <div class="col-md-6">
                    <select class="form-control  m-bot15" name="sample_type">
                        <option value="0">---Select ---</option>
                        <option value="Cell" @if(old('sample_type') =='Cell') selected  @endif>Cell Line Only</option>
                        <option value="DNA" @if(old('sample_type') =='DNA') selected  @endif>DNA only</option>
                        <option value="Both" @if(old('sample_type') =='Both') selected  @endif>Cell Line /DNA</option>
                    </select>
                    </div>
                  </div>
                  <div class="col-md-offset-1 col-lg-9">
                      <section class="panel non-chop">
                        <label>Non Chop Exome </label>
                        <div class="panel-body" style="display: inline-block; float: right;">
                            <div class="form-group">
                              <div class="checkbox"><input type="checkbox"> 
                                <p>Data Transfer Outside Source</p><label class="" for="labUsed" style="font-weight: 600;">Lab Used</label>
                                <input class="form-control" id="lab_used"  type="text" name="lab_used">
                              </div>
                          </div>
                           
                        </div>
                      </section>

                  </div>
                  
                

              </div>
            </section>
          </div>

          <div class="col-lg-6">
            <section class="panel">
             
              <div class="panel-body">
                
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-3 text-right control-label">Study ID</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="study_id" value="RIMGC" name="study_id" value="{{ old('study_id') }}">
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mrn" class="col-lg-3 text-right control-label">MRN</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="mrn" name="mrn" value="{{ old('mrn') }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lastName" class="col-lg-3 text-right control-label">Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="firstName" class="col-lg-3 text-right control-label">First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="dob" class="col-lg-3 text-right control-label">DOB</label>
                    <div class="col-lg-3">
                      <input type="text" class="form-control" id="dob" class="datepicker"  name="dob" value="{{ old('dob') }}">
                    </div>
                    <div class="col-lg-3">
                       <label for="sex" class="col-lg-4 text-right control-label">Sex</label>
                    <select class="col-md-8 m-bot15" name="gender" style="border: 1px solid #ccc; color: #777; font-size: 11px; height: 22px;">
                          <option value="Male"  @if(old('gender') == 'Male' ) 
                                                          selected="true" 
                                                        @endif>Male</option>
                        <option value="Female"  @if(old('gender') == 'Female' ) 
                                                          selected="true" 
                                                        @endif>Female</option>
                        <option value="Other"  @if(old('gender') == 'Other' ) 
                                                          selected="true" 
                                                        @endif>Other</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="race" class="col-lg-3 text-right control-label">Other gender</label>
                    <div class="col-lg-6">
                      <select class="form-control  m-bot15" name="other_gender">
                                                <option value="">---Select---</option>
                                                <option value="01" 
                                                          @if(old('other_gender') == '01' ) 
                                                            selected="true" 
                                                          @endif
                                                >Not tested</option>
                                                <option value="02" 
                                                          @if(old('other_gender') == '02' ) 
                                                                        selected="true" 
                                                                      @endif
                                                >XX genotype/Female</option>
                                                <option value="03"
                                                      @if(old('other_gender') == '03' ) 
                                                                    selected="true" 
                                                                  @endif
                                                >XY genotype/Male</option>
                                                <option value="04"
                                                @if(old('other_gender') == '04' ) 
                                                              selected="true" 
                                                            @endif
                                                >XXY Klinefelter's Syndrome</option>
                                                <option value="05"
                                                @if(old('other_gender') == '05' ) 
                                                             selected="true" 
                                                            @endif
                                                >XO Turner's Syndrome</option>
                                                <option value="06"
                                                @if(old('other_gender') == '06' ) 
                                                              selected="true"  
                                                            @endif
                                                >XXXY syndrome</option>
                                                <option value="07"
                                                @if(old('other_gender') == '07' ) 
                                                              selected="true" 
                                                            @endif
                                                >XXYY syndrome</option>
                                                <option value="08"
                                                  @if(old('other_gender') == '08' ) 
                                                               selected="true"  
                                                              @endif
                                                >Mosaic including XXXXY</option>
                                                <option value="09"
                                                @if(old('other_gender') == '09' ) 
                                                              selected="true" 
                                                            @endif
                                                >Penta X syndrome</option>
                                                <option value="10"
                                                @if(old('other_gender') == '10' ) 
                                                              selected="true" 
                                                            @endif
                                                >XYY</option>
                                                <option value="11"
                                                @if(old('other_gender') == '11' ) 
                                                              selected="true" 
                                                            @endif
                                                >Unknown</option>
                                                 <option value="12"
                                                @if(old('other_gender') == '12' ) 
                                                              selected="true" 
                                                            @endif
                                                >Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sdgId" class="col-lg-3 text-right control-label">Please specify Other gender</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_gender" 
                      name="additional_other_gender" value="{{ old('other_gender') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sdgId" class="col-lg-3 text-right control-label">SDG ID</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="sdgId" name="sdg_id" value="{{ old('sdg_id') }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="dnaBioBank" class="col-lg-3 text-right control-label">DNA In Biobank</label>
                    <div class="col-lg-2">
                      <div class="radios">
                        <label class="label_radio" for="radio-01">
                                                  <input name="dna_biobank" id="dna_biobank-01" value="Yes" type="radio" @if(old('dna_biobank') == 'Yes' ) 
                                                            checked="true" 
                                                          @endif
                                                           /> Yes
                                              </label>
                        <label class="label_radio" for="radio-02">
                                                  <input name="dna_biobank" id="dna_biobank-02" value="No" type="radio" @if(old('dna_biobank') == 'No' ) 
                                                            checked="true" 
                                                          @elseif(empty(old('dna_biobank')))
                                                           checked="true"
                                                          @endif/> No
                                              </label>
                        
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <label for="lclBioBank" class="text-right control-label">LCL In Biobank</label>
                      <div class="radios" style="display: inline-block; margin-left: 20px;">
                        <label class="label_radio" for="lcl_biobank1">
                                                  <input name="lcl_biobank" id="lcl_biobank-01" value="Yes" type="radio" @if(old('lcl_biobank') == 'Yes' ) 
                                                            checked="true" 
                                                           
                                                          @endif /> Yes
                                              </label>
                        <label class="label_radio" for="lcl_biobank2">
                                                  <input name="lcl_biobank" id="lcl_biobank-02" value="No" type="radio" @if(old('lcl_biobank') == 'No' ) 
                                                            checked="true" 
                                                          @elseif(empty(old('lcl_biobank')))
                                                           checked="true"
                                                          @endif/> No
                       
                      </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="race" class="col-lg-3 text-right control-label">Race</label>
                    <div class="col-lg-4">
                      <select class="form-control  m-bot15" name="race">
                                                <option value="">---Select---</option>
                                                <option value="01" 
                                                          @if(old('race') == '01' ) 
                                                            selected="true" 
                                                          @endif
                                                >White</option>
                                                <option value="02" 
                                                          @if(old('race') == '02' ) 
                                                                        selected="true" 
                                                                      @endif
                                                >Black/African American</option>
                                                <option value="03"
                                                      @if(old('race') == '03' ) 
                                                                    selected="true" 
                                                                  @endif
                                                >Hispanic/latino </option>
                                                <option value="04"
                                                @if(old('race') == '04' ) 
                                                              selected="true" 
                                                            @endif
                                                >Asian</option>
                                                <option value="05"
                                                @if(old('race') == '05' ) 
                                                             selected="true" 
                                                            @endif
                                                >American Indian/Alaska Native</option>
                                                <option value="06"
                                                @if(old('race') == '06' ) 
                                                              selected="true"  
                                                            @endif
                                                >Ntive Huwaain/Other pacific Ilander</option>
                                                <option value="07"
                                                @if(old('race') == '07' ) 
                                                              selected="true" 
                                                            @endif
                                                >More Than one race</option>
                                                <option value="08"
                                                  @if(old('race') == '08' ) 
                                                               selected="true"  
                                                              @endif
                                                >Unknown</option>
                                                <option value="09"
                                                @if(old('race') == '09' ) 
                                                              selected="true" 
                                                            @endif
                                                >Not available</option>
                      </select>
                    </div>
                    <label for="ethnicity" class="col-lg-1 text-right control-label">Ethnicity</label>
                    <div class="col-lg-4">
                    <select class="form-control  m-bot15" name="ethnicity">
                                            <option value="">---Select---</option>
                                            <option value="01" 
                                                  @if(old('ethnicity') == '01' ) 
                                                      selected="true" 
                                                  @endif>
                                            Hispanic/latino</option>
                                            <option value="02" 
                                                  @if(old('ethnicity') == '02' ) 
                                                      selected="true" 
                                                  @endif>
                                            Non-Hispanic/latino</option>
                                            <option value="03" 
                                                 @if(old('ethnicity') == '03' ) 
                                                    selected="true" 
                                                  @endif>
                                            Unknown</option>
                                            <option value="04" 
                                                  @if(old('ethnicity') == '04' ) 
                                                    selected="true" 
                                                  @endif>
                                            Not available</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                         <label for="ethnicity" class="col-lg-1 text-right control-label">Ethnicity Follow up</label>
                    <div class="col-lg-6">
                    <select class="form-control  m-bot15" name="ethnicity_follow_up">
                                            <option value="">---Select---</option>
                                            <option value="1" 
                                                  @if(old('ethnicity') == '1' ) 
                                                      selected="true" 
                                                  @endif>
                                            Ashkenazi Jewish</option>
                                            <option value="2" 
                                                  @if(old('ethnicity') == '2' ) 
                                                      selected="true" 
                                                  @endif>
                                            Amish</option>
                                            <option value="3" 
                                                 @if(old('ethnicity') == '3' ) 
                                                    selected="true" 
                                                  @endif>
                                             French Canadian</option>
                                            <option value="4" 
                                                  @if(old('ethnicity') == '4' ) 
                                                    selected="true" 
                                                  @endif>
                                           None of the above</option>
                                           <option value="5" 
                                                  @if(old('ethnicity') == '5' ) 
                                                    selected="true" 
                                                  @endif>
                                           Unknown</option>
                    </select>
                  </div>
                  </div>
                   <!-- <div class="form-group">
                         <label for="primary_language" class="col-lg-1 text-right control-label">Primary Language</label>
                       <div class="radios" style="display: inline-block; margin-left: 20px;">
                            <label class="label_radio" for="lcl_biobank1">
                                                  <input name="primary_language[]" id="primary_language-01" value="English" type="checkbox"
                                                  @if(is_array(old('primary_language')) && 
                                                  in_array('English', old('primary_language'))) 
                                                            checked="true" 
                                                           
                                                          @endif /> English
                            </label>
                            <label class="label_radio" for="lcl_biobank2">
                                                  <input name="primary_language[]" id="primary_language-02" value="Spanish" type="checkbox" @if(is_array(old('primary_language')) && 
                                                  in_array('Spanish', old('primary_language'))) 
                                                            checked="true" 
                                                           
                                                          @endif/> Spanish
                           </label>
                            <label class="label_radio" for="lcl_biobank2">
                                                  <input name="primary_language[]" id="primary_language-03" value="Other" type="checkbox"
                                                  @if(is_array(old('primary_language')) && 
                                                  in_array('Other', old('primary_language'))) 
                                                            checked="true" 
                                                           
                                                          @endif/> Other
                           </label>
                       
                      </div>
                    
                  </div> -->
                   <div class="form-group">
                    <label for="other_language" class="col-lg-3 text-right control-label">Other Language</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_language" name="other_language" value="{{ old('other_language') }}">
                    </div>
                  </div>


                  <div class="form-group comment">
                      <label for="comment" class="col-lg-3 text-right control-label">Comments</label>
                       <textarea class="form-control" name="comment" rows="4" cols="4">{{old('comment')}}</textarea>
                    </div>
               </div>
            </section>

          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              
                <div class="form-group">
                   <label for="project_name" class="text-right control-label">Project name</label>
                    <div class="radios" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-01" value="1" type="radio" @if(old('project_name') == '1' ) 
                                                          checked="true" 
                                                         
                                                        @endif /> GRIN
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="2" type="radio" @if(old('project_name') == '2' ) 
                                                          checked="true" 
                                                        @elseif(empty(old('project_name')))
                                                         checked="true"
                                                        @endif/> IMGC
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="3" type="radio" @if(old('project_name') == '3' ) 
                                                          checked="true" 
                                                        @elseif(empty(old('project_name')))
                                                         checked="true"
                                                        @endif/> EGRP (Ingo's epilepsy) 
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="4" type="radio" @if(old('project_name') == '4' ) 
                                                          checked="true" 
                                                        @elseif(empty(old('project_name')))
                                                         checked="true"
                                                        @endif/> PediSeq
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="5" type="radio" @if(old('project_name') == '5' ) 
                                                          checked="true" 
                                                        @elseif(empty(old('project_name')))
                                                         checked="true"
                                                        @endif/> Hearing Loss (Ian) 
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="6" type="radio" @if(old('project_name') == '6' ) 
                                                          checked="true" 
                                                        @elseif(empty(old('project_name')))
                                                         checked="true"
                                                        @endif/> CdLS
                                                      </label>
                     
                    </div>
                </div>

                <div class="form-group">
                   <label for="status_affected_member" class="text-right control-label">Affected status for family members</label>
                    <div class="radios" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-01" value="Unaffected" type="radio" @if(old('project_name') == 'Unaffected' ) 
                                                          checked="true" 
                                                  @elseif(empty(old('status_affected_member')))
                                                         checked="true"       
                                                        @endif /> Unaffected
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-02" value="Affected" type="radio" @if(old('status_affected_member') == 'Affected' ) 
                                                          checked="true" 
                                                        
                                                        @endif/> Affected
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-03" value="Unknown" type="radio" @if(old('status_affected_member') == 'Unknown' ) 
                                                          checked="true" 
                                                        @endif/> Unknown 
                                                      </label>
                    
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label for="primary_sample_type" class="col-lg-3 text-right control-label">Primary Sample Type</label>
                      <div class="col-lg-4">
                        <div class="radios">
                          <label class="label_radio" for="checkbox-01">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-01" value="primary_sample_1" type="checkbox" 
                                                    @if(is_array(old('primary_sample_type')) && 
                                                            in_array('primary_sample_1', old('primary_sample_type'))) 
                                                            checked="true" 
                                                    @endif
                                                   
                                                             /> Whole Blood 
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="primary_sample_2" type="checkbox" 
                                                    @if(is_array(old('primary_sample_type')) && 
                                                            in_array('primary_sample_2', old('primary_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Serum
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="primary_sample_3" type="checkbox" 
                                                    @if(is_array(old('primary_sample_type')) && 
                                                            in_array('primary_sample_3', old('primary_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Plasma
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="primary_sample_4" type="checkbox" 
                                                    @if(is_array(old('primary_sample_type')) && 
                                                            in_array('primary_sample_4', old('primary_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> DNA
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="primary_sample_5" type="checkbox" 
                                                    @if(is_array(old('primary_sample_type')) && 
                                                            in_array('primary_sample_5', old('primary_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Cell line (LCL)
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="primary_sample_6" type="checkbox" 
                                                    @if(is_array(old('primary_sample_type')) && 
                                                            in_array('primary_sample_6', old('primary_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Tissue
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="primary_sample_7" type="checkbox" 
                                                    @if(is_array(old('primary_sample_type')) && 
                                                            in_array('primary_sample_7', old('primary_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Saliva
                                                </label>
                           <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="primary_sample_8" type="checkbox" 
                                                    @if(is_array(old('primary_sample_type')) && 
                                                            in_array('primary_sample_8', old('primary_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Other
                                                </label>
                          
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="sdgId" class="col-lg-3 text-right control-label">Other type</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="primary_sample_type_other" name="primary_sample_type_other" value="{{ old('primary_sample_type_other') }}">
                          </div>
                        </div>
                      </div>
                </div> -->
               
                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Passage #</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="sdgId" name="passage" value="{{ old('passage') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Sample age</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="sample_age" name="sample_age" value="{{ old('sample_age') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Tissue Type</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="tissue_type" name="tissue_type" value="{{ old('tissue_type') }}">
                  </div>
                </div>

               <!--  <div class="form-group">
                  <label for="primary_sample_type" class="col-lg-3 text-right control-label">Derived Sample Type</label>
                  <div class="col-lg-2">
                    <div class="radios">
                      <label class="label_radio" for="checkbox-01">
                                                <input name="derived_sample_type[]" id="primary_sample_type-01" value="derived_sample_1" 
                                                type="checkbox" 
                                                @if(is_array(old('derived_sample_type')) && 
                                              in_array('derived_sample_1', old('derived_sample_type'))) 
                                                            checked="true" 
                                                    @endif
                                                         /> Whole Blood 
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="derived_sample_2" type="checkbox" 
                                      @if(is_array(old('derived_sample_type')) && 
                                      in_array('derived_sample_2', old('derived_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Serum
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="derived_sample_3" 
                                                type="checkbox" 
                                                @if(is_array(old('derived_sample_type')) && 
                                                            in_array('derived_sample_3', old('derived_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Plasma
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="derived_sample_4" type="checkbox" 
                                                @if(is_array(old('derived_sample_type')) && 
                                                            in_array('derived_sample_4', old('derived_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> DNA
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="derived_sample_5" type="checkbox" 
                                                @if(is_array(old('derived_sample_type')) && 
                                                            in_array('derived_sample_5', old('derived_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Cell line (LCL)
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="derived_sample_6" type="checkbox" @if(old('derived_sample_type') == 'derived_sample_6' ) 
                                                          checked="true" 
                                                       
                                                        @endif/> Tissue
                                            </label>
                      
                       <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="derived_sample_7" type="checkbox" 
                                                @if(is_array(old('derived_sample_type')) && 
                                                            in_array('derived_sample_7', old('derived_sample_type'))) 
                                                            checked="true" 
                                                    @endif/> Other
                                            </label>
                      
                    </div>
                  </div>
                   <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other Derived Type</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_derived_sample" name="other_derived_sample" value="{{ old('other_derived_sample') }}">
                  </div>
                </div> -->
            
                <div class="form-group">
                    <label for="sdgId" class="col-lg-3 text-right control-label">Number of DNA vials submitted to BioRC</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="dna_vials_submission" name="dna_vials_submission" value="{{ old('dna_vials_submission') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sdgId" class="col-lg-3 text-right control-label">Number of LCL vials submitttedto BioRc</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="lcl_vials_submission" name="lcl_vials_submission" value="{{ old('lcl_vials_submission') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sdgId" class="col-lg-3 text-right control-label">Number of other vials submitted to BioRC</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_vials_submission" name="other_vials_submission" value="{{ old('other_vials_submission') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="first_submission_date" class="col-lg-3 text-right control-label">Date of BioRC submission (first submission)</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="first_submission_date" name="first_submission_date" value="{{ old('first_submission_date') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="second_submission_date" class="col-lg-3 text-right control-label">Date of BioRC submission (second submission)</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="second_submission_date" name="second_submission_date" value="{{ old('second_submission_date') }}">
                    </div>
                </div>

                <div class="form-group">
                  <label for="third_submission_date" class="col-lg-3 text-right control-label">Date of BioRC submission (third submission)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="third_submission_date" name="third_submission_date" value="{{ old('third_submission_date') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dna_ratio" class="col-lg-3 text-right control-label">DNA Ratio (260/280)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="dna_ratio" name="dna_ratio" value="{{ old('dna_ratio') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dna_conc" class="col-lg-3 text-right control-label">DNA conc. (ng/ul)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="dna_conc" name="dna_conc" value="{{ old('dna_conc') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="volume" class="col-lg-3 text-right control-label">Volume (ul)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="volume" name="volume" value="{{ old('volume') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="biorc_id" class="col-lg-3 text-right control-label">BioRC ID (SDG ID)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="biorc_id" name="biorc_id" value="{{ old('biorc_id') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Tube Barcode</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="tube_barcode" name="tube_barcode" value="{{ old('tube_barcode') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other Barcode </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_barcode" name="other_barcode" value="{{ old('other_barcode') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Box Number/Other Box Details</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="box_number_details" name="box_number_details" value="{{ old('box_number_details') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Plate position</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="plate_position" name="plate_position" value="{{ old('plate_position') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other Sample info or notes</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_sample_info" name="other_sample_info" value="{{ old('other_sample_info') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other notes from BioRC </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_note_biorc" name="other_note_biorc" value="{{ old('other_note_biorc') }}">
                  </div>
                </div>

                <div class="form-group">
                   <label for="status_affected_member" class="text-right control-label">Genomic Data Obtained?</label>
                    <div class="radios" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="genomic_data" id="status_affected_member-01" value="Yes" type="radio" @if(old('genomic_data') == 'Yes' ) 
                                                          checked="true" 
                                                  @elseif(empty(old('genomic_data')))
                                                         checked="true"       
                                                        @endif /> Yes
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="genomic_data" id="status_affected_member-02" value="No" type="radio" @if(old('genomic_data') == 'No' ) 
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
                  <label for="lab_name" class="col-lg-3 text-right control-label">Name of the Lab</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="lab_name" name="lab_name" value="{{ old('lab_name') }}">
                  </div>
                </div>

               <!--  <div class="form-group">
                   <label for="status_affected_member" class="text-right control-label">Type of test data available</label>
                    <div class="radios" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-01" value="1" type="checkbox" 
                                                @if(is_array(old('available_test_data')) && 
                                                            in_array('1', old('available_test_data'))) 
                                                            checked="true" 
                                                         
                                                        @endif 
                                                /> Whole Exome Sequencing
                                            </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-02" value="2" type="checkbox" 
                                                @if(is_array(old('available_test_data')) && 
                                                            in_array('2', old('available_test_data'))) 
                                                            checked="true" 
                                                         
                                                        @endif
                                                        /> Whole Genome Sequencing
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-03" value="3" type="checkbox" 
                                                @if(is_array(old('available_test_data')) && 
                                                            in_array('3', old('available_test_data'))) 
                                                            checked="true" 
                                                         
                                                        @endif

                                                /> Panel 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-04" value="4" type="checkbox" @if(is_array(old('available_test_data')) && 
                                                            in_array('4', old('available_test_data'))) 
                                                            checked="true" 
                                                         
                                                        @endif/> Array 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="5" type="checkbox" @if(is_array(old('available_test_data')) && 
                                                            in_array('5', old('available_test_data'))) 
                                                            checked="true" 
                                                         
                                                        @endif/>  Other NGS 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="6" type="checkbox" @if(is_array(old('available_test_data')) && 
                                                            in_array('6', old('available_test_data'))) 
                                                            checked="true" 
                                                         
                                                        @endif/>  RNASeq 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="7" type="checkbox" @if(is_array(old('available_test_data')) && 
                                                            in_array('7', old('available_test_data'))) 
                                                            checked="true" 
                                                         
                                                        @endif/>  Transcriptomic 
                                                      </label>
                    
                    </div>
                </div> -->

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other type of test data</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_test_data" name="other_test_data" value="{{ old('other_test_data') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">If exome/genome: Singleton/Trio/Quad</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="exome_genome" name="exome_genome" value="{{ old('exome_genome') }}">
                  </div>
                </div>

                <div class="form-group">
                   <label for="status_affected_member" class="control-label">Platform</label>
                    <div class="radios" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-01" value="Yes" type="radio" @if(old('platform') == 'Yes' ) 
                                                          checked="true" 
                                                  @elseif(empty(old('platform')))
                                                         checked="true"       
                                                        @endif /> Illumina Omni-1630
                                            </label>
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-02" value="No" type="radio" @if(old('platform') == 'No' ) 
                                                          checked="true" 
                                                        
                                                        @endif/> Illumina 610507
                                                      </label>
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-03" value="Pending" type="radio" @if(old('platform') == 'Pending' ) 
                                                          checked="true" 
                                                        @endif/> Illumina850k_CytoSNP318 
                                                      </label>
                       <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-04" value="Pending" type="radio" @if(old('platform') == 'Pending' ) 
                                                          checked="true" 
                                                        @endif/>  Illumina Omni-5293 
                                                      </label>
                       <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-05" value="Pending" type="radio" @if(old('platform') == 'Pending' ) 
                                                          checked="true" 
                                                        @endif/> Other 
                                                      </label>
                    
                    </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other Platform</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_platform" name="other_platform" value="{{ old('other_platform') }}">
                  </div>
                </div>
                
               <!--  <div class="form-group">
                   <label for="status_affected_member" class="text-right control-label">File types available</label>
                    <div class="radios" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-01" value="BAM" type="checkbox" 
                                                @if(is_array(old('file_type_available')) && 
                                                            in_array('BAM', old('file_type_available'))) 
                                                            checked="true" 
                                                         
                                                        @endif /> BAM
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-02" value="FASTQ" type="checkbox" 
                                                @if(is_array(old('file_type_available')) && 
                                                            in_array('FASTQ', old('file_type_available'))) 
                                                            checked="true" 
                                                         
                                                        @endif/> FASTQ
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-03" value="VCF" type="checkbox" 
                                                @if(is_array(old('file_type_available')) && 
                                                            in_array('VCF', old('file_type_available'))) 
                                                            checked="true" 
                                                         
                                                        @endif/> VCF 
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-03" value="GVCF" type="checkbox" 
                                                @if(is_array(old('file_type_available')) && 
                                                            in_array('GVCF', old('file_type_available'))) 
                                                            checked="true" 
                                                         
                                                        @endif/> GVCF 
                                                      </label>
                    
                    </div>
                </div> -->

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Filename</label>
                  <div class="col-lg-6">
                    <input type="file" class="form-control" id="filename" name="filename" value="{{ old('filename') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Receipt Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="receipt_date" name="receipt_date" value="{{ old('receipt_date') }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Transfer Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="transfer_date" name="transfer_date" value="{{ old('transfer_date') }}">
                  </div>
                </div>

          </div>
        </div>
      </div>
      <!-- Inline form-->
      
      <div class="container-fluid text-form">
        <div class="row">
          <div class="col-md-12">
            @include('admin.form.test_form')
          </div>
        </div>
      </div>

      <div class="container-fluid text-form concent">
        <div class="row">
          <div class="col-md-12">
           @include('admin.form.consent_form')
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
       <button type="submit" class="btn btn-primary">SAVE</button>
         </div>
       </div>
      </div>
</form>
          <!-- page end-->
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

<script type="text/javascript">
  $(document).ready(function(){

      $(document).on("click",'.add' ,function(){ 
          var $tr = $(this).closest("tr"),lenth=0;
          var tr = $(document).find("table tbody tr").length;
          lenth = tr;
          var radioButton ="<label for='result-1"+lenth+"'><input type='radio' value='Yes' name='test[result]["+lenth+"]'>Yes</label><label for='result-2"+lenth+"'><input type='radio' value='NO' ame='test[result]["+lenth+"]'>No</label>";
          $tr.clone().insertAfter($tr);
          $(document).find("table tbody tr:last td:nth-child(8)").html(radioButton);

          return true;
      });
      $(document).on("click",'.delete',function(){
          var $tr = $(this).closest("tr");
          var tr = $(document).find("table tbody tr").length; 
           if(tr > 1){
             $tr.remove();
           }
           return true;
         
      });
      $(document).on("keyup","#family_id",function(){
           var family_id = $(this).val(); 
           var study_id = $("#study_id").val();
           var subject=$("#subject").val();
           var final_study_id ='RIMGC'+family_id+subject.slice(0,1);
           
           $("#study_id").val(final_study_id)

      });
      $(document).on("change","select[name='subject']",function(){
           var family_id = $('#family_id').val(); 
           var study_id  = $("#study_id").val();
           var subject   = $("#subject").val();

           var final_study_id ='RIMGC'+family_id+subject.slice(0,1);
           
           $("#study_id").val(final_study_id)

      });
  });

</script>
@endsection
