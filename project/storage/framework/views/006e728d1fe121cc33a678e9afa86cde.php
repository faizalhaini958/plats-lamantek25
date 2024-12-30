<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
        <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Section Heading')); ?></h5>
        <ol class="breadcrumb py-0 m-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
            <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Home Page Manage')); ?></a></li>
        </ol>
    </div>
</div>

<div class="card mb-4 mt-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Section Heading')); ?></h6>
    </div>

    <div class="card-body">
        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="<?php echo e(route('admin.ps.update')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label for="cat-title"><?php echo e(__('Category Title')); ?> *</label>
                <input type="text" class="form-control" id="cat-title" name="category_title"  placeholder="<?php echo e(__('Category Title')); ?>" value="<?php echo e($data->category_title); ?>" required>
            </div>

            <div class="form-group">
                <label for="banner-subtitle"><?php echo e(__('Category Subtitle')); ?> *</label>
                <input type="text" class="form-control" id="cat-subtitle" name="category_subtitle"  placeholder="<?php echo e(__('Category subtitle')); ?>" value="<?php echo e($data->category_subtitle); ?>" required>
            </div>

            <div class="form-group">
                <label for="explore-title"><?php echo e(__('Directory Title')); ?> *</label>
                <input type="text" class="form-control" id="explore-title" name="directory_title"  placeholder="<?php echo e(__('Directory Title')); ?>" value="<?php echo e($data->directory_title); ?>" required>
            </div>

            <div class="form-group">
                <label for="explore-subtitle"><?php echo e(__('Directory Subtitle')); ?> *</label>
                <input type="text" class="form-control" id="explore-subtitle" name="directory_subtitle"  placeholder="<?php echo e(__('Directory Title')); ?>" value="<?php echo e($data->directory_subtitle); ?>" required>
            </div>

            <div class="form-group">
                <label for="blog-title"><?php echo e(__('Blog Title')); ?> *</label>
                <input type="text" class="form-control" id="blog-title" name="blog_title"  placeholder="<?php echo e(__('Blog Title')); ?>" value="<?php echo e($data->blog_title); ?>" required>
            </div>

            <div class="form-group">
                <label for="blog-subtitle"><?php echo e(__('Blog Subtitle')); ?> *</label>
                <input type="text" class="form-control" id="blog-subtitle" name="blog_subtitle"  placeholder="<?php echo e(__('Blog Subtitle')); ?>" value="<?php echo e($data->blog_subtitle); ?>" required>
            </div>

            <div class="form-group">
                <label for="partner-title"><?php echo e(__('Partner Title')); ?> *</label>
                <input type="text" class="form-control" id="partner-title" name="partner_title"  placeholder="<?php echo e(__('Partner Title')); ?>" value="<?php echo e($data->partner_title); ?>" required>
            </div>

            <div class="form-group">
                <label for="partner-subtitle"><?php echo e(__('Partner Subtitle')); ?> *</label>
                <input type="text" class="form-control" id="partner-subtitle" name="partner_subtitle"  placeholder="<?php echo e(__('Partner Subtitle')); ?>" value="<?php echo e($data->partner_subtitle); ?>" required>
            </div>

            <div class="form-group">
                <label for="plan-title"><?php echo e(__('Plan Title')); ?> *</label>
                <input type="text" class="form-control" id="plan-title" name="plan_title"  placeholder="<?php echo e(__('Plan Title')); ?>" value="<?php echo e($data->plan_title); ?>" required>
            </div>

            <div class="form-group">
                <label for="plan-subtitle"><?php echo e(__('Plan Subtitle')); ?> *</label>
                <input type="text" class="form-control" id="plan-subtitle" name="plan_subtitle"  placeholder="<?php echo e(__('Plan Subtitle')); ?>" value="<?php echo e($data->plan_subtitle); ?>" required>
            </div>

            <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wannidol/public_html/lamantek.com/project/resources/views/admin/pagesetting/sectionheading.blade.php ENDPATH**/ ?>