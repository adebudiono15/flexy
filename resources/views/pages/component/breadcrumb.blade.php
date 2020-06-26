@extends('layouts.master')

@section('title','Breadcrumbs')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Breadcrumb</div>
</div>
<div class="pd-20 pt-0">
    <!-- Breadcrumb 1 -->
    <div class="card mt-4">

        <div class="row">
            <div class="col-md">
                <div class="card mt-4 shadow">
                    <h6 class="card-title mt-3 ml-3">Basic Example</h6>
                    <P class="ml-3">Indicate the current page’s location within a navigational hierarchy that
                        automatically adds separators via CSS.</P>
                    <div class="col-md-12">
                        <div class="breadcrumb d-flex align-items-center breadcrumb-content">
                            <div>
                                <a href="">
                                    <li><i class="icon-home"></i></li>
                                </a>
                            </div>
                            <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
                            <div>
                                <li>
                                    <a href="">Library</a>
                                </li>
                            </div>
                            <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
                            <div>
                                <li>
                                    <a href="">Data</a>
                                </li>
                            </div>

                            <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
                            <div>Link</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last Breadcrumb 1  -->


    <!-- Breadcrumb 2 -->
    <div class="row">
        <div class="col-md">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Breadcrumb Divider Icon With Active Link Fill</h6>
                <div class="col-md-4">
                    <div class="breadcrumb pt-0 pb-0 d-flex align-items-center breadcrumb-content">
                        <div>
                            <a href="">
                                <li><i class="icon-home"></i></li>
                            </a>
                        </div>
                        <div class="line">
                            |
                        </div>
                        <div>
                            <li>
                                <a href="">Library</a>
                            </li>
                        </div>
                        <div class="line">
                            |
                        </div>
                        <div>
                            <li>
                                <a href="">Data</a>
                            </li>
                        </div>
                        <div class="breadcrumb-item-content-block active">Link</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last Breadcrumb 2 -->

    <!-- Breadcrumb 3 -->
    <div class="row">
        <div class="col-md">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Breadcrumb Rounded</h6>
                <div class="col-md-12">
                    <div class="breadcrumb d-flex align-items-center breadcrumb-content rounded-pill">
                        <div>
                            <a href="">
                                <li><i class="icon-home"></i></li>
                            </a>
                        </div>
                        <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
                        <div>
                            <li>
                                <a href="">Library</a>
                            </li>
                        </div>
                        <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
                        <div>
                            <li>
                                <a href="">Data</a>
                            </li>
                        </div>

                        <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
                        <div>Link</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last Breadcrumb 3 -->

    <!-- Breadcrumb 2 -->
    <div class="row">
        <div class="col-md">
            <div class="card mt-4 shadow">
                <h6 class="card-title mt-3 ml-3">Breadcrumb Rounded With Divider Icon And Active Link Fill</h6>
                <div class="col-md-4">
                    <div class="breadcrumb pt-0 pb-0 d-flex align-items-center breadcrumb-content rounded-pill">
                        <div>
                            <a href="">
                                <li><i class="icon-home"></i></li>
                            </a>
                        </div>
                        <div class="line">
                            |
                        </div>
                        <div>
                            <li>
                                <a href="">Library</a>
                            </li>
                        </div>
                        <div class="line">
                            |
                        </div>
                        <div>
                            <li>
                                <a href="">Data</a>
                            </li>
                        </div>


                        <div class="breadcrumb-item-content-round active">Link</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last Breadcrumb 2 -->

</div>
@endsection