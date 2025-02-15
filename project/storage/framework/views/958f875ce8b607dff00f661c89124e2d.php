<?php $__env->startSection('content'); ?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4 py-3">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Dashboard')); ?></h1>
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        </ol>
    </div>

    <?php if(Session::has('cache')): ?>
        <div class="alert alert-success validation">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h3 class="text-center"><?php echo e(Session::get("cache")); ?></h3>
        </div>
    <?php endif; ?>

  <div class="row mb-3">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?php echo e(__('Jumlah Daftar')); ?></div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800"><?php echo e(count($directories)); ?> </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-fw fa-newspaper fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?php echo e(__('Senarai Terbit')); ?></div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800"><?php echo e(count($directories)); ?> </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?php echo e(__('Dalam Proses')); ?></div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800"><?php echo e(count($directories)); ?> </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?php echo e(__('Kategori')); ?></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e(count($directories)); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?php echo e(__('Lokasi')); ?></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e(count($directories)); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?php echo e(__('Artikel')); ?></div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800"><?php echo e(count($directories)); ?> </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-fw fa-newspaper fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?php echo e(__('Pasukan')); ?></div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800"><?php echo e(count($directories)); ?> </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"><?php echo e(__('Pesanan Mesej')); ?></div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800"><?php echo e(count($directories)); ?> </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>  

  <!--Row-->

  <div class="row mb-3">
    <div class="col-xl-12 col-lg-12 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo app('translator')->get('Senarai Peniaga Baru Daftar'); ?></h6>
        </div>
        <?php if(count($users)>0): ?>

          <div class="table-responsive table--mobile-lg">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th><?php echo app('translator')->get('Bil'); ?></th>
                  <th><?php echo app('translator')->get('Nama'); ?></th>
                  <th><?php echo app('translator')->get('Emel'); ?></th>
                  <th><?php echo app('translator')->get('Status'); ?></th>
                  <th><?php echo app('translator')->get('Tindakan'); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td data-label="<?php echo app('translator')->get('Bil'); ?>"><?php echo e($loop->iteration); ?></td>
                    <td data-label="<?php echo app('translator')->get('Nama'); ?>"><?php echo e($data->name); ?></td>
                    <td data-label="<?php echo app('translator')->get('Emel'); ?>"><?php echo e($data->email); ?></td>
                    <td data-label="<?php echo app('translator')->get('Status'); ?>"><span class="badge badge-<?php echo e($data->is_banned == 0 ? 'success' : 'danger'); ?>"><?php echo e($data->is_banned == 0 ? 'activated' : 'deactivated'); ?></span></td>
                    <td data-label="<?php echo app('translator')->get('Tindakan'); ?>"><a href="<?php echo e(route('admin-user-show',$data->id)); ?>" class="btn btn-sm btn-primary"><?php echo app('translator')->get('Lihat'); ?></a></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
          <?php else: ?>
            <p class="text-center"><?php echo app('translator')->get('Tiada maklumat'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>