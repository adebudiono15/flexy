@extends('layouts.master')

@section('title','Profile')

@push('css')
<link rel="stylesheet" href="/assets/css/profile.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Profile</div>
</div>

<div class="pd-20 pt-0">
    <div class="content-body">
        <!-- page user profile start -->
        <section class="page-user-profile">
            <div class="row">
                <div class="col-12">
                    <!-- user profile heading section start -->
                    <div class="card">
                        <div class="card-content">
                            <div class="user-profile-images">
                                <!-- user timeline image -->
                                <img src="/assets/img/profile/banner.png" style="width: 100%"
                                    class="img-fluid rounded-top user-timeline-image" alt="user timeline image">
                                <!-- user profile image -->
                                <img src="/assets/img/avatar_5.jpeg" class="user-profile-image rounded"
                                    alt="user profile image" height="140" width="140">
                            </div>
                            <div class="user-profile-text">
                                <h4 class="mb-0 text-bold-500 profile-text-color">John Walker</h4>
                                <small>Product Devloper</small>
                            </div>
                            <!-- user profile nav tabs start -->
                            <div class="card-body px-0">
                                <ul class="nav user-profile-nav justify-content-center justify-content-md-start nav-tabs border-bottom-0 mb-0"
                                    role="tablist">
                                    <li class="nav-item pb-0">
                                        <a class="nav-link d-flex px-1 active" id="feed-tab" data-toggle="tab"
                                            href="#feed" aria-controls="feed" role="tab" aria-selected="true"><i
                                                class="bx bx-home"></i><span class="d-none d-md-block">Feed</span></a>
                                    </li>
                                    <li class="nav-item pb-0">
                                        <a class="nav-link d-flex px-1" id="activity-tab" data-toggle="tab"
                                            href="#activity" aria-controls="activity" role="tab"
                                            aria-selected="false"><i class="bx bx-user"></i><span
                                                class="d-none d-md-block">Activity</span></a>
                                    </li>
                                    <li class="nav-item pb-0">
                                        <a class="nav-link d-flex px-1" id="friends-tab" data-toggle="tab"
                                            href="#friends" aria-controls="friends" role="tab" aria-selected="false"><i
                                                class="bx bx-message-alt"></i><span
                                                class="d-none d-md-block">Friends</span></a>
                                    </li>
                                    <li class="nav-item pb-0 mr-0">
                                        <a class="nav-link d-flex px-1" id="profile-tab" data-toggle="tab"
                                            href="#profile" aria-controls="profile" role="tab" aria-selected="false"><i
                                                class="bx bx-copy-alt"></i><span
                                                class="d-none d-md-block">Profile</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- user profile nav tabs ends -->
                        </div>
                    </div>
                    <!-- user profile heading section ends -->

                    <!-- user profile content section start -->
                    <div class="row">
                        <!-- user profile nav tabs content start -->
                        <div class="col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane active" id="feed" aria-labelledby="feed-tab" role="tabpanel">
                                    <!-- user profile nav tabs feed start -->
                                    <div class="row">
                                        <!-- user profile nav tabs feed left section start -->
                                        <div class="col-lg-4">
                                            <!-- user profile nav tabs feed left section info card start -->
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-1">Info
                                                            <i
                                                                class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                                        </h5>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-flex align-items-center mb-25">
                                                                <i
                                                                    class="bx bx-briefcase mr-50 cursor-pointer"></i><span>UX
                                                                    Designer at<a href=""> google</a></span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-25">
                                                                <i class="bx bx-briefcase mr-50 cursor-pointer"></i>
                                                                <span>Former
                                                                    UI
                                                                    Designer at<a href=""> CBI</a></span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-25">
                                                                <i class="bx bx-receipt mr-50 cursor-pointer"></i>
                                                                <span>Studied
                                                                    <a href=""> IT science</a>
                                                                    at<a href=""> Torronto</a></span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-25">
                                                                <i class="bx bx-receipt mr-50 cursor-pointer"></i><span>Studied
                                                                    at
                                                                    <a href=""> College of new
                                                                        Jersey</a></span>
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                                <i class="bx bx-rss mr-50 cursor-pointer"></i>
                                                                <span>Followed by<a href=""> 338
                                                                        people</a></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user profile nav tabs feed left section info card ends -->
                                            <!-- user profile nav tabs feed left section trending card start -->
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-1">What's trending<i
                                                                class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                                        </h5>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-flex mb-25">
                                                                <i
                                                                    class="cursor-pointer bx bx-trending-up text-primary mr-50 mt-25"></i><span>
                                                                    <a href="" class="mr-50">#ManJonas:</a>Frest comes
                                                                    with
                                                                    built-in
                                                                </span>
                                                            </li>
                                                            <li class="d-flex mb-25">
                                                                <i
                                                                    class="cursor-pointer bx bx-trending-up text-primary mr-50 mt-25"></i><span>
                                                                    <a href="" class="mr-50">LadyJonas:</a>dark layouts,
                                                                    select
                                                                    as</span>
                                                            </li>
                                                            <li class="d-flex mb-25">
                                                                <i
                                                                    class="cursor-pointer bx bx-trending-up text-primary mr-50 mt-25"></i><span>
                                                                    <a href="" class="mr-50">#Germany:</a>Frest comes
                                                                    with
                                                                    built-in
                                                                </span>
                                                            </li>
                                                            <li class="d-flex mb-25">
                                                                <i
                                                                    class="cursor-pointer bx bx-trending-up text-primary mr-50 mt-25"></i><span>
                                                                    <a href="" class="mr-50">#SundayNoon:</a>dark
                                                                    layouts,
                                                                    select
                                                                    as</span>
                                                            </li>
                                                            <li class="d-flex">
                                                                <i
                                                                    class="cursor-pointer bx bx-trending-up text-primary mr-50 mt-25"></i><span>
                                                                    <a href="" class="mr-50">NoWorries:</a>heme
                                                                    navigation with
                                                                    you</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user profile nav tabs feed left section trending card ends -->
                                            <!-- user profile nav tabs feed left section like page card start -->
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <h6><img src="/assets/img/flexy.png" class="mr-25 round"
                                                                alt="logo" height="28">
                                                            Flexy<span class="text-muted"> (Page)</span>
                                                            <i
                                                                class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                                        </h6>
                                                        <div class="mb-1 font-small-2">
                                                            <i class="cursor-pointer bx bxs-star text-warning"></i>
                                                            <i class="cursor-pointer bx bxs-star text-warning"></i>
                                                            <i class="cursor-pointer bx bxs-star text-warning"></i>
                                                            <i class="cursor-pointer bx bxs-star text-warning"></i>
                                                            <i class="cursor-pointer bx bx-star text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user profile nav tabs feed left section like page card ends -->
                                            <!-- user profile nav tabs feed left section today's events card start -->
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-1">Today's Events<i
                                                                class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                                        </h5>
                                                        <div class="user-profile-event">
                                                            <div class="pb-1 d-flex align-items-center">
                                                                <i
                                                                    class="cursor-pointer bx bx-radio-circle-marked text-primary mr-25"></i>
                                                                <small>10:00am</small>
                                                            </div>
                                                            <h6 class="text-bold-500 font-small-3">Breakfast at the
                                                                agency
                                                            </h6>
                                                            <p class="text-muted font-small-2">Multi language support
                                                                enable
                                                                you to create your
                                                                personalized apps in your language.</p>
                                                            <i
                                                                class="cursor-pointer bx bx-map text-muted align-middle"></i>
                                                            <span class="text-muted"><small>Monkdev
                                                                    Agency</small></span>
                                                            <!-- user profile likes avatar start -->
                                                            <div class="multiple-avatar-icon">
                                                                <img src="assets/img/avatar_2.jpeg"
                                                                    class="rounded-circle" width="30"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="Alexander Thomson">
                                                                <img src="assets/img/avatar_3.jpeg"
                                                                    class="rounded-circle" width="30"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="Micahel Bara">
                                                                <img src="assets/img/avatar_4.jpeg"
                                                                    class="rounded-circle" width="30"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="Alexander Thomson">
                                                                <img src="assets/img/avatar_5.jpeg"
                                                                    class="rounded-circle" width="30"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="Micahel Bara">
                                                                <img src="assets/img/avatar.jpeg" class="rounded-circle"
                                                                    width="30" data-toggle="tooltip" title=""
                                                                    data-original-title="Alexander Thomson">
                                                            </div>
                                                            <!-- user profile likes avatar ends -->
                                                        </div>
                                                        <hr>
                                                        <div class="user-profile-event">
                                                            <div class="pb-1 d-flex align-items-center">
                                                                <i
                                                                    class="cursor-pointer bx bx-radio-circle-marked text-primary mr-25"></i>
                                                                <small>10:00pm</small>
                                                            </div>
                                                            <h6 class="text-bold-500 font-small-3">Work eith persistance
                                                                and
                                                                you can achive it.</h6>
                                                        </div>
                                                        <hr>
                                                        <div class="user-profile-event">
                                                            <div class="pb-1 d-flex align-items-center">
                                                                <i
                                                                    class="cursor-pointer bx bx-radio-circle-marked text-primary mr-25"></i>
                                                                <small>6:00am</small>
                                                            </div>
                                                            <div class="pb-1">
                                                                <h6 class="text-bold-500 font-small-3">Take that granted
                                                                    hotdog</h6>
                                                                <i
                                                                    class="cursor-pointer bx bx-map text-muted align-middle"></i>
                                                                <span class="text-muted"><small>Monkdev
                                                                        Agency</small></span>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-block btn-secondary">Check all your
                                                            Events</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user profile nav tabs feed left section today's events card ends -->
                                        </div>
                                        <!-- user profile nav tabs feed left section ends -->
                                        <!-- user profile nav tabs feed middle section start -->
                                        <div class="col-lg-8">
                                            <!-- user profile nav tabs feed middle section post card start -->
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <!-- user profile middle section blogpost nav tabs card start -->
                                                        <ul class="nav nav-tabs justify-content-center justify-content-sm-start border-bottom-0"
                                                            role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link d-flex active" id="user-status-tab"
                                                                    data-toggle="tab" href="#user-status"
                                                                    aria-controls="user-status" role="tab"
                                                                    aria-selected="true"><i
                                                                        class="bx bx-detail align-text-top"></i>
                                                                    <span class="d-none d-md-block">Status</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link d-flex" id="multimedia-tab"
                                                                    data-toggle="tab" href="#user-multimedia"
                                                                    aria-controls="user-multimedia" role="tab"
                                                                    aria-selected="false"><i
                                                                        class="bx bx-movie align-text-top"></i>
                                                                    <span class="d-none d-md-block">Multimedia</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item mr-0">
                                                                <a class="nav-link d-flex" id="blog-tab"
                                                                    data-toggle="tab" href="#user-blog"
                                                                    aria-controls="user-blog" role="tab"
                                                                    aria-selected="false"><i
                                                                        class="bx bx-chat align-text-top"></i>
                                                                    <span class="d-none d-md-block">Blog Post</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content pl-0">
                                                            <div class="tab-pane active" id="user-status"
                                                                aria-labelledby="user-status-tab" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-1 col-2">
                                                                                <div class="avatar">
                                                                                    <img src="/assets/img/avatar_5.jpeg"
                                                                                        alt="user image" width="32"
                                                                                        height="32">
                                                                                    <span
                                                                                        class="avatar-status-online"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-11 col-10">
                                                                                <textarea
                                                                                    class="form-control border-0 shadow-none"
                                                                                    id="user-post-textarea" rows="3"
                                                                                    placeholder="Share what you are thinking here..."></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="card-footer p-0">
                                                                            <i class="cursor-pointer bx bx-camera font-medium-5 text-muted mr-1 pt-50"
                                                                                data-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Upload a picture"></i>
                                                                            <i class="cursor-pointer bx bx-face font-medium-5 text-muted mr-1 pt-50"
                                                                                data-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Tag your friend"></i>
                                                                            <i class="cursor-pointer bx bx-map font-medium-5 text-muted pt-50"
                                                                                data-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Share your location"></i>
                                                                            <span
                                                                                class=" float-sm-right d-flex flex-sm-row flex-column justify-content-end">
                                                                                <button
                                                                                    class="btn btn-light-primary mr-0 my-1 my-sm-0 mr-sm-1">Preview</button>
                                                                                <button
                                                                                    class="btn btn-primary mr-0 my-1 my-sm-0 mr-sm-1">Post
                                                                                    Status</button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="user-multimedia"
                                                                aria-labelledby="multimedia-tab" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-1 col-2">
                                                                                <div class="avatar">
                                                                                    <img src="/assets/img/avatar_5.jpeg"
                                                                                        alt="user image" width="32"
                                                                                        height="32">
                                                                                    <span
                                                                                        class="avatar-status-online"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-11 col-10">
                                                                                <textarea
                                                                                    class="form-control border-0 shadow-none"
                                                                                    id="user-postmulti-textarea"
                                                                                    rows="3"
                                                                                    placeholder="Share what you are thinking here..."></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="card-footer p-0">
                                                                            <i class="cursor-pointer bx bx-camera font-medium-5 text-muted mr-1 pt-50"
                                                                                data-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Upload a picture"></i>
                                                                            <i class="cursor-pointer bx bx-face font-medium-5 text-muted mr-1 pt-50"
                                                                                data-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Tag your friend"></i>
                                                                            <i class="cursor-pointer bx bx-map font-medium-5 text-muted pt-50"
                                                                                data-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Share your location"></i>
                                                                            <span
                                                                                class=" float-sm-right d-flex flex-sm-row flex-column justify-content-end">
                                                                                <button
                                                                                    class="btn btn-light-primary mr-0 my-1 my-sm-0 mr-sm-1">Preview</button>
                                                                                <button
                                                                                    class="btn btn-primary mr-0 my-1 my-sm-0 mr-sm-1">Post
                                                                                    Status</button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="user-blog"
                                                                aria-labelledby="blog-tab" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-1 col-2">
                                                                                <div class="avatar">
                                                                                    <img src="/assets/img/avatar_5.jpeg"
                                                                                        alt="user image" width="32"
                                                                                        height="32">
                                                                                    <span
                                                                                        class="avatar-status-online"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-11 col-10">
                                                                                <textarea
                                                                                    class="form-control border-0 shadow-none"
                                                                                    id="user-postblog-textarea" rows="3"
                                                                                    placeholder="Share what you are thinking here..."></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="card-footer p-0">
                                                                            <i class="cursor-pointer bx bx-camera font-medium-5 text-muted mr-1 pt-50"
                                                                                data-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Upload a picture"></i>
                                                                            <i class="cursor-pointer bx bx-face font-medium-5 text-muted mr-1 pt-50"
                                                                                data-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Tag your friend"></i>
                                                                            <i class="cursor-pointer bx bx-map font-medium-5 text-muted pt-50"
                                                                                data-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Share your location"></i>
                                                                            <span
                                                                                class=" float-sm-right d-flex flex-sm-row flex-column justify-content-end">
                                                                                <button
                                                                                    class="btn btn-light-primary mr-0 my-1 my-sm-0 mr-sm-1">Preview</button>
                                                                                <button
                                                                                    class="btn btn-primary mr-0 my-1 my-sm-0 mr-sm-1">Post
                                                                                    Status</button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- user profile middle section blogpost nav tabs card ends -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user profile nav tabs feed middle section post card ends -->
                                            <!-- user profile nav tabs feed middle section user-1 card starts -->
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-header user-profile-header">
                                                        <div class="avatar mr-50 align-top">
                                                            <img src="/assets/img/avatar_2.jpeg" alt="avtar images"
                                                                width="32" height="32">
                                                            <span class="avatar-status-online"></span>
                                                        </div>
                                                        <div class="d-inline-block mt-25">
                                                            <h6 class="mb-0 text-bold-500">David</h6>
                                                            <p class="text-muted"><small>12 hours ago</small></p>
                                                        </div>
                                                        <i
                                                            class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                                    </div>
                                                    <div class="card-body py-0">
                                                        <p>It's more efficient 🙌 to split each route's components into
                                                            a separate chunk, and only load them when the route is
                                                            visited. Frest comes with built-in light and dark layouts,
                                                            select as per your preference.</p>
                                                    </div>
                                                    <div class="card-footer d-flex justify-content-between pt-1">
                                                        <div class="d-flex align-items-center">
                                                            <i
                                                                class="cursor-pointer bx bx-heart user-profile-like font-medium-4"></i>
                                                            <p class="mb-0 ml-25">77</p>
                                                            <!-- user profile likes avatar start -->
                                                            <div class="d-none d-sm-block">
                                                                <div class="multiple-avatar-icon">
                                                                    <img src="assets/img/avatar_2.jpeg"
                                                                        class="rounded-circle" width="30"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Alexander Thomson">
                                                                    <img src="assets/img/avatar_3.jpeg"
                                                                        class="rounded-circle" width="30"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Micahel Bara">
                                                                    <img src="assets/img/avatar_4.jpeg"
                                                                        class="rounded-circle" width="30"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Alexander Thomson">
                                                                    <img src="assets/img/avatar_5.jpeg"
                                                                        class="rounded-circle" width="30"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Micahel Bara">
                                                                    <img src="assets/img/avatar.jpeg"
                                                                        class="rounded-circle" width="30"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Alexander Thomson">
                                                                </div>
                                                            </div>
                                                            <!-- user profile likes avatar ends -->
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i
                                                                class="cursor-pointer bx bx-comment-dots font-medium-4"></i>
                                                            <span class="ml-25">12</span>
                                                            <i
                                                                class="cursor-pointer bx bx-share-alt font-medium-4 ml-1"></i>
                                                            <span class="ml-25">12</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user profile nav tabs feed middle section user-1 card ends -->
                                        </div>
                                        <!-- user profile nav tabs feed middle section ends -->
                                    </div>
                                    <!-- user profile nav tabs feed ends -->
                                </div>
                                <div class="tab-pane" id="activity" aria-labelledby="activity-tab" role="tabpanel">
                                    <!-- user profile nav tabs activity start -->
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <!-- timeline widget start -->
                                                <ul class="widget-timeline">
                                                    <li class="timeline-items timeline-icon-success active">
                                                        <div class="timeline-time">Fry 10:17pm</div>
                                                        <h6 class="timeline-title">Rico</h6>
                                                        <p class="timeline-text">on <a href="">Received
                                                                Gift</a></p>
                                                        <div class="timeline-content">
                                                            Welcome to vedio game and lame is very creative
                                                        </div>
                                                    </li>
                                                    <li class="timeline-items timeline-icon-primary active">
                                                        <div class="timeline-time">5 days ago</div>
                                                        <h6 class="timeline-title">Jonny Richie attached file</h6>
                                                        <p class="timeline-text">on <a href="">Project
                                                                name</a></p>
                                                        <div class="timeline-content">
                                                            <img src="/assets/img/profile/sketch.png" alt="document"
                                                                height="36" width="27" class="mr-50">Data
                                                            Folder
                                                        </div>
                                                    </li>
                                                    <li class="timeline-items timeline-icon-danger active">
                                                        <div class="timeline-time">7 hours ago</div>
                                                        <h6 class="timeline-title">Mathew Slick docs</h6>
                                                        <p class="timeline-text">on <a href="">Project
                                                                name</a></p>
                                                        <div class="timeline-content">
                                                            <img src="/assets/img/profile/pdf.png" alt="document"
                                                                height="36" width="27" class="mr-50">Received
                                                            Pdf
                                                        </div>
                                                    </li>
                                                    <li class="timeline-items timeline-icon-info active">
                                                        <div class="timeline-time">5 hour ago</div>
                                                        <h6 class="timeline-title">Petey Cruiser send you a message</h6>
                                                        <p class="timeline-text">on <a href="">Redited
                                                                message</a></p>
                                                        <div class="timeline-content">
                                                            Nor again is there anyone who loves or pursues or desires to
                                                            obtain pain of itself, because it
                                                            is
                                                            pain, but because occasionally circumstances
                                                        </div>
                                                    </li>
                                                    <li class="timeline-items timeline-icon-warning">
                                                        <div class="timeline-time">2 min ago</div>
                                                        <h6 class="timeline-title">Anna mull liked </h6>
                                                        <p class="timeline-text">on <a href="">Liked</a>
                                                        </p>
                                                        <div class="timeline-content">
                                                            The Amairates
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- timeline widget ends -->
                                                <div class="text-center">
                                                    <button class="btn btn-primary">View All Activity</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- user profile nav tabs activity start -->
                                </div>
                                <div class="tab-pane" id="friends" aria-labelledby="friends-tab" role="tabpanel">
                                    <!-- user profile nav tabs friends start -->
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <h5>Friends</h5>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="media my-50">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-online"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a href="">Budi</a>
                                                                    </h6>
                                                                    <small class="text-muted">Flask</small>
                                                                </div>
                                                            </li>
                                                            <li class="media my-50 mt-2">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar_5.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-offline"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a href="">Daud</a>
                                                                    </h6>
                                                                    <small class="text-muted">Devloper</small>
                                                                </div>
                                                            </li>
                                                            <li class="media my-50 mt-2">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar_3.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-away"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a
                                                                            href="">Jhordan</a>
                                                                    </h6>
                                                                    <small class="text-muted">Devloper</small>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="media my-50">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar_4.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-busy"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a
                                                                            href="">Hendric</a>
                                                                    </h6>
                                                                    <small class="text-muted">UI/UX</small>
                                                                </div>
                                                            </li>
                                                            <li class="media my-50 mt-2">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-online"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a href="">Bob</a>
                                                                    </h6>
                                                                    <small class="text-muted">Android Developer</small>
                                                                </div>
                                                            </li>
                                                            <li class="media my-50 mt-2">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar_2.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-busy"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a href="">Mario</a>
                                                                    </h6>
                                                                    <small class="text-muted">Flask</small>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h5 class="mt-4">Mutual Friends</h5>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="media my-50">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-online"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a href="">Budi</a>
                                                                    </h6>
                                                                    <small class="text-muted">Flask</small>
                                                                </div>
                                                            </li>
                                                            <li class="media my-50 mt-2">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar_5.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-offline"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a href="">Daud</a>
                                                                    </h6>
                                                                    <small class="text-muted">Devloper</small>
                                                                </div>
                                                            </li>
                                                            <li class="media my-50 mt-2">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar_3.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-away"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a
                                                                            href="">Jhordan</a>
                                                                    </h6>
                                                                    <small class="text-muted">Devloper</small>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="media my-50">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar_4.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-busy"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a
                                                                            href="">Hendric</a>
                                                                    </h6>
                                                                    <small class="text-muted">UI/UX</small>
                                                                </div>
                                                            </li>
                                                            <li class="media my-50 mt-2">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-online"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a href="">Bob</a>
                                                                    </h6>
                                                                    <small class="text-muted">Android Developer</small>
                                                                </div>
                                                            </li>
                                                            <li class="media my-50 mt-2">
                                                                <a href="">
                                                                    <div class="avatar mr-2">
                                                                        <img src="/assets/img/avatar_2.jpeg"
                                                                            alt="avtar images" width="32" height="32">
                                                                        <span class="avatar-status-busy"></span>
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0"><a href="">Mario</a>
                                                                    </h6>
                                                                    <small class="text-muted">Flask</small>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- user profile nav tabs friends ends -->
                                </div>
                                <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                                    <!-- user profile nav tabs profile start -->
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-3 text-center mb-1 mb-sm-0">
                                                                <img src="/assets/img/avatar_5.jpeg" class="rounded"
                                                                    alt="group image" height="120" width="120">
                                                            </div>
                                                            <div class="col-12 col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-12 text-center text-sm-left">
                                                                        <h6 class="media-heading mb-0">walker07
                                                                        </h6>
                                                                        <small class="text-muted align-top">John
                                                                            Walker</small>
                                                                    </div>
                                                                    <div class="col-12 text-center text-sm-left">
                                                                        <div class="mb-1">
                                                                            <span class="mr-1">122
                                                                                <small>Posts</small></span>
                                                                            <span class="mr-1">4.7k
                                                                                <small>Followers</small></span>
                                                                            <span class="mr-1">652
                                                                                <small>Following</small></span>
                                                                        </div>
                                                                        <p>Algolia helps businesses across industries
                                                                            quickly create relevant😎, scalable😀, and
                                                                            lightning😍
                                                                            fast search and discovery experiences.</p>
                                                                        <div>
                                                                            <div class="badge badge-light-primary badge-round mr-1 mb-1"
                                                                                data-toggle="tooltip"
                                                                                data-placement="bottom" title=""
                                                                                data-original-title="with 7% growth @valintini_007 is on top 5k">
                                                                                <i
                                                                                    class="cursor-pointer bx bx-check-shield"></i>
                                                                            </div>
                                                                            <div class="badge badge-light-warning badge-round mr-1 mb-1"
                                                                                data-toggle="tooltip"
                                                                                data-placement="bottom" title=""
                                                                                data-original-title="last 55% growth @valintini_007 is on weedday">
                                                                                <i
                                                                                    class="cursor-pointer bx bx-badge-check"></i>
                                                                            </div>
                                                                            <div class="badge badge-light-success badge-round mb-1"
                                                                                data-toggle="tooltip"
                                                                                data-placement="bottom" title=""
                                                                                data-original-title="got premium profile here">
                                                                                <i
                                                                                    class="cursor-pointer bx bx-award"></i>
                                                                            </div>
                                                                        </div>
                                                                        <button
                                                                            class="btn btn-sm d-none d-sm-block float-right btn-light-primary">
                                                                            <i
                                                                                class="cursor-pointer bx bx-edit font-small-3 mr-50"></i><span>Edit</span>
                                                                        </button>
                                                                        <button
                                                                            class="btn btn-sm d-block d-sm-none btn-block text-center btn-light-primary">
                                                                            <i
                                                                                class="cursor-pointer bx bx-edit font-small-3 mr-25"></i><span>Edit</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <h5 class="card-title">Basic details</h5>
                                                <ul class="list-unstyled">
                                                    <li><i class="cursor-pointer bx bx-map mb-1 mr-50"></i>USA
                                                    </li>
                                                    <li><i class="cursor-pointer bx bx-phone-call mb-1 mr-50"></i>(+56)
                                                        454
                                                        474567 </li>
                                                    <li><i class="cursor-pointer bx bx-time mb-1 mr-50"></i>Juny 07</li>
                                                    <li><i
                                                            class="cursor-pointer bx bx-envelope mb-1 mr-50"></i>Walker@gmail.com
                                                    </li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6><small class="text-muted">Cell Phone</small></h6>
                                                        <p>(+46) 456 474567</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6><small class="text-muted">Family Phone</small></h6>
                                                        <p>(+46) 454 22432</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6><small class="text-muted">Reporter</small></h6>
                                                        <p>John Doe</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6><small class="text-muted">Manager</small></h6>
                                                        <p>Richie Rich</p>
                                                    </div>
                                                    <div class="col-12">
                                                        <h6><small class="text-muted">Bio</small></h6>
                                                        <p>Built-in customizer enables users to change their admin panel
                                                            look &amp; feel based on their
                                                            preferences Beautifully crafted, clean &amp; modern designed
                                                            admin theme with 3 different demos &amp;
                                                            light - dark versions.</p>
                                                    </div>
                                                </div>
                                                <button
                                                    class="btn btn-sm d-none d-sm-block float-right btn-light-primary mb-2">
                                                    <i
                                                        class="cursor-pointer bx bx-edit font-small-3 mr-50"></i><span>Edit</span>
                                                </button>
                                                <button
                                                    class="btn btn-sm d-block d-sm-none btn-block text-center btn-light-primary">
                                                    <i
                                                        class="cursor-pointer bx bx-edit font-small-3 mr-25"></i><span>Edit</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- user profile nav tabs profile ends -->
                                </div>
                            </div>
                        </div>
                        <!-- user profile nav tabs content ends -->
                        <!-- user profile right side content start -->
                        <div class="col-lg-3">
                            <!-- user profile right side content birthday card start -->
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="d-inline-flex">
                                            <div class="avatar mr-50 align-top">
                                                <img src="/assets/img/avatar.jpeg" alt="avtar images" width="32"
                                                    height="32">
                                                <span class="avatar-status-online"></span>
                                            </div>
                                            <h6 class="mb-0 d-flex align-items-center"> Nile's Birthday!</h6>
                                        </div>
                                        <i class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                        <div class="user-profile-birthday-image text-center p-2">
                                            <img class="img-fluid" src="/assets/img/profile/birthday.png" alt="image">
                                        </div>
                                        <div class="user-profile-birthday-footer text-center text-lg-left">
                                            <p class="mb-0"><small>Leave her a message with your best wishes on her
                                                    profile
                                                    page!</small></p>
                                            <a class="btn btn-sm btn-light-primary mt-50" href="">Send
                                                Wish</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- user profile right side content birthday card ends -->
                            <!-- user profile right side content gallery start -->
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1">Gallery
                                            <i
                                                class="cursor-pointer bx bx-dots-vertical-rounded align-top float-right"></i>
                                        </h5>
                                        <div class="row">
                                            <div class="col-md-4 col-6 pl-25 pr-0 pb-25">
                                                <img src="/assets/img/unsplash/faruk-kaymak-P_Ne56WEe5s-unsplash.jpg"
                                                    class="img-fluid" alt="gallery avtar img">
                                            </div>
                                            <div class="col-md-4 col-6 pl-25 pr-0 pb-25">
                                                <img src="/assets/img/unsplash/gian-luca-pilia-keEPKXQfriU-unsplash.jpg"
                                                    class="img-fluid" alt="gallery avtar img">
                                            </div>
                                            <div class="col-md-4 col-6 pl-25 pr-0 pb-25">
                                                <img src="/assets/img/unsplash/christopher-gower-vjMgqUkS8q8-unsplash.jpg"
                                                    class="img-fluid" alt="gallery avtar img">
                                            </div>
                                            <div class="col-md-4 col-6 pl-25 pr-0 pb-25">
                                                <img src="/assets/img/unsplash/jakob-owens-dIKLuM5EyRw-unsplash.jpg"
                                                    class="img-fluid" alt="gallery avtar img">
                                            </div>
                                            <div class="col-md-4 col-6 pl-25 pr-0 pb-25">
                                                <img src="/assets/img/unsplash/jakob-owens-DQPP9rVLYGQ-unsplash.jpg"
                                                    class="img-fluid" alt="gallery avtar img">
                                            </div>
                                            <div class="col-md-4 col-6 pl-25 pr-0 pb-25">
                                                <img src="/assets/img/unsplash/owen-lystrup-boLgiM0qwkg-unsplash.jpg"
                                                    class="img-fluid" alt="gallery avtar img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- user profile right side content gallery ends -->
                        </div>
                        <!-- user profile right side content ends -->
                    </div>
                    <!-- user profile content section start -->
                </div>
            </div>
        </section>
        <!-- page user profile ends -->

    </div>
</div>
@endsection