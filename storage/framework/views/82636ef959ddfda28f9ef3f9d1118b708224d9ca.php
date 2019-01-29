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

            <?php endif; ?>
            <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary">BackToMain</a>&nbsp;&nbsp;

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
      <div class="col-md-12">
        <section class="panel head-f">
          <div class="col-md-offset-1  panel-body">
            <div class="col-md-4 inline text-left">
              <label for="family_id" class="col-md-6 control-label">Family ID</label>
              <div class="col-md-6">
                <h5><?php echo e($edit -> family_id); ?></h5>
              </div>
            </div>
            <div class="col-md-4 inline text-left">
              <label for="study_id" class="col-md-6 control-label">Study ID</label>
              <div class="col-md-6">
                <h5><?php echo e($edit -> study_id); ?></h5>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>