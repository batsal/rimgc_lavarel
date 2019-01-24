
<div class="tabs">
<ul class="tab-links">
    <li>
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-bars"></i> Re-link & Future</a>
    </li>
    <li >
      <a class="nav-link" id="nth-tab" data-toggle="tab" href="#nth-tab" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-bars"></i> NIH</a>
    </li>
    <li>
      <a class="nav-link" id="lab-tab" data-toggle="tab" href="#lab-tab" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-bars"></i> Lab Data</a>
    </li>
    <li>
      <a class="nav-link" id="profit-tab" data-toggle="tab" href="#profit-tab" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-bars"></i> For Profit</a>
    </li>
    <li>
      <a class="nav-link" id="photo-tab" data-toggle="tab" href="#photo-tab" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-bars"></i> Photos</a>
    </li>
    <li>
      <a class="nav-link" id="consent-tab" data-toggle="tab" href="#consent-tab" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-bars"></i> Consent</a>
    </li>
    <li>
      <a class="nav-link" id="child-tab" data-toggle="tab" href="#child-tab" role="tab" aria-controls="contact" aria-selected="false"> <i class="fa fa-bars"></i>Assent Child</a>
    </li>
    <li>
      <a class="nav-link" id="adult-tab" data-toggle="tab" href="#adult-tab" role="tab" aria-controls="contact" aria-selected="false"> <i class="fa fa-bars"></i>Assent Adult</a>
    </li>
