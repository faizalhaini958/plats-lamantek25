<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="d-sm-flex align-items-center py-3 justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Call to action')); ?></h5>
    <ol class="breadcrumb m-0 py-0">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Homepage Manage')); ?></a></li>
    </ol>
    </div>
</div>

  <div class="card mb-4 mt-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Call to action')); ?></h6>
    </div>

    <div class="card-body">
      <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form class="geniusform" action="<?php echo e(route('admin.ps.update')); ?>" method="POST" enctype="multipart/form-data">

          <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <?php echo e(csrf_field()); ?>


          <div class="form-group">
            <label for="inp-title"><?php echo e(__('Title')); ?></label>
            <input type="text" class="form-control" id="inp-title" name="call_title"  placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e($data->call_title); ?>" required>
          </div>

          <div class="form-group">
            <label for="error_text"><?php echo e(__('Subtitle')); ?> </label>
            <textarea class="form-control summernote" id="call_subtitle" name="call_subtitle" required rows="3" placeholder="<?php echo e(__('Enter Subtitle')); ?>"><?php echo e($data->call_subtitle); ?></textarea>
          </div>
          
          <div class="form-group">
                <div class="cp-container cp-contain" id="cp3-container">
                    <div class="input-group" title="Using input value">
                        <input type="color" name="call_bg" class="form-control" value="<?php echo e($data->call_bg); ?>" id="exampleInputPassword1">
                    </div>
                </div>
          </div>

          <button type="submit" id="submit-btn" class="btn btn-primary mt-2 w-100"><?php echo e(__('Submit')); ?></button>

      </form>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/admin/pagesetting/call_section.blade.php ENDPATH**/ ?>