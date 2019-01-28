<div class="tabs" style="background-color: #fff;">
                      <ul class="tab-links">
                          <li class="active"><a href="#tab1"><i class="fa fa-bars"></i>Tests</a></li>
                          <li><a href="#tab2"><i class="fa fa-bars"></i>HPO</a></li>
                          <li><a href="#tab3"><i class="fa fa-bars"></i>Sample request</a></li>
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
                                                      <option value="10">Molecular Vision Lab</option>
                                                      <option value="11">Fulgent</option>
                                                      <option value="12">Prevention Genetics</option>
                                                      <option value="13">Medical Neurogenetics Lab</option>
                                                      <option value="14">Emory</option>
                                                      <option value="15">Iowa</option>
                                                      <option value="16">Invitae</option>
                                                      <option value="17">LabCorp</option>
                                                      <option value="18">Duke</option>
                                                      <option value="19">Wash U</option>
                                                      <option value="20">DDC Clinic</option>
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
                                                      <option value="0">---Select---</option>
                                                      <option value="Positive">Positive</option>
                                                      <option value="Negative">Negative</option>
                                                      <option value="VUS">VUS</option>
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

                            <tr>
                                    
                                    
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
                        name="sample_requests[date_sent][]" style="width: 85%; margin-top: -0px;" value="">
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
                                                
                                              
              </tbody>
           </table>
          </div>
                      

      </div>
</div>


