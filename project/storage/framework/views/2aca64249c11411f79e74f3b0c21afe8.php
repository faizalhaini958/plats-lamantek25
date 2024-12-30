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
            <div class="dashboard-content">
                <div class="dashboard-tlbar d-block mb-5">
                    <div class="row">
                        <div class="colxl-12 col-lg-12 col-md-12">
                            <h1 class="ft-medium"><?php echo app('translator')->get('Analitik Pelawat'); ?></h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item text-muted"><a href="<?php echo e(route('front.index')); ?>"><?php echo app('translator')->get('Utama'); ?></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('user.listing.index')); ?>" class="theme-cl"><?php echo app('translator')->get('Maklumat Perniagaan'); ?></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="dashboard-widg-bar d-block">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="dashboard-list-wraps bg-white rounded mb-4">
                                <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                    <div class="dashboard-list-wraps-flx">
                                        <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file-alt me-2 theme-cl fs-sm"></i><?php echo app('translator')->get('Statistik'); ?></h4>
                                    </div>
                                </div>

                                <div class="dashboard-list-wraps-body py-3 px-3">
                                    <div class="dashboard-listing-wraps">
                                        <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $listing = \App\Models\Listing::findOrFail($data->listing_id);
                                            ?>
                                            <div class="dsd-single-listing-wraps">
                                                <div class="dsd-single-lst-thumb">
                                                    <img src="<?php echo e(asset('assets/images/'.$listing->photo)); ?>" class="img-fluid" alt="" />
                                                </div>
                                                <div class="dsd-single-lst-caption">
                                                    <div class="dsd-single-lst-title"><h5><?php echo e($listing->name); ?></h5></div>
                                                    <span class="agd-location"><i class="lni lni-map-marker me-1"></i><?php echo e($listing->real_address); ?></span>
                                                    <div class=""><p><strong><?php echo app('translator')->get('Total views : '); ?></strong> <?php echo e($data->total); ?></p></div>
                                                    <div class="dsd-single-lst-footer">
                                                        <a href="<?php echo e(route('user.listing.analytics.details',$listing->id)); ?>" class="btn btn-view mr-1"><i class="fas fa-eye me-1"></i><?php echo app('translator')->get('View'); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="position-relative text-center">
                                                <?php if($listings->hasPages()): ?>
                                                    <?php echo e($listings->links()); ?>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/user/analytics/index.blade.php ENDPATH**/ ?>