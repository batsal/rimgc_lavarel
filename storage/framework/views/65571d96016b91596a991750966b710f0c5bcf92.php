<?php $__env->startSection('content'); ?>

<div class="container-fluid">

<div class="row">
    <div class="col-md-12">
   <div class="panel">

      <div class="panel-body">
      <div class="row">
        <button style="margin-left: 25px; margin-bottom: 20px;" type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="fa fa-cog"></span> Advanced Search
        </button>
        <div id="filter-panel" class="collapse filter-panel">
            <div class="panel panel-default search-panel">
                <div class="panel-body">
                    <form class="form-inline"  id="form">

                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Enrolled:</label>
                            <select id="enrolled" name="enrolled" class="form-control">
                                <option value="">Select</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>

                            </select>

                        </div><!-- form group [search] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Sex:</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div><!-- form group [search] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Primary Sample Type:</label>
                            <select id="sample_type" name="sample_type" class="form-control">
                                <option value="">Select</option>
                                <option value="1">Whole Blood</option>
                                <option value="2">Serum</option>
                                <option value="3">Plasma</option>
                                <option value="4">DNA</option>
                                <option value="5">Cell line (LCL)</option>
                                <option value="6">Tissue</option>
                                <option value="7">Other</option>
                            </select>
                        </div><!-- form group [search] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Tube Type:</label>
                            <select id="tube_type" name="tube_type" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="1p">1p</option>
                                <option value="1g">1g</option>
                                <option value="1y">1y</option>
                                <option value="1p/1g">1p/1g</option>
                                <option value="2p/2g">2p/2g</option>
                                <option value="2p/2g">2p/1g</option>
                                <option value="1p/2g">1p/2g</option>
                                <option value="other">other</option>
                            </select>
                        </div><!-- form group [search] -->



                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Family Id</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Enrolling Study</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Enrolling Study IRB</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Enrolling Study PI</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Sample Record Date</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->



                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Affected Status</label>
                            <select id="affected" name="affected" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="Affected">Affected</option>
                                <option value="Unaffected">Unaffected</option>
                                <option value="Unknown">Unknown</option>
                            </select>
                                
                        </div><!-- form group [search] -->

                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Sample Available</label>
                            <select id="sample" name="sample" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Pending">Pending</option>
                                <option value="Failed">Failed</option>
                            </select>
                                
                        </div><!-- form group [search] -->



                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Lab Used</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Project name</label>
                            <select id="new" name="new" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="1p">GRIN</option>
                                <option value="1g">IMGC</option>
                                <option value="1y"> EGRP (Ingo's epilepsy) </option>
                                <option value="1p">PediSeq</option>
                                <option value="1g"> Hearing Loss (Ian) </option>
                                <option value="1y"> CdLS </option>
                            </select>
                                
                        </div><!-- form group [search] -->

                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Derived Sample Type:</label>
                            <select id="new" name="new" class="form-control">
                                <option value="">Select</option>
                                <option value="1">Whole Blood</option>
                                <option value="2">Serum</option>
                                <option value="3">Plasma</option>
                                <option value="4">DNA</option>
                                <option value="5">Cell line (LCL)</option>
                                <option value="6">Tissue</option>
                                <option value="7">Other</option>
                            </select>
                        </div><!-- form group [search] -->

                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Genomic Data Obtained</label>
                            <select id="genomic_data" name="genomic_data" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Pending">Pending</option>
                            </select>
                                
                        </div><!-- form group [search] -->



                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Name of the Lab</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->



                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Type of test data available</label>
                            <select id="new" name="new" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="1p">Whole Exome Sequencing </option>
                                <option value="1g">Whole Genome Sequencing </option>
                                <option value="1y"> Panel </option>
                                <option value="1y"> Array </option>
                                <option value="1y"> Other NGS  </option>
                                <option value="1y"> RNASeq  </option>
                                <option value="1y"> Transcriptomic  </option>
                            </select>
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Passage</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Sample age</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Other type of test data</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->



                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">If exome/genome: Singleton/Trio/Quad</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Platform</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->



                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Platform</label>
                            <select id="new" name="new" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="1p">Illumina Omni-1630 </option>
                                <option value="1g">Illumina 610507 </option>
                                <option value="1y">Illumina850k_CytoSNP318 </option>
                                <option value="1y">Illumina Omni-5293  </option>
                                <option value="1y">Other  </option>
                            </select>
                                
                        </div><!-- form group [search] -->

                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Diagnosis</label>
                            <select id="hpo" name="hpo" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="Bilateral sensorineural hearing impairment">Bilateral sensorineural hearing impairment </option>
                                <option value="Global developmental delay">Global developmental delay </option>
                                <option value="Short stature">Short stature </option>
                                <option value="Generalized hypotonia">Generalized hypotonia </option>
                                <option value="Failure to thrive">Failure to thrive  </option>
                                <option value="FMicrocephaly">Microcephaly  </option>
                            </select>
                                
                        </div><!-- form group [search] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Test Result</label>
                            <select id="test_result" name="test_result" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="Candidate gene">Candidate gene</option>
                                <option value="Likely positive">Likely positive </option>
                                <option value="Negative">Negative </option>
                                <option value="Partial positive">Partial positive </option>
                                <option value="Positive">Positive </option>
                                <option value="VUS">VUS </option>
                                
                            </select>
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Number of DNA </label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Vials submitted to BioRC</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Number of LCL vials submitttedto BioRc</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Number of other vials submitted to BioRC</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Date of BioRC submission (first submission)</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Date of BioRC submission (second submission)</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Date of BioRC submission (third submission)</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">DNA Ratio (260/280)</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">DNA conc. (ng/ul)</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Volume (ul)</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">BioRC ID (SDG ID)</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Tube Barcode</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Other Barcode</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Box Number/Other Box Details</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->


                        <!--
                       <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Plate position</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->



                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Other Sample info or notes</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->



                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Other notes from BioRC</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->



                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Filename</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->



                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Receipt Date</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->



                        <!--
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Transfer Date</label>
                            <input type="text" id="new" name="new" class="form-control" />
                                
                        </div><!-- form group [search] -->




                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">File types available</label>
                            <select id="new" name="new" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="1p">BAM  </option>
                                <option value="1g">FASTQ  </option>
                                <option value="1y">VCF  </option>
                                <option value="1y"> GVCF  </option>
                            </select>
                                
                        </div><!-- form group [search] -->


                        <!-- 
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Primary Language</label>
                                <select id="new" name="new" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="1p">English  </option>
                                <option value="1g"> Spanish   </option>
                                <option value="1y"> Other   </option>
                            </select>
                        </div><!-- form group [search] -->



<br>

                        <div class="form-group">

                            <button id="sub" style="margin-top: 32px;" type="button" class="btn btn-primary filter-col">
                                <span class="fa fa-record"></span> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <table id="example" class="display table-responsive table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Study ID</th>
                <!--<th>Name</th>-->
                <th>Family ID</th>
                <th>Biobank ID</th>
                <th>Gender</th>
                <th>Sample Available</th>
                <th>Genomic Data Available</th>
                <th>Race</th>
                <th>Tube Type</th>
                
            </tr>
        </thead>
        
    </table>
</div>
</div>

  </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript">
   

   $( document ).ready(function() {
        var table = $('#example').DataTable( {
        "ajax": "<?php echo e(route('form.search1')); ?>",
        "dom": 'Bfrtip',
        "buttons": [
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "bPaginate":true,
        "bProcessing": true,
        "pageLength": 25,
        "destroy": true,
        "searching": true,
        "columns": [
        { mData: 'study_id' } ,
        //{ mData: 'first_name' },
        { mData: 'family_id' },
        { mData: 'sdg_id' },
        { mData: 'gender' },
        { mData: 'sample' },
        { mData: 'genomic_data' },
        { mData: 'race',
            render: function(mData) { 
                if (mData == 1) {
                    return 'American Indian or Alaska Native';
                }
               else if(mData == 2) {
                    return 'Asian';
               }
               else if(mData == 3) {
                    return 'Black or African American';
               }
               else if(mData == 4) {
                    return 'Native Hawaiian or Other Pacific Islander';
               }
               else if(mData == 5) {
                    return 'White';
               }
               else if(mData == 6) {
                    return 'Multiple race';
               }
               else if(mData == 7) {
                    return 'Hispanic/Latino';
               }
               else if(mData == 8) {
                    return 'Unknown';
               }
               else{
                    return 'Not available';
               } 
           }  
        },
        { mData: 'tube_type' }
        ]
        });



        $("#sub").on("click", function(){
         table.clear().draw();
        $.ajax({
            "url": "<?php echo e(route('form.searchandlist')); ?>",
            "type": "get",
            dataType: "json",
            data: { enrolled: $("#enrolled").val(), gender:$("#gender").val(), sample:$("#sample").val(), sample_type: $("#sample_type").val(), tube_type: $("#tube_type").val(), hpo: $("#hpo").val() , test_result: $("#test_result").val()  },
            success: function(response) {
                var newRows = response;
                // var table = $("#example").DataTable();
                // console.log(response);
                // table.clear().draw();
                table.clear().rows.add(newRows).draw();

               //  datatable.clear().draw();
               //  datatable.rows.add(NewlyCreatedData); // Add new data
               // datatable.columns.adjust().draw();
            } 
        });
        });
}); 
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>