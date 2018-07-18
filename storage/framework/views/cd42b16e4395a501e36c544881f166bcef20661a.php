<?php $__env->startSection('content'); ?>
    <div id="page-content" data-title="<?php echo e(__('Contact us')); ?>">
        <div class="login-form">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="section-title">
                            <span class="theme-secondary-color">Log in</span> Account
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                <input id="username" type="text" class="validate">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4 center">
                                <input class="waves-effect waves-light btn" value="LOG IN" type="submit"></div>
                        </div>
                    </form>
                </div>
                <div class="row fp-text">
                    <div class="col s12">
                        <div class="forgot-password-link">
                            <a href="#">Forgot Password</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="or-line">
                            <div class="ol-or">OR</div>
                            <div class="ol-line"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="sign-in-sosmed">
                            <div class="sign-in-icon sii-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="sign-in-icon sii-twitter">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center">
                        Don't have an Account ? <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master' . $ajax_view , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>