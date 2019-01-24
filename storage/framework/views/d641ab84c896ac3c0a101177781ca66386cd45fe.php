<?php $__env->startSection('content'); ?>
<form name="research" id="research" class="form-horizontal" method="post" role="form" action="<?php echo e(url('form')); ?>" >
      <?php echo e(csrf_field()); ?>

      <div class="container-fluid">
      <div class="row" >
                <div class="col-lg-6 m-t">
                  <h3 class="page-header" style="margin-top: 0px;"><i class="fa fa-file-text-o"></i>RIMGC Research - Add New Sample</h3>
                  <!-- <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="icon_document_alt"></i>Forms</li>
                    <li><i class="fa fa-file-text-o"></i>Form elements</li>
                  </ol> -->
                </div>
                 <!-- <div class="col-lg-6 m-t">
                   <section class="pull-right">                  
                         <a href="" class="btn btn-primary">Enroll New Subjects</a>&nbsp;&nbsp;

                         <a href="<?php echo e(url('form')); ?>" class="btn btn-primary">View All enrolled Subjects</a>&nbsp;&nbsp;

                        <?php if(Auth::user()->authorizeRoles(['admin'])): ?>
                       <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary">BackToMain</a>
                       <?php endif; ?>
                    </section>
                </div> -->
      </div>
    </div>
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
          </ul>
      </div>
    <?php endif; ?>
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
                    value="<?php echo e(Auth::user()->name); ?>" disabled="true">
                   
                  </div>
                </div>
             
                <div class="inline date text-left">
                  <label for="created_date" class="col-lg-6 text-left control-label">Created Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="created_date" name="created_date" value="<?php echo e(date('m/d/Y')); ?>">
                  </div>
                </div>
                  <div class="inline text-left">
                  <label for="inputPassword1" class="col-lg-3 text-left control-label">Family ID</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="family_id" name="family_id" required="true" value="<?php if(old('family_id')): ?><?php echo e(old('family_id')); ?> <?php else: ?><?php echo e(str_pad($maxFamilyId, 6, 0, STR_PAD_LEFT)); ?><?php endif; ?>" required="true">
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
                    <div class="col-md-4 text-right">
                      <label for="enrolled">Enrolled</label>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control  m-bot15" name="enrolled">
                          <option value="No" <?php if(old('enrolled') =='No'): ?> selected  <?php endif; ?>>No</option>
                          <option value="Yes" <?php if(old('enrolled') =='Yes'): ?> selected <?php endif; ?>>Yes</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="subject">Subject</label>
                    </div>
                    <div class="col-md-6">
                    <select class="form-control  m-bot15" name="subject" id="subject">
                        <option value="">-----Select-----</option>
                        <option value="F" <?php if(old('subject') =='F'): ?> selected <?php endif; ?>>Father</option>
                        <option value="M" <?php if(old('subject') =='M'): ?> selected <?php endif; ?>>Mother</option>
                        <option value="P" <?php if(old('subject') =='P'): ?> selected <?php endif; ?>>Proband</option>
                        <option value="S" <?php if(old('subject') =='S'): ?> selected <?php endif; ?>>Sibling</option>
                        <option value="O" <?php if(old('subject') =='O'): ?> selected <?php endif; ?>>Other</option>
                        
                    </select>
                  </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Affected Status</label>
                    </div>
                    <div class="col-md-6">
                      <label class="label_radio" for="affected">
                            <input name="affected" id="affected" value="A" type="radio" /> Affected
                      </label>
                      <!--<label class="label_radio" for="radio-02">
                            <input name="affected" id="radio-02" value="U" type="radio" 
                            <?php if(old('sample') =='U'): ?> checked   <?php endif; ?>/> Unaffected
                      </label>
                      <label class="label_radio" for="radio-03">
                            <input name="affected" id="radio-03" value="O" type="radio" 
                            <?php if(old('sample') =='O'): ?> checked <?php endif; ?>/> Unknown
                      </label>
                    -->
                  </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-4 text-right">
                    <label for="enrolled_study">Date of Enrollment</label>
                    </div>

                    <div class="col-md-6">
                     <input type="text" class="form-control" id="enrolled_date" name="enrolled_date" value="<?php if(old('enrolled_date')): ?><?php echo e(old('enrolled_date')); ?><?php endif; ?>">
                    </div>
                  </div>
                  <!--
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                    <label for="enrolled_study">Enrolling Study</label>
                    </div>

                    <div class="col-md-6">
                    <input type="text" class="form-control" id="enrolled_study" 
                     name="enrolled_study" value="<?php echo e(old('enrolled_study')); ?>" placeholder="Enter IMGC">
                    </div>
                  </div>
                  -->
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="consent_patient_type">Patient type:</label>
                    </div>
                    <div class="col-md-4">
                    <select class="form-control  m-bot15" name="consent_patient_type" id="consent_patient_type">
                        <option value="">-----Select-----</option>
                        <option value="Inpatient" <?php if(old('subject') =='Inpatient'): ?> selected <?php endif; ?>>Inpatient</option>
                        <option value="Outpatient" <?php if(old('subject') =='Outpatient'): ?> selected <?php endif; ?>>Outpatient</option>
                    </select>
                  </div>
                </div>
                <!--
                </div>
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="enrolled_study_pi">Enrolling Study PI</label>
                    </div>

                    <div class="col-md-6">
                      <input type="text" class="form-control" id="enrolled_study_pi" 
                       name="enrolled_study_pi" value="<?php echo e(old('enrolled_study_pi')); ?>" 
                       placeholder="Enter Ian Krantz">
                    </div>
                  
                -->

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                    <label for="sampleRecDate">Sample Received Date</label>
                    </div>

                    <div class="col-md-6">
                    <input type="text" class="form-control" id="sampleRecDate" class="datepicker" name="sample_recorded_date" value="<?php echo e(old('sample_recorded_date')); ?>">
                    </div>
                  </div>
                  

                  <div class="form-group member_number" style="display: none">
                    <div class="col-md-4 text-right">
                      <label for="member_number">Family Member Number</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="member_number" name="member_number"
                       value="<?php echo e(old('member_number')); ?>">
                    </div>
                  </div>

                  <div class="form-group other_member" style="display: none">
                    <div class="col-md-4 text-right">
                      <label for="other_member">Other Family Member</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="other_member" name="other_member"
                       value="<?php echo e(old('other_member')); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="other_member">Other Family Member</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="other_member" name="other_member"
                       value="<?php echo e(old('other_member')); ?>">
                    </div>
                  </div>

                  

                  <!--
                  <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Family Id Note</label>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control  m-bot15" name="family_option" id="family_option">
                        <option value="">-----Select-----</option>
                        <option value="1" <?php if(old('family_option') =='1'): ?> selected <?php endif; ?>>1</option>
                        <option value="2" <?php if(old('family_option') =='2'): ?> selected <?php endif; ?>>2</option>
                        <option value="3" <?php if(old('family_option') =='3'): ?> selected <?php endif; ?>>3</option>
                        <option value="4" <?php if(old('family_option') =='4'): ?> selected <?php endif; ?>>4</option>
                        <option value="5" <?php if(old('family_option') =='5'): ?> selected <?php endif; ?>>5</option>
                        <option value="6" <?php if(old('family_option') =='6'): ?> selected <?php endif; ?>>6</option>
                        <option value="7" <?php if(old('family_option') =='7'): ?> selected <?php endif; ?>>7</option>
                        <option value="8" <?php if(old('family_option') =='8'): ?> selected <?php endif; ?>>8</option>
                        <option value="9" <?php if(old('family_option') =='9'): ?> selected <?php endif; ?>>9</option>
                        
                    </select>

                       <input type="text" class="form-control" id="family_option" name="family_option"
                       value="<?php echo e(old('family_option')); ?>" required="true"> 

                    </div>
                  </div>
                -->



                  <div class="form-group">
                    <!-- <div class="col-md-4 text-right">
                      <label for="number">Number</label>
                    </div>
                     <div class="col-md-2">
                      <select class="form-control m-bot15" name="number">
                          <option value="0">-----Select-----</option>
                          <option value="1" <?php if(old('number') =='1'): ?> selected <?php endif; ?>>1</option>
                          <option value="2" <?php if(old('number') =='2'): ?> selected <?php endif; ?>>2</option>
                          <option value="3" <?php if(old('number') =='3'): ?> selected <?php endif; ?>>3</option>
                      </select>
                    </div> -->
                 
                  <div class="radios">
                    <div class="col-md-4 text-right">
                      <label for="sample">Sample Collected?</label>
                    </div>
                    <div class="col-md-2">
                        <label class="label_radio1" for="radio-01">
                            <input name="sample" id="radio-01" value="Yes" type="radio" 
                            <?php if(old('sample') =='Yes'): ?> checked <?php endif; ?> /> Yes
                        </label></div>
                        <div class="col-md-2">
                        <label class="label_radio1" for="radio-02">
                            <input name="sample" id="radio-02" value="No" type="radio" 
                            <?php if(old('sample') =='No'): ?> checked <?php endif; ?>/> No
                        </label></div>
                        <div class="col-md-2">
                        <label class="label_radio1" for="radio-03">
                            <input name="sample" id="radio-03" value="Pending" type="radio" 
                            <?php if(old('sample') =='Pending'): ?> checked <?php endif; ?>/> Pending
                        </label></div>
                        <div class="col-md-2">
                        <label class="label_radio1" for="radio-04">
                            <input name="sample" id="radio-04" value="Failed" type="radio" 
                            <?php if(old('sample') =='Failed'): ?> checked <?php endif; ?>/> Failed
                        </label></div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-4 text-right">
                     <label for="tubeType">Tube Type</label>
                     </div>
                  <div class="col-md-6">
                    <select class="form-control m-bot15" name="tube_type">
                        <option value="">---Select ---</option>
                        <option value="1p" <?php if(old('tube_type') =='1p'): ?> selected <?php endif; ?>>1p</option>
                        <option value="1g" <?php if(old('tube_type') =='1g'): ?> selected <?php endif; ?>>1g</option>
                        <option value="1y" <?php if(old('tube_type') =='1y'): ?> selected <?php endif; ?>>1y</option>
                        <option value="1p/1g" <?php if(old('tube_type') =='1p/1g'): ?> selected <?php endif; ?>>1p/1g</option>
                        <option value="2p/2g" <?php if(old('tube_type') =='2p/2g'): ?> selected <?php endif; ?>>2p/2g</option>
                        <option value="2p/2g" <?php if(old('tube_type') =='2p/2g'): ?> selected <?php endif; ?>>2p/1g</option>
                        <option value="1p/2g" <?php if(old('tube_type') =='1p/2g'): ?> selected <?php endif; ?>>1p/2g</option>
                        <option value="other" <?php if(old('tube_type') =='other'): ?> selected <?php endif; ?>>other</option>
                    </select>
                  </div>
                  </div>


                  <div class="form-group">
                    <label for="primary_sample_type" class="col-lg-4 text-right control-label">Primary Sample Type</label>
                      <div class="col-lg-7">
                        <div class="radios">
                          <label class="label_radio2" for="checkbox-01">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-01" value="1" type="checkbox" 
                                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('1', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>
                                                   
                                                             /> Whole Blood 
                          </label>
                          <label class="label_radio2" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="2" type="checkbox" 
                                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('2', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Serum
                          </label>
                          <label class="label_radio2" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="3" type="checkbox" 
                                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('3', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Plasma
                          </label>
                          <label class="label_radio2" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="4" type="checkbox" 
                                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('4', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> DNA
                          </label>
                          <label class="label_radio2" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="5" type="checkbox" 
                                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('5', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Cell line (LCL)
                          </label>
                          <label class="label_radio2" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="6" type="checkbox" 
                                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('6', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Tissue
                          </label>
                          <label class="label_radio2" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="7" type="checkbox" 
                                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('7', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Saliva
                          </label>
                          <label class="label_radio2" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="8" type="checkbox" 
                                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('8', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Other
                          </label>
                          
                        </div>
                      </div>

                  <div class="form-group">
                    <div class="col-md-4 text-right">
                     <label for="clinicType">Clinic type</label>
                     </div>
                  <div class="col-md-6">
                    <select class="form-control m-bot15" name="clinic_type">
                        <option value="">---Select ---</option>
                        <option value="1" <?php if(old('clinic_type') =='1'): ?> selected <?php endif; ?>>RIMGC - General Genetics</option>
                        <option value="2" <?php if(old('clinic_type') =='2'): ?> selected <?php endif; ?>>RIMGC - HL</option>
                        <option value="3" <?php if(old('clinic_type') =='3'): ?> selected <?php endif; ?>>RIMGC - DSD</option>
                        <option value="4" <?php if(old('clinic_type') =='4'): ?> selected <?php endif; ?>>CdLS</option>
                        <option value="5" <?php if(old('clinic_type') =='5'): ?> selected <?php endif; ?>>Kabuki Syndrome</option>
                        <option value="6" <?php if(old('clinic_type') =='6'): ?> selected <?php endif; ?>>NICUSeq</option>
                        <option value="7" <?php if(old('clinic_type') =='7'): ?> selected <?php endif; ?>>RIMGC - Inpatient consult</option>
                        <option value="8" <?php if(old('clinic_type') =='8'): ?> selected <?php endif; ?>>Metabolism</option>
                        <option value="9" <?php if(old('clinic_type') =='9'): ?> selected <?php endif; ?>>CHOPS</option>
                    </select>
                  </div>
                  </div>

                  <!-- <div class="form-group">
                    <div class="col-md-4 text-right">
                    <label for="sampleType">Sample Type</label>
                    </div>
                    <div class="col-md-6">
                    <select class="form-control  m-bot15" name="sample_type">
                        <option value="0">---Select ---</option>
                        <option value="Cell" <?php if(old('sample_type') =='Cell'): ?> selected  <?php endif; ?>>Cell Line Only</option>
                        <option value="DNA" <?php if(old('sample_type') =='DNA'): ?> selected  <?php endif; ?>>DNA only</option>
                        <option value="Both" <?php if(old('sample_type') =='Both'): ?> selected  <?php endif; ?>>Cell Line /DNA</option>
                    </select>
                    </div>
                  </div> -->

                  <div class="col-md-offset-1 col-lg-9">
                      <section class="panel non-chop">
                        <label>Non Chop Exome </label>
                        <div class="panel-body" style="display: inline-block; float: right;">
                            <div class="form-group">
                              <div class="checkbox"><input type="checkbox" name="non_chop_exome" value="1" 
                                <?php if(old('non_chop_exome') == '1' ): ?> checked="true"  <?php endif; ?>> 
                                <p>Data Transfer Outside Source</p>
                                <label class="" for="labUsed" style="font-weight: 600; width: 28%">Lab Used</label>
                                <select class="form-control  m-bot15" name="lab_used" id="lab_used" style="width: 65%;">
                                    <option value="">-----Select-----</option>
                                    
                                    <?php $__currentLoopData = $lab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($l->lab_id); ?>" <?php if(old('lab_used') ==$l->lab_id): ?> selected <?php endif; ?>><?php echo e($l->lab_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                                <!-- <input class="form-control" id="lab_used"  type="text" name="lab_used"> -->
                              </div>
                          </div>
                           
                        </div>
                      </section>
                  </div>

                  <!--
                  <div class="form-group">
                   <label for="project_name" class="col-lg-4 text-right control-label">Project name</label>
                    <div class="radios col-md-7" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name" value="1" type="radio" <?php if(old('project_name') == '1' ): ?> 
                                                          checked="true" 
                                                         
                                                        <?php endif; ?> /> GRIN
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name" value="2" type="radio" <?php if(old('project_name') == '2' ): ?> 
                                                          checked="true" 
                                                        <?php elseif(empty(old('project_name'))): ?>
                                                         checked="true"
                                                        <?php endif; ?>/> RIMGC
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name" value="3" type="radio" <?php if(old('project_name') == '3' ): ?> 
                                                          checked="true" 

                                                        <?php endif; ?>/> EGRP (Ingo's epilepsy) 
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="4" type="radio" <?php if(old('project_name') == '4' ): ?> 
                                                          checked="true" 

                                                        <?php endif; ?>/> PediSeq
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="5" type="radio" <?php if(old('project_name') == '5' ): ?> 
                                                          checked="true" 

                                                        <?php endif; ?>/> Hearing Loss (Ian) 
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="6" type="radio" <?php if(old('project_name') == '6' ): ?> 
                                                          checked="true" 

                                                        <?php endif; ?>/> CdLS
                                                      </label>
                     
                    </div>
                </div>
                -->
               <!--  <div class="form-group">

                   <label for="status_affected_member" class="col-lg-4 text-right control-label">Affected status for family members</label>
                    <div class="radios col-lg-7" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-01" value="Unaffected" type="radio" <?php if(old('project_name') == 'Unaffected' ): ?> 
                                                          checked="true" 
                                                  <?php elseif(empty(old('status_affected_member'))): ?>
                                                         checked="true"       
                                                        <?php endif; ?> /> Unaffected
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-02" value="Affected" type="radio" <?php if(old('status_affected_member') == 'Affected' ): ?> 
                                                          checked="true" 
                                                        
                                                        <?php endif; ?>/> Affected
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-03" value="Unknown" type="radio" <?php if(old('status_affected_member') == 'Unknown' ): ?> 
                                                          checked="true" 
                                                        <?php endif; ?>/> Unknown 
                                                      </label>
                    
                    </div>
                </div>

 -->

                
                  </div>
                  <div class="form-group primary_sample_type_other" style="display: none;">
                      <div class="form-group" >
                        <label for="sdgId" class="col-lg-4 text-right control-label">Other type</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="primary_sample_type_other" name="primary_sample_type_other" value="<?php echo e(old('primary_sample_type_other')); ?>">
                        </div>
                      </div>
                  </div>
               
                <!--div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Passage #</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="sdgId" name="passage" value="<?php echo e(old('passage')); ?>">
                  </div>
                </div>
              -->

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Sample age</label>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" id="sample_age" name="sample_age" value="<?php echo e(old('sample_age')); ?>">
                  </div>
                </div>

                <div class="form-group tissue_type" style="display: none">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Tissue Type</label>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" id="tissue_type" name="tissue_type" value="<?php echo e(old('tissue_type')); ?>">
                  </div>
                </div>

               <div class="form-group">
                  <label for="derived_sample_type" class="col-lg-4 text-right control-label">Derived Sample Type</label>
                  <div class="col-lg-7">
                    <div class="radios">
                      <label class="label_radio" for="checkbox-01">
                                                <input name="derived_sample_type[]" id="primary_sample_type-01" value="1" 
                                                type="checkbox" 
                                                <?php if(is_array(old('derived_sample_type')) && 
                                              in_array('1', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>
                                                         /> Whole Blood 
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="2" type="checkbox" 
                                      <?php if(is_array(old('derived_sample_type')) && 
                                      in_array('2', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Serum
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="3" 
                                                type="checkbox" 
                                                <?php if(is_array(old('derived_sample_type')) && 
                                                            in_array('3', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Plasma
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="4" type="checkbox" 
                                                <?php if(is_array(old('derived_sample_type')) && 
                                                            in_array('4', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> DNA
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="5" type="checkbox" 
                                                <?php if(is_array(old('derived_sample_type')) && 
                                                            in_array('5', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Cell line (LCL)
                                            </label>
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="6" type="checkbox" <?php if(old('derived_sample_type') == '6' ): ?> 
                                                          checked="true" 
                                                       
                                                        <?php endif; ?>/> Tissue
                                            </label>
                      
                      <label class="label_radio" for="checkbox-02">
                                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="7" type="checkbox" 
                                                <?php if(is_array(old('derived_sample_type')) && 
                                                            in_array('7', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                                    <?php endif; ?>/> Other
                      </label>
                      
                    </div>
                  </div>
                   <div class="form-group other_derived_sample" style="display: none;">
                    <label for="sdgId" class="col-lg-4 text-right control-label">Other Derived Type</label>
                    <div class="col-lg-7">
                      <input type="text" class="form-control" id="other_derived_sample" name="other_derived_sample" value="<?php echo e(old('other_derived_sample')); ?>">
                    </div>
                 </div>



                <div class="form-group">                 
                  <div class="radios">
                    <div class="col-md-4 text-right">
                      <label for="genomic_data">Genomic Data Obtained?</label>
                    </div>
                    <div class="col-md-2">
                        <label class="label_radio" for="radio-01">
                            <input name="genomic_data" id="radio-01" value="Yes" type="radio" 
                            <?php if(old('genomic_data') =='Yes'): ?> checked <?php endif; ?> /> Yes
                        </label></div>
                        <div class="col-md-2">
                        <label class="label_radio" for="radio-02">
                            <input name="genomic_data" id="radio-02" value="No" type="radio" 
                            <?php if(old('sample') =='No'): ?> checked <?php endif; ?>/> No
                        </label></div>
                        <div class="col-md-2">
                        <label class="label_radio" for="radio-03">
                            <input name="genomic_data" id="radio-03" value="Pending" type="radio" 
                            <?php if(old('genomic_data') =='Pending'): ?> checked <?php endif; ?>/> Pending
                        </label></div>

                </div>
              </div>


                <!--div class="form-group">
                  <div class="radios">
                   <label for="genomic_data" class="col-md-4 text-right control-label">
                   Genomic Data Obtained?</label>
                    <div class="radios col-md-2">
                      <label class="label_radio" for="genomic_data">
                                                <input name="genomic_data" id="status_affected_member-01" value="Yes" type="radio" <?php if(old('genomic_data') == 'Yes' ): ?> 
                                                          checked="true" 
     
                                                        <?php endif; ?> /> Yes
                                            </label></div>
                      <div class="col-md-2">
                      <label class="label_radio" for="genomic_data">
                                                <input name="genomic_data" id="status_affected_member-02" value="No" type="radio" <?php if(old('genomic_data') == 'No' ): ?> 
                                                          checked="true" 
                                                        
                                                        <?php endif; ?>/> No
                                                      </label></div>
                      <div class="col-md-2">
                      <label class="label_radio" for="genomic_data">
                                                <input name="genomic_data" id="status_affected_member-03" value="Pending" type="radio" <?php if(old('genomic_data') == 'Pending' ): ?> 
                                                          checked="true" 
                                                        <?php endif; ?>/> Pending 
                                                      </label></div>
                  -->
                    



                <div class="form-group">
                  <label for="lab_name" class="col-lg-4 text-right control-label">Name of the Lab</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="lab_name" name="lab_name" value="<?php echo e(old('lab_name')); ?>">
                  </div>
                </div>

                 <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">Type of test data available</label>
                    <div class="radios col-lg-6" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="available_test_data">
                                                <input name="available_test_data[]" id="available_test_data-01" value="1" type="checkbox" 
                                                <?php if(is_array(old('available_test_data')) && 
                                                            in_array('1', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?> 
                                                /> Whole Exome Sequencing
                                            </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-02" value="2" type="checkbox" 
                                                <?php if(is_array(old('available_test_data')) && 
                                                            in_array('2', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?>
                                                        /> Whole Genome Sequencing
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-03" value="3" type="checkbox" 
                                                <?php if(is_array(old('available_test_data')) && 
                                                            in_array('3', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?>

                                                /> Panel 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-04" value="4" type="checkbox" <?php if(is_array(old('available_test_data')) && 
                                                            in_array('4', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?>/> Array 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="5" type="checkbox" <?php if(is_array(old('available_test_data')) && 
                                                            in_array('5', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?>/>  Other NGS 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="6" type="checkbox" <?php if(is_array(old('available_test_data')) && 
                                                            in_array('6', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?>/>  RNASeq 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="7" type="checkbox" <?php if(is_array(old('available_test_data')) && 
                                                            in_array('7', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?>/>  Transcriptomic 
                                                      </label>
                    
                    </div>
                </div> 

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other type of test data</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_test_data" name="other_test_data" value="<?php echo e(old('other_test_data')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">If exome/genome: Singleton/Trio/Quad</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="exome_genome" name="exome_genome" value="<?php echo e(old('exome_genome')); ?>">
                  </div>
                </div>

                <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">Platform</label>
                    <div class="col-md-7 radios" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-01" value="1" type="radio" <?php if(old('platform') == '1' ): ?> 
                                                          checked="true"      
                                                        <?php endif; ?> /> Illumina Omni-1630
                                            </label>
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-02" value="2" type="radio" <?php if(old('platform') == '2' ): ?> 
                                                          checked="true" 
                                                        
                                                        <?php endif; ?>/> Illumina 610507
                                                      </label>
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-03" value="3" type="radio" <?php if(old('platform') == '3' ): ?> 
                                                          checked="true" 
                                                        <?php endif; ?>/> Illumina850k_CytoSNP318 
                                                      </label>
                       <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-04" value="4" type="radio" <?php if(old('platform') == '4' ): ?> 
                                                          checked="true" 
                                                        <?php endif; ?>/>  Illumina Omni-5293 
                                                      </label>
                       <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-05" value="5" type="radio" <?php if(old('platform') == '5' ): ?> 
                                                          checked="true" 
                                                        <?php endif; ?>/> Other 
                                                      </label>
                    
                    </div>
                </div>

                <div class="form-group other_platform" style="display: none;">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other Platform</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_platform" name="other_platform" value="<?php echo e(old('other_platform')); ?>">
                  </div>
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
                      <input type="text" class="form-control" id="study_id"  name="study_id" 
                      value="<?php if(old('study_id')): ?><?php echo e(old('study_id')); ?> <?php else: ?> RIMGC<?php echo e(str_pad($maxFamilyId, 6, 0, STR_PAD_LEFT)); ?><?php endif; ?>" required="true">
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mrn" class="col-lg-3 text-right control-label">MRN</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="mrn" name="mrn" value="<?php echo e(old('mrn')); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lastName" class="col-lg-3 text-right control-label">Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo e(old('last_name')); ?>" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="firstName" class="col-lg-3 text-right control-label">First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo e(old('first_name')); ?>" required="true">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="dob" class="col-lg-3 text-right control-label">DOB</label>
                    <div class="col-lg-3">
                      
                      <input type="text" class="form-control" id="dob" class="datepicker"  name="dob" value="<?php echo e(old('dob')); ?>" required="true">
                    </div>
                    <div class="col-lg-3">
                       <label for="sex" class="col-lg-4 text-right control-label">Sex</label>
                    <select class="col-md-8 m-bot15" name="gender" style="border: 1px solid #ccc; color: #777; font-size: 11px; height: 22px;">
                          <option value="Male"  <?php if(old('gender') == 'Male' ): ?> 
                                                          selected="true" 
                                                        <?php endif; ?>>Male</option>
                        <option value="Female"  <?php if(old('gender') == 'Female' ): ?> 
                                                          selected="true" 
                                                        <?php endif; ?>>Female</option>
                        <option value="Other"  <?php if(old('gender') == 'Other' ): ?> 
                                                          selected="true" 
                                                        <?php endif; ?>>Other</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group other_gender" style="display: none">
                    <label for="other_gender" class="col-lg-3 text-right control-label">Other gender</label>
                    <div class="col-lg-6">
                      <select class="form-control  m-bot15" name="other_gender" id="gender">
                                                <option value="">---Select---</option>
                                                <option value="1" 
                                                          <?php if(old('other_gender') == '1' ): ?> 
                                                            selected="true" 
                                                          <?php endif; ?>
                                                >Not tested</option>
                                                <option value="2" 
                                                          <?php if(old('other_gender') == '2' ): ?> 
                                                                        selected="true" 
                                                                      <?php endif; ?>
                                                >XX genotype/Female</option>
                                                <option value="3"
                                                      <?php if(old('other_gender') == '3' ): ?> 
                                                                    selected="true" 
                                                                  <?php endif; ?>
                                                >XY genotype/Male</option>
                                                <option value="4"
                                                <?php if(old('other_gender') == '4' ): ?> 
                                                              selected="true" 
                                                            <?php endif; ?>
                                                >XXY Klinefelter's Syndrome</option>
                                                <option value="5"
                                                <?php if(old('other_gender') == '5' ): ?> 
                                                             selected="true" 
                                                            <?php endif; ?>
                                                >XO Turner's Syndrome</option>
                                                <option value="6"
                                                <?php if(old('other_gender') == '6' ): ?> 
                                                              selected="true"  
                                                            <?php endif; ?>
                                                >XXXY syndrome</option>
                                                <option value="7"
                                                <?php if(old('other_gender') == '7' ): ?> 
                                                              selected="true" 
                                                            <?php endif; ?>
                                                >XXYY syndrome</option>
                                                <option value="8"
                                                  <?php if(old('other_gender') == '8' ): ?> 
                                                               selected="true"  
                                                              <?php endif; ?>
                                                >Mosaic including XXXXY</option>
                                                <option value="9"
                                                <?php if(old('other_gender') == '9' ): ?> 
                                                              selected="true" 
                                                            <?php endif; ?>
                                                >Penta X syndrome</option>
                                                <option value="10"
                                                <?php if(old('other_gender') == '10' ): ?> 
                                                              selected="true" 
                                                            <?php endif; ?>
                                                >XYY</option>
                                                <option value="11"
                                                <?php if(old('other_gender') == '11' ): ?> 
                                                              selected="true" 
                                                            <?php endif; ?>
                                                >Unknown</option>
                                                 <option value="12"
                                                <?php if(old('other_gender') == '12' ): ?> 
                                                              selected="true" 
                                                            <?php endif; ?>
                                                >Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group additional_other_gender" style="display: none">
                    <label for="sdgId" class="col-lg-3 text-right control-label">Please specify Other gender</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="additional_other_gender" 
                      name="additional_other_gender" value="<?php echo e(old('additional_other_gender')); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sdgId" class="col-lg-3 text-right control-label">SDG ID</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="sdgId" name="sdg_id" value="<?php echo e(old('sdg_id')); ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="dnaBioBank" class="col-lg-3 text-right control-label">DNA In Biobank</label>
                    <div class="col-lg-6">
                      <div class="radios">
                        <label class="label_radio" for="radio-01">
                                                  <input name="dna_biobank" id="dna_biobank-01" value="Yes" type="radio" <?php if(old('dna_biobank') == 'Yes' ): ?> 
                                                            checked="true" 
                                                          <?php endif; ?>
                                                           /> Yes
                                              </label>
                        <label class="label_radio" for="radio-02">
                                                  <input name="dna_biobank" id="dna_biobank-02" value="No" type="radio" <?php if(old('dna_biobank') == 'No' ): ?> 
                                                            checked="true" 
                                                          <?php elseif(empty(old('dna_biobank'))): ?>
                                                           checked="true"
                                                          <?php endif; ?>/> No
                                              </label>
                        


                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="lclBioBank" class="col-lg-3 text-right control-label">LCL In Biobank</label>
                      <div class="col-lg-6">
                        <div class="radios">
                        <label class="label_radio" for="lcl_biobank1">
                                    <input name="lcl_biobank" id="lcl_biobank-01" value="Yes" type="radio" <?php if(old('lcl_biobank') == 'Yes' ): ?> 
                                                          checked="true"  
                                                          <?php endif; ?> /> Yes
                                              </label>
                        <label class="label_radio" for="lcl_biobank2">
                                    <input name="lcl_biobank" id="lcl_biobank-02" value="No" type="radio" <?php if(old('lcl_biobank') == 'No' ): ?>
                                                            checked="true" 
                                                          <?php elseif(empty(old('lcl_biobank'))): ?>
                                                           checked="true"
                                                          <?php endif; ?>/> No
                       
                      </div>
                    </div>
               </div>
                </div> 
                  <div class="form-group">
                    <label for="race" class="col-lg-3 text-right control-label">Race</label>
                    <div class="col-lg-4">
                      <select class="form-control  m-bot15" name="race">
                                                <option value="">---Select---</option>
                                                <option value="1" 
                                                          <?php if(old('race') == '1' ): ?> 
                                                            selected="true" 
                                                          <?php endif; ?>
                                                >American Indian or Alaska Native</option>
                                                <option value="2" 
                                                          <?php if(old('race') == '2' ): ?> 
                                                                        selected="true" 
                                                                      <?php endif; ?>
                                                >Asian</option>
                                                <option value="3"
                                                      <?php if(old('race') == '3' ): ?> 
                                                                    selected="true" 
                                                                  <?php endif; ?>
                                                >Black or African American</option>
                                                <option value="4"
                                                <?php if(old('race') == '4' ): ?> 
                                                              selected="true" 
                                                            <?php endif; ?>
                                                >Native Hawaiian or Other Pacific Islander</option>
                                                <option value="5"
                                                <?php if(old('race') == '5' ): ?> 
                                                             selected="true" 
                                                            <?php endif; ?>
                                                >White</option>
                                                <option value="6"
                                                <?php if(old('race') == '6' ): ?> 
                                                              selected="true"  
                                                            <?php endif; ?>
                                                >Multiple race</option>
                                                <option value="7"
                                                <?php if(old('race') == '7' ): ?> 
                                                              selected="true" 
                                                            <?php endif; ?>
                                                >Hispanic/Latino</option>
                                                <option value="8"
                                                  <?php if(old('race') == '8' ): ?> 
                                                               selected="true"  
                                                              <?php endif; ?>
                                                >Unknown</option>
                                                <option value="9"
                                                <?php if(old('race') == '9' ): ?> 
                                                              selected="true" 
                                                            <?php endif; ?>
                                                >Not available</option>
                      </select>
                    </div>
                    <label for="ethnicity" class="col-lg-1 text-right control-label">Ethnicity</label>
                    <div class="col-lg-4">
                    <select class="form-control  m-bot15" name="ethnicity">
                                            <option value="">---Select---</option>
                                            <option value="1" 
                                                  <?php if(old('ethnicity') == '1' ): ?> 
                                                      selected="true" 
                                                  <?php endif; ?>>
                                            Hispanic/latino</option>
                                            <option value="2" 
                                                  <?php if(old('ethnicity') == '2' ): ?> 
                                                      selected="true" 
                                                  <?php endif; ?>>
                                            Non-Hispanic/latino</option>
                                            <option value="3" 
                                                 <?php if(old('ethnicity') == '3' ): ?> 
                                                    selected="true" 
                                                  <?php endif; ?>>
                                            Unknown</option>
                                            <option value="4" 
                                                  <?php if(old('ethnicity') == '4' ): ?> 
                                                    selected="true" 
                                                  <?php endif; ?>>
                                            Not available</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                         <label for="ethnicity_follow_up" class="col-lg-3 text-right control-label">Ethnicity Follow up</label>
                    <div class="col-lg-6">
                    <select class="form-control  m-bot15" name="ethnicity_follow_up">
                                            <option value="">---Select---</option>
                                            <option value="1" 
                                                  <?php if(old('ethnicity_follow_up') == '1' ): ?> 
                                                      selected="true" 
                                                  <?php endif; ?>>
                                            Ashkenazi Jewish</option>
                                            <option value="2" 
                                                  <?php if(old('ethnicity_follow_up') == '2' ): ?> 
                                                      selected="true" 
                                                  <?php endif; ?>>
                                            Amish</option>
                                            <option value="3" 
                                                 <?php if(old('ethnicity_follow_up') == '3' ): ?> 
                                                    selected="true" 
                                                  <?php endif; ?>>
                                             French Canadian</option>
                                            <option value="4" 
                                                  <?php if(old('ethnicity_follow_up') == '4' ): ?> 
                                                    selected="true" 
                                                  <?php endif; ?>>
                                           None of the above</option>
                                           <option value="5" 
                                                  <?php if(old('ethnicity_follow_up') == '5' ): ?> 

                                                    selected="true" 
                                                  <?php endif; ?>>
                                           Unknown</option>
                    </select>

                  </div>
                  </div>
                   <div class="form-group">
                         <label for="primary_language" class="col-lg-3 text-right control-label">Primary Language</label>
                       <div class="radios" style="display: inline-block; margin-left: 20px;">
                            <label class="label_radio" for="lcl_biobank1">
                                                  <input name="primary_language[]" id="primary_language-01" value="English" type="checkbox"
                                                  <?php if(is_array(old('primary_language')) && 
                                                  in_array('English', old('primary_language'))): ?> 
                                                            checked="true" 
                                                           
                                                          <?php endif; ?> /> English
                            </label>
                            <label class="label_radio" for="lcl_biobank2">
                                                  <input name="primary_language[]" id="primary_language-02" value="Spanish" type="checkbox" <?php if(is_array(old('primary_language')) && 
                                                  in_array('Spanish', old('primary_language'))): ?> 
                                                            checked="true" 
                                                           
                                                          <?php endif; ?>/> Spanish
                           </label>
                            <label class="label_radio" for="lcl_biobank2">
                                                  <input name="primary_language[]" id="primary_language-03" value="Other" type="checkbox"
                                                  <?php if(is_array(old('primary_language')) && 
                                                  in_array('Other', old('primary_language'))): ?> 
                                                            checked="true" 
                                                           
                                                          <?php endif; ?>/> Other
                           </label>
                       
                      </div>
                    
                  </div>
                   <div class="form-group other_language" style="display: none">
                    <label for="other_language" class="col-lg-3 text-right control-label">Other Language</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_language" name="other_language" value="<?php echo e(old('other_language')); ?>">
                    </div>
                  </div>


                  <div class="form-group comment" style="margin-bottom: 10px;">
                      <label for="comment" class="col-lg-3 text-right control-label">Comments</label>
                      <div class="col-md-6">
                       <textarea class="form-control" name="comment" rows="4" cols="4"><?php echo e(old('comment')); ?></textarea>
                     </div>
                    </div>
                    <div class="form-group">
                    <label for="sdgId" class="col-lg-3 text-right control-label">Number of DNA vials submitted to BioRC</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="dna_vials_submission" name="dna_vials_submission" value="<?php echo e(old('dna_vials_submission')); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sdgId" class="col-lg-3 text-right control-label">Number of LCL vials submitttedto BioRc</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="lcl_vials_submission" name="lcl_vials_submission" value="<?php echo e(old('lcl_vials_submission')); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sdgId" class="col-lg-3 text-right control-label">Number of other vials submitted to BioRC</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_vials_submission" name="other_vials_submission" value="<?php echo e(old('other_vials_submission')); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="first_submission_date" class="col-lg-3 text-right control-label">Date of BioRC submission (first submission)</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="first_submission_date" name="first_submission_date" value="<?php echo e(old('first_submission_date')); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="second_submission_date" class="col-lg-3 text-right control-label">Date of BioRC submission (second submission)</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="second_submission_date" name="second_submission_date" value="<?php echo e(old('second_submission_date')); ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label for="third_submission_date" class="col-lg-3 text-right control-label">Date of BioRC submission (third submission)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="third_submission_date" name="third_submission_date" value="<?php echo e(old('third_submission_date')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dna_ratio" class="col-lg-3 text-right control-label">DNA Ratio (260/280)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="dna_ratio" name="dna_ratio" value="<?php echo e(old('dna_ratio')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dna_conc" class="col-lg-3 text-right control-label">DNA conc. (ng/ul)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="dna_conc" name="dna_conc" value="<?php echo e(old('dna_conc')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="volume" class="col-lg-3 text-right control-label">Volume (ul)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="volume" name="volume" value="<?php echo e(old('volume')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="biorc_id" class="col-lg-3 text-right control-label">BioRC ID (SDG ID)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="biorc_id" name="biorc_id" value="<?php echo e(old('biorc_id')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Tube Barcode</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="tube_barcode" name="tube_barcode" value="<?php echo e(old('tube_barcode')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other Barcode </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_barcode" name="other_barcode" value="<?php echo e(old('other_barcode')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Box Number/Other Box Details</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="box_number_details" name="box_number_details" value="<?php echo e(old('box_number_details')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Plate position</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="plate_position" name="plate_position" value="<?php echo e(old('plate_position')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other Sample info or notes</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_sample_info" name="other_sample_info" value="<?php echo e(old('other_sample_info')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other notes from BioRC </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_note_biorc" name="other_note_biorc" value="<?php echo e(old('other_note_biorc')); ?>">
                  </div>
                </div>

                <div class="form-group">
                   <label for="status_affected_member" class="col-md-3 text-right control-label">File types available</label>
                    <div class="radios col-md-7" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-01" value="BAM" type="checkbox" 
                                                <?php if(is_array(old('file_type_available')) && 
                                                            in_array('BAM', old('file_type_available'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?> /> BAM
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-02" value="FASTQ" type="checkbox" 
                                                <?php if(is_array(old('file_type_available')) && 
                                                            in_array('FASTQ', old('file_type_available'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?>/> FASTQ
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-03" value="VCF" type="checkbox" 
                                                <?php if(is_array(old('file_type_available')) && 
                                                            in_array('VCF', old('file_type_available'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?>/> VCF 
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-03" value="GVCF" type="checkbox" 
                                                <?php if(is_array(old('file_type_available')) && 
                                                            in_array('GVCF', old('file_type_available'))): ?> 
                                                            checked="true" 
                                                         
                                                        <?php endif; ?>/> GVCF 
                                                      </label>
                    
                    </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Filename</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="filename" name="filename" value="<?php echo e(old('filename')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Receipt Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="receipt_date" name="receipt_date" value="<?php echo e(old('receipt_date')); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-3 text-right control-label">Transfer Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="transfer_date" name="transfer_date" value="<?php echo e(old('transfer_date')); ?>">
                  </div>
                </div>
               </div>
            </section>

          </div>
        </div>
      </div>
      <!-- Inline form-->
      
      <div class="container-fluid text-form">
        <div class="row">
          <div class="col-md-12">
            <?php echo $__env->make('admin.form.test_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
        </div>
      </div>

      <div class="container-fluid text-form concent">
        <div class="row">
          <div class="col-md-12">
           <?php echo $__env->make('admin.form.consent_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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

  $("#subject").on('change', ()=>{
     let subjectval = $("#subject").val();
     let study = $("#study_id").val().slice(1);
     let all = study+subjectval;
      $("#study_id").val(all);
  });

  });
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>