<?php $checkIfAdmin = explode("/", Request::path());?>
{{--checking if we are in admin section so we can server different 404 errors based on where we are.--}}
@if($checkIfAdmin[0] === 'admin')
    @extends('layouts/app')
    @section('content')
        {{ Request::path() }}
        <!-- Page content -->
        <div id="page-content">
            <!-- Header -->
            <div class="content-header">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="header-section">
                            <h1>404!</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <div class="header-section">
                            <ul class="breadcrumb breadcrumb-top">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Header -->
            <!-- General Elements Block -->
            <div class="block">
                <!-- General Elements Title -->
                <div class="block-title">
                    <h2>404</h2>
                </div>
                <!-- END General Elements Title -->
                <!-- General Elements Content -->
                <div class="alert alert-danger alert-dismissable">
                    <h4><strong>Warning</strong></h4>
                    <p>The requested page does not exist please go back and try again.</p>
                </div>
                <form action="/admin/admin-users/delete/" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-md-9">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-5">
                            <a href = "/admin/admin-users/" type="submit" name="cancel" class="btn btn-effect-ripple btn-danger loader" value="Cancel">Back</a>
                        </div>
                    </div>
                </form>
                <!-- END General Elements Content -->
            </div>
            <!-- END General Elements Block -->
        </div>
        <!-- END Page Content -->
    @stop
@else
    {{--This is where the code for the front end 404--}}
    @section('content')
        {{ Request::path() }}
        <!--Error Page Start-->
        <section class="common_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">
                        <div class="errorCont">
                            <p class="ops">Oops!</p>
                            <h1>404 Error</h1>
                            <p>
                                Page doesn’t exist or some other error occured. Go to our <a href="#">home</a>
                                page or go back to <a href="#">previous page</a>
                            </p>
                            <a href="#" class="poseidon_btn btn45 hover_black"><b>Subscribe now</b><span></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="300">
                        <div class="errorImg">
                            <img src="images/404.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->
    @stop
@endif