</ul>
<div class="tab-content">

   <div class="tab active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                          <div class="col-md-offset-1 col-md-9">
                          <div class="radios">
                                <label class="label_radio" for="radio-01">
                                    <input name="future_relink" id="relink-01" value="Yes" type="radio" 
                                     
                                    <?php if(old('future_relink') =='Yes'): ?> 
                                        checked
                                    <?php elseif(!empty($edit) && $edit->future_relink == "Yes"): ?>   
                                       checked 
                                    <?php elseif(old('future_relink')==''): ?> 
                                       checked
                                    <?php endif; ?>/> Yes
                                </label>
                                <label class="label_radio" for="radio-02">
                                    <input name="future_relink" id="relink-02" value="No" type="radio"
                                    <?php if(old('future_relink') =='No'): ?> 
                                        checked
                                    <?php elseif(!empty($edit) && $edit->future_relink == "No"): ?>   
                                        checked 

                                    <?php endif; ?> /> No
                                </label>


                              </div>
                              <p>
                             I agree to allow my Data and specimens to be relinked for future research
                             </p>
                             
                            </div>
                            </div>

                            <div class="row">
                              <div class="col-md-offset-1 col-md-9">
                                <div class="radios">
                                <label class="label_radio" for="radio-01">
                                                          <input name="future_contact" id="contact-01" value="Yes" type="radio" 
                                                          <?php if(old('future_contact') =='Yes'): ?> 
                                                            checked 
                                                          <?php elseif(!empty($edit) && $edit->future_contact == "Yes"): ?>   checked 
                                                          <?php elseif(old('future_contact')==''): ?> 
                                                             checked
                                                          <?php endif; ?> /> Yes
                                                      </label>
                                <label class="label_radio" for="radio-02">
                                                          <input name="future_contact" id="contact-02" value="No" type="radio" 
                                                          <?php if(old('future_contact') =='No'): ?> 
                                                            checked
                                                          <?php elseif(!empty($edit) && $edit->future_contact == "No"): ?>   checked <?php endif; ?> /> No
                                                      </label>


                              </div>
                              <p>
                               I agree to be contacted to take part in future research
                               </p>
                             
                            </div>
                          </div>
                          </div>
                          <div class="tab" id="nth-tab" role="tabpanel" aria-labelledby="nth-tab">
                            <div class="row">
                              <div class="col-md-offset-1 col-md-9">
                            <div class="radios">
                                <label class="label_radio" for="radio-01">
                                                          <input name="nih_deidentified" id="nih_deidentified-01" value="Yes" type="radio"
                                                          <?php if(old('nih_deidentified') =='Yes'): ?> 
                                                            checked 
                                                          <?php elseif(!empty($edit) && $edit->nih_deidentified=="Yes"): ?>   checked 
                                                          <?php elseif(old('nih_deidentified') ==''): ?> 
                                                            checked 
                                                          <?php endif; ?> /> Yes
                                                        </label>
                                                        <label>
                                                          <input name="nih_deidentified" id="nih_deidentified-02" value="No" type="radio"
                                                          <?php if(old('nih_deidentified') =='No'): ?> 
                                                            checked  
                                                          <?php elseif(!empty($edit) && $edit->nih_deidentified=="No"): ?>   checked <?php endif; ?> /> No
                                                      </label>
                                                      <p>I consent tosharing my de-identified information with NIH</p><br/>
                                <label class="label_radio" for="radio-02">
                                                        <input name="nih_access" id="access-01" value="controlled" type="radio" 
                                                        <?php if(old('nih_access') =='controlled'): ?> 
                                                            checked 
                                                        <?php elseif(!empty($edit) && $edit->nih_access=="controlled"): ?>   checked 
                                                        <?php elseif(old('nih_access') ==''): ?> 
                                                            checked 

                                                        <?php endif; ?>  /> Controlled
                                                      </label>
                                                      <label>
                                                        <input name="nih_access" id="access-02" value="access" type="radio" 
                                                        <?php if(old('nih_access') =='access'): ?> 
                                                            checked  
                                                        <?php elseif(!empty($edit) && $edit->nih_access=="access"): ?>   checked <?php endif; ?> /> Unrestricted  
                                                      </label>


                              </div>
                            </div>
                          </div>
                          </div>
                          <div class="tab" id="lab-tab" role="tabpanel" aria-labelledby="lab-tab">
                            <div class="row">
                              <div class="col-md-offset-1 col-md-9">
                              <div class="radios">
                                <label class="label_radio" for="radio-01">
                                                          <input name="lab_data" id="lab_data-01" value="Yes" type="radio" 
                                                          <?php if(old('lab_data') =='Yes'): ?> 
                                                            checked  
                                                          <?php elseif(!empty($edit) && $edit->lab_data=="Yes"): ?>   checked <?php endif; ?> /> Yes
                                                         
                                                      </label>
                                                    
                                <label class="label_radio" for="radio-02">
                                                       
                                                        <input name="lab_data" id="lab_data-02" value="No" type="radio" 
                                                        <?php if(old('lab_data') == 'No' ): ?> 
                                                            checked  
                                                        <?php elseif(!empty($edit) && $edit->lab_data=="No"): ?>   checked <?php endif; ?> /> No  
                                                      </label>

                                  
                              </div>
                              <p>I agree to  your obtaining sequence Data from clinical lab </p>
                            </div>
                          </div>
                          </div>
                          <div class="tab" id="profit-tab" role="tabpanel" aria-labelledby="profit-tab">
                            <div class="row">
                              <div class="col-md-offset-1 col-md-9">
                                <div class="radios">
                                <label class="label_radio" for="radio-01">
                                                          <input name="share_for_profit" id="profit-01" value="Yes" type="radio" 
                                                          <?php if(old('share_for_profit') == 'Yes' ): ?> 
                                                            checked 
                                                          <?php elseif(!empty($edit) && $edit->share_for_profit=="Yes"): ?>   checked 
                                                           <?php elseif(old('share_for_profit')==''): ?> 
                                                             checked
                                                          <?php endif; ?> /> Yes
                                                         
                                                      </label>
                                                    
                                <label class="label_radio" for="radio-02">
                                                       
                                                        <input name="share_for_profit" id="profit-02" value="No" type="radio"  
                                                        <?php if(old('share_for_profit') == 'No' ): ?> 
                                                            checked
                                                        <?php elseif(!empty($edit) && $edit->share_for_profit=="No"): ?>   checked <?php endif; ?> /> No  
                                                      </label>

                                  
                              </div>
                              <p>my data and blood samples may  be shared with for profit companies</p>
                            </div>
                          </div>
                          </div>

                          <div class="tab" id="photo-tab" role="tabpanel" aria-labelledby="photo-tab">
                                <div class="radios">
                                <label class="label_radio" for="radio-01">
                                                          <input name="photo_permission" id="photo_permission-01" value="Yes" type="radio" 
                                                          <?php if(old('photo_permission') == 'Yes' ): ?> 
                                                            checked
                                                          <?php elseif(!empty($edit) && $edit->photo_permission=="Yes"): ?>   checked 
                                                          <?php elseif(old('photo_permission') ==''): ?> 
                                                            checked 
                                                          <?php endif; ?>  /> Yes
                                                         
                                                      </label>
                                                    
                                <label class="label_radio" for="radio-02">
                                                       
                                                        <input name="photo_permission" id="photo_permission-02" value="No" type="radio"
                                                        <?php if(old('photo_permission') == 'No' ): ?> 
                                                            checked
                                                        <?php elseif(!empty($edit) && $edit->photo_permission=="No"): ?>   checked <?php endif; ?>/> No  
                                                      </label>

                                  
                              </div>
                              
                              <p>I give permission to have of me and my child taken or existing ones used</p>
                              <div class="div_permission">
                              <div class="checkboxes">
                                  <label class="label_check" for="checkbox-01">
                                                        <input name="photo_usage_purpose" id="photo_usage_purpose-01" value="part_research" type="checkbox" 
                                                        <?php if(old('photo_usage_purpose') == 'part_research' ): ?> 
                                                            checked
                                                        <?php elseif(!empty($edit) && $edit-> photo_usage_purpose=="part_research"): ?>   checked 
                                                        <?php endif; ?>  /> As Part of this Research
                                                        </label>
                                  <label class="label_check" for="checkbox-02">
                                                        <input name="photo_usage_purpose" id="photo_usage_purpose-02" value="teaching_purpose" type="checkbox" 
                                                        <?php if(old('photo_usage_purpose') == 'teaching_purpose' ): ?> 
                                                            checked

                                                        <?php elseif(!empty($edit) && $edit->photo_usage_purpose=="teaching_purpose"): ?>   checked <?php endif; ?> /> For Teaching Purpose </label>
                                  <label class="label_check" for="checkbox-03">
                                                        <input name="photo_usage_purpose" id="photo_usage_purpose-03" value="medical_aplications" type="checkbox"  
                                                        <?php if(old('photo_usage_purpose') == 'medical_aplications' ): ?> 
                                                            checked
                                                        <?php elseif(!empty($edit) && $edit->photo_usage_purpose=="medical_aplications"): ?>   checked <?php endif; ?>/> In Medical Apllications</label>

                                </div>
                              </div>
                          </div>

                          <div class="tab" id="consent-tab" role="tabpanel" aria-labelledby="consent-tab">
                            <div class="col-lg-6">
                                      <section class="panel">
                                           <div class="form-group">
                                              <label for="lastName" class="col-lg-5 control-label">Person Obtaining consent</label>
                                              <div class="col-lg-5">
                                                <input type="text" class="form-control" id="consent_obtaining_person" name="consent_obtaining_person" 
                                                value="<?php if(!empty(old('consent_obtaining_person'))): ?> <?php echo e(old('consent_obtaining_person')); ?> <?php elseif(!empty($edit)): ?><?php echo e(@$edit -> consent_obtaining_person); ?> <?php endif; ?>">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="firstName" class="col-lg-5 control-label">Name of subject or authorized representative</label>
                                              <div class="col-lg-5">
                                                <input type="text" class="form-control" id="consent_authorized_person" name="consent_authorized_person" 
                                                value="<?php if(!empty(old('consent_authorized_person'))): ?> <?php echo e(old('consent_authorized_person')); ?> <?php elseif(!empty($edit)): ?><?php echo e(@$edit -> consent_authorized_person); ?> <?php endif; ?>">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="radios" style="width: 100%;">
                                            <label class="d-i col-md-5 text-right">Relation to subject:</label>
                                            <div class="d-i col-md-6">
                                                <label class="label_radio" for="radio-01">
                                                                 <input name="consent_subject_relation" id="consent_subject_relation-01" value="self" type="radio" 
                                                                  <?php if(old('consent_subject_relation') == 'self' ): ?> 
                                                                          checked
                                                                  <?php elseif(!empty($edit) && 
                                                                  $edit->consent_subject_relation=="self"): ?>                 checked 
                                                                  <?php endif; ?> /> Self
                                                                         
                                                </label>
                                                <label class="label_radio" for="radio-02">
                                                                       
                                                    <input name="consent_subject_relation" id="consent_subject_relation-02" value="Mother" type="radio"
                                                    <?php if(old('consent_subject_relation') == 'Mother' ): ?> 
                                                        checked
                                                    <?php elseif(!empty($edit) && $edit->consent_subject_relation=="Mother"): ?>   
                                                         checked 
                                                    <?php endif; ?>/> Mother  
                                                </label>
                                                <label class="label_radio" for="radio-02">
                                                                       
                                                    <input name="consent_subject_relation" id="consent_subject_relation-02" value="Father" type="radio"  
                                                           <?php if(old('consent_subject_relation') == 'Mother' ): ?> 
                                                            checked
                                                           <?php elseif(!empty($edit) && $edit->consent_subject_relation=="Father"): ?>   
                                                              checked 
                                                           <?php endif; ?> /> Father  
                                                </label>

                                                  
                                              </div>
                                            </div>
                                            </div>    
                                            <div class="form-group">
                                            <label class="col-md-5 text-right" for="labUsed">Patient Type</label>
                                            <div class="col-md-5">
                                                <select class="form-control  m-bot15" name="consent_patient_type" id="consent_patient_type">
                                                      <option value="0">-----Select-----</option>
                                                      
                                                      <option value="Inpatient" <?php if(old('consent_patient_type') =='Inpatient'): ?> selected <?php elseif(!empty($edit) && "Inpatient" == $edit -> consent_patient_type): ?> selected <?php endif; ?>>Inpatient</option>
                                                      <option value="Outpatient" <?php if(old('consent_patient_type') =='Outpatient'): ?> selected <?php elseif(!empty($edit) &&"Outpatient" == $edit -> consent_patient_type): ?> selected <?php endif; ?>>Outpatient</option>
                                                      
                                                      
                                                </select>
                                              </div>
                                            </div>
                                      </section>
                            </div>
                            <div class="col-lg-6">
                                      <section class="panel">
                                        <div class="form-group">
                                          <label for="dob" class="col-lg-2 control-label">Date</label>
                                          <div class="col-lg-7">
                                            <input type="text" class="form-control" id="consent_obtaining_date"  name="consent_obtaining_date" 
                                            value="<?php if(!empty(old('consent_obtaining_date'))): ?>  <?php echo e(old('consent_obtaining_date')); ?> 
                                                   <?php elseif(!empty($edit) && !empty($edit -> consent_obtaining_date)): ?> <?php echo e(date('m/d/Y',strtotime($edit -> consent_obtaining_date))); ?> <?php endif; ?>">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="dob" class="col-lg-2 control-label">Date</label>
                                          <div class="col-lg-7">
                                            <input type="text" class="form-control" id="consent_obtaining_date"  name="consent_authorized_date" 
                                            value="<?php if(!empty(old('consent_authorized_date'))): ?> <?php echo e(old('consent_authorized_date')); ?>  <?php elseif(!empty($edit) && !empty($edit -> consent_authorized_date)): ?><?php echo e(date('m/d/Y',strtotime($edit -> consent_authorized_date))); ?> <?php endif; ?>">
                                          </div>
                                        </div>
                                      </section>
                            </div>
                                 

                          </div>
                          <div class="tab" id="child-tab" role="tabpanel" aria-labelledby="child-tab">
                               <div class="col-lg-6">
                                      <section class="panel">
                                           <div class="form-group">
                                              <label for="lastName" class="col-lg-5 control-label">Person Obtaining assent</label>
                                              <div class="col-lg-7">
                                                <input type="text" class="form-control" id="able_assent_child" name="able_assent_child" 
                                                value="<?php if(!empty(old('able_assent_child'))): ?>  <?php echo e(old('able_assent_child')); ?>  <?php elseif(!empty($edit)): ?><?php echo e(@$edit -> able_assent_child); ?> <?php endif; ?>">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="firstName" class="col-lg-5 control-label">Person responsible for  obtaining assent</label>
                                              <div class="col-lg-7">
                                                <input type="text" class="form-control" id="unable_assent_child" name="unable_assent_child" 
                                                value="<?php if(!empty(old('unable_assent_child'))): ?>   <?php echo e(old('unable_assent_child')); ?> <?php elseif(!empty($edit)): ?> <?php echo e(@$edit -> unable_assent_child); ?> <?php endif; ?>">
                                              </div>
                                            </div>
                                           
                                      </section>
                            </div>
                            <div class="col-lg-6">
                                      <section class="panel">
                                        <div class="form-group">
                                          <label for="dob" class="col-lg-2 control-label">Date</label>
                                          <div class="col-lg-7">
                                            <input type="text" class="form-control" id="able_assent_child_date"  name="able_assent_child_date" 
                                            value="<?php if(!empty(old('able_assent_child_date'))): ?>  <?php echo e(old('able_assent_child_date')); ?>  <?php elseif(!empty($edit) && !empty($edit -> able_assent_child_date)): ?> <?php echo e(date('m/d/Y',strtotime($edit -> able_assent_child_date))); ?> <?php endif; ?>">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="dob" class="col-lg-2 control-label">Date</label>
                                          <div class="col-lg-7">
                                            <input type="text" class="form-control" id="unable_assent_child_date"  name="unable_assent_child_date "
                                              value="<?php if(!empty(old('unable_assent_child_date'))): ?> <?php echo e(old('unable_assent_child_date')); ?>  <?php elseif(!empty($edit) && !empty($edit -> unable_assent_child_date)): ?> <?php echo e(date('m/d/Y',strtotime($edit -> unable_assent_child_date))); ?> <?php endif; ?>">
                                          </div>
                                        </div>
                                      </section>
                            </div>
                          </div>
                          <div class="tab" id="adult-tab" role="tabpanel" aria-labelledby="adult-tab">
                                <div class="col-lg-6">
                                      <section class="panel">
                                           <div class="form-group">
                                              <label for="lastName" class="col-lg-5 control-label">Person Obtaining assent</label>
                                              <div class="col-lg-7">
                                                <input type="text" class="form-control" id="able_assent_adult" name="able_assent_adult" 
                                                value="<?php if(!empty(old('able_assent_adult'))): ?> {old('able_assent_adult')}} <?php elseif(!empty($edit)): ?> <?php echo e($edit -> able_assent_adult); ?> <?php endif; ?>">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="firstName" class="col-lg-5 control-label">Person responsible for  obtaining assent</label>
                                              <div class="col-lg-7">
                                                <input type="text" class="form-control" id="unable_assent_adult" name="unable_assent_adult" 
                                                value="<?php if(!empty(old('unable_assent_adult'))): ?> <?php echo e(old('unable_assent_adult')); ?>  <?php elseif(!empty($edit)): ?> <?php echo e(@$edit -> unable_assent_adult); ?> <?php endif; ?>">
                                              </div>
                                            </div>
                                           
                                      </section>
                            </div>
                            <div class="col-lg-6">
                                      <section class="panel">
                                        <div class="form-group">
                                          <label for="dob" class="col-lg-2 control-label">Date</label>
                                          <div class="col-lg-7">
                                            <input type="text" class="form-control" id="able_assent_adult_date"  name="able_assent_adult_date" 
                                            value="<?php if(!empty(old('able_assent_adult_date'))): ?> 
                                                          <?php echo e(old('able_assent_adult_date')); ?> 
                                                        <?php elseif(!empty($edit) && !empty($edit -> able_assent_adult_date)): ?> <?php echo e(date('m/d/Y',strtotime($edit -> able_assent_adult_date))); ?> <?php endif; ?>">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="dob" class="col-lg-2 control-label">Date</label>
                                          <div class="col-lg-7">
                                            <input type="text" class="form-control" id="unable_assent_adult_date"  name="unable_assent_adult_date" 
                                              value="<?php if(!empty(old('unable_assent_adult_date'))): ?> 
                                                          <?php echo e(old('unable_assent_adult_date')); ?> 
                                                        <?php elseif(!empty($edit) && !empty($edit -> unable_assent_adult_date)): ?> <?php echo e(date('m/d/Y',strtotime($edit -> unable_assent_adult_date))); ?> <?php endif; ?>">
                                          </div>
                                        </div>
                                      </section>
                            </div>
                          </div>
</div>
</div> 

          