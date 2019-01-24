

<?php $__env->startSection('content'); ?>
    <div id="adddata">
        <table id="example" class="display table-responsive table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Study ID</th>
                <th>Name</th>
                <th>Family ID</th>
                <th>MRN</th>
                <!--<th>Sample Available</th>-->
                <th>Sample Type</th>
                <th>Tube Type</th>
                <th>Race</th>
                <th>Biobank ID</th>
                <?php if($role_name !='employee'): ?>
                    <th>Action</th>
                <?php endif; ?>
            </tr>
            </thead>

            <tbody id="mydata">
            <?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="<?php echo e(route('form.show' ,$i -> study_id)); ?>">
                    <?php echo e($i -> study_id); ?></a>
                    </td>
                    <td><?php echo e($i -> first_name); ?> <?php echo e($i -> last_name); ?></td>
                    <td><?php echo e($i -> family_id); ?></td>
                    <td><?php echo e($i -> mrn); ?></td>
                    <td><?php echo e(App\Http\Controllers\admin\FormController::get_format($i->primary_sample_type,'primarySample')); ?></td>
                    <td><?php echo e(($i -> tube_type)?$i -> tube_type:''); ?></td>
                    <td><?php echo e(($i -> race)?$race[$i -> race]:''); ?></td>
                    <td><?php echo e($i -> sdg_id); ?></td>
                    <?php if($role_name !='employee'): ?>
                        <td><a href="<?php echo e(route('form.edit' ,$i->patient_info_id)); ?>"
                               class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                            <form action="<?php echo e(url('form', [$i->patient_info_id])); ?>" method="POST"
                                  style="display: inline-block;">
                                <!--<input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" class="btn btn-default btn-sm">
                                    <i class="fa fa-times"></i>-->
                                </button>
                            </form>


                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Select Field</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(url('download/per/25/page/1')); ?>" method="post" id="field">
                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4 form-group">
                                        <label for="recipient-name" class="control-label"><?php echo e($column); ?></label>
                                        <input type="checkbox" class="form-control" id="recipient-name"
                                               name="field[<?php echo e($key); ?>]" value="<?php echo e($key); ?>">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" data-dismiss="modal">Download CSV</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <?php $__env->startSection('style'); ?>
            <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('script'); ?>
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript">
                var APP_URL =<?php echo json_encode(url('/')); ?>;

                function filterGlobal() {
                    $('#example').DataTable().search(
                        $('#global_filter').val(),
                        $('#global_regex').prop('checked'),
                        $('#global_smart').prop('checked')
                    ).draw();
                }

                function filterColumn(i) {
                    $('#example').DataTable().column(i).search(
                        $('#col' + i + '_filter').val(),
                        $('#col' + i + '_regex').prop('checked'),
                        $('#col' + i + '_smart').prop('checked')
                    ).draw();
                }

                $(document).ready(function () {
                    $('#example').DataTable({"pageLength":25});

                    $('input.global_filter').on('keyup click', function () {
                        filterGlobal();
                    });

                    $('input.column_filter').on('keyup click', function () {
                        filterColumn($(this).parents('tr').attr('data-column'));
                    });

                    $(document).on('click', '.paginate_button', function () {
                        var current_page = $(this).html();
                        var length = $('select[name="example_length"]').val();
                        var pagination_url = APP_URL + "/download/per/" + length + "page/" + current_page;

                        $(".csv").attr("href", pagination_url);
                        $("form#field").attr("action", pagination_url);
                    });

                    $(document).on('change', 'select[name="example_length"]', function () {
                        var current_page = $(document).find("#example_paginate a.current").html();
                        var length = $('select[name="example_length"]').val();
                        var pagination_url = APP_URL + "/download/per/" + length + "/page/" + current_page;

                        $(".csv").attr("href", pagination_url);
                        $("form#field").attr("action", pagination_url);
                    });

                    $('button').click(function () {
                        $('#exampleModal').modal('hide');
                    });

                });


            </script>
        <?php $__env->stopSection(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>