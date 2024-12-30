<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between py-3">
        <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e($data->name); ?></h5>
        <ol class="breadcrumb py-0 m-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
            <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('User')); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.user.index')); ?>"><?php echo e(__('Users')); ?></a></li>
        </ol>
	</div>
</div>


<div class="row mt-3">
  <div class="col-lg-12">

	<?php echo $__env->make('includes.admin.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="card">
        <div class="row my-5">
            <div class="col-md-2">
                <div class="user-image">
                    <?php if($data->is_provider == 1): ?>
                    <img src="<?php echo e($data->photo ? asset($data->photo):asset('assets/images/noimage.png')); ?>" alt="No Image">
                    <?php else: ?>
                    <img  class="" src="<?php echo e($data->photo ? asset('assets/images/'.$data->photo):asset('assets/images/noimage.png')); ?>" alt="No Image">
                    <?php endif; ?>
                    <a  class="mybtn1 btn btn-primary"  data-email="<?php echo e($data->email); ?>" data-toggle="modal" data-target="#vendorform" href=""><?php echo e(__('Send Message')); ?></a>

                </div>
            </div>
            <div class="col-md-10 mt-5">
                <div class="table-responsive show-table">
                    <table class="table">
                    <tr>
                      <th><?php echo e(__('ID#')); ?></th>
                      <td><?php echo e($data->id); ?></td>
                    </tr>
                    <tr>
                      <th><?php echo e(__('Username')); ?></th>
                      <td><?php echo e($data->name); ?></td>
                    </tr>
                    <tr>
                      <th><?php echo e(__('Email')); ?></th>
                      <td><?php echo e($data->email); ?></td>
                    </tr>
                    <tr>
                      <th><?php echo e(__('Address')); ?></th>
                      <td><?php echo e($data->address); ?></td>
                    </tr>

                    <tr>
                      <th><?php echo e(__('City')); ?></th>
                      <td><?php echo e($data->city); ?></td>
                    </tr>

                    <tr>
                      <th><?php echo e(__('Zip Code')); ?></th>
                      <td><?php echo e($data->zip); ?></td>
                    </tr>


                    </table>
                </div>
            </div>
        </div>


	</div>
  </div>
  <!-- DataTable with Hover -->

</div>

<div class="row my-3">
    <div class="col-xl-12 col-lg-12 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo app('translator')->get('User Directory'); ?></h6>
        </div>
        <?php if(count($listings)>0): ?>

          <div class="table-responsive table--mobile-lg">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th><?php echo app('translator')->get('Serial No'); ?></th>
                  <th><?php echo app('translator')->get('Name'); ?></th>
                  <th><?php echo app('translator')->get('Ratting'); ?></th>
                  <th><?php echo app('translator')->get('Review'); ?></th>
                  <th><?php echo app('translator')->get('Status'); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td data-label="<?php echo app('translator')->get('Serial No'); ?>"><?php echo e($loop->iteration); ?></td>
                    <td data-label="<?php echo app('translator')->get('Name'); ?>"><?php echo e($data->name); ?></td>
                    <td data-label="<?php echo app('translator')->get('Ratting'); ?>"><?php echo e($data->reviews->count()>0 ? $data->directoryRatting($data->id) : 'N/A'); ?></td>
                    <td data-label="<?php echo app('translator')->get('Ratting'); ?>"><?php echo e($data->reviews->count()); ?></td>
                    <td data-label="<?php echo app('translator')->get('Status'); ?>">
                        <span class="badge badge-<?php echo e($data->status == 0 ? 'warning' :($data->status == 1 ? 'success' : 'danger')); ?>"><?php echo e($data->status == 0 ? 'pending' :($data->status == 1 ? 'approved' : 'rejected')); ?></span></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
          <?php else: ?>
            <p class="text-center"><?php echo app('translator')->get('NO DATA FOUND'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>




<div class="modal fade confirm-modal" id="statusModal" tabindex="-1" role="dialog"
	aria-labelledby="statusModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title"><?php echo e(__("Update Status")); ?></h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		</div>
		<div class="modal-body">
			<p class="text-center"><?php echo e(__("You are about to change the status.")); ?></p>
			<p class="text-center"><?php echo e(__("Do you want to proceed?")); ?></p>
		</div>
		<div class="modal-footer">
		<a href="javascript:;" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("Cancel")); ?></a>
		<a href="javascript:;" class="btn btn-success btn-ok"><?php echo e(__("Update")); ?></a>
		</div>
	</div>
	</div>
</div>





<div class="sub-categori">
    <div class="modal fade confirm-modal" id="vendorform" tabindex="-1" role="dialog"
    aria-labelledby="vendorformLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="vendorformLabel"><?php echo e(__("Send Message")); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <form id="emailreply1">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group">
                                    <input type="email" class="form-control" id="eml1" name="to"  placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e($data->email); ?>" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subj1" name="subject"  placeholder="<?php echo e(__('Subject')); ?>" value="" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="msg1" cols="20" rows="6" placeholder="<?php echo e(__('Your Message')); ?> "required=""></textarea>
                                </div>



                                <button class="submit-btn btn btn-primary text-center" id="emlsub1" type="submit"><?php echo e(__("Send Message")); ?></button>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    



<div class="modal fade confirm-modal" id="deleteModal" tabindex="-1" role="dialog"
aria-labelledby="deleteModalTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title"><?php echo e(__("Confirm Delete")); ?></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
	<p class="text-center"><?php echo e(__("You are about to delete this Blog.")); ?></p>
	<p class="text-center"><?php echo e(__("Do you want to proceed?")); ?></p>
</div>
<div class="modal-footer">
	<a href="javascript:;" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("Cancel")); ?></a>
	<a href="javascript:;" class="btn btn-danger btn-ok"><?php echo e(__("Delete")); ?></a>
</div>
</div>
</div>
</div>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/admin/user/show.blade.php ENDPATH**/ ?>