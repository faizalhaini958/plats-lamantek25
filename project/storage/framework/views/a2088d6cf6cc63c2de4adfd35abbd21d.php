<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between">
        <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Mission Section')); ?></h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
            <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Home Page Manage')); ?></a></li>
        </ol>
	</div>
</div>


<div class="row mt-3">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                <form class="geniusform" action="<?php echo e(route('admin.ps.update')); ?>" method="POST" enctype="multipart/form-data">

                    <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <label for="hero_title"><?php echo e(__('Title')); ?></label>
                        <input type="text" class="form-control" id="hero_title" name="mission_title"  placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e($data->mission_title); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="hero_subtitle"><?php echo e(__('Subtitle')); ?></label>
                        <textarea type="text" class="form-control" name="mission_text"  placeholder="<?php echo e(__('Enter Subtitle')); ?>"><?php echo e($data->mission_text); ?></textarea>
                    </div>


                    <div class="form-group">
                        <label><?php echo e(__('Set Background Image')); ?></label>
                        <div class="wrapper-image-preview">
                            <div class="box full-width">
                                <div class="back-preview-image" style="background-image: url(<?php echo e($data->mission_photo ? asset('assets/images/'.$data->mission_photo) : asset('assets/images/placeholder.jpg')); ?>);"></div>
                                <div class="upload-options">
                                    <label class="img-upload-label full-width" for="img-upload"> <i class="fas fa-camera"></i> <?php echo e(__('Upload Picture')); ?> </label>
                                    <input id="img-upload" type="file" class="image-upload" name="mission_photo" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" id="submit-btn" class="btn btn-primary mt-2 w-100"><?php echo e(__('Submit')); ?></button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <?php echo $__env->make('includes.admin.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card mb-4">
          <div class="table-responsive p-3">
            <table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
              <thead class="thead-light">
                <tr>
                    <th><?php echo e(__('Title')); ?></th>
                    <th><?php echo e(__('Count')); ?></th>
                    <th><?php echo e(__('Options')); ?></th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
    </div>


    <div class="modal fade confirm-modal" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true">
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


    <div class="modal fade confirm-modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__("Confirm Delete")); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center"><?php echo e(__("You are about to delete this account process.")); ?></p>
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

<?php $__env->startSection('scripts'); ?>

    <script type="text/javascript">
        "use strict";

        var table = $('#geniustable').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            searching: true,
            ajax: '<?php echo e(route('admin.mission.datatables')); ?>',
            columns: [
                        { data: 'title', name: 'title' },
                        { data: 'count', name: 'count' },
                        { data: 'action', searchable: false, orderable: false }
                ],
                language : {
                    processing: '<img src="<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>">'
                }
            });

            $(function() {
                $(".btn-area").append('<div class="col-sm-12 col-md-4 pr-3 text-right">'+
                    '<a class="btn btn-primary" href="<?php echo e(route('admin.mission.create')); ?>">'+
                        '<i class="fas fa-plus"></i> Add New '+
                    '</a>'+
                '</div>');
            });


    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/admin/mission/index.blade.php ENDPATH**/ ?>