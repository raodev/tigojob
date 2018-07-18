<?php $__env->startSection('content'); ?>
    <div id="page-content" data-title="<?php echo e(__('About us')); ?>">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <br>
                    <h5>Single Page</h5>
                    <p>
                        You can using this page for single page
                    </p>
                    <br>
                    <img alt="gallery" src="<?php echo e(asset('resources/img/news.jpg')); ?>"><br>
                    <p style="text-align: justify;">
                        Lorem ipsum dolor sit amet, di dunt ut labore et dolore magna aliqua. eaque ipsa quae ab illo inventore veritatis ut labore et dolore magna aliqua. Ut enim ad minim veniam<br>
                        <br>
                        Ut enim ad minim veniam. Excepteur sint qui officia deserunt Excepteur sint occaecat cupidatat non proident, iste natus error sit doloremque la udan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                    <br></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master' . $ajax_view , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>