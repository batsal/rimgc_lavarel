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
                <th>Name</th>
                <th>Family ID</th>
                <th>MRN</th>
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
        "pageLength": 10,
        "destroy": true,
        "searching": true,
        "columns": [
        { mData: 'study_id' } ,
        { mData: 'first_name' },
        { mData: 'family_id' },
        { mData: 'mrn' },
        { mData: 'tube_type' }
        ]
        });



        $("#sub").on("click", function(){
         table.clear().draw();
        $.ajax({
            "url": "<?php echo e(route('form.searchandlist')); ?>",
            "type": "get",
            dataType: "json",
            data: { enrolled: $("#enrolled").val(), gender:$("#gender").val(), sample_type: $("#sample_type").val(), tube_type: $("#tube_type").val()  },
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