<?php $__env->startSection('content'); ?>
    <div id="page-content">
        <div class="register-form">
            <div class="container">
                <!--region Main container -->
                <div class="row">
                    <div class="col s12 m6  offset-m3 offset-l0">
                        <ul  class="tabs">
                            <li class="tab col s6">
                                <a class="active" href="#tab-seeker">
                                    <span><?php echo e(__('For job seeker')); ?></span>
                                </a>
                            </li>
                            <li class="tab col s6">
                                <a class="active" href="#tab-employee">
                                    <span><?php echo e(__('For employee')); ?></span>
                                </a>
                            </li>
                        </ul>
                        <div id="tab-seeker" class="col s12">
                            <div class="col s12">
                                <div class="section-title">
                                    <span class="theme-secondary-color">Sign Up</span> as <strong>Job Seeker</strong>
                                </div>
                            </div>
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" class="validate">
                                        <label for="username">Select a Username</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Enter a Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="repassword" type="password" class="validate">
                                        <label for="repassword">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="row row-forgot">
                                    <div class="input-field col s12 center">
                                        <a class="forgotr" href="login.html">Already registered? Sign in here</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 center">
                                        <input class="waves-effect waves-light btn" value="SIGN UP NOW" type="submit"></div>
                                </div>
                            </form>

                        </div>
                        <div id="tab-employee" class="col s12">
                            <div class="col s12">
                                <div class="section-title">
                                    <span class="theme-secondary-color">Sign Up</span> as <strong>Employee</strong>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>