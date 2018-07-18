<?php $__env->startSection('content'); ?>
    <div id="page-content" class="container-fluid p-t-30" data-title="<?php echo e(__('About us')); ?>">
        <div class="row">
            <div class="col s12">
                <div class="col s12 m4">
                    <div class="input-field col s12">
                        <input  type="search" required>
                        <label>
                            <?php echo e(__('Enter any keyword')); ?>

                        </label>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="input-field col s12">
                        <select multiple>
                            <option value="" disabled selected>
                                <?php echo e(__('Choose your locations')); ?>

                            </option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>
                            <?php echo e(__('Choose your location filter')); ?>

                        </label>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="input-field col s12">
                        <select multiple>
                            <option value="" disabled selected>
                                <?php echo e(__('Choose your industry')); ?>

                            </option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>
                            <?php echo e(__('Choose your location filter')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="row job-list p-l-20 p-r-20">
                <!-- -->
                <div class="col s12 job-wrapper">
                    <div class="col s12 job-item">
                        <div class="job-thumbnail">
                            <div class="image-box">
                                <img src="<?php echo e(asset('resources/img/corn_PNG5284.jpg')); ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="job-content">
                            <div class="row">
                                <div class="col s9">
                                    <div class="row">
                                        <div class="col s12">
                                            <h3 class="job-title">
                                                <a href="">
                                                    Donation Collector For Charity Office
                                                </a>
                                            </h3>
                                            <a href="" class="job-company">@ Polaris Vina</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 job-group text-right">
                                            <div class="float-right">
                                                <a href="" class="job-location">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <span>Hồ Chí Minh</span>
                                                </a>
                                                <a href="" class="job-industry ">
                                                    <i class="fa fa-filter" aria-hidden="true"></i>
                                                    <span>IT Phần mềm</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col s3">
                                    <div class="row">
                                        <div class="col s12">
                                            <a href="" class="job-type freelancer">
                                                Freelancer
                                            </a>
                                            <a href="" class="job-btn-save">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="col s12">
                                            <p class="m-t-10">
                                                <strong class="job-salary"> 2.000 $ / Tháng</strong>
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---->
                <!-- -->
                <div class="col s12 job-wrapper">
                    <div class="col s12 job-item">
                        <div class="job-thumbnail">
                            <img src="assets/images/job/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="job-content">
                            <div class="row">
                                <div class="col s9">
                                    <div class="row">
                                        <div class="col s12">
                                            <h3 class="job-title">
                                                <a href="">
                                                    Donation Collector For Charity Office
                                                </a>
                                            </h3>
                                            <a href="" class="job-company">@ Polaris Vina</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 job-group text-right">
                                            <div class="float-right">
                                                <a href="" class="job-location">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <span>Hồ Chí Minh</span>
                                                </a>
                                                <a href="" class="job-industry ">
                                                    <i class="fa fa-filter" aria-hidden="true"></i>
                                                    <span>IT Phần mềm</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col s3">
                                    <div class="row">
                                        <div class="col s12">
                                            <a href="" class="job-type freelancer">
                                                Freelancer
                                            </a>
                                            <a href="" class="job-btn-save">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="col s12">
                                            <p class="m-t-10">
                                                <strong class="job-salary"> 2.000 $ / Tháng</strong>
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---->







            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master' . $ajax_view , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>