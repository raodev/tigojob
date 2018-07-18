<?php $__env->startSection('content'); ?>
    <div id="page-content" data-title="Đăng Nhập raoviec">
        <div class="login-form row white" id="app-login">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="section-title">
                            <span class="theme-secondary-color">Log in</span> Account
                        </div>
                    </div>
                </div>
                <div class="row">
                    <vue-form :state="formstate"
                              @submit.prevent="submitLogin"
                              class="col s12">
                        <div class="row">
                            <validate class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                <input id="email" type="email"
                                       name="email"
                                       required
                                       v-model="data.email"
                                       class="validate">
                                <label for="username">
                                    <?php echo e(__('Email address')); ?>

                                </label>
                                <field-messages name="email">
                                    <div slot="required">
                                        <span class="error red-text">
                                            <?php echo e(__('This field is requred')); ?>

                                        </span>
                                    </div>
                                    <div slot="email">
                                        <span class="error red-text">
                                            <?php echo e(__('Email is not valid')); ?>

                                        </span>
                                    </div>

                                </field-messages>
                            </validate>
                        </div>
                        <div class="row">
                            <validate class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                <input id="password"
                                       type="password"
                                       name="password"
                                       required
                                       v-model="data.password"
                                       class="validate">
                                <label for="password">
                                    <?php echo e(__('Password')); ?>

                                </label>
                                <field-messages name="password">
                                    <div slot="required">
                                        <span class="error red-text">
                                            <?php echo e(__('This field is requred')); ?>

                                        </span>
                                    </div>

                                </field-messages>
                            </validate>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4 center">
                                <button type="submit"
                                        :disabled="formstate.$invalid"
                                        class="waves-effect waves-light btn" >
                                    <?php echo e(__('Login')); ?>

                                </button>
                            </div>
                        </div>
                    </vue-form>
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
    <?php if( !empty($ajax) ): ?>
        <script src="<?php echo e(url('resources/js/pages/login.js')); ?>"></script>
    <?php else: ?>
        <?php $__env->startSection('script'); ?>
            <script src="<?php echo e(url('resources/js/pages/login.js')); ?>"></script>
        <?php $__env->stopSection(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master' . $ajax_view , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>