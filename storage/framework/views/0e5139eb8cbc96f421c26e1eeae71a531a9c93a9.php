        <div class="tabs">
                      <ul class="tab-links">
                          <li class="active"><a href="#tab1"><i class="fa fa-bars"></i>Tests</a></li>
                          <li><a href="#tab2"><i class="fa fa-bars"></i>HPO</a></li>
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
                                                                            <option value="1" 
                                                                            <?php if("1"==$t->test_name): ?>   selected <?php endif; ?>>1</option>
                                                                            <option value="2" <?php if("2"==$t->test_name): ?>   selected <?php endif; ?>>2</option>
                                                                            <option value="3" <?php if("3"==$t->test_name): ?>   selected <?php endif; ?>>3</option>
                                                                            <option value="4" <?php if("4"==$t->test_name): ?>   selected <?php endif; ?>>4</option>
                                                                            <option value="5" <?php if("5"==$t->test_name): ?>   selected <?php endif; ?>>5</option>
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
                                                                            <option value="1" 
                                                                            <?php if("5"==$t->lab_used): ?> selected <?php endif; ?>>1</option>
                                                                            <option value="2" 
                                                                            <?php if("2"==$t->lab_used): ?> selected <?php endif; ?>>2</option>
                                                                            <option value="3" 
                                                                             <?php if("3"==$t->lab_used): ?>   selected <?php endif; ?>


                                                                            >3</option>
                                                                            <option value="4"
                                                                             <?php if("4"==$t->lab_used): ?>   selected <?php endif; ?>
                                                                            >4</option>
                                                                            <option value="5" 
                                                                             <?php if("5"==$t->lab_used): ?>   selected <?php endif; ?>
                                                                            >5</option>
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
                                                                            <option value="1" 
                                                                              <?php if("1"==$t->patient_type): ?>   selected <?php endif; ?>
                                                                            >1</option>
                                                                            <option value="2"
                                                                             <?php if("2"==$t->patient_type): ?>   selected <?php endif; ?>
                                                                            >2</option>
                                                                            <option value="3"
                                                                              <?php if("3"==$t->patient_type): ?>   selected <?php endif; ?>
                                                                            >3</option>
                                                                            <option value="4"
                                                                                      <?php if("4"==$t->patient_type): ?>   selected <?php endif; ?>
                                                                            >4</option>
                                                                            <option value="5"
                                                                                <?php if("5"==$t->patient_type): ?>   selected <?php endif; ?>
                                                                            >5</option>
                                                    </select>
                                                    
                                                  </div>
                                                </div>
                                      </td>
                                      <td scope="col">
                                       <div class="form-group">
                                                 
                                                  <div class="col-lg-10">
                                                    <select class="form-control m-bot15" name="test[sample_status][]">
                                                                            <option value="1" 
                                                                              <?php if("1"==$t->sample_status): ?>   selected <?php endif; ?>
                                                                            >1</option>
                                                                            <option value="2"
                                                                             <?php if("2"==$t->sample_status): ?>   selected <?php endif; ?>
                                                                            >2</option>
                                                                            <option value="3"
                                                                              <?php if("3"==$t->sample_status): ?>   selected <?php endif; ?>
                                                                            >3</option>
                                                                            <option value="4"
                                                                                      <?php if("4"==$t->sample_status): ?>   selected <?php endif; ?>
                                                                            >4</option>
                                                                            <option value="5"
                                                                                <?php if("5"==$t->sample_status): ?>   selected <?php endif; ?>
                                                                            >5</option>
                                                                        </select>
                                                    
                                                  </div>
                                                </div>
                                      </td>
                                      <td scope="col">
                                        <div class="radios">
                                                              <label class="label_radio" for="result-01">

                                                                                        <input name="test[result][<?php echo e($key); ?>]" id="result-01" value="Yes" type="radio" <?php if("Yes"==$t->result): ?>   checked <?php endif; ?> /> Yes
                                                                                    </label>
                                                              <label class="label_radio" for="result-02">
                                                                                        <input name="test[result][<?php echo e($key); ?>]" id="result-02" value="No" type="radio"  <?php if("No"==$t->result): ?>   checked <?php endif; ?> /> No
                                                                                    </label>



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
                                              <button type="button" class="btn btn-default btn-sm delete">
                                                 <span class="fa fa-times"></span> 
                                              </button>
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
                                                                          <option>1</option>
                                                                          <option>2</option>
                                                                          <option>3</option>
                                                                          <option>4</option>
                                                                          <option>5</option>
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
                                                                          <option value="">1</option>
                                                                          <option value="">2</option>
                                                                          <option value="">3</option>
                                                                          <option value="">4</option>
                                                                          <option value="">5</option>
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
                                                                          <option value="">1</option>
                                                                          <option value="">2</option>
                                                                          <option value="">3</option>
                                                                          <option value="">4</option>
                                                                          <option value="">5</option>
                                                  </select>
                                                  
                                                </div>
                                              </div>
                                    </td>
                                    <td scope="col">
                                     <div class="form-group">
                                               
                                                <div class="col-lg-10">
                                                  <select class="form-control m-bot15" name="test[sample_status][]">
                                                                          <option>1</option>
                                                                          <option>2</option>
                                                                          <option>3</option>
                                                                          <option>4</option>
                                                                          <option>5</option>
                                                                      </select>
                                                  
                                                </div>
                                              </div>
                                    </td>
                                    <td scope="col">
                                      <div class="radios">
                                                            <label class="label_radio" for="result-01">
                                                                                      <input name="test[result][0]" id="result-01" value="Yes" type="radio" checked /> Yes
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
                                        <button type="button" class="btn btn-default btn-sm delete">
                                            <span class="fa fa-times"></span> 
                                        </button>
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
                      </div>
</div>
<style type="text/css">
  .form-group{
  margin-bottom: 0px;
}
</style>


