@extends('layouts.master')

@section('title','List group')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>List Group</div>
</div>
<div class="pd-20 pt-0">
    <!-- list group 1 -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Simple List Group</h6>
                <P class="ml-3">The most basic list group is simply an unordered list with list items, and the
                    proper classes. Build upon it with the options that follow, or your own CSS as needed.</P>
                <div class="col-md pb-10">
                    <div class="list-group">
                        <ul class="list-group">
                            <li class="list-group-item active">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- last list group 1  -->

        <!-- list group 2 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Disabled Items</h6>
                <P class="ml-3">Add attribute <code>.disabled</code> to a <code>.list-group-item</code> to gray
                    it out to appear disabled.</P>
                <div class="col-md pb-10">
                    <ul class="list-group">
                        <li class="list-group-item bg-grey disabled" aria-disabled="true">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">I love to go around the city</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- last list group 2 -->
    </div>
</div>

<div class="pd-20 pt-0">
    <!-- list group 3 -->
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Button List Group</h6>
                <div class="col-md pb-10">
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action active">
                            Cras justo odio
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">Dapibus ac
                            facilisis in</button>
                        <button type="button" class="list-group-item list-group-item-action">Morbi leo
                            risus</button>
                        <button type="button" class="list-group-item list-group-item-action">Porta ac
                            consectetur ac</button>
                        <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum
                            at eros</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- last list group 3  -->

        <!-- list group 4 -->
        <div class="col-md-6">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Badges</h6>
                <P class="ml-3">Use Utility classes
                    <code>.d-flex .justify-content-between align-items-center</code> to create space between
                    badge and your content</P>
                <div class="col-md pb-10">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Cras justo odio
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Dapibus ac facilisis in
                            <span class="badge badge-danger badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-warning badge-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Vestibulum at eros
                            <span class="badge badge-info badge-pill">7</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- last list group 4 -->
    </div>
</div>

<div class="pd-20 pt-0">
    <!-- list group 5 -->
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">List Group With Linked Items</h6>
                <div class="col-md pb-10">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            <i class="bx bx-home bx-sm bx-fw"></i> Home
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bx bx-camera bx-fw bx-sm"></i> Pictures <span
                                class="badge badge-pill badge-info pull-right">145</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bx bx-music bx-fw bx-sm"></i> Music <span
                                class="badge badge-pill badge-warning pull-right">50</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bx bx-video bx-fw bx-sm"></i> Videos <span
                                class="badge badge-pill badge-main pull-right">8</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- last list group 5  -->

        <!-- list group 6 -->
        <div class="col-md-6">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Contextual Classes</h6>
                <P class="ml-3">Use contextual classes to style list items, default or linked. Also includes
                    .active state.</P>
                <div class="col-md pb-10">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A
                            simple primary list group item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A
                            simple secondary list group item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-success">A
                            simple success list group item</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- last list group 6 -->
    </div>
</div>

<div class="pd-20 pt-0">
    <!-- list group 7 -->
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Custom Content</h6>
                <P class="ml-3">Add nearly any HTML within, even for linked list groups like the one below.</P>
                <div class="col-md pb-10">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6>Asteroid detected near earth</h6>
                                <small>1 days ago</small>
                            </div>
                            <p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero, sodales eget
                                sapien vel, porttitor bibendum enim. Donec sed nibh vitae lorem porttitor
                                blandit in nec ante.</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action active">
                            <div class="d-flex w-100 justify-content-between">
                                <h6>Scientists found massive black hole</h6>
                                <small>2 days ago</small>
                            </div>
                            <p>Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse
                                varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum
                                vestibulum.
                            </p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6>NASA launches solar probe</h6>
                                <small>3 days ago</small>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                                varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper
                                malesuada ante.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- last list group 7  -->

        <!-- list group 8 -->
        <div class="col-md-6">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Flush With Icons</h6>
                <P class="ml-3">To add an icon before your content to create a list group with icons.</P>
                <div class="col-md pb-10">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action border-0 d-flex active">
                            <div class="list-icon">
                                <i class="bx bxl-twitter mr-4 mt-3 bx-sm text-primary active"></i>
                            </div>
                            <div class="list-content">
                                <h6>Daily Updates</h6>
                                <p class="mb-0">
                                    It won’t be a bigger problem to find one video game lover in great savings.
                                </p>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0 d-flex">
                            <div class="list-icon">
                                <i class="bx bxl-instagram-alt mr-4 mt-3 bx-sm text-danger"></i>
                            </div>
                            <div class="list-content">
                                <h6>Game First Conceptualized</h6>
                                <p class="mb-0">
                                    During the formulative years, video games were created by using various
                                    interactive electronic devices with various display formats.
                                </p>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0 d-flex">
                            <div class="list-icon">
                                <i class="bx bxl-facebook mr-4 mt-3 bx-sm text-success"></i>
                            </div>
                            <div class="list-content">
                                <h6>Tube Amusement Device</h6>
                                <p class="mb-0">
                                    It won’t be a bigger problem to find one video game lover in great savings.
                                </p>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0 d-flex">
                            <div class="list-icon">
                                <i class="bx bxs-camera mr-4 mt-3 bx-sm text-info"></i>
                            </div>
                            <div class="list-content">
                                <h6>Hangover Amusement Device</h6>
                                <p class="mb-0">
                                    Find one video game lover in great savings. Build upon it with the options
                                    that follow, or your own CSS as needed.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- last list group 8 -->
    </div>
</div>
@endsection