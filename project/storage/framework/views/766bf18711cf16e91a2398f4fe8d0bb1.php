<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- =============================== Dashboard Header ========================== -->
    <!--<?php if ($__env->exists('partials.user.header')) echo $__env->make('partials.user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
    <!-- =============================== Dashboard Header ========================== -->

    <!-- ======================= dashboard Detail ======================== -->
    <div class="dashboard-wrap gray px-4 py-5">
        <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i><?php echo app('translator')->get('Listing'); ?>
        </a>
        <div class="collapse" id="MobNav">
            <?php if ($__env->exists('partials.user.sidebar')) echo $__env->make('partials.user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium"><?php echo app('translator')->get('Selamat Datang'); ?>, <?php echo e(auth()->user()->name); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-muted"><a href="<?php echo e(route('front.index')); ?>"><?php echo app('translator')->get('Utama'); ?></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>" class="theme-cl"><?php echo app('translator')->get('Dashboard'); ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="dsd-boxed-widget py-5 px-4 bg-danger rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light count"><?php echo e($active_listings); ?></h2>
                            <p class="p-0 m-0 text-light fs-md"><?php echo app('translator')->get('Senarai Aktif'); ?></p>
                            <i class="lni lni-empty-file"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="dsd-boxed-widget py-5 px-4 bg-success rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light count"><?php echo e($view_listings); ?></h2>
                            <p class="p-0 m-0 text-light fs-md"><?php echo app('translator')->get('Lihat Senarai'); ?></p>
                            <i class="lni lni-eye"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="dsd-boxed-widget py-5 px-4 bg-warning rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light count"><?php echo e($total_reviews); ?></h2>
                            <p class="p-0 m-0 text-light fs-md"><?php echo app('translator')->get('Dalam Proses'); ?></p>
                            <i class="lni lni-comments"></i>
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
    <!-- Morris.js charts -->
    <script src="<?php echo e(asset('assets/front/js/plugins/raphael/raphael.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/plugins/morris.js/morris.min.js')); ?>"></script>

    <!-- Custom Chart JavaScript -->
    <script src="<?php echo e(asset('assets/front/js/plugins/dashboard-2.js')); ?>"></script>
    <!-- ============================================================== -->

    <script>
      'use strict';

      function myFunction() {
        var copyText = document.getElementById("cronjobURL");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        $.notify("Referral url copied", "info");
    }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/user/dashboard.blade.php ENDPATH**/ ?>