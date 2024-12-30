<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(in_array('Banner', $home_modules)): ?>
        <!-- ======================= Home Banner ======================== -->
        <div class="home-banner margin-bottom-0" style="background:#fff url(<?php echo e(asset('assets/images/'.$ps->hero_photo)); ?>) no-repeat;" data-overlay="0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="banner_caption text-center mb-5">
                            <h1 class="banner_title ft-bold mb-1"><?php echo e($ps->hero_title); ?></h1>
                            <p class="fs-md ft-medium"><?php echo e($ps->hero_subtitle); ?></p>
                        </div>

                        <div class="Rego-top-cates">
                            <ul>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('front.listing',['category' => $data->slug])); ?>" class="Rego-top-cat-box">
                                            <div class="Rego-tp-ico">
                                                <i class="<?php echo e($data->icon); ?>"></i>
                                            </div>
                                            <div class="Rego-tp-title">
                                                <h5><?php echo e($data->name); ?></h5>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->

        <!-- ======================= Home Search ======================== -->
        <section class="p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-12 col-md-12 col-12">

                        <div class="Rego-search-shadow">

                            <form class="main-search-wrap fl-wrap" action="<?php echo e(route('front.listing')); ?>" method="GET">
                                <div class="main-search-item">
                                    <span class="search-tag"><i class="lni lni-keyboard"></i></span>
                                    <input type="text" class="form-control radius"name="title"  placeholder="<?php echo app('translator')->get('Apa yang anda ingin cari'); ?>? " />
                                </div>
                                    <div class="main-search-button">
                                    <button class="btn full-width theme-bg text-white" type="submit"><?php echo app('translator')->get('Cari'); ?></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Home Search End ======================== -->
    <?php endif; ?>

    <?php if(in_array('Category', $home_modules)): ?>
        <!-- =========================== Listing Category ======================= -->
            <section class="gray middle min">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="sec_title position-relative text-center mb-5">
                                <h6 class="text-muted mb-0"><?php echo e($ps->category_title); ?></h6>
                                <h2 class="ft-bold"><?php echo e($ps->category_subtitle); ?></h2>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="Rego-img-catg-wrap">
                                    <div class="Rego-catg-city"><?php echo e($data->listings->where('status',1)->count()); ?> <?php echo app('translator')->get('senarai'); ?></div>
                                    <div class="Rego-img-catg-thumb"><a href="<?php echo e(route('front.listing',['category' => [$data->slug]])); ?>"><img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="img-fluid" alt=""></a></div>
                                    <div class="Rego-img-catg-caption">
                                        <h4 class="fs-md mb-0 ft-medium m-catrio"><?php echo e($data->title); ?></h4>
                                        <a href="<?php echo e(route('front.listing',['category' => [$data->slug]])); ?>" class="Rego-cat-arrow"><i class="lni lni-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </section>
        <!-- =========================== Listing Category End ===================== -->
    <?php endif; ?>

    <?php if(in_array('Feature Directory', $home_modules)): ?>
        <!-- ===========================  Featured Listing ======================= -->
            <section class="space min">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="sec_title position-relative text-center mb-5">
                                <h2 class="ft-bold theme-cl"><?php echo e($ps->directory_title); ?></h2>
                            </div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="row justify-content-center">
                        <?php $__currentLoopData = $featured_listing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Single -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="Rego-grid-wrap">
                                    <div class="Rego-grid-upper">
                                        <div class="Rego-bookmark-btn">
                                            <button type="button" class="wishList" data-listing="<?php echo e($listing->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                                <i class="lni lni-heart<?php echo e($listing->userFavourite(auth()->id(),$listing->id) ? '-filled' : ''); ?> position-absolute"></i>
                                            </button>
                                        </div>
                                        <div class="Rego-pos ab-left">
                                            <div class="Rego-status open me-2"><?php echo e($listing->openClose($listing->id)); ?></div>
                                            <?php if($listing->is_feature): ?>
                                                <div class="Rego-featured-tag"><?php echo app('translator')->get('Lokasi Tumpuan'); ?></div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="Rego-grid-thumb">
                                            <a href="<?php echo e(route('front.listing.details',$listing->slug)); ?>" class="d-block text-center m-auto">
                                                <img src="<?php echo e(asset('assets/images/'.$listing->photo)); ?>" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="Rego-grid-fl-wrap">
                                        <div class="Rego-caption px-3 py-2">
                                            <?php if($listing->user_id == NULL && $listing->admin_id == NULL): ?>
                                                <div class="Rego-author">
                                                    <a href="<?php echo e(route('front.author.details','admin')); ?>">
                                                        <img src="<?php echo e(asset('assets/images/'.getAdmin()->photo)); ?>" class="img-fluid circle" alt="" />
                                                    </a>
                                                </div>
                                            <?php else: ?>
                                                <div class="Rego-author">
                                                    <a href="<?php echo e(route('front.author.details',$listing->user->username)); ?>">
                                                        <img src="<?php echo e(asset('assets/images/'.$listing->user->photo)); ?>" class="img-fluid circle" alt="" />
                                                    </a>
                                                </div>
                                            <?php endif; ?>

                                            <div class="Rego-cates">
                                                <a href="<?php echo e(route('front.listing',['category' => $listing->category->slug])); ?>"><?php echo e($listing->category->title); ?></a>
                                            </div>

                                            <h4 class="mb-0 ft-medium medium">
                                                <a href="<?php echo e(route('front.listing.details',$listing->slug)); ?>" class="text-dark fs-md">
                                                    <?php echo e($listing->name); ?>

                                                    <span class="verified-badge">
                                                        <i class="fas fa-check-circle"></i>
                                                    </span>
                                                </a>
                                            </h4>
                                            <div class="Rego-middle-caption mt-3">
                                                <div class="Rego-location"><i class="fas fa-map-marker-alt"></i><?php echo e($listing->real_address); ?></div>
                                                <div class="Rego-call"><i class="fas fa-phone-alt"></i><?php echo e($listing->phone_number); ?></div>
                                            </div>
                                        </div>
                                        <div class="Rego-grid-footer py-3 px-3">
                                            <?php if(count($listing->reviews)>0): ?>
                                                <div class="Rego-ft-first">
                                                    <div class="Rego-rating">
                                                        <div class="Rego-pr-average high"><?php echo e($listing->directoryRatting($listing->id)); ?></div>
                                                        <div class="Rego-rates">
                                                            <?php
                                                                $rate = ceil($listing->directoryRatting($listing->id));
                                                            ?>

                                                            <?php for($i=1; $i<=$rate; $i++): ?>
                                                                <i class="fas fa-star active"></i>
                                                            <?php endfor; ?>

                                                            <?php for($i=1; $i<=(5-$rate); $i++): ?>
                                                                <i class="fas fa-star"></i>
                                                            <?php endfor; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="Rego-ft-last">
                                                <span class="small"><?php echo e($data->created_at->diffForHumans()); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <!-- /row -->

                </div>
            </section>
        <!-- =========================== Featured Listing End ===================== -->
    <?php endif; ?>

 
    

    <?php if(in_array('Faq', $home_modules)): ?>
        <!-- =========================== FAQ Start ======================= -->
            <section>
                <div class="container">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="sec_title position-relative text-center mb-5">
                                <h6 class="text-muted mb-0">FAQ</h6>
                                <h2 class="ft-bold">Soalan Lazim</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-11 col-md-12 col-12">
                            <div id="accordion2" class="accordion">
                                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card">
                                        <div class="card-header" id="h<?php echo e($key); ?>">
                                            <h5 class="mb-0">
                                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#ord<?php echo e($key); ?>" aria-expanded="true" aria-controls="ord<?php echo e($key); ?>">
                                            <?php echo e($data->title); ?>

                                            </button>
                                            </h5>
                                        </div>

                                        <div id="ord<?php echo e($key); ?>" class="collapse <?php echo e($loop->first ? 'show' : ''); ?>" aria-labelledby="h<?php echo e($key); ?>" data-parent="#accordion2">
                                            <div class="card-body">
                                                <?php echo e($data->details); ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        <!-- =========================== FAQ End ===================== -->
    <?php endif; ?>

    <?php if(in_array('CTAs', $home_modules)): ?>
        <!-- ======================= Newsletter Start ============================ -->
        <?php echo $__env->make('partials.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ======================= Newsletter Start ============================ -->
    <?php endif; ?>

    <!-- ============================ Footer Start ================================== -->
    <?php echo $__env->make('partials.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Footer End ================================== -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        'use strict';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click','.wishList',function(){
            let $this = $(this);
            let listingId = $(this).data('listing');
            let userId = $(this).data('user');
            if(userId == ''){
                window.location.href = mainurl+'/user/login'
            }

            $.ajax({
                method:"POST",
                url: mainurl+'/listing/wishlist',
                data: {
                    listing_id : listingId,
                    user_id : userId
                },
                success:function(data)
                {
                    if(data.success){
                        $this.children().prop('class','');
                        $this.children().prop('class','lni lni-heart-filled  position-absolute');
                        toastr.success(data.success);
                    }else{
                        $this.children().prop('class','');
                        $this.children().prop('class','lni lni-heart  position-absolute');
                        toastr.error(data.error);
                    }
                }

            });

        })

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/frontend/theme/theme-1.blade.php ENDPATH**/ ?>