<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from resptheme.com/tf/gromart/homepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jul 2018 08:06:51 GMT -->
<head>
    <meta charset="UTF-8">
    <title>GroMart - Web App E-Commerce Shop and Store Mobile Template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS  -->
    <link rel="stylesheet" href="<?php echo e(asset('resources/lib/font-awesome/web-fonts-with-css/css/fontawesome-all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('resources/lib/themify-icons/themify-icons.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('resources/css/materialize.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('resources/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('resources/css/style.css')); ?>">
    <!-- materialize icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="<?php echo e(asset('resources/lib/owlcarousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('resources/lib/owlcarousel/assets/owl.theme.default.min.css')); ?>">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('resources/lib/slick/slick/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('resources/lib/slick/slick/slick-theme.css')); ?>">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?php echo e(asset('resources/lib/Magnific-Popup-master/dist/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('resources/css/custom.css')); ?>">
</head>
<body id="homepage" data-api="<?php echo e(url('api')); ?>" data-max-width=1800 >
<!-- BEGIN PRELOADING -->
<div class="preloading">
    <div class="wrap-preload">
        <div class="cssload-loader"></div>
    </div>
</div>
<!-- END PRELOADING -->
<!-- HEADER -->
<div class="row" id="route-app">
    <header id="header">
        <nav >
            <div class="nav-wrapper content-wrapper">
                <div class="row menu-content hide-on-large-only">
                    <div class="col s12">
                        <ul class="right ">
                            <li>
                                <a href="#" data-activates="nav-mobile-category" class="button-collapse" >
                                    <i class="fas fa-align-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-activates="nav-mobile-account" class="button-collapse" data-edge="right" ><i class="far fa-user-circle"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row menu-content hide-on-med-and-down">
                    <div class="left-box ">
                        <div class="header-logo ">
                            <a href="<?php echo e(url('/')); ?>" class="nav-logo center-align valign-wrappe">
                                <i class="fab fa-envira"></i>
                                <img src="<?php echo e(asset('upload/images/logo.png')); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="row">
                            <div class="col s6">
                                <div class="search-wrapper ">
                                    <form>
                                        <div class="input-field">
                                            <input id="search" type="search" required>
                                            <label class="label-icon" for="search">
                                                <i class="material-icons search-icon">search</i>
                                            </label>
                                            <i class="material-icons close-icon">close</i>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col s6">
                                <ul class="right">
                                    <li>
                                        <a href="<?php echo e(url('')); ?>"  @click.stop.prevent="loadView('')">
                                            <?php echo e(__('Home')); ?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('login')); ?>"  @click.stop.prevent="loadView('login')">
                                            <?php echo e(__('Login/Register')); ?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('network')); ?>"  @click.stop.prevent="loadView('network')">
                                            <?php echo e(__('Raoviec Network')); ?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('about-us')); ?>"  @click.stop.prevent="loadView('about-us')">
                                            <?php echo e(__("About us")); ?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('contact')); ?>"  @click.stop.prevent="loadView('contact')">
                                            <?php echo e(__('Contact')); ?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-activates="nav-mobile-account" class="button-collapse" data-edge="right" >
                                            <i class="far fa-user-circle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </nav>

    </header>
    <!-- END HEADER -->
    <!-- SIDE NAV-->
    <nav>
        <!-- SIDENAV CATEGORY-->
        <ul id="nav-mobile-category" class="side-nav">

            <li>
                <a href="<?php echo e(url('jobs')); ?>"  @click.stop.prevent="loadView('jobs')">
                    <i class="fas fa-plus"></i>
                    <span>
                    <?php echo e(__('Hot jobs')); ?>

                </span>
                </a>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="fas fa-plus"></i>
                            <span>
                            <?php echo e(__('Job filter with industry')); ?>

                        </span>
                            <span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>IT/ Software</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>Restaurant/Coffe</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>Bank</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>Online/Partner</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="fas fa-plus"></i>
                            <span>
                            <?php echo e(__('Job filter with location')); ?>

                        </span>
                            <span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>Ho chi minh</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>Ha noi</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>Da Nang</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-plus"></i>
                    <span>
                    <?php echo e(__('Companies')); ?>

                </span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-plus"></i>
                    <span>
                    <?php echo e(__('Companies Profile')); ?>

                </span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-plus"></i>
                    <span>
                    <?php echo e(__('Job seeker profile')); ?>

                </span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-plus"></i>
                    <span>
                    <?php echo e(__('Events')); ?>

                </span>
                </a>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="fas fa-plus"></i>
                            <span>
                            <?php echo e(__('Raoviec network')); ?>

                        </span>
                            <span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>Ho chi minh</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>Ha noi</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="">
                                        <i class="fas fa-angle-right"></i>
                                        <span>Da Nang</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-plus"></i>
                    <span>
                    <?php echo e(__('Elearning')); ?>

                </span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-plus"></i>
                    <span>
                    <?php echo e(__('Blog')); ?>

                </span>
                </a>
            </li>

        </ul>
        <!-- END SIDENAV CATEGORY-->
        <!-- SIDENAV ACCOUNT-->
        <ul id="nav-mobile-account" class="side-nav">
            <li class="profile">
                <div class="li-profile-info" v-if="user">
                    <img src="<?php echo e(asset('resources/img/profile.jpg')); ?>" alt="profile">
                    <h2>
                        {{ user.full_name }}
                    </h2>
                    <div class="emailprofile">
                        {{ user.email }}
                    </div>
                </div>
                <div class="bg-profile-li" style="background-image: url(<?php echo e(asset('resources/img/bg-profile.jpg')); ?>);">
                </div>
            </li>
            <li>
                <a class="waves-effect waves-blue" href="homepage.html"><i class="fas fa-home"></i>Home</a>
            </li>
            <li>
                <a href="<?php echo e(url('/logout')); ?>"
                   @click.stop.prevent="loadView('post-job')">
                    <i class="fas fa-heart"></i>
                    <?php echo e(__('Post new job')); ?>

                </a>
            </li>
            <li>
                <a href="gallery.html"><i class="fas fa-camera-retro"></i>Gallery</a>
            </li>
            <li>
                <a href="setting.html"><i class="fas fa-cog"></i>Setting</a>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="fas fa-columns"></i>Pages <span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a class="waves-effect waves-blue" href="homepage.html"><i class="fas fa-angle-right"></i>Home</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="setting.html"><i class="fas fa-angle-right"></i>Setting</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="404.html"><i class="fas fa-angle-right"></i>404</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="login.html"><i class="fas fa-angle-right"></i>Sign In</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="signup.html"><i class="fas fa-angle-right"></i>Sign Up</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="single-page.html"><i class="fas fa-angle-right"></i>Single page</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="gallery.html"><i class="fas fa-angle-right"></i>Gallery</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-list.html"><i class="fas fa-angle-right"></i>Product List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="wish-list.html"><i class="fas fa-angle-right"></i>Wish List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-page.html"><i class="fas fa-angle-right"></i>Product Detail</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="shopping-cart.html"><i class="fas fa-angle-right"></i>Shopping Cart</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="checkout.html"><i class="fas fa-angle-right"></i>Checkout</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="contact.html"><i class="fas fa-angle-right"></i>Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="contact.html"><i class="fas fa-envelope"></i>Contact Us</a>
            </li>
            <li>
                <a href="login.html"><i class="fas fa-sign-in-alt"></i>Sign in</a>
            </li>
            <li>
                <a href="<?php echo e(url('/logout')); ?>" @click.stop.prevent="logout" >
                    <i class="fas fa-sign-out-alt"></i>Sign Out</a>
            </li>
        </ul>
        <!-- END SIDENAV ACCOUNT--></nav>
</div>

<section class="row" id="page-content-loader">
    <?php echo $__env->yieldContent('content'); ?>
</section>

<script src="<?php echo e(asset('resources/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('resources/js/materialize.js')); ?>"></script>
<!-- Owl carousel -->
<script src="<?php echo e(asset('resources/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
<!-- Magnific Popup core JS file -->
<script src="<?php echo e(asset('resources/lib/Magnific-Popup-master/dist/jquery.magnific-popup.js')); ?>"></script>
<!-- Slick JS -->
<script src="<?php echo e(asset('resources/lib/slick/slick/slick.min.js')); ?>"></script>
<!-- Custom script -->
<script src="<?php echo e(asset('resources/lib/vue/vue.js')); ?>"></script>
<script src="<?php echo e(asset('resources/lib/vue/vue-form.js')); ?>"></script>
<script src="<?php echo e(asset('resources/js/app.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
</body>

</html>