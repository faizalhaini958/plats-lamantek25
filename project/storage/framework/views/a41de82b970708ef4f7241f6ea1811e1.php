<section class="space bg-cover" style="background:<?php echo e($ps->call_bg); ?> url(assets/img/landing-bg.png) no-repeat;">
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="text-dark mb-0"><?php echo e($ps->call_title); ?></h6>
                    <h2 class="ft-bold text-dark"><?php echo e($ps->call_subtitle); ?></h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                <form class="bg-white rounded p-1" action="<?php echo e(route('front.subscriber')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row no-gutters">
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                            <div class="form-group mb-0 position-relative">
                                <input type="text" class="form-control b-0" name="email" placeholder="<?php echo app('translator')->get('Masukkan Emel Anda'); ?>">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                            <div class="form-group mb-0 position-relative">
                                <button class="btn full-width btn-height theme-bg text-light fs-md" type="submit"><?php echo app('translator')->get('Hantar'); ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/partials/front/cta.blade.php ENDPATH**/ ?>