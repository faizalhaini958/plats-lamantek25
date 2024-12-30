<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- =============================== Dashboard Header ========================== -->
    <!-- <?php if ($__env->exists('partials.user.header')) echo $__env->make('partials.user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
    <!-- =============================== Dashboard Header ========================== -->

    <!-- ======================= dashboard Detail ======================== -->
    <div class="dashboard-wrap gray px-4 py-5">
        <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i><?php echo app('translator')->get('Dashboard Navigation'); ?>
        </a>
        <div class="collapse" id="MobNav">
            <?php if ($__env->exists('partials.user.sidebar')) echo $__env->make('partials.user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium"><?php echo app('translator')->get('Kemaskini Kata Laluan'); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-muted"><a href="<?php echo e(route('front.index')); ?>"><?php echo app('translator')->get('Utama'); ?></a></li>
                                <li class="breadcrumb-item"><a href="#" class="theme-cl"><?php echo app('translator')->get('Kemaskini Kata Laluan'); ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="_dashboard_content bg-white rounded mb-4">
                            <div class="_dashboard_content_header br-bottom py-3 px-3">
                                <div class="_dashboard__header_flex">
                                    <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-lock me-2 theme-cl fs-sm"></i><?php echo app('translator')->get("Kemaskini"); ?></h4>
                                </div>
                            </div>

                            <div class="_dashboard_content_body py-3 px-3">
                                <form class="row submit-form" action="<?php echo e(route('user.change.password')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php if ($__env->exists('includes.flash')) echo $__env->make('includes.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get("Kata Laluan Semasa"); ?></label>
                                            <input type="password" name="cpass" class="form-control rounded" placeholder="<?php echo app('translator')->get('Kata Laluan Semasa'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get("Kata Laluan Baru"); ?></label>
                                            <input type="password" name="newpass" class="form-control rounded" placeholder="<?php echo app('translator')->get('Kata Laluan Baru'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get("Sah Semula Kata Laluan Baru"); ?></label>
                                            <input type="password" name="renewpass" class="form-control rounded" placeholder="<?php echo app('translator')->get('Sah Semula Kata Laluan Baru'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg"><?php echo app('translator')->get("Kemaskini"); ?></button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- footer -->
            <div class="row">
                <div class="col-md-12">
                    <div class="py-3">
                        <?php
                            echo $gs->copyright;
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- ======================= dashboard Detail End ======================== -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/user/changepassword.blade.php ENDPATH**/ ?>