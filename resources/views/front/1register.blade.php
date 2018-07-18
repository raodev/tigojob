@extends('front.layouts.master')
@section('content')
    <div id="page-content">
        <div class="register-form">
            <div class="container">
                <!--region Main container -->
                <div class="row">
                    <div class="col s12 m6 l4 offset-m3 offset-l4">
                        <ul class="tabs">
                            <li class="tab col s6">
                                <a href="#re_seeker">
                                    {{ __('For job seeker') }}
                                </a>
                            </li>
                            <li class="tab col s6">
                                <a class="active" href="#re_employee">
                                    {{ __('For employee') }}
                                </a>
                            </li>
                        </ul>
                        <!-- region Register for seeker -->
                        <div id="r_seeker" class="col s12">
                            <div class="col s12">
                                <div class="section-title">
                                    <span class="theme-secondary-color">Sign Up</span> as <strong>Job Seeker</strong>
                                </div>
                            </div>
                            <div class="row">

                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                            <input id="username" type="text" class="validate">
                                            <label for="username">Select a Username</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                            <input id="email" type="email" class="validate">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                            <input id="password" type="password" class="validate">
                                            <label for="password">Enter a Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                            <input id="repassword" type="password" class="validate">
                                            <label for="repassword">Confirm Password</label>
                                        </div>
                                    </div>
                                    <div class="row row-forgot">
                                        <div class="input-field col s12 m6 l4 offset-m3 offset-l4 center">
                                            <a class="forgotr" href="login.html">Already registered? Sign in here</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6 l4 offset-m3 offset-l4 center">
                                            <input class="waves-effect waves-light btn" value="SIGN UP NOW" type="submit"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--endregion -->
                        <!-- region register for employee -->
                        <div id="r_employer" class="col s12">
                            <div class="col s12">
                                <div class="section-title">
                                    <span class="theme-secondary-color">Sign Up</span> Company Account
                                </div>
                            </div>
                        </div>
                        <!--endregion-->
                    </div>

                </div>
                <!-- endregion -->



            </div>
        </div>
    </div>
@stop