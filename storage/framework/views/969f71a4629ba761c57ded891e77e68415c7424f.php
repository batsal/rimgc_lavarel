<div class="tabs" style="background-color: #fff;">
                      <ul class="tab-links">
                          <li class="active"><a href="#tab1"><i class="fa fa-bars"></i>Tests</a></li>
                          <li><a href="#tab2"><i class="fa fa-bars"></i>HPO</a></li>
                      </ul>
                      <div class="tab-content">
                          <div id="tab1" class="tab active">
                            <table class="table table-striped table-responsive" id="test">
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
                                <tr>
                                    
                                    <td scope="col">
                                      <div class="form-group">
                                               
                                                <div class="col-lg-10">
                                                  <select class="form-control m-bot15" name="test[test_name][]">
                                                                          <option value="1">1</option>
                                                                          <option value="2">2</option>
                                                                          <option value="3">3</option>
                                                                          <option value="4">4</option>
                                                                          <option value="5">5</option>
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
                                                    name="test[date_ordered][]" style="width: 85%; margin-top: -0px;" value="<?php echo e(old('date_ordered')); ?>">
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
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div id="tab2" class="tab" style="background-color: #fff;">
                              <section class="panel comment">
                                   <label>
                                    HPO Terms:
                                  </label>
                                  <p class="alert alert-warning">Copy and Paste from directly Epic</p>
                                   <textarea class="form-control ckeditor" name="hpo" rows="6"><?php echo e(old('hpo')); ?>

                                   </textarea>

                              </section>
                          </div>
                      </div>
</div>


