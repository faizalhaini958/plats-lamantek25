<footer class="light-footer skin-light-footer style-2">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="footer_widget">
                        <img src="<?php echo e(asset('assets/images/'.$gs->footer_logo)); ?>" class="img-footer large mb-2" alt="" />
                        <!--    
                        <div class="address mt-2">
                            <?php echo e($ps->street); ?>

                        </div>
                        <div class="address mt-3">
                            <?php echo e($ps->phone); ?><br><?php echo e($ps->contact_email); ?>

                        </div>
                        <div class="address mt-2">
                            <ul class="list-inline">
                                <?php if($sociallinks): ?>
                                    <?php $__currentLoopData = $sociallinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($social->status): ?>
                                            <li class="list-inline-item">
                                                <a href="<?php echo e($social->link); ?>" class="theme-cl">
                                                    <i class="<?php echo e($social->icon); ?>"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                              
                        </div>--> 
                    </div> 
                </div>

                <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title"><?php echo app('translator')->get('Capaian Pantas'); ?></h4>
                        <ul class="footer-menu">
                            <li><a href="<?php echo e(route('front.listing')); ?>"><?php echo app('translator')->get('Tentang PLATS'); ?></a></li>
                            <li><a href="<?php echo e(route('front.plans')); ?>"><?php echo app('translator')->get('Media'); ?></a></li>
                            <li><a href="<?php echo e(route('front.blog')); ?>"><?php echo app('translator')->get('Hubungi'); ?></a></li>
                        
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title"><?php echo app('translator')->get('Panduan'); ?></h4>
                        <ul class="footer-menu">
                            <li><a href="<?php echo e(route('front.listing')); ?>"><?php echo app('translator')->get('FAQ'); ?></a></li>
                            <li><a href="<?php echo e(route('front.plans')); ?>"><?php echo app('translator')->get('Bagaimana Daftar'); ?></a></li>
                            <li><a href="<?php echo e(route('front.blog')); ?>"><?php echo app('translator')->get('Set Semula Kata Laluan'); ?></a></li>
                        
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom br-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">
                        <?php
                            echo $gs->copyright;
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/partials/front/footer.blade.php ENDPATH**/ ?>