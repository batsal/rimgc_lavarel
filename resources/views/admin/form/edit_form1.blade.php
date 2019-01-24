@extends("admin.layout.main")
@section('content')
<form name="research" class="form-horizontal" method="post" role="form" 
action="{{url('form/".$edit->patient_info_id.")}}">
      {{ csrf_field() }}
      <div class="row">
                <div class="col-lg-6">
                  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="icon_document_alt"></i>Forms</li>
                    <li><i class="fa fa-file-text-o"></i>Form elements</li>
                  </ol>
                </div>
                 <div class="col-lg-6">
                 <section class="panel">
                       <a href="" class="btn btn-primary">Enroll New Subjects</a>&nbsp;&nbsp;
                       <a href="" class="btn btn-primary">View All enrolled Subjects</a>&nbsp;&nbsp;
                       <a href="" class="btn btn-primary">BackToMain</a>
                  </section>
                </div>
      </div>
      <!-- Basic Forms & Horizontal Forms-->
      <div class="row">
                
                 <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      IMGC Research
                    </header>
                    <div class="panel-body">
                      
                        <div class="form-group">
                          <label for="createdBy" class="col-lg-2 control-label">Created B</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="createdBy" name="created_by" disabled="true" value="Batsal">
                           
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="created_date" class="col-lg-2 control-label">Created Date</label>
                          <div class="col-lg-10">
                            <input type="date" class="form-control" id="date" name="created_date" 
                            value="{{$edit->created_at}}">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword1" class="col-lg-2 control-label">Family ID</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="family_id" name="family_id" 
                            value="{{$edit->family_id}}">
                          </div>
                    </div>

                    </div>
                  </section>
      
      </div>
      <div class="row">
        <div class="col-lg-6">
          <section class="panel">
            
            <div class="panel-body">
              
                <div class="form-group">
                  <label for="sampleRecDate">Sample Rec Date</label>
                  <input type="date" class="form-control" id="sampleRecDate" name="sample_recorded_date">
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <select class="form-control  m-bot15" name="subject">
                      <option value="Father"   @if("Father"==$edit->subject)   selected @endif >Father</option>
                      <option value="Mother"   @if("Mother"==$edit->subject)   selected @endif>Mother</option>
                      <option value="Other"    @if("Other"==$edit->subject)    selected @endif>Other</option>
                      <option value="Proband"  @if("Proband"==$edit->subject)  selected @endif>Proband</option>
                      <option value="Sibbling" @if("Sibbling"==$edit->subject) selected @endif>Sibbling</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="affected">Affected</label>
                  <input type="text" class="form-control" id="affected" name="affected">
                </div>
                <div class="form-group">
                  <label for="number">Number</label>
                    <select class="form-control m-bot15" name="number">
                                              <option value="1"  @if("1"==$edit->number)   selected @endif>1
                                              </option>
                                              <option value="2"  @if("2"==$edit->number)   selected @endif>2
                                              </option>
                                              <option value="3"  @if("3"==$edit->number)   selected @endif>3
                                              </option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="enrolled">Enrolled</label>
                  <select class="form-control  m-bot15" name="enrolled">
                                            <option value="No" @if("No"==$edit->enrolled)   selected @endif>No
                                            </option>
                                            <option value="Yes" @if("Yes"==$edit->enrolled)   selected @endif >Yes</option>
                                        </select>
                </div>
                <div class="radios">
                 <label for="sample">Sample</label>
                      <label class="label_radio" for="radio-01">
                                                <input name="sample" id="radio-01" value="Yes" type="radio" @if("Yes"==$edit->sample)   checked @endif  /> Yes
                                            </label>
                      <label class="label_radio" for="radio-02">
                                                <input name="sample" id="radio-02" value="No" type="radio" @if("No"==$edit->sample)   checked @endif /> No
                                            </label>
                      <label class="label_radio" for="radio-03">
                                                <input name="sample" id="radio-03" value="Pending" type="radio" @if("Pending"==$edit->sample)   checked @endif /> Pending
                                            </label>
                </div>
                <div class="form-group">
                  <label for="tubeType">Tube Type</label>
                  <select class="form-control m-bot15" name="tube_type">
                                           <option value="">---Select ---</option>
                                            <option value="1" @if("1"==$edit->tube_type)   selected @endif>1</option>
                                            <option value="2" @if("2"==$edit->tube_type)   selected @endif>2</option>
                                             <option value="3" @if("3"==$edit->tube_type)  selected @endif>3</option>
                                            <option value="4" @if("4"==$edit->tube_type)   selected @endif>4</option>
                                             <option value="5" @if("5"==$edit->tube_type)  selected @endif>5</option>
                                            <option value="6" @if("6"==$edit->tube_type)   selected @endif>6</option>
                                             <option value="7" @if("7"==$edit->tube_type)  selected @endif>7</option>
                                            <option value="8" @if("8"==$edit->tube_type)   selected @endif>8</option>
                                             <option value="9" @if("9"==$edit->tube_type)  selected @endif>9</option>
                                            <option value="other" @if("other"==$edit->tube_type)   selected @endif>other</option>
                                        </select>
                </div>
                <div class="form-group">
                  <label for="sampleType">Sample Type</label>
                  <select class="form-control  m-bot15" name="sample_type">
                                            <option value="">---Select ---</option>
                                            <option value="Cell" @if("Cell"==$edit->sample_type)   selected @endif>Cell Line Only</option>
                                            <option value="DNA" @if("DNA"==$edit->sample_type)   selected @endif>DNA only</option>
                                            <option value="Cell/DNA" @if("Cell/DNA"==$edit->sample_type)   selected @endif>Cell Line /DNA</option>
                                        </select>
                </div>
                <div class="col-lg-12">
                    <section class="panel">
                      <header class="panel-heading">
                        Non Chop Exome
                      </header>
                      <div class="panel-body">
                          <div class="form-group">
                            <div class="checkbox"><input type="checkbox"> 
                              <p>Data Transfer Outside Source</p><label class="" for="labUsed">Lab Used</label>
                              <input class="form-control" id="lab_used" value="{{$edit -> lab_used}}" type="text" name="lab_used">
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
                  <label for="inputEmail1" class="col-lg-2 control-label">Study ID</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="study_id" name="study_id" value="{{$edit -> study_id}}">
                   
                  </div>
                </div>
                <div class="form-group">
                  <label for="mrn" class="col-lg-2 control-label">MRN</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="mrn" name="mrn" value="{{$edit -> mrn}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lastName" class="col-lg-2 control-label">Last Name</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{$edit -> last_name}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="firstName" class="col-lg-2 control-label">First Name</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{$edit -> first_name}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="dob" class="col-lg-2 control-label">DOB</label>
                  <div class="col-lg-10">
                    <input type="date" class="form-control" id="dp1"  name="dob" value="{{$edit -> dob}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="sex">Sex</label>
                  <select class="form-control m-bot15" name="gender">
                                              <option value="Male" @if("Male"==$edit->gender)   selected @endif>Male</option>
                                            <option value="Female" @if("Female"==$edit->gender)   selected @endif>Female</option>
                                            <option value="Other" @if("Other"==$edit->gender)   selected @endif>Other</option>
                                        </select>
                </div>
               
                <div class="form-group">
                  <label for="sdgId" class="col-lg-2 control-label">SDG ID</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="sdgId" name="sdg_id">
                  </div>
                </div>
                <div class="form-group">
                  <label for="dnaBioBank" class="col-lg-2 control-label">DNA In Biobank</label>
                  <div class="col-lg-10">
                    <div class="radios">
                      <label class="label_radio" for="radio-01">
                                                <input name="dna_biobank" @if("Yes"==$edit->dna_biobank)   checked @endif id="dna_biobank-01" value="Yes" type="radio"  /> Yes
                                            </label>
                      <label class="label_radio" for="radio-02">
                                                <input name="dna_biobank" id="dna_biobank-02" value="No" type="radio" @if("No"==$edit->dna_biobank)   checked @endif/> No
                                            </label>
                      
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="lclBioBank" class="col-lg-2 control-label">LCL In Biobank</label>
                  <div class="col-lg-10">
                    <div class="radios">
                      <label class="label_radio" for="lcl_biobank1">
                                                <input name="lcl_biobank" id="lcl_biobank-01" value="Yes" type="radio" @if("Yes"==$edit->lcl_biobank)  checked @endif /> Yes
                                            </label>
                      <label class="label_radio" for="lcl_biobank2">
                                                <input name="lcl_biobank" id="lcl_biobank-02" value="No" type="radio" @if("No"==$edit->lcl_biobank)   checked  @endif/> No
                     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="race">Race</label>
                  <select class="form-control  m-bot15" name="race">
                                            <option value="">---Select---</option>
                                            <option value="01" @if("01"==$edit->race)   selected @endif>White</option>
                                            <option value="02" @if("02"==$edit->race)   selected @endif>Black/African American</option>
                                            <option value="03" @if("03"==$edit->race)   selected @endif>Hispanic/latino</option>
                                            <option value="04" @if("04"==$edit->race)   selected @endif>Asian</option>
                                            <option value="05" @if("05"==$edit->race)   selected @endif>American Indian/Alaska Native</option>
                                            <option value="06" @if("06"==$edit->race)   selected @endif>Ntive Huwaain/Other pacific Ilander</option>
                                            <option value="07" @if("07"==$edit->race)   selected @endif>More Than one race</option>
                                            <option value="08" @if("08"==$edit->race)   selected @endif>Unknown</option>
                                            <option value="09" @if("09"==$edit->race)   selected @endif>Not available</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="ethnicity">Ethnicity</label>
                  <select class="form-control  m-bot15" name="ethnicity">
                                          <option value="">---Select---</option>
                                          <option value="01" @if("01"==$edit->ethnicity)   selected @endif>Hispanic/latino</option>
                                          <option value="02" @if("02"==$edit->ethnicity)   selected @endif>Non-Hispanic/latino</option>
                                          <option value="03" @if("03"==$edit->ethnicity)   selected @endif>Unknown</option>
                                          <option value="04" @if("04"==$edit->ethnicity)   selected @endif>Not available</option>
                  </select>
                </div>
             </div>
          </section>

        </div>
      </div>
      <!-- Inline form-->
      <div class="row">
        <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Comment
                    </header>
                    <div class="panel-body">
                      <div id="editor" class="btn-toolbar cke_editable cke_editable_inline cke_contents_ltr" data-role="editor-toolbar" data-target="#editor" tabindex="0" spellcheck="false" style="position: relative;" role="textbox" aria-label="Rich Text Editor, editor" title="Rich Text Editor, editor" aria-describedby="cke_48" contenteditable="true" name="comment"><p><br></p></div>
                      {{$edit -> comment}}
                    </div>
                  </section>
        </div>
      </div>
              <!-- Test -->
      <div class="row">
        
          @include(['edit' => $edit],"admin.form.test_edit_form")

      </div>

      <div class="row">
        
         @include(['edit' => $edit],"admin.form.consent_form")
      </div>

     <button type="submit" class="btn btn-primary">SAVE</button>
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
          var $tr = $(this).closest("tr");
          $tr.clone().insertAfter($tr);
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
  });

</script>
@endsection
