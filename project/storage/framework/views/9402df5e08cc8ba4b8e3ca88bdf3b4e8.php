<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- ======================= Login Detail ======================== -->
    <section class="gray">
        <div class="container">
            <div class="row align-items-start justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-12">

                    <div class="signup-screen-wrap">
                        <div class="signup-screen-single light">
                            <div class="text-center mb-4">
                                <h4 class="m-0 ft-medium"><?php echo app('translator')->get('Daftar Akaun PLATS'); ?></h4>
                            </div>

                            <form id="registerform" class="row gy-3" action="<?php echo e(route('user.register.submit')); ?>" method="POST">
                                <?php if ($__env->exists('includes.user.form-both')) echo $__env->make('includes.user.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo csrf_field(); ?>

                                <!--
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="mb-1"><?php echo app('translator')->get('Nama Penuh Anda'); ?></label>
                                            <input type="text" name="name" class="form-control rounded" placeholder="<?php echo app('translator')->get('Seperti dalam MYKAD'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label class="mb-1"><?php echo app('translator')->get('Emel'); ?></label>
                                        <input type="text" name="email" class="form-control rounded" placeholder="<?php echo app('translator')->get('Emel'); ?>">
                                    </div>
                                    </div>
                                </div>
                                -->

                                <div class="form-group">
                                    <label class="mb-1"><?php echo app('translator')->get('Nama Penuh Anda'); ?></label>
                                    <input type="text" name="name" class="form-control rounded" placeholder="<?php echo app('translator')->get('Seperti dalam MYKAD'); ?>">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1"><?php echo app('translator')->get('Emel'); ?></label>
                                    <input type="text" name="email" class="form-control rounded" placeholder="<?php echo app('translator')->get('e.g abc@gmail.com'); ?>">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1"><?php echo app('translator')->get('Nama Pengguna'); ?></label>
                                    <input type="text" name="username" class="form-control rounded" placeholder="<?php echo app('translator')->get('Nama Unik e.g Ahmad12'); ?>">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1"><?php echo app('translator')->get('Nombor Telefon Bimbit'); ?>
                                        <small class="text-danger"><?php echo app('translator')->get('Masukkan nombor telefon anda bermula dengan kod 6'); ?></small>
                                    </label>
                                    <input type="text" name="phone" class="form-control rounded" placeholder="<?php echo app('translator')->get('e.g 601122334455'); ?>">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1"><?php echo app('translator')->get('Kata Laluan'); ?></label>
                                    <input type="password" name="password" class="form-control rounded" placeholder="<?php echo app('translator')->get('Kata laluan untuk log masuk'); ?>*">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1"><?php echo app('translator')->get('Sah Kata Laluan'); ?></label>
                                    <input type="password" name="password_confirmation" class="form-control rounded" placeholder="<?php echo app('translator')->get('Isi semula kata laluan untuk pengesahan'); ?>*">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width theme-bg text-light rounded ft-medium">
                                        <?php echo app('translator')->get('Daftar Akaun'); ?>
                                        <div class="spinner-border formSpin" role="status"></div>
                                    </button>
                                </div>

                                <div class="form-group text-center mt-4 mb-0">
                                    <p class="mb-0"><?php echo app('translator')->get('Anda telah daftar akaun'); ?>? <a href="<?php echo e(route('user.login')); ?>" class="ft-medium text-success"><?php echo app('translator')->get('Log Masuk'); ?></a></p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Login End ======================== -->

    <!-- ======================= Newsletter Start ============================ -->
        <?php echo $__env->make('partials.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    <?php echo $__env->make('partials.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Footer End ================================== -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/user/register.blade.php ENDPATH**/ ?>