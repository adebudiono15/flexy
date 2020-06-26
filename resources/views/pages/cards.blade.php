@extends('layouts.master')

@section('title','Cards Basic')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css?v=1.0">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div> <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Cards</a></div> <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Card Basic</div>
</div>
<div class="pd-20 pt-0">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-image">
                    <img src="/assets/img/unsplash/aman-dhakal-YkWz_coLm84-unsplash.jpg" class="card-img-top" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">About Basic Card</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-image">
                    <img src="/assets/img/unsplash/jakob-owens-DQPP9rVLYGQ-unsplash.jpg" class="card-img-top" />
                    <h6 class="card-image-title">Photography</h6>
                </div>
                <div class="card-body">
                    <div class="card-meta">05 May 2020</div>
                    <h5 class="card-title">Essential tips for photography</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    <a href="#" class="card-link">Find out more <i class="icon-arrow-right"></i></a>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-image">
                    <img src="/assets/img/unsplash/owen-lystrup-boLgiM0qwkg-unsplash.jpg" class="card-img-top round-bottom-right" />
                    <div class="avatar avatar-xl">
                        <img src="/assets/img/unsplash/marius-ciocirlan-vMV6r4VRhJ8-unsplash.jpg" />
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-0">Marchus Ciocirlan</h5>
                    <div class="card-meta text-center">Graphic Designer</div>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="col-md-3 text-center">
                            <h6 class="mb-0">61</h6>
                            <div class="text-grey"><small>Posts</small></div>
                        </div>
                        <div class="col-md-4 text-center">
                            <h6 class="mb-0">560</h6>
                            <div class="text-grey"><small>Followers</small></div>
                        </div>
                        <div class="col-md-4 text-center">
                            <h6 class="mb-0">156</h6>
                            <div class="text-grey"><small>Following</small></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-md mr-3">
                            <img src="/assets/img/unsplash/ivana-cajina-_7LbC5J-jw4-unsplash.jpg" />
                        </div>
                        <div>
                            <h6 class="fs-12 mb-0">Ivana Cajina</h6>
                            <div class="card-meta">18 Minutes Ago</div>
                        </div>
                    </div>

                    <div class="card-post">
                        <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                        <img src="/assets/img/unsplash/alexandra-gornago-AquJhsgxams-unsplash.png" class="full-width" />
                    </div>

                    <div class="card-info mt-3">
                        <div class="card-info-item">
                            <i class="card-info-icon text-danger icon-heart"></i>
                            2.330
                        </div>
                        <div class="card-info-item">
                            <i class="card-info-icon text-primary icon-message-circle"></i>
                            350
                        </div>
                        <div class="card-info-item">
                            <i class="card-info-icon text-success icon-corner-up-right"></i>
                            100
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- / Grid Col 1 -->

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-image">
                    <img src="/assets/img/unsplash/aman-dhakal-YkWz_coLm84-unsplash.jpg" class="card-img-top" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Posting with Button</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                    <div class="mt-3">
                        <a class="btn btn-sm btn-main mr-2">Download</a>
                        <a class="btn btn-sm btn-outline-main">View All</a>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <img src="/assets/img/unsplash/ardito-ryan-harrisna-Ar5S-iC0-KM-unsplash.jpg" class="card-img rounded" />
                <div class="card-img-overlay bg-overlay-black text-white d-flex">
                    <div class="abs-top-right">
                    <a href="#" class="text-white fs-2r"><i class="bx bx-heart"></i></a>
                    </div>
                    <div class="align-self-end">
                    <h5 class="card-title fw-300">Beautiful Overlay</h5>
                    <p class="card-text fw-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    <a href="#" class="card-link text-white fs-md"><i class="icon-chevron-right"></i> Find out more</a>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="position-relative">
                <img src="/assets/img/unsplash/josh-hild-L-a2wryAYtU-unsplash.jpg" class="card-img rounded" />
                <div class="card-img-overlay bg-overlay-black text-white d-flex">
                    <div class="">
                    <div><small>New York</small></div>
                    <h5 class="fs-4r fw-300">25<sup class="fs-lg">o</sup></h5>
                    <h6 class="card-title mb-0 fw-300">Clearly Night</h6>
                    <div><small>Tuesday, May 05 2020</small></div>
                    </div>
                </div>
                </div>
                <div class="card-body pt-0">
                <div class="card-info pl-3 pr-3">
                    <div class="d-flex justify-content-between mt-4 full-width">
                        <div class="text-center">
                            <h6 class="mb-0 fs-md">56%</h6>
                            <div class="text-grey"><small>Precipitation</small></div>
                        </div>
                        <div class="text-center">
                            <h6 class="mb-0 fs-md">72%</h6>
                            <div class="text-grey"><small>Humidity</small></div>
                        </div>
                        <div class="text-center">
                            <h6 class="mb-0 fs-md">20 km/h</h6>
                            <div class="text-grey"><small>Wind</small></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-image">
                    <img src="/assets/img/unsplash/marcus-neto-gioH4gHo0-g-unsplash.jpg" class="card-img-top" />
                    <div class="avatar avatar-md">
                        <div class="avatar-content bg-dark"><i class="bx bx-play"></i></div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">10 Music that give you some kind of good mood.</h5>
                    <div class="text-center mt-2"><span class="text-main">#Music</span> <span class="text-primary ml-2">#Lifestyle</span></div>

                    <div class="text-center mt-3"><span class="badge badge-outline-main"><i class="bx bxs-heart text-danger fs-lg"></i> 123</span> <span class=" badge badge-outline-info ml-3"><i class="text-primary bx bx-envelope fs-lg"></i> 22</span></div>
                </div>
            </div>

        </div><!-- / Grid Col 2 -->

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-image">
                    <img src="/assets/img/unsplash/rachit-tank-2cFZ_FB08UM-unsplash.jpg" class="card-img-top" />
                    <div class="bg-warning card-price-overlay">$99.99</div>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">Best Product Item</h5>
                    <div class="card-rating">
                        <span class="text-warning"><i class="bx bxs-star"></i></span>
                        <span class="text-warning"><i class="bx bxs-star"></i></span>
                        <span class="text-warning"><i class="bx bxs-star"></i></span>
                        <span class="text-warning"><i class="bx bxs-star"></i></span>
                        <span class="text-warning"><i class="bx bxs-star-half"></i></span>

                        <span class="card-meta ml-2">1.549 Review</span>
                    </div>

                    <p class="card-text mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                    <div class="mt-3">
                        <a class="btn btn-sm btn-primary mr-2">Buy Now</a>
                        <a class="btn btn-sm btn-outline-primary">View Detail</a>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-image">
                    <img src="/assets/img/unsplash/owen-lystrup-boLgiM0qwkg-unsplash.jpg" class="card-img-top" />
                    <div class="avatar avatar-xl">
                        <img src="/assets/img/unsplash/marius-ciocirlan-vMV6r4VRhJ8-unsplash.jpg" />
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-0">Marchus Ciocirlan</h5>
                    <div class="card-meta text-center">Graphic Designer</div>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="col-md-3 text-center">
                            <h6 class="mb-0">61</h6>
                            <div class="text-grey"><small>Posts</small></div>
                        </div>
                        <div class="col-md-4 text-center">
                            <h6 class="mb-0">560</h6>
                            <div class="text-grey"><small>Followers</small></div>
                        </div>
                        <div class="col-md-4 text-center">
                            <h6 class="mb-0">156</h6>
                            <div class="text-grey"><small>Following</small></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3 ml-4 mr-4">
                        <a href="#" class="btn btn-sm btn-main"><i class="icon-user-plus"></i> Follow</a>
                        <a href="#" class="btn btn-sm btn-primary"><i class="bx bx-envelope"></i> Message</a>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <img src="/assets/img/unsplash/zoe-reeve-9hSejnboeTY-unsplash.jpg" class="card-img rounded" />
                <div class="card-img-overlay bg-overlay-black text-white d-flex">
                    <div class="abs-top-right">
                    <a href="#" class="text-white fs-2r"><i class="icon-message-circle"></i></a>
                    <a href="#" class="text-white fs-2r"><i class="icon-plus"></i></a>
                    </div>
                    <div class="align-self-end">
                    <h5 class="card-title fw-300 mb-0">Elephant Kind</h5>
                    <p class="card-text fw-300"><i class="icon-map-pin"></i> African Forest</p>
                    <p class="card-text fw-300 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    
                    <div class="mt-3">
                        <p class="card-text mb-1 fw-300">Tags</p>
                        <div>
                            <span class="badge badge-pill badge-main">Elephant</span>
                            <span class="badge badge-pill badge-primary">Wild</span>
                            <span class="badge badge-pill badge-warning">Animal</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div><!-- / Grid Col 2 -->
        

    </div>
</div>
@endsection