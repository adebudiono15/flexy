@extends('layouts.master')

@section('title','Carousel')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Carousel</div>
</div>
<div class="pd-20 pt-0">
    <!-- carousel example 1 -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Basic Example</h6>
                <P class="ml-3">While carousels support previous/next controls and indicators, they’re not
                    explicitly required.</P>
                <div id="carouselExampleIndicators" class="carousel slide mb-3 mt-3 ml-3 mr-3" data-ride="carousel">
                    <ol class="carousel-indicators round">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="assets/img/unsplash/aman-dhakal-YkWz_coLm84-unsplash.jpg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/unsplash/robert-bye-gCwUnnur2Mk-unsplash 2.png" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/unsplash/nathan-anderson-fKFa6wSdtMI-unsplash 1.png"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="bx bx-chevron-left bx-md bx-fade-left-hover" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="bx bx-chevron-right bx-md bx-fade-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- last example 1  -->
        <!-- carousel example 2 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">With Captions</h6>
                <p class="ml-3">Add captions to your slides easily with the
                    <code>.carousel-caption</code> element within any
                    <code>.carousel-item</code>.
                </p>
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide mb-3 mt-3 ml-3 mr-3" data-ride="carousel">
                        <ol class="carousel-indicators round">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/unsplash/aman-dhakal-YkWz_coLm84-unsplash.jpg"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/unsplash/robert-bye-gCwUnnur2Mk-unsplash 2.png"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/unsplash/nathan-anderson-fKFa6wSdtMI-unsplash 1.png"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="bx bx-chevron-left bx-md bx-fade-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="bx bx-chevron-right bx-md bx-fade-right-hover" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- last carousel exmaple 2 -->
    </div>

    <div class="row">
        <!-- carousel example 3  -->
        <div class="col-md-6">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Carousel Interval</h6>
                <p class="ml-3">Add atttibute <code>data-interval=""</code> to a <code>.carousel-item</code> to
                    change the
                    amount of time to delay between automatically cycling to the next item.
                </p>
                <div id="carouselexample3" class="carousel slide mb-3 mt-3 ml-3 mr-3" data-ride="carousel">
                    <ol class="carousel-indicators round">
                        <li data-target="#carouselexample3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselexample3" data-slide-to="1"></li>
                        <li data-target="#carouselexample3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="500">
                            <img src="assets/img/unsplash/aman-dhakal-YkWz_coLm84-unsplash.jpg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item" data-interval="500">
                            <img src="assets/img/unsplash/robert-bye-gCwUnnur2Mk-unsplash 2.png" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item" data-interval="500">
                            <img src="assets/img/unsplash/nathan-anderson-fKFa6wSdtMI-unsplash 1.png"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev arrowsLeft" href="#carouselexample3" role="button"
                        data-slide="prev">
                        <span class="bx bx-chevron-left bx-md bx-fade-left-hover" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next arrowsRight" href="#carouselexample3" role="button"
                        data-slide="next">
                        <span class="bx bx-chevron-right bx-md bx-fade-right-hover" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- last carousel example 3  -->
        <!-- carousel example 4 -->
        <div class="col-md-6">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Crossfade</h6>
                <p class="ml-3">Use <code>.carousel-fade</code> to your carousel to animate slides with a fade
                    transition instead of a slide.
                </p>
                <div class="bd-example">
                    <div id="carouselExample4" class="carousel slide carousel-fade mb-3 mt-3 ml-3 mr-3"
                        data-ride="carousel">
                        <ol class="carousel-indicators long">
                            <li data-target="#carouselExample4" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExample4" data-slide-to="1"></li>
                            <li data-target="#carouselExample4" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/unsplash/aman-dhakal-YkWz_coLm84-unsplash.jpg"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/unsplash/robert-bye-gCwUnnur2Mk-unsplash 2.png"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption myCaption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/unsplash/nathan-anderson-fKFa6wSdtMI-unsplash 1.png"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample4" role="button" data-slide="prev">
                            <span class="bx bx-chevron-left bx-md bx-fade-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample4" role="button" data-slide="next">
                            <span class="bx bx-chevron-right bx-md bx-fade-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last carousel exmaple 4 -->
    <div class="row">
        <!-- carousel example 5  -->
        <div class="col-md-6">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Carosel With Gallery</h6>
                <div id="carouselexample5" class="carousel slide mb-3 mt-3 ml-3 mr-3" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <img class="active mr-4" src="assets/img/unsplash/aman-dhakal-YkWz_coLm84-unsplash.jpg" alt=""
                            data-target="#carouselexample5" data-slide-to="0">
                        <img src="assets/img/unsplash/robert-bye-gCwUnnur2Mk-unsplash 2.png" alt=""
                            data-target="#carouselexample5" data-slide-to="1">
                        <img class="ml-4" src="assets/img/unsplash/nathan-anderson-fKFa6wSdtMI-unsplash 1.png" alt=" "
                            data-target="#carouselexample5" data-slide-to="2">
                    </ol>
                    <div class="carousel-inner ">
                        <div class="carousel-item active ">
                            <img src="assets/img/unsplash/aman-dhakal-YkWz_coLm84-unsplash.jpg " class="d-block w-100 "
                                alt="... ">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/img/unsplash/robert-bye-gCwUnnur2Mk-unsplash 2.png " class="d-block w-100 "
                                alt="... ">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/img/unsplash/nathan-anderson-fKFa6wSdtMI-unsplash 1.png "
                                class="d-block w-100 " alt="... ">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselexample5" role="button" data-slide="prev">
                        <span class="bx bx-chevron-left bx-md" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselexample5" role="button" data-slide="next">
                        <span class="bx bx-chevron-right bx-md bx-orange" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- last carousel example 5  -->
    </div>
</div>
</div>
@endsection