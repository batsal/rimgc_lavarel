<?php $__env->startSection('content'); ?>

<form name="research" class="form-horizontal" method="post" role="form" action='<?php echo e(route("form.update",$id)); ?>'>
      <?php echo e(csrf_field()); ?>

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
                       <a href="<?php echo e(route('form.create')); ?>" class="btn btn-primary">Enroll New Subjects</a>&nbsp;&nbsp;
                       <a href="<?php echo e(route('form.index')); ?>" class="btn btn-primary">View All enrolled subjects</a>&nbsp;&nbsp;
                       <?php if(Auth::user()->authorizeRoles(['admin'])): ?>
                       <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary">BackToMain</a>
                       <?php endif; ?>
                  </section>
                </div>
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
                  <section class="panel head-f">                    
                    <div class="col-md-offset-1  panel-body">

                      
                        <div class="inline text-left">
                          <label for="createdBy" class="col-lg-5 control-label">Created BY</label>
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="createdBy" name="created_by" disabled="true" value="<?php echo e(Auth::user()->name); ?>" disabled="true">
                           
                          </div>
                        </div>
                        <div class="inline text-left">
                          <label for="created_date" class="col-lg-6 control-label">Created Date</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="created_date" name="created_date" 
                             value="<?php if(!empty(old('created_at'))): ?><?php echo e(old('created_date')); ?> <?php elseif(!empty($edit)): ?> <?php echo e(date('m/d/Y',strtotime($edit -> created_at))); ?><?php endif; ?>">
                          </div>
                        </div>

                        <div class="inline text-left">
                          <label for="inputPassword1" class="col-lg-5 control-label">Family ID</label>
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="family_id" name="family_id" 
                            value="<?php if(!empty(old('family_id'))): ?> <?php echo e(old('family_id')); ?> <?php elseif(!empty($edit)): ?> <?php echo e(@$edit -> family_id); ?><?php endif; ?>">
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
                    <label for="enrolled">Enrolled</label>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control  m-bot15" name="enrolled">
                                              <option value="No" <?php if(old('enrolled') =='Yes'): ?> selected <?php elseif("No"==$edit->enrolled): ?> selected <?php endif; ?>>No
                                              </option>
                                              <option value="Yes" <?php if(old('enrolled') =='Yes'): ?> selected <?php elseif("Yes"==$edit->enrolled): ?>   selected <?php endif; ?> >Yes</option>
                                          </select>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 text-right">
                    <label for="enrolled_study">Date of Enrollment</label>
                    </div>

                    <div class="col-md-6">
                     <input type="text" class="form-control" id="enrolled_date" name="enrolled_date" value="<?php if(old('enrolled_date')): ?><?php echo e(old('enrolled_date')); ?> <?php else: ?> <?php echo e($edit -> enrolled_date); ?> <?php endif; ?>">
                    </div>
                  </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="enrolled_study">Enrolling Study</label>
                  </div>

                  <div class="col-md-6">
                  <input type="text" class="form-control" id="enrolled_study" 
                   name="enrolled_study" value="<?php if(old('enrolled_study')): ?><?php echo e(old('enrolled_study')); ?> <?php else: ?> <?php echo e($edit -> enrolled_study); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="enrolled_study_irb">Enrolling Study IRB</label>
                  </div>

                  <div class="col-md-6">
                  <input type="text" class="form-control" id="enrolled_study_irb" 
                   name="enrolled_study_irb" 
                   value="<?php if(old('enrolled_study_irb')): ?><?php echo e(old('enrolled_study_irb')); ?> <?php else: ?> <?php echo e($edit -> enrolled_study_irb); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="enrolled_study_pi">Enrolling Study PI</label>
                  </div>

                  <div class="col-md-6">
                  <input type="text" class="form-control" id="enrolled_study_pi" 
                   name="enrolled_study_pi" 
                   value="<?php if(old('enrolled_study_pi')): ?><?php echo e(old('enrolled_study_pi')); ?> <?php else: ?> <?php echo e($edit -> enrolled_study_pi); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="sampleRecDate">Sample Rec Date</label>
                  </div>

                  <div class="col-md-6">
                  <input type="text" class="form-control" id="sampleRecDate" name="sample_recorded_date" 
                       value="<?php if(!empty(old('sample_recorded_date'))): ?> <?php echo e(old('sample_recorded_date')); ?>  <?php elseif(!empty($edit)): ?> <?php echo e(date('m/d/Y',strtotime($edit -> sample_recorded_date))); ?> <?php endif; ?>">
                </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="subject">Family Member Relationship</label>
                </div>
                 <div class="col-md-6">
                  <select class="form-control  m-bot15" name="subject" id="subject">
                      <option value="F"   <?php if(old('subject') =='F'): ?> selected <?php elseif("F"==$edit->subject): ?>   selected <?php endif; ?> >Father</option>
                      <option value="M"   <?php if(old('subject') =='M'): ?> selected <?php elseif("M"==$edit->subject): ?>   selected <?php endif; ?>>Mother</option>
                      <option value="O"    <?php if(old('subject') =='O'): ?> selected <?php elseif("O"==$edit->subject): ?>    selected <?php endif; ?>>Other</option>
                      <option value="P"  <?php if(old('subject') =='P'): ?> selected <?php elseif("P"==$edit->subject): ?>  selected <?php endif; ?>>Proband</option>
                      <option value="S"<?php if(old('subject') =='S'): ?> selected <?php elseif("S"==$edit->subject): ?> selected <?php endif; ?>>Sibling</option>
                  </select>
                </div>
              </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                    <label for="affected">Family Member Number</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="member_number" name="member_number"
                     value="<?php if(!empty(old('member_number'))): ?> <?php echo e(old('member_number')); ?>  <?php elseif(!empty($edit)): ?> <?php echo e(@$edit -> member_number); ?><?php endif; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                    <label for="affected">Other Family Member</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="other_member" name="other_member"
                     value="<?php if(!empty(old('other_member'))): ?> <?php echo e(old('other_member')); ?>  <?php elseif(!empty($edit)): ?> <?php echo e(@$edit -> other_member); ?><?php endif; ?>">
                  </div>
                </div>
                 <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Affected Status</label>
                    </div>
                    <div class="col-md-6">
                      <label class="label_radio" for="radio-01">
                            <input name="affected" id="radio-01" value="A" type="radio" 
                            <?php if(old('affected') =='A'): ?> checked <?php elseif("A"==$edit->affected): ?> checked <?php endif; ?> /> Affected
                      </label>
                      <label class="label_radio" for="radio-02">
                            <input name="affected" id="radio-02" value="U" type="radio" 
                            <?php if(old('affected') =='U'): ?> checked 
                            <?php elseif("U"==$edit->affected): ?>   checked <?php endif; ?> /> Unaffected
                      </label>
                      <label class="label_radio" for="radio-03">
                            <input name="affected" id="radio-03" value="O" type="radio" 
                            <?php if(old('affected') =='O'): ?> checked elseif("O"==$edit->affected) checked <?php endif; ?>/> Unknown
                      </label>
                  </div>
                  </div>

                <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Family Id Note</label>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control  m-bot15" name="family_option" id="family_option">
                          <option value="F"  <?php if(old('family_option') =='1'): ?> selected <?php elseif("1"==$edit->family_option): ?>   selected <?php endif; ?> >1</option>
                          <option value="M"  <?php if(old('family_option') =='2'): ?> selected <?php elseif("2"==$edit->family_option): ?>   selected <?php endif; ?>>2</option>
                          <option value="O"  <?php if(old('family_option') =='3'): ?> selected <?php elseif("3"==$edit->family_option): ?>    selected <?php endif; ?>>3</option>
                          <option value="P"  <?php if(old('family_option') =='4'): ?> selected <?php elseif("4"==$edit->family_option): ?>  selected <?php endif; ?>>4</option>
                          <option value="S"  <?php if(old('family_option') =='5'): ?> selected <?php elseif("5"==$edit->family_option): ?> selected <?php endif; ?>>5</option>
                          <option value="S"  <?php if(old('family_option') =='6'): ?> selected <?php elseif("6"==$edit->family_option): ?> selected <?php endif; ?>>6</option>
                          <option value="S"  <?php if(old('family_option') =='7'): ?> selected <?php elseif("7"==$edit->family_option): ?> selected <?php endif; ?>>7</option>
                          <option value="S"  <?php if(old('family_option') =='8'): ?> selected <?php elseif("8"==$edit->family_option): ?> selected <?php endif; ?>>8</option>
                          <option value="S"  <?php if(old('family_option') =='9'): ?> selected <?php elseif("9"==$edit->family_option): ?> selected <?php endif; ?>>9</option>
                      </select>
                     <!--  <input type="text" class="form-control" id="family_option" name="family_option"
                       value="<?php if(old('sample')): ?><?php echo e(old('family_option')); ?> <?php elseif( $edit ->family_option ): ?> <?php echo e($edit ->family_option); ?> <?php endif; ?>"> -->
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4 text-right">
                      <label for="affected">Other Family Member</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="other_member" name="other_member"
                       value="<?php if(old('sample')): ?><?php echo e(old('other_member')); ?> <?php elseif( $edit ->other_member ): ?> <?php echo e($edit ->other_member); ?> <?php endif; ?>">
                    </div>
                </div>

                <div class="radios">
                  <div class="col-md-4 text-right">
                   <label for="sample">Sample Collected?</label>
                  </div>
                  <div class="col-md-2">
                        <label class="label_radio" for="radio-01">
                                                  <input name="sample" id="radio-01" value="Yes" type="radio" 
                                                  <?php if(old('sample') =='Yes'): ?> checked <?php elseif("Yes"==$edit->sample): ?>   checked <?php endif; ?>  /> Yes
                                              </label></div>
                  <div class="col-md-2">
                        <label class="label_radio" for="radio-02">
                                                  <input name="sample" id="radio-02" value="No" type="radio" 
                                                  <?php if(old('sample') =='No'): ?> checked <?php elseif("No"==$edit->sample): ?>   checked <?php endif; ?> /> No
                                              </label></div>
                  <div class="col-md-2">
                        <label class="label_radio" for="radio-03">
                                                  <input name="sample" id="radio-03" value="Pending" type="radio" <?php if(old('sample') =='Pending'): ?> checked <?php elseif("Pending"==$edit->sample): ?>   checked <?php endif; ?> /> Pending
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
                                            <option value="1p" <?php if(old('tube_type') =='1p'): ?> selected <?php elseif("1p"==$edit->tube_type): ?>   selected <?php endif; ?>>1p
                                            </option>
                                            <option value="1g" <?php if(old('tube_type') =='1g'): ?> selected <?php elseif("1g"==$edit->tube_type): ?>   selected <?php endif; ?>>1g
                                            </option>
                                            <option value="1y" <?php if(old('tube_type') =='1y'): ?> selected <?php elseif("1y"==$edit->tube_type): ?>  selected <?php endif; ?>>1y
                                            </option>
                                            <option value="1p/1g"<?php if(old('tube_type') =='1p/1g'): ?> selected <?php elseif("1p/1g"==$edit->tube_type): ?>   selected <?php endif; ?>>1p/1g
                                            </option>
                                            <option value="2p/2g" <?php if(old('tube_type') =='2p/2g'): ?> selected <?php elseif("2p/2g"==$edit->tube_type): ?>  selected <?php endif; ?>>2p/2g
                                            </option>
                                            <option value="1p/2g"
                                            <?php if(old('tube_type') =='1p/2g'): ?> selected <?php elseif("1p/2g"==$edit->tube_type): ?>   selected <?php endif; ?>>1p/2g
                                            </option>
                                            <option value="other" 
                                             <?php if(old('tube_type') =='other'): ?> selected <?php elseif("other"==$edit->tube_type): ?>  selected <?php endif; ?>>other
                                            </option>
                                            
                                        </select>
                </div>
              </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="sampleType">Sample Type</label>
                </div>
                <!-- <div class="col-md-6">
                  <select class="form-control  m-bot15" name="sample_type">
                                            <option value="">---Select ---</option>
                                            <option value="Cell" <?php if(old('sample_type') =='Cell'): ?> selected <?php elseif("Cell"==$edit->sample_type): ?>   selected <?php endif; ?>>Cell Line Only</option>
                                            <option value="DNA" <?php if(old('sample_type') =='DNA'): ?> selected <?php elseif("DNA"==$edit->sample_type): ?>   selected <?php endif; ?>>DNA only</option>
                                            <option value="Cell/DNA" <?php if(old('sample_type') =='Cell/DNA'): ?> selected <?php elseif("Cell/DNA"==$edit->sample_type): ?>   selected <?php endif; ?>>Cell Line /DNA</option>
                                        </select>
                </div> -->
              </div>
                <div class="col-md-offset-1 col-lg-9">
                    <section class="panel non-chop">
                      <label>
                        Non CHOP Exome
                      </label>
                      <div class="panel-body" style="display: inline-block; float: right;">
                          <div class="form-group">
                            <div class="checkbox"><input type="checkbox" name="non_chop_exome" value="1" 
                                <?php if(old('non_chop_exome') == '1' ): ?> checked="true" <?php elseif($edit -> non_chop_exome=='1'): ?> checked="true"  <?php endif; ?>> 
                              <p>Data Transfer Outside Source</p><label class="" for="labUsed" style="font-weight: 600; width: 28%">Lab Used</label>
                              <select class="form-control  m-bot15" name="lab_used" id="lab_used" style="width: 65%;">
                                    <option value="0">-----Select-----</option>
                                    
                                    <?php $__currentLoopData = $lab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($l->lab_id); ?>" <?php if(old('lab_used') ==$l->lab_id): ?> selected <?php elseif($l->lab_id == $edit -> lab_id): ?> selected <?php endif; ?>><?php echo e($l->lab_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
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
                                                <input name="project_name" id="project_name-01" value="1" type="radio" <?php if(old('project_name') == '1' ): ?> 
                                                          checked="true" 
                                                  <?php elseif($edit->project_name == '1'): ?>
                                                      checked="true"       
                                                        <?php endif; ?> /> GRIN
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="2" type="radio" <?php if(old('project_name') == '2' ): ?> 
                                                          checked="true" 
                                                       
                                                        <?php elseif($edit->project_name == '2'): ?>
                                                         checked="true" 
                                                        <?php endif; ?>/> IMGC
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="3" type="radio" <?php if(old('project_name') == '3' ): ?> 
                                                          checked="true" 
                                                        <?php elseif($edit->project_name == '3'): ?>
                                                         checked="true" 
                                                        <?php endif; ?>/> EGRP (Ingo's epilepsy) 
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="4" type="radio" <?php if(old('project_name') == '4' ): ?> 
                                                          checked="true" 
                                                        <?php elseif($edit->project_name == '4'): ?>
                                                         checked="true" 
                                                        
                                                        <?php endif; ?>/> PediSeq
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="5" type="radio" <?php if(old('project_name') == '5' ): ?> 
                                                          checked="true" 
                                                        <?php elseif($edit->project_name == '5'): ?>
                                                         checked="true" 
                                                        
                                                        <?php endif; ?>/> Hearing Loss (Ian) 
                                                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="project_name" id="project_name-02" value="6" type="radio" <?php if(old('project_name') == '6' ): ?> 
                                                          checked="true"
                                                        <?php elseif($edit->project_name == '6'): ?>
                                                         checked="true"  
                                                        
                                                        <?php endif; ?>/> CdLS
                                                      </label>
                     
                    </div>
                </div>


               <!--  <div class="form-group">


                   <label for="status_affected_member" class="col-md-4 text-right control-label">Affected status for family members</label>
                    <div class="radios col-md-6" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-01" value="Unaffected" type="radio" <?php if(old('status_affected_member') ==   'Unaffected' ): ?> 
                                                          checked="true" 
                                                  <?php elseif($edit->status_affected_member == 'Unaffected'): ?>
                                                         checked="true"  
                                                  <?php elseif(empty(old('status_affected_member'))): ?>
                                                         checked="true"       
                                                        <?php endif; ?> /> Unaffected
                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-02" value="Affected" type="radio" 
                                                <?php if(old('status_affected_member') == 'Affected' ): ?> 
                                                          checked="true" 
                                                <?php elseif($edit->status_affected_member == 'Affected'): ?>
                                                         checked="true" 
                                                <?php endif; ?>/> Affected
                      </label>
                      <label class="label_radio" for="project_name">
                                                <input name="status_affected_member" id="status_affected_member-03" value="Unknown" type="radio" <?php if(old('status_affected_member') == 'Unknown' ): ?> 
                                                          checked="true" 
                                                  <?php elseif($edit->status_affected_member == 'Unknown'): ?>
                                                         checked="true" 
                                                  <?php endif; ?>/> Unknown 
                      </label>
                    
                    </div>

                </div> -->


                <div class="form-group">
                    <label for="primary_sample_type" class="col-lg-4 text-right control-label">Primary Sample Type</label>
                      <div class="col-lg-7">
                        <div class="radios">
                          <label class="label_radio" for="checkbox-01">
                                  <input name="primary_sample_type[]" id="primary_sample_type-01" value="1" type="checkbox" 
                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('1', old('primary_sample_type'))): ?> 
                                                            checked="true"
                                    <?php elseif(is_array(unserialize($edit->primary_sample_type)) &&in_array('1',unserialize($edit->primary_sample_type))): ?>
                                                         checked="true" 
                                    <?php endif; ?>
                                                   
                                                             /> Whole Blood 
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                  <input name="primary_sample_type[]" id="primary_sample_type-02" value="2" type="checkbox" 
                                          <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('2', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                         <?php elseif(is_array(unserialize($edit->primary_sample_type)) &&in_array('2',unserialize($edit->primary_sample_type))): ?>
                                                         checked="true"
                                          <?php endif; ?>/> Serum
                          </label>
                          <label class="label_radio" for="checkbox-02">
                                  <input name="primary_sample_type[]" id="primary_sample_type-02" value="3" type="checkbox" 
                                      <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('3', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                      <?php elseif(is_array(unserialize($edit->primary_sample_type )) &&in_array('3',unserialize($edit->primary_sample_type))): ?>
                                                         checked="true"
                                                         checked="true" 
                                      <?php endif; ?>/> Plasma
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="4" type="checkbox" 
                                      <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('4', old('primary_sample_type'))): ?> 

                                                            checked="true" 
                                      <?php elseif(is_array(unserialize($edit->primary_sample_type)) &&in_array('4',unserialize($edit->primary_sample_type))): ?>
                                                         checked="true"
                                                    <?php endif; ?>/> DNA
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="5" type="checkbox" 
                                          <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('5', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                          <?php elseif(is_array(unserialize($edit->primary_sample_type)) && in_array('5',unserialize($edit->primary_sample_type))): ?>
                                                         checked="true"
                                          <?php endif; ?>/> Cell line (LCL)
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                          <input name="primary_sample_type[]" id="primary_sample_type-02" value="6" type="checkbox" 
                                          <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('6', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                          <?php elseif(is_array(unserialize($edit->primary_sample_type )) && in_array('6',unserialize($edit->primary_sample_type))): ?>
                                                         checked="true"
                                          <?php endif; ?>/> Tissue
                                                </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="7" type="checkbox" 
                                      <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('7', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                      <?php elseif(is_array(unserialize($edit->primary_sample_type )) &&in_array('7',unserialize($edit->primary_sample_type))): ?>
                                                         checked="true"

                                                    <?php endif; ?>/> Saliva
                          </label>
                          <label class="label_radio" for="checkbox-02">
                                                    <input name="primary_sample_type[]" id="primary_sample_type-02" value="8" type="checkbox" 
                                    <?php if(is_array(old('primary_sample_type')) && 
                                                            in_array('8', old('primary_sample_type'))): ?> 
                                                            checked="true" 
                                    <?php elseif(is_array(unserialize($edit->primary_sample_type )) && in_array('8',unserialize($edit->primary_sample_type))): ?>
                                                         checked="true"
                                    <?php endif; ?>/> Other
                          </label>
                          
                        </div>
                      </div>
                    </div>
                      <div class="form-group primary_sample_type_other"  <?php if(is_array(unserialize($edit->primary_sample_type )) && in_array('8',unserialize($edit->primary_sample_type))): ?> style="display: block"  <?php else: ?> style="display: none" <?php endif; ?>>
                        <div class="" >
                          <label for="sdgId" class="col-lg-4 text-right control-label"> Other Primary  type</label>
                          <div class="col-lg-6">
                            <input type="text" class="form-control" id="primary_sample_type_other" 
                            name="primary_sample_type_other" 
                            value="<?php if(old('primary_sample_type_other')): ?> <?php echo e(old('primary_sample_type_other')); ?> <?php elseif($edit->primary_sample_type_other): ?> <?php echo e($edit->primary_sample_type_other); ?> <?php endif; ?>">
                          </div>
                        </div>
                      </div>
                <div class="form-group tissue_type" <?php if(is_array(unserialize($edit->primary_sample_type )) && in_array('6',unserialize($edit->primary_sample_type))): ?> style="display: block"  <?php else: ?> style="display: none" <?php endif; ?>>
                  <label for="sdgId" class="col-lg-4 text-right control-label">Tissue Type</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="tissue_type" name="tissue_type" 
                    value="<?php if(old('tissue_type')): ?><?php echo e(old('tissue_type')); ?> <?php elseif($edit->tissue_type): ?> <?php echo e($edit->tissue_type); ?> <?php endif; ?>">
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Passage #</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="passage" name="passage" 
                    value="<?php if(old('passage')): ?><?php echo e(old('passage')); ?> <?php elseif($edit->passage): ?> <?php echo e($edit->passage); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Sample age</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="sample_age" name="sample_age" 
                    value="<?php if(old('sample_age')): ?>
                              <?php echo e(old('sample_age')); ?> <?php elseif($edit->sample_age): ?> 
                            <?php echo e($edit->sample_age); ?> <?php endif; ?>">
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
                                              <?php elseif(is_array(unserialize($edit->derived_sample_type) ) && in_array('1',unserialize($edit->derived_sample_type))): ?>
                                                         checked="true"
                                                    <?php endif; ?>
                                                         /> Whole Blood 
                      </label>
                      <label class="label_radio" for="checkbox-02">
                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="2" type="checkbox" 
                                      <?php if(is_array(old('derived_sample_type')) && 
                                      in_array('2', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                      <?php elseif(is_array(unserialize($edit->derived_sample_type)) && in_array('2',unserialize($edit->derived_sample_type))): ?>
                                                         checked="true"
                                                    <?php endif; ?>/> Serum
                      </label>
                      <label class="label_radio" for="checkbox-02">
                                  <input name="derived_sample_type[]" id="primary_sample_type-02" value="3" 
                                                type="checkbox" 
                                                <?php if(is_array(old('derived_sample_type')) && 
                                                            in_array('3', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit->derived_sample_type )) && in_array('3',unserialize($edit->derived_sample_type))): ?>
                                                         checked="true"
                                                    <?php endif; ?>/> Plasma
                      </label>
                      <label class="label_radio" for="checkbox-02">
                                  <input name="derived_sample_type[]" id="primary_sample_type-02" value="4" type="checkbox" 
                                                <?php if(is_array(old('derived_sample_type')) && 
                                                            in_array('4', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit->derived_sample_type) ) && in_array('4',unserialize($edit->derived_sample_type))): ?>
                                                         checked="true"
                                                <?php endif; ?>/> DNA
                      </label>
                      <label class="label_radio" for="checkbox-02">
                                  <input name="derived_sample_type[]" id="primary_sample_type-02" value="5" type="checkbox" 
                                                <?php if(is_array(old('derived_sample_type')) && 
                                                            in_array('5', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit->derived_sample_type)) && in_array('5',unserialize($edit->derived_sample_type))): ?>
                                                         checked="true"
                                                <?php endif; ?>/> Cell line (LCL)
                      </label>
                      <label class="label_radio" for="checkbox-02">
                                  <input name="derived_sample_type[]" id="primary_sample_type-02" value="6" type="checkbox" <?php if(old('derived_sample_type') == '6' ): ?> 
                                                          checked="true" 
                                                <?php elseif(is_array(unserialize($edit->derived_sample_type) ) && in_array('6',unserialize($edit->derived_sample_type))): ?>
                                                         checked="true"
                                                <?php endif; ?>/> Tissue
                      </label>
                      
                       <label class="label_radio" for="checkbox-02">
                                <input name="derived_sample_type[]" id="primary_sample_type-02" value="7" type="checkbox" 
                                  <?php if(is_array(old('derived_sample_type')) && 
                                                            in_array('7', old('derived_sample_type'))): ?> 
                                                            checked="true" 
                                  <?php elseif(is_array(unserialize($edit->derived_sample_type)) && in_array('7',unserialize($edit->derived_sample_type))): ?>
                                                         checked="true"
                                  <?php endif; ?>/> Other
                      </label>
                      
                    </div>
                  </div>
                   <div class="form-group other_derived_sample"  <?php if(is_array(unserialize($edit->derived_sample_type )) && in_array('7',unserialize($edit->derived_sample_type))): ?> style="display: block"  <?php else: ?> style="display: none" <?php endif; ?>>
                    <label for="sdgId" class="col-lg-4 text-right control-label">Other Derived Type</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_derived_sample" name="other_derived_sample" value="<?php if(old('other_derived_sample')): ?>
                              <?php echo e(old('other_derived_sample')); ?> <?php elseif($edit->other_derived_sample): ?> 
                            <?php echo e($edit->other_derived_sample); ?> <?php endif; ?>">
                    </div>
                </div>
            
                

                <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">Genomic Data Obtained?</label>
                    <div class="radios col-md-6" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                            <input name="genomic_data" id="status_affected_member-01" value="Yes" type="radio" <?php if(old('genomic_data') == 'Yes' ): ?> 
                                                        checked="true" 
                                                <?php elseif(empty(old('genomic_data'))): ?>
                                                        checked="true"  
                                                <?php elseif($edit->genomic_data == 'Yes'): ?> 
                                                        checked="true" 
                                                <?php endif; ?> /> Yes
                      </label>
                      <label class="label_radio" for="project_name">
                            <input name="genomic_data" id="status_affected_member-02" value="No" type="radio" <?php if(old('genomic_data') == 'No' ): ?> 
                                                          checked="true" 
                                                <?php elseif($edit->genomic_data =='No'): ?> 
                                                        checked="true"        
                                                <?php endif; ?>/> No
                      </label>
                      <label class="label_radio" for="project_name">
                            <input name="genomic_data" id="status_affected_member-03" value="Pending" type="radio" <?php if(old('genomic_data') == 'Pending' ): ?> 
                                                          checked="true" 
                                                        <?php endif; ?>/> Pending 
                      </label>
                    
                    </div>
                </div>

                <div class="form-group">
                  <label for="lab_name" class="col-lg-4 text-right control-label">Name of the Lab</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="lab_name" name="lab_name" 
                    value="<?php if(old('lab_name')): ?>
                              <?php echo e(old('lab_name')); ?> 
                      <?php elseif($edit->lab_name): ?> 
                            <?php echo e($edit->lab_name); ?> <?php endif; ?>">
                  </div>
                </div>

                 <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">Type of test data available</label>
                    <div class="radios col-md-6 " style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-01" value="1" type="checkbox" 
                                                <?php if(is_array(old('available_test_data')) && 
                                                            in_array('1', old('available_test_data'))): ?> 
                                                            checked="true"
                                                <?php elseif(is_array(unserialize($edit->available_test_data) ) && in_array('1',unserialize($edit->available_test_data))): ?>
                                                         checked="true"
                                                         
                                                        <?php endif; ?> 
                                                /> Whole Exome Sequencing
                                            </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-02" value="2" type="checkbox" 
                                                <?php if(is_array(old('available_test_data')) && 
                                                            in_array('2', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit->available_test_data)) && in_array('2',unserialize($edit->available_test_data))): ?>
                                                         checked="true"         
                                                        <?php endif; ?>
                                                        /> Whole Genome Sequencing
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-03" value="3" type="checkbox" 
                                                <?php if(is_array(old('available_test_data')) && 
                                                            in_array('3', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit->available_test_data)) && in_array('3',unserialize($edit->available_test_data))): ?>
                                                         checked="true"         
                                                        <?php endif; ?>

                                                /> Panel 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-04" value="4" type="checkbox" <?php if(is_array(old('available_test_data')) && 
                                                            in_array('4', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit->available_test_data)) && in_array('4',unserialize($edit->available_test_data))): ?>
                                                         checked="true"         
                                                        <?php endif; ?>/> Array 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="5" type="checkbox" <?php if(is_array(old('available_test_data')) && 
                                                            in_array('5', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit->available_test_data )) && in_array('5',unserialize($edit->available_test_data))): ?>
                                                         checked="true"
                                                        <?php endif; ?>/>  Other NGS 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="6" type="checkbox" <?php if(is_array(old('available_test_data')) && 
                                                            in_array('6', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit->available_test_data )) && in_array('6',unserialize($edit->available_test_data))): ?>
                                                         checked="true"         
                                                        <?php endif; ?>/>  RNASeq 
                                                      </label>

                      <label class="label_radio" for="project_name">
                                                <input name="available_test_data[]" id="available_test_data-05" value="7" type="checkbox" <?php if(is_array(old('available_test_data')) && 
                                                            in_array('7', old('available_test_data'))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit->available_test_data )) && in_array('7',unserialize($edit->available_test_data))): ?>
                                                         checked="true"         
                                                        <?php endif; ?>/>  Transcriptomic 
                      </label>
                    
                    </div>
                </div> 

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other type of test data</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_test_data" name="other_test_data" value="<?php if(old('other_test_data')): ?>
                              <?php echo e(old('other_test_data')); ?> 
                            <?php elseif($edit->other_test_data): ?> 
                              <?php echo e($edit->other_test_data); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">If exome/genome: Singleton/Trio/Quad</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="exome_genome" name="exome_genome" value="<?php if(old('exome_genome')): ?>
                              <?php echo e(old('exome_genome')); ?> 
                            <?php elseif($edit->exome_genome): ?> 
                              <?php echo e($edit->exome_genome); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">Platform</label>
                    <div class="radios col-md-6" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-01" value="1" type="radio" <?php if(old('platform') == '1' ): ?> 
                                                          checked="true" 
                                                  <?php elseif(empty(old('platform')) =='1'): ?>
                                                         checked="true"
                                                  <?php elseif($edit->platform =='1'): ?>
                                                         checked="true"       
                                                  <?php endif; ?> /> Illumina Omni-1630
                                            </label>
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-02" value="2" type="radio" <?php if(old('platform') == '2' ): ?> 
                                                          checked="true" 
                                                         <?php elseif($edit->platform =='2'): ?>
                                                          checked="true"
                                                         <?php endif; ?>/> Illumina 610507
                                                      </label>
                      <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-03" value="3" type="radio" <?php if(old('platform') == '3' ): ?> 
                                                          checked="true" 
                                                         <?php elseif($edit->platform =='3'): ?>
                                                         checked="true"
                                                        <?php endif; ?>/> Illumina850k_CytoSNP318 
                                                      </label>
                       <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-04" value="4" type="radio" <?php if(old('platform') == '4' ): ?> 
                                                          checked="true"
                                                         <?php elseif($edit->platform =='4'): ?>
                                                         checked="true" 
                                                        <?php endif; ?>/>  Illumina Omni-5293 
                                                      </label>
                       <label class="label_radio" for="platform">
                                                <input name="platform" id="platform-05" value="5" type="radio" <?php if(old('platform') == '5' ): ?> 
                                                          checked="true" 
                                                        <?php elseif($edit->platform =='5'): ?>
                                                         checked="true"
                                                        <?php endif; ?>/> Other 
                                                      </label>
                    
                    </div>
                </div>

                <div class="form-group other_platform" <?php if($edit->derived_sample_type == '5'): ?> style="display: block"  <?php else: ?> style="display: none" <?php endif; ?>>
                  <label for="sdgId" class="col-lg-3 text-right control-label">Other Platform</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_platform" name="other_platform" value="<?php if(old('other_platform')): ?>
                              <?php echo e(old('other_platform')); ?> 
                            <?php elseif($edit->other_platform): ?> 
                              <?php echo e($edit->other_platform); ?> <?php endif; ?>">
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
                    value="<?php if(!empty(old('study_id'))): ?> <?php echo e(old('study_id')); ?>  <?php elseif(!empty($edit)): ?><?php echo e(@$edit -> study_id); ?><?php endif; ?>">
                   
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="mrn" class="control-label">MRN</label>
                </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="mrn" name="mrn" 
                    value="<?php if(!empty(old('mrn'))): ?> <?php echo e(old('mrn')); ?>  <?php elseif(!empty($edit)): ?><?php echo e(@$edit -> mrn); ?><?php endif; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="lastName" class="control-label">Last Name</label>
                </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="last_name" name="last_name" 
                    value="<?php if(!empty(old('family_id'))): ?> <?php echo e(old('family_id')); ?>  <?php elseif(!empty($edit)): ?><?php echo e(@$edit -> last_name); ?><?php endif; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="firstName" class="control-label">First Name</label>
                </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="first_name" name="first_name" 
                    value="<?php if(!empty(old('first_name'))): ?> <?php echo e(old('first_name')); ?>  <?php elseif(!empty($edit)): ?><?php echo e(@$edit -> first_name); ?><?php endif; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="dob" class="control-label col-md-4 text-right">DOB</label>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" id="dp1"  name="dob" 
                    value="<?php if(!empty(old('dob'))): ?> <?php echo e(old('dob')); ?> <?php elseif(!empty($edit)): ?> <?php echo e(date('m/d/Y',strtotime($edit -> dob))); ?> <?php endif; ?>">
                  </div>
                  <div class="col-md-3 text-right">
                  <label for="sex" class="col-lg-4 text-right control-label">Sex</label>
                
                  <select class="col-md-8 m-bot15 m-bot15" name="gender" style="border: 1px solid #ccc; color: #777; font-size: 11px; height: 22px;">
                                              <option value="Male" <?php if(old('gender') =='Male'): ?> selected <?php elseif("Male"==$edit->gender): ?>   selected <?php endif; ?>>Male</option>
                                            <option value="Female" <?php if(old('gender') =='Female'): ?> selected <?php elseif("Female"==$edit->gender): ?>   selected <?php endif; ?>>Female</option>
                                            <option value="Other" <?php if(old('gender') =='Other'): ?> selected <?php elseif("Other"==$edit->gender): ?>   selected <?php endif; ?>>Other</option>
                                        </select>
                </div>
                </div>
                <div class="form-group other_gender" <?php if($edit -> gender == 'Other'): ?> style="display: block"  <?php else: ?> style="display: none" <?php endif; ?>>
                    <label for="race" class="col-lg-3 text-right control-label">Other gender</label>
                    <div class="col-lg-6">
                      <select class="form-control  m-bot15" name="other_gender">
                                                <option value="">---Select---</option>
                                                <option value="1" 
                                                          <?php if(old('other_gender') == '1' ): ?> 
                                                            selected="true" 
                                                          <?php elseif($edit -> other_gender == '1'): ?>
                                                            selected ="true"
                                                          <?php endif; ?>
                                                >Not tested</option>
                                                <option value="2" 
                                                        <?php if(old('other_gender') == '2' ): ?> 
                                                            selected="true" 
                                                        <?php elseif($edit -> other_gender == 2): ?>
                                                            selected ="true"
                                                        <?php endif; ?>
                                                >XX genotype/Female</option>
                                                <option value="3"
                                                      <?php if(old('other_gender') == '3' ): ?> 
                                                        selected="true" 
                                                      <?php elseif($edit -> other_gender == '3'): ?>
                                                            selected ="true"
                                                      <?php endif; ?>
                                                >XY genotype/Male</option>
                                                <option value="4"
                                                      <?php if(old('other_gender') == '4' ): ?> 
                                                          selected="true"
                                                      <?php elseif($edit -> other_gender == '4'): ?>
                                                            selected ="true" 
                                                      <?php endif; ?>
                                                >XXY Klinefelter's Syndrome</option>
                                                <option value="5"
                                                      <?php if(old('other_gender') == '5' ): ?> 
                                                                   selected="true"
                                                      <?php elseif($edit -> other_gender == '5'): ?>
                                                            selected ="true" 
                                                      <?php endif; ?>
                                                >XO Turner's Syndrome</option>
                                                <option value="6"
                                                      <?php if(old('other_gender') == '6' ): ?> 
                                                                    selected="true"
                                                      <?php elseif($edit -> other_gender == '6'): ?>
                                                            selected ="true"  
                                                      <?php endif; ?>
                                                >XXXY syndrome</option>
                                                <option value="7"
                                                      <?php if(old('other_gender') == '7' ): ?> 
                                                              selected="true" 
                                                      <?php elseif($edit -> other_gender == '7'): ?>
                                                            selected ="true"
                                                      <?php endif; ?>
                                                >XXYY syndrome</option>
                                                <option value="8"
                                                      <?php if(old('other_gender') == '8' ): ?> 
                                                               selected="true" 
                                                      <?php elseif($edit -> other_gender == '8'): ?>
                                                            selected ="true" 
                                                      <?php endif; ?>
                                                >Mosaic including XXXXY</option>
                                                <option value="9"
                                                      <?php if(old('other_gender') == '9' ): ?> 
                                                              selected="true" 
                                                      <?php elseif($edit -> other_gender == '9'): ?>
                                                            selected ="true"
                                                            <?php endif; ?>
                                                >Penta X syndrome</option>
                                                <option value="10"
                                                      <?php if(old('other_gender') == '10' ): ?> 
                                                              selected="true" 
                                                      <?php elseif($edit -> other_gender == '10'): ?>
                                                            selected ="true"
                                                      <?php endif; ?>
                                                >XYY</option>
                                                <option value="11"
                                                      <?php if(old('other_gender') == '11' ): ?> 
                                                              selected="true" 
                                                      <?php elseif($edit -> other_gender == '11'): ?>
                                                            selected ="true"
                                                      <?php endif; ?>
                                                >Unknown</option>
                                                 <option value="12"
                                                      <?php if(old('other_gender') == '12' ): ?> 
                                                              selected="true" 
                                                      <?php elseif($edit -> other_gender == '12'): ?>
                                                            selected ="true"
                                                      <?php endif; ?>
                                                >Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group additional_other_gender" <?php if($edit -> other_gender == '12'): ?> style="display: block"  <?php else: ?> style="display: none" <?php endif; ?>>
                    <label for="sdgId" class="col-lg-3 text-right control-label">Please specify Other gender</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="additional_other_gender" 
                      name="additional_other_gender" 

                      value="<?php if(old('additional_other_gender')): ?>
                      <?php echo e(old('additional_other_gender')); ?> <?php elseif($edit -> additional_other_gender ): ?> <?php echo e($edit -> additional_other_gender); ?> <?php endif; ?>">
                    </div>
                  </div>
                
                <div class="form-group">
                  <div class="col-md-4 text-right">
                  <label for="sdgId" class="control-label">SDG ID</label>
                </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="sdgId" name="sdg_id" 
                    value="<?php if(old('sdg_id')): ?> <?php echo e(old('sdg_id')); ?> <?php elseif($edit -> sdg_id ): ?> <?php echo e($edit -> sdg_id); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dnaBioBank" class="col-lg-4 text-right control-label">DNA In Biobank</label>
                
                  <div class="col-lg-2" style="padding-right: 5px;">
                    <div class="radios">
                      <label class="label_radio" for="radio-01">
                                                <input name="dna_biobank" <?php if(old('dna_biobank') =='Yes'): ?> checked <?php elseif("Yes"==$edit->dna_biobank): ?> checked <?php endif; ?> id="dna_biobank-01" value="Yes" type="radio" /> Yes
                                            </label>
                      <label class="label_radio" for="radio-02">
                                                <input name="dna_biobank" id="dna_biobank-02" value="No" type="radio" 
                                                <?php if(old('dna_biobank') =='No'): ?> checked <?php elseif("No"==$edit->dna_biobank): ?>   checked <?php endif; ?>/> No
                                            </label>
                      
                    </div>
                  </div>

                  <div class="col-md-4 text-left">
                  <label for="lclBioBank" class="control-label">LCL In Biobank</label>
                
                    <div class="radios" style="display: inline-block; margin-left: 7px;">
                      <label class="label_radio" for="lcl_biobank1">
                                                <input name="lcl_biobank" id="lcl_biobank-01" value="Yes" type="radio" <?php if(old('lcl_biobank') =='Yes'): ?> checked 
                                                <?php elseif("Yes"==$edit->lcl_biobank): ?>  checked <?php endif; ?> /> Yes
                                            </label>
                      <label class="label_radio" for="lcl_biobank2">
                                                <input name="lcl_biobank" id="lcl_biobank-02" value="No" type="radio" <?php if(old('lcl_biobank') =='No'): ?> checked 
                                                  <?php elseif("No"==$edit->lcl_biobank): ?> checked  <?php endif; ?>/> No
                     
                    </div>
                  </div>

                </div>
                
                <div class="form-group">
                <label for="race" class="col-lg-4 text-right control-label">Race</label>
                <div class="col-lg-2">
                  <select class="form-control  m-bot15" name="race">
                                            <option value="">---Select---</option>
                                            <option value="5"
                                            <?php if(old('race') =='5'): ?>  selected <?php elseif("5"==$edit->race): ?>   selected <?php endif; ?>>White</option>
                                            <option value="3"
                                            <?php if(old('race') =='3'): ?> selected <?php elseif("3"==$edit->race): ?>   selected <?php endif; ?>>Black/African American</option>
                                            <option value="7"
                                            <?php if(old('race') =='7'): ?> selected <?php elseif("7"==$edit->race): ?>   selected <?php endif; ?>>Hispanic/Latino</option>
                                            <option value="2"
                                            <?php if(old('race') =='2'): ?> selected <?php elseif("2"==$edit->race): ?>   selected <?php endif; ?>>Asian</option>
                                            <option value="1"
                                            <?php if(old('race') =='1'): ?> selected <?php elseif("1"==$edit->race): ?>   selected <?php endif; ?>>American Indian/Alaska Native</option>
                                            <option value="4"
                                            <?php if(old('race') =='4'): ?> selected <?php elseif("4"==$edit->race): ?>   selected <?php endif; ?>>Native Hawaiian/Other Pacific Islander</option>
                                            <option value="6"
                                            <?php if(old('race') =='6'): ?> selected <?php elseif("6"==$edit->race): ?>   selected <?php endif; ?>>Multiple race</option>
                                            <option value="8"
                                            <?php if(old('race') =='8'): ?> selected <?php elseif("8"==$edit->race): ?>   selected <?php endif; ?>>Unknown</option>
                                            <option value="9"
                                            <?php if(old('race') =='9'): ?> selected <?php elseif("9"==$edit->race): ?>   selected <?php endif; ?>>Not available</option>
                  </select>
                </div>
                <label for="ethnicity" class="col-lg-1 text-right control-label">Ethnicity</label>
                <div class="col-lg-2">
                  <select class="form-control  m-bot15" name="ethnicity">
                                          <option value="">---Select---</option>
                                          <option value="1" 
                                          <?php if(old('ethnicity') =='1'): ?> selected <?php elseif("1"==$edit->ethnicity): ?>   selected <?php endif; ?>>Hispanic/latino</option>
                                          <option value="2" 
                                          <?php if(old('ethnicity') =='2'): ?> selected <?php elseif("2"==$edit->ethnicity): ?>   selected <?php endif; ?>>Non-Hispanic/latino</option>
                                          <option value="3" 
                                          <?php if(old('ethnicity') =='3'): ?> selected <?php elseif("3"==$edit->ethnicity): ?>   selected <?php endif; ?>>Unknown</option>
                                          <option value="4"
                                          <?php if(old('ethnicity') =='4'): ?> selected <?php elseif("4"==$edit->ethnicity): ?> selected <?php endif; ?>>Not available</option>
                  </select>
                </div>
                </div>

                <!--<div class="form-group">
                         <label for="ethnicity_follow_up" class="col-lg-4 text-right control-label">Ethnicity Follow up</label>
                    <div class="col-lg-6">
                    <select class="form-control  m-bot15" name="ethnicity_follow_up">
                                            <option value="">---Select---</option>
                                            <option value="1" 
                                                  <?php if(old('ethnicity_follow_up') == '1' ): ?> 
                                                      selected="true" 
                                                  
                                                  <?php elseif("1"==$edit->ethnicity): ?> 
                                                     selected
                                                  <?php endif; ?>>
                                            Ashkenazi Jewish</option>
                                            <option value="2" 
                                                  <?php if(old('ethnicity_follow_up') == '2' ): ?> 
                                                      selected="true"
                                                  <?php elseif("2"==$edit->ethnicity): ?> 
                                                     selected 
                                                  <?php endif; ?>>
                                            Amish</option>
                                            <option value="3" 
                                                  <?php if(old('ethnicity_follow_up') == '3' ): ?> 
                                                    selected="true" 
                                                  <?php elseif("3"==$edit->ethnicity): ?> 
                                                     selected
                                                  <?php endif; ?>>
                                             French Canadian</option>
                                            <option value="4" 
                                                  <?php if(old('ethnicity_follow_up') == '4' ): ?> 
                                                    selected="true" 
                                                  <?php elseif("4"==$edit->ethnicity): ?> 
                                                     selected
                                                  <?php endif; ?>>
                                           None of the above</option>
                                           <option value="5" 
                                                  <?php if(old('ethnicity_follow_up') == '5' ): ?> 
                                                    selected="true" 
                                                  <?php elseif("5"==$edit->ethnicity): ?> 
                                                     selected
                                                  <?php endif; ?>>
                                           Unknown</option>
                    </select>
                  </div>
                  </div>-->

                  <div class="form-group">
                         <label for="primary_language" class="col-lg-4 text-right control-label">Primary Language</label>
                       <div class="radios" style="display: inline-block; margin-left: 20px;">
                            <label class="label_radio" for="lcl_biobank1">
                                                  <input name="primary_language[]" id="primary_language-01" value="English" type="checkbox"
                                                  <?php if(is_array(old('primary_language')) && 
                                                  in_array('English', old('primary_language'))): ?> 
                                                            checked="true" 
                                                  <?php elseif(is_array(unserialize($edit->primary_language)) && in_array('English',unserialize($edit->primary_language) )): ?>
                                                      checked="true" 
                                                           
                                                  <?php endif; ?> /> English
                            </label>
                            <label class="label_radio" for="lcl_biobank2">
                                                  <input name="primary_language[]" id="primary_language-02" value="Spanish" type="checkbox" <?php if(is_array(old('primary_language')) && 
                                                  in_array('Spanish', old('primary_language'))): ?> 
                                                            checked="true" 
                                                  <?php elseif(is_array(unserialize($edit->primary_language)) &&in_array('Spanish',unserialize($edit->primary_language) )): ?>
                                                      checked="true"          
                                                  <?php endif; ?>/> Spanish
                           </label>
                            <label class="label_radio" for="lcl_biobank2">
                                                  <input name="primary_language[]" id="primary_language-03" value="Other" type="checkbox"
                                                  <?php if(is_array(old('primary_language')) && 
                                                  in_array('Other', old('primary_language'))): ?> 
                                                            checked="true" 
                                                  <?php elseif(is_array(unserialize($edit->primary_language)) &&in_array('Other',unserialize($edit->primary_language))): ?>
                                                      checked="true" 
                                                           
                                                  <?php endif; ?>/> Other
                           </label>
                       
                      </div>
                    
                  </div>
                   <div class="form-group other_language"  
                   <?php if(is_array(unserialize($edit->primary_language)) && in_array('Other',unserialize($edit->primary_language))): ?> style="display: block"  <?php else: ?> style="display: none" <?php endif; ?>>
                    <label for="other_language" class="col-lg-4 text-right control-label">Other Language</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_language" name="other_language" 
                      value="<?php if(!empty(old('other_language'))): ?> <?php echo e(old('other_language')); ?>  <?php elseif(!empty($edit)): ?> <?php echo e(@$edit -> other_language); ?> <?php endif; ?>">
                    </div>
                  </div>



                <div class="form-group comment" style="margin-bottom: 10px;">
                    <label for="comment" class="col-lg-4 text-right control-label">Comments</label>
                    <div class="col-md-6">
                    <textarea class="form-control" name="comment" rows="6">
                      <?php if(!empty(old('comment'))): ?> <?php echo e(old('comment')); ?>  <?php elseif(!empty($edit)): ?> <?php echo e(@$edit -> comment); ?><?php endif; ?>
                    </textarea>
                  </div>
                </div>
                <div class="form-group">
                    <label for="sdgId" class="col-lg-4 text-right control-label">Number of DNA vials submitted to BioRC</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="dna_vials_submission" name="dna_vials_submission" value="<?php if(old('dna_vials_submission')): ?>
                              <?php echo e(old('dna_vials_submission')); ?> <?php elseif($edit->dna_vials_submission): ?> 
                            <?php echo e($edit->dna_vials_submission); ?> <?php endif; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sdgId" class="col-lg-4 text-right control-label">Number of LCL vials submitttedto BioRc</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="lcl_vials_submission" name="lcl_vials_submission" value="<?php if(old('lcl_vials_submission')): ?>
                              <?php echo e(old('lcl_vials_submission')); ?> <?php elseif($edit->lcl_vials_submission): ?> 
                            <?php echo e($edit->lcl_vials_submission); ?> <?php endif; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sdgId" class="col-lg-4 text-right control-label">Number of other vials submitted to BioRC</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="other_vials_submission" name="other_vials_submission" value="<?php if(old('other_vials_submission')): ?>
                              <?php echo e(old('lcl_vials_submission')); ?> <?php elseif($edit->other_vials_submission): ?> 
                            <?php echo e($edit->other_vials_submission); ?> <?php endif; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="first_submission_date" class="col-lg-4 text-right control-label">Date of BioRC submission (first submission)</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="first_submission_date" name="first_submission_date" value="<?php if(old('first_submission_date')): ?><?php echo e(old('first_submission_date')); ?> <?php elseif($edit->first_submission_date): ?> <?php echo e(date('m/d/Y',strtotime($edit -> first_submission_date))); ?> <?php endif; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="second_submission_date" class="col-lg-4 text-right control-label">Date of BioRC submission (second submission)</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="second_submission_date" name="second_submission_date" 
                      value="<?php if(old('second_submission_date')): ?> <?php echo e(old('second_submission_date')); ?> <?php elseif($edit->second_submission_date): ?> <?php echo e(date('m/d/Y',strtotime($edit -> second_submission_date))); ?> <?php endif; ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label for="third_submission_date" class="col-lg-4 text-right control-label">Date of BioRC submission (third submission)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="third_submission_date" name="third_submission_date" value="<?php if(old('third_submission_date')): ?>
                              <?php echo e(old('third_submission_date')); ?> <?php elseif($edit->third_submission_date): ?> 
                            <?php echo e(date('m/d/Y',strtotime($edit -> third_submission_date))); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dna_ratio" class="col-lg-4 text-right control-label">DNA Ratio (260/280)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="dna_ratio" name="dna_ratio" 
                    value="<?php if(old('dna_ratio')): ?> <?php echo e(old('dna_ratio')); ?> <?php elseif($edit->dna_ratio): ?> <?php echo e($edit->dna_ratio); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="dna_conc" class="col-lg-4 text-right control-label">DNA conc. (ng/ul)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="dna_conc" name="dna_conc" 
                    value="<?php if(old('dna_conc')): ?> <?php echo e(old('dna_conc')); ?> <?php elseif($edit->dna_conc): ?> <?php echo e($edit->dna_conc); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="volume" class="col-lg-4 text-right control-label">Volume (ul)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="volume" name="volume" 
                    value="<?php if(old('volume')): ?>
                              <?php echo e(old('volume')); ?> <?php elseif($edit->volume): ?> 
                            <?php echo e($edit->volume); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="biorc_id" class="col-lg-4 text-right control-label">BioRC ID (SDG ID)</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="biorc_id" name="biorc_id" 
                    value="<?php if(old('biorc_id')): ?> <?php echo e(old('biorc_id')); ?> <?php elseif($edit->biorc_id): ?> <?php echo e($edit->biorc_id); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Tube Barcode</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="tube_barcode" name="tube_barcode" value="<?php if(old('tube_barcode')): ?>
                              <?php echo e(old('tube_barcode')); ?> <?php elseif($edit->tube_barcode): ?> 
                            <?php echo e($edit->tube_barcode); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other Barcode </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_barcode" name="other_barcode" value="<?php if(old('other_barcode')): ?> <?php echo e(old('other_barcode')); ?> <?php elseif($edit->other_barcode): ?>  <?php echo e($edit->other_barcode); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Box Number/Other Box Details</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="box_number_details" name="box_number_details" value="<?php if(old('box_number_details')): ?>
                              <?php echo e(old('box_number_details')); ?> <?php elseif($edit->box_number_details): ?> 
                            <?php echo e($edit->box_number_details); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Plate position</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="plate_position" name="plate_position" value="<?php if(old('plate_position')): ?>  <?php echo e(old('plate_position')); ?> <?php elseif($edit->plate_position): ?>  <?php echo e($edit->plate_position); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other Sample info or notes</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_sample_info" name="other_sample_info" value="<?php if(old('other_sample_info')): ?> <?php echo e(old('other_sample_info')); ?> <?php elseif($edit->other_sample_info): ?> <?php echo e($edit->other_sample_info); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Other notes from BioRC </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="other_note_biorc" 
                      name=" other_note_biorc" value="<?php if(old('other_note_biorc')): ?>
                              <?php echo e(old('other_note_biorc')); ?> 
                      <?php elseif($edit->other_note_biorc): ?> 
                            <?php echo e($edit->other_note_biorc); ?> <?php endif; ?>">
                  </div>
                </div>
                <div class="form-group">
                   <label for="status_affected_member" class="col-md-4 text-right control-label">File types available</label>
                    <div class="radios" style="display: inline-block; margin-left: 20px;">
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-01" value="BAM" type="checkbox" 
                                                <?php if(is_array(old('file_type_available')) && 
                                                            in_array('BAM', unserialize(old('file_type_available')))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit ->file_type_available )) && 
                                                            in_array('BAM', unserialize($edit ->file_type_available)) ): ?>
                                                            checked="true" 
                                                         
                                                        <?php endif; ?> /> BAM
                                            </label>
                      <label class="label_radio" for="project_name">
                                                <input name="file_type_available[]" id="file_type_available-02" value="FASTQ" type="checkbox" 
                                                <?php if(is_array(old('file_type_available')) && 
                                                            in_array('FASTQ', unserialize(old('file_type_available')))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit ->file_type_available )) && 
                                                            in_array('FASTQ', unserialize($edit ->file_type_available)) ): ?>
                                                            checked="true"         
                                                        <?php endif; ?>/> FASTQ
                                                      </label>
                      <label class="label_radio" for="project_name">
                        <input name="file_type_available[]" id="file_type_available-03" value="VCF" type="checkbox" 
                            <?php if(is_array(old('file_type_available')) && 
                                                            in_array('VCF', unserialize(old('file_type_available')))): ?> 
                                                            checked="true" 
                                                <?php elseif(is_array(unserialize($edit ->file_type_available) ) && 
                                                            in_array('VCF', unserialize($edit ->file_type_available) )): ?>
                                                            checked="true"          
                                                <?php endif; ?>/> VCF 
                      </label>

                      <label class="label_radio" for="project_name">
                        <input name="file_type_available[]" id="file_type_available-03" value="GVCF" type="checkbox"    <?php if(is_array(old('file_type_available')) && 
                                                            in_array('GVCF', unserialize(old('file_type_available')))): ?> 
                                                            checked="true" 
                            <?php elseif(is_array(unserialize($edit ->file_type_available )) && 
                                                            in_array('GVCF', unserialize($edit ->file_type_available)) ): ?>
                                                            checked="true"          
                                                        <?php endif; ?>/> GVCF 
                      </label>
                    
                    </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Filename</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="filename" name="filename" value="<?php if(old('filename')): ?>
                              <?php echo e(old('filename')); ?> 
                            <?php elseif($edit->filename): ?> 
                              <?php echo e($edit->filename); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Receipt Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="receipt_date" name="receipt_date" value="<?php if(old('receipt_date')): ?> <?php echo e(old('receipt_date')); ?> <?php elseif($edit->receipt_date): ?> 
                    <?php echo e(date('m/d/Y',strtotime($edit->receipt_date))); ?> <?php endif; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sdgId" class="col-lg-4 text-right control-label">Transfer Date</label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="transfer_date" name="transfer_date" value="<?php if(old('transfer_date')): ?>  <?php echo e(old('transfer_date')); ?> <?php elseif($edit->transfer_date): ?> <?php echo e(date('m/d/Y',strtotime($edit -> created_at))); ?> <?php endif; ?>">
                  </div>
                </div>
                </div>
             </div>
        </div>
        </div>
      </div>
      
     

      <div class="container-fluid text-form">       <!-- Test -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $__env->make("admin.form.test_edit_form", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
      </div>
      </div>
      <div class="container-fluid text-form concent">
      <div class="row">
        <div class="col-md-12">
         <?php echo $__env->make("admin.form.consent_form", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
  });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>