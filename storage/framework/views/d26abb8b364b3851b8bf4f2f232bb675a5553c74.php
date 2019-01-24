        <div class="tabs">
                      <ul class="tab-links">
                          <li class="active"><a href="#tab1"><i class="fa fa-bars"></i>Tests</a></li>
                          <li><a href="#tab2"><i class="fa fa-bars"></i>HPO</a></li>
                          <li><a href="#tab3"><i class="fa fa-bars"></i>Sample Shared</a></li>
                      </ul>
                      <div class="tab-content">
                          <div id="tab1" class="tab active">
                            <table class="table table-responsive table-striped" id="test">
                              <thead>
                                <tr>
                                  <th scope="col">Test</th>
                                  <th scope="col">IMGC ordered</th>
                                  <th scope="col">Lab Initiated</th>
                                  <th scope="col">Lab Used</th>
                                  <th scope="col">Date Recorded</th>
                                  <th scope="col">Patient Type</th>
                                  <th scope="col">Sample Status</th>
                                  <th scope="col">Result</th>
                                  <th scope="col">Diagnostic</th>
                                  <th scope="col"></th>
                                   <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody>


                                <?php if(count($edit -> test)>0): ?>
                                  <?php $__currentLoopData = $edit -> test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                  <tr>
                                      
                                      <td scope="col">
                                        <div class="form-group">
                                                 
                                            <div class="col-lg-10">
                                              <select class="form-control m-bot15" name="test[test_name][]">
                                              <option value="0">---Select---</option>
                                              <option value="1" <?php if("1"==$t->test_name): ?>   selected <?php endif; ?>>Exome</option>
                                              <option value="2" <?php if("2"==$t->test_name): ?>   selected <?php endif; ?>>Exome Reanalysis, Full</option>
                                              <option value="3" <?php if("3"==$t->test_name): ?>   selected <?php endif; ?>>Exome Reanalysis, Partial</option>
                                              <option value="4" <?php if("4"==$t->test_name): ?>   selected <?php endif; ?>>Exome Slice</option>
                                              <option value="5" <?php if("5"==$t->test_name): ?>   selected <?php endif; ?>>Exome, Research</option>
                                              <option value="6" <?php if("6"==$t->test_name): ?>   selected <?php endif; ?>>Rapid Exome</option>
                                              <option value="7" <?php if("7"==$t->test_name): ?>   selected <?php endif; ?>>Genome</option>
                                              <option value="8" <?php if("8"==$t->test_name): ?>   selected <?php endif; ?>>mtDNA</option>
                                              <option value="9" <?php if("9"==$t->test_name): ?>   selected <?php endif; ?>>SNP array</option>
                                              <option value="10" <?php if("10"==$t->test_name): ?>   selected <?php endif; ?>>SNP array reanalysis</option>
                                              <option value="11" <?php if("11"==$t->test_name): ?>   selected <?php endif; ?>>Single gene</option>
                                              <option value="12" <?php if("12"==$t->test_name): ?>   selected <?php endif; ?>>Panel</option>
                                              <option value="13" <?php if("13"==$t->test_name): ?>   selected <?php endif; ?>>Karyotype</option>
                                              <option value="14" <?php if("14"==$t->test_name): ?>   selected <?php endif; ?>>Familial Variant Testing</option>
                                              <option value="15" <?php if("15"==$t->test_name): ?>   selected <?php endif; ?>>Chromosome Breakage</option>
                                              <option value="16" <?php if("16"==$t->test_name): ?>   selected <?php endif; ?>>Biochemical test</option>
                                              <option value="17" <?php if("17"==$t->test_name): ?>   selected <?php endif; ?>>Previously ordered test</option>
                                              </select>
                                                    
                                                  </div>
                                                </div>
                                      </td>
                                      <td scope="col">
                                         <div class="checkbox">
                                                  <label>
                                                     <input type="checkbox" name="test[img_ordered_<?php echo e($key); ?>]" value="Yes" <?php if("Yes"==$t->img_ordered): ?>   checked <?php endif; ?>>
                                                  </label>
                                                </div>
                                      </td>
                                      <td scope="col">
                                      <div class="form-group">
                                         <div class="checkbox">
                                                  <label>
                                                        <input type="checkbox" name="test[lab_initiated_<?php echo e($key); ?>]" value="Yes" <?php if("Yes"==$t->lab_initiated): ?>   checked <?php endif; ?>>
                                                                    </label>
                                                </div>
                                                </div>
                                      </td>
                                      <td scope="col">
                                         <div class="form-group">
                                                  
                                          <div class="col-lg-10">
                                            <select class="form-control m-bot15" name="test[lab_used][]">
                                                  <option value="0">---Select---</option>
                                                  <option value="1"  <?php if("1"==$t->lab_used): ?> selected <?php endif; ?>>CHOP</option>
                                                  <option value="2" <?php if("2"==$t->lab_used): ?> selected <?php endif; ?>>GeneDx</option>
                                                  <option value="3" <?php if("3"==$t->lab_used): ?> selected <?php endif; ?>>Harvard</option>
                                                  <option value="4" <?php if("4"==$t->lab_used): ?> selected <?php endif; ?>>ARUP</option>
                                                  <option value="5" <?php if("5"==$t->lab_used): ?> selected <?php endif; ?>>Baylor</option>
                                                  <option value="6" <?php if("6"==$t->lab_used): ?> selected <?php endif; ?>>Blueprint Genetics</option>
                                                  <option value="7" <?php if("7"==$t->lab_used): ?> selected <?php endif; ?>>Cincinnati Molecular Diagnositc Lab</option>
                                                  <option value="8" <?php if("8"==$t->lab_used): ?> selected <?php endif; ?>>Connective Tissue Gene Test</option>
                                                  <option value="9" <?php if("9"==$t->lab_used): ?> selected <?php endif; ?>>University of Chicago</option>
                                                  <option value="10" <?php if("10"==$t->lab_used): ?> selected <?php endif; ?>>Molecular Vision Lab</option>
                                                  <option value="11" <?php if("11"==$t->lab_used): ?> selected <?php endif; ?>>Fulgent</option>
                                                  <option value="12" <?php if("12"==$t->lab_used): ?> selected <?php endif; ?>>Prevention Genetics</option>
                                                  <option value="13" <?php if("13"==$t->lab_used): ?> selected <?php endif; ?>>Medical Neurogenetics Lab</option>
                                                  <option value="14" <?php if("14"==$t->lab_used): ?> selected <?php endif; ?>>Emory</option>
                                                  <option value="15" <?php if("15"==$t->lab_used): ?> selected <?php endif; ?>>Iowa</option>
                                                  <option value="16" <?php if("16"==$t->lab_used): ?> selected <?php endif; ?>>Invitae</option>
                                                  <option value="17" <?php if("17"==$t->lab_used): ?> selected <?php endif; ?>>LabCorp</option>
                                                  <option value="18" <?php if("18"==$t->lab_used): ?> selected <?php endif; ?>>Duke</option>
                                                  <option value="19" <?php if("19"==$t->lab_used): ?> selected <?php endif; ?>>Wash U</option>
                                                  <option value="20" <?php if("20"==$t->lab_used): ?> selected <?php endif; ?>>DDC Clinic</option>
                                                   </select>

                                            
                                                  </div>
                                                </div>
                                      </td>
                                      <td scope="col">
                                         <div class="form-group">
                                              
                                                      <input type="text" class="form-control" id="date_ordered"  
                                                      name="test[date_ordered][]" value="<?php echo e($t->date_ordered); ?>" style="width: 85%;margin-top: -0px;">
                                                    </div>
                                                  
                                      </td>
                                      <td scope="col">
                                        <div class="form-group">
                                                 
                                              <div class="col-lg-10">
                                                <select class="form-control m-bot15" name="test[patient_type][]">
                                                      <option value="0">---Select---</option>
                                                      <option value="1" <?php if("1"==$t->patient_type): ?>   selected <?php endif; ?>>Outpatient</option>
                                                      <option value="2" <?php if("2"==$t->patient_type): ?>   selected <?php endif; ?>>Inpatient</option>
                                                      <option value="3" <?php if("3"==$t->patient_type): ?>   selected <?php endif; ?>>Chart review</option>
                                                      <option value="4" <?php if("4"==$t->patient_type): ?>   selected <?php endif; ?>>Medical interpretation</option>
                                                </select>
                                                
                                              </div>
                                           </div>
                                      </td>
                                      <td scope="col">
                                       <div class="form-group">
                                                 
                                                  <div class="col-lg-10">
                                                    <select class="form-control m-bot15" name="test[sample_status][]">
                                                        <option value="0">---Select---</option>
                                                        <option value="1" <?php if("1"==$t->sample_status): ?>   selected <?php endif; ?>>Sent</option>
                                                        <option value="2" <?php if("2"==$t->sample_status): ?>   selected <?php endif; ?>>Pending</option>
                                                        <option value="3"<?php if("3"==$t->sample_status): ?>   selected <?php endif; ?>>Holding DNA</option>
                                                    </select>
                                                    
                                                  </div>
                                                </div>
                                      </td>
                                      <td scope="col">
                                        <div class="radios">
                                                  <label class="label_radio" for="result-01">
                                                        <input name="test[result][<?php echo e($key); ?>]" id="result-01" value="Yes" type="radio" <?php if("Yes"==$t->result): ?>   checked <?php endif; ?> /> Yes</label>
                                                  <label class="label_radio" for="result-02">
                                                        <input name="test[result][<?php echo e($key); ?>]" id="result-02" value="No" type="radio"  <?php if("No"==$t->result): ?>   checked <?php endif; ?> /> No</label>



                                        </div>
                                      </td>
                                      <td scope="col">
                                        <div class="form-group">
                                                 
                                                  <div class="col-lg-10">
                                                    <select class="form-control m-bot15" name="test[diagnostic][]">
                                                            <option value="0">---Select---</option>
                                                                            <option value="Positive"
                                                                            <?php if("Positive"==$t->diagnostic): ?> selected <?php endif; ?>
                                                                            >Positive</option>
                                                                            <option value="Negative"
                                                                               <?php if("Negative"==$t->diagnostic): ?>   selected <?php endif; ?>
                                                                            >Negative</option>
                                                                            <option value="Uncertain"
                                                                             <?php if("Uncertain"==$t->diagnostic): ?>   selected <?php endif; ?>
                                                                            >Uncertain</option>
                                                                            <!-- <option value="">5</option> -->
                                                                        </select>
                                                    
                                                  </div>
                                                </div>
                                      </td>
                                      <td scope="col">
                                          <div class="form-group">
                                             <div class="checkbox text-left" style="text-align: left;">
                                                      <label> 
                                                        <input type="checkbox" class="test_not_performed" name="test[test_not_performed_<?php echo e($key); ?>]" 
                                                        value="<?php echo e($t -> test_not_performed); ?>" <?php if($t -> test_not_performed == "Yes"): ?> checked <?php endif; ?>> Test Not Performed
                                                      </label>
                                              </div>
                                          </div>
                                      </td>

                                      <td scope="col">
                                          <div class="form-group">
                                              <button type="button" class="btn btn-default btn-sm add">
                                               <span class="fa fa-plus"></span>
                                              </button>
                                              <!--button type="button" class="btn btn-default btn-sm delete">
                                                 <span class="fa fa-times"></span> 
                                              </button> -->
                                          </div>
                                      </td>

                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                  <tr>
                                    
                                    <td scope="col">
                                      <div class="form-group">
                                               
                                                <div class="col-lg-10">
                                                  <select class="form-control m-bot15" name="test[test_name][]">
                                                        <option value="0">--Select--</option>
                                                        <option value="1">Exome</option>
                                                        <option value="2">Exome Reanalysis, Full</option>
                                                        <option value="3">Exome Reanalysis, Partial</option>
                                                        <option value="4">Exome Slice</option>
                                                        <option value="5">Exome, Research</option>
                                                        <option value="6">Rapid Exome</option>
                                                        <option value="7">Genome</option>
                                                        <option value="8">mtDNA</option>
                                                        <option value="9">SNP array</option>
                                                        <option value="10">SNP array reanalysis</option>
                                                        <option value="11">Single gene</option>
                                                        <option value="12">Panel</option>
                                                        <option value="13">Karyotype</option>
                                                        <option value="14">Familial Variant Testing</option>
                                                        <option value="15">Chromosome Breakage</option>
                                                        <option value="16">Biochemical test</option>
                                                        <option value="17">Previously ordered test</option>
                                                    </select>
                                                  
                                                </div>
                                              </div>
                                    </td>
                                    <td scope="col">
                                       <div class="checkbox">
                                                <label>
                                                  <input type="checkbox" class="img_ordered" name="test[img_ordered_0]" value="No">
                                                                  </label>
                                              </div>
                                    </td>
                                    <td scope="col">
                                    <div class="form-group">
                                       <div class="checkbox">
                                                <label>
                                                      <input type="checkbox" class="lab_initiated" name="test[lab_initiated_0]" value="No">
                                                                  </label>
                                              </div>
                                              </div>
                                    </td>
                                    <td scope="col">
                                       <div class="form-group">
                                                
                                                <div class="col-lg-10">
                                                  <select class="form-control m-bot15" name="test[lab_used][]">
                                                                          <option value="0">--Select--</option>
                                                                          <option value="1">CHOP</option>
                                                                          <option value="2">GeneDx</option>
                                                                          <option value="3">Harvard</option>
                                                                          <option value="4">ARUP</option>
                                                                          <option value="5">Baylor</option>
                                                                          <option value="6">Blueprint Genetics</option>
                                                                          <option value="7">Cincinnati Molecular Diagnositc Lab</option>
                                                                          <option value="8">Connective Tissue Gene Test</option>
                                                                          <option value="9">University of Chicago</option>
                                                                          <option value="10">Other</option>
                                                                          <option value="10">Other</option>
                                                                          <option value="10">Other</option>
                                                                          <option value="10">Other</option>
                                                                          <option value="10">Other</option>
                                                                          <option value="10">Other</option>
                                                                          <option value="10">Other</option>
                                                                          <option value="10">Other</option>
                                                                      </select>
                                                  
                                                </div>
                                              </div>
                                    </td>
                                    <td scope="col">
                                       <div class="form-group">
                                            
                                                    <input type="text" class="form-control" id="date_ordered"  
                                                    name="test[date_ordered][]" style="width: 85%; margin-top: -0px;">
                                                  </div>
                                                
                                    </td>
                                    <td scope="col">
                                      <div class="form-group">
                                               
                                                <div class="col-lg-10">
                                                  <select class="form-control m-bot15" name="test[patient_type][]">
                                                                          <option value="0">--Select--</option>
                                                                          <option value="1">Outpatient</option>
                                                                          <option value="2">Inpatient</option>
                                                                          <option value="3">Chart review</option>
                                                                          <option value="4">Medical interpretation</option>
                                                  </select>
                                                  
                                                </div>
                                              </div>
                                    </td>
                                    <td scope="col">
                                     <div class="form-group">
                                               
                                                <div class="col-lg-10">
                                                 <select class="form-control m-bot15" name="test[sample_status][]">
                                                      <option value="0">--Select--</option>
                                                      <option value="1">Sent</option>
                                                      <option value="2">Pending</option>
                                                      <option value="3">Holding DNA</option>
                                                  </select>
                                                  
                                                </div>
                                              </div>
                                    </td>
                                    <td scope="col">
                                      <div class="radios">
                                                <label class="label_radio" for="result-01">
                                                     <input name="test[result][0]" id="result-01" value="Yes" type="radio" /> Yes
                                                </label>
                                                <label class="label_radio" for="result-02">
                                                    <input name="test[result][0]" id="result-02" value="No" type="radio" /> No
                                                </label>


                                       </div>
                                    </td>
                                    <td scope="col">
                                      <div class="form-group">
                                               
                                                <div class="col-lg-10">
                                                  <select class="form-control m-bot15" name="test[diagnostic][]">
                                                                          <option value="0"a>---Select---</option>
                                                                          <option value="Positive">Positive</option>
                                                                          <option value="Negative">Negative</option>
                                                                          <option value="Uncertain">Uncertain</option>
                                                                          <!-- <option value="">5</option> -->
                                                                      </select>
                                                  
                                                </div>
                                              </div>
                                    </td>
                                    <td scope="col">
                                          <div class="form-group">
                                             <div class="checkbox"  style="text-align: left;">
                                                      <label> 
                                                        <input type="checkbox" class="test_not_performed" name="test[test_not_performed_0]" value="No"> Test Not Performed
                                                      </label>
                                              </div>
                                          </div>

                                    </td>
                                    <td scope="col">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-default btn-sm add">
                                          <span class="fa fa-plus"></span>
                                        </button>
                                        <!--button type="button" class="btn btn-default btn-sm delete">
                                            <span class="fa fa-times"></span> 
                                        </button>-->
                                    </div>
                                    </td>

                                <?php endif; ?>
                              </tbody>
                            </table>
                          </div>
                          <div id="tab2" class="tab">
                              <section class="panel">
                                  <header class="panel-heading">
                                    HPO Terms
                                  </header>
                                  <p>Copy and Paste from directly Epic</p>
                                  <textarea class="form-control ckeditor" name="hpo" rows="6">
                                     <?php if(!empty(old('hpo'))): ?> <?php echo e(old('hpo')); ?>  <?php elseif(!empty($edit)): ?> <?php echo e(@$edit -> hpo); ?><?php endif; ?>
                                  </textarea>
                              </section>
                          </div>


                         
                          <div id="tab3" class="tab">
                            <table class="table table-responsive table-striped" id="sample_requests">
                              <thead>
                                <tr>
                                  <th scope="col">Requester Name</th>
                                  <th scope="col">Institution</th>
                                  <th scope="col">Sample type</th>
                                  <th scope="col">Date sent</th>
                                  <th scope="col">Number of vials</th>
                                  <th scope="col">Delivered by</th>
                                  <th scope="col">Comment</th>
                                  
                                  
                                   
                                </tr>
                              </thead>
                              <tbody>


      <?php if(count($edit -> sample_requests)>0): ?>
            <?php $__currentLoopData = $edit -> sample_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                
              <td scope="col">
                <tr>

                <div class="form-group">
                  <div class="col-lg-10">
                    <td>
                    <input type="text" class="form-control" id="requester_name" name="sample_requests[requester_name][]" 
                    value="<?php echo e($s -> requester_name); ?>">
                    
                  </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="institution" name="sample_requests[institution][]" 
                    value="<?php echo e($s -> institution); ?>">
                  </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="sample_type" name="sample_requests[sample_type][]" 
                    value="<?php echo e($s -> sample_type); ?>">
                  </div>
                </div>
              </td>

              <td scope="col">
                <div class="form-group">
                    <div class="col-lg-10">                        
                    <input type="text" class="form-control" id="date_sent" name="sample_requests[date_sent][]" 
                    value="<?php echo e($s -> date_sent); ?>" style="width: 85%; margin-top: -0px; ">
                    </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                   
                     <input type="text" class="form-control" id="number_of_vials" name="sample_requests[number_of_vials][]" 
                    value="<?php echo e($s -> number_of_vials); ?>">
                  </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="delivered_by" name="sample_requests[delivered_by][]" 
                    value="<?php echo e($s -> delivered_by); ?>">
                  </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="comments" name="sample_requests[comments][]" 
                    value="<?php echo e($s -> comments); ?>">
                    
                  </div>
                </div>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="form-group">

        
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="requester_name" name="sample_requests[requester_name][]" value="">
                  </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="institution" name="sample_requests[institution][]" value="">
                  </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="sample_type" name="sample_requests[sample_type][]" value="">
                  </div>
                </div>
              </td>

              <td scope="col">
                <div class="form-group">
                    <div class="col-lg-10">
                               
                    <input type="text" class="form-control" id="date_sent"  
                        name="sample_requests[date_sent][]" style="width: 85%; margin-top: -0px;" value="<?php echo e($s->date_sent); ?>">
                    </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="number_of_vials" name="sample_requests[number_of_vials][]" value="">
                  </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="delivered_by" name="sample_requests[delivered_by][]" value="">
                  </div>
                </div>
              </td>
              <td scope="col">
                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="comments" name="sample_requests[comments][]" value="">
                  </div>
                </div>
              </td>
              
                </div>
                </tr>    
                <?php endif; ?>
            </tbody>
          </table>
              
                </div>
                            </tbody>



                          </table>
                        </div>
                      



                      </div>
</div>
<style type="text/css">
  .form-group{
  margin-bottom: 0px;
}
</style>


