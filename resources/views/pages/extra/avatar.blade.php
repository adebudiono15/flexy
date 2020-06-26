@extends('layouts.master')

@section('title','Avatar')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush


@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Extra Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Avatar</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Default</h6>
                    <p>
                        Wrap your content with <code>.avatar</code> class and wrap your text in
                        <code>.avatar</code> to create a avatar.You have to use inline
                        <code>attributes</code> to set height width of image in default avatar.
                    </p>
                    <div class="row ml-1">
                        <div class="avatar avatar-sm mr-3">
                            <img src="assets/img/unsplash/ivana-cajina-_7LbC5J-jw4-unsplash.jpg">
                        </div>
                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-dark"><i class="bx bx-music"></i></div>
                        </div>
                        <div class="avatar avatar-sm">
                            <div class="avatar-content bg-primary">F</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 1 -->

    <!-- example 2 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Sizes</h6>
                    <p>
                        Add atributte class .avatar-<code>sm/md/lg/xl</code> to modify size of your avatar.
                    </p>
                    <div class="d-flex align-items-center">

                        <div class="avatar avatar-sm mr-3">
                            <img src="assets/img/unsplash/ivana-cajina-_7LbC5J-jw4-unsplash.jpg">
                        </div>
                        <div class="avatar avatar-md mr-3">
                            <img src="assets/img/unsplash/ivana-cajina-_7LbC5J-jw4-unsplash.jpg">
                        </div>
                        <div class="avatar avatar-lg mr-3">
                            <img src="assets/img/unsplash/ivana-cajina-_7LbC5J-jw4-unsplash.jpg">
                        </div>
                        <div class="avatar avatar-xl mr-3">
                            <img src="assets/img/unsplash/ivana-cajina-_7LbC5J-jw4-unsplash.jpg">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 2 -->

    <!-- example 3 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Color</h6>
                    <p>
                        Add atributte class <code>.bg-"color name"</code> to change background color of your avatar.
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-dark">F</i>
                            </div>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-primary">L</i>
                            </div>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-main">E</i>
                            </div>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-info">X</i>
                            </div>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-success">Y</i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 3 -->

    <!-- example 4 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Avatar With Badge</h6>
                    <p>
                        You can add notification label to avatar by using <code>.badge</code>with
                        <code>.badge-up</code>
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-success position-relative"><i class="bx bx-phone-call"></i>
                            </div>
                            <span class="badge badge-pill badge-round badge-danger badge-up">7</span>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-info"><i class="bx bx-user"></i>
                            </div>
                            <span class="badge badge-pill badge-round badge-danger badge-up">10</span>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-main"><i class="bx bx-movie"></i>
                            </div>
                            <span class="badge badge-pill badge-round badge-danger badge-up">7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 4 -->

    <!-- example 5 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Icon</h6>
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-success position-relative"><i class="bx bx-phone-call"></i>
                            </div>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-info"><i class="bx bx-user"></i>
                            </div>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-main"><i class="bx bx-movie"></i>
                            </div>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-info"><i class="bx bx-camera"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 5 -->

    <!-- content 6 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Status</h6>
                    <p>
                        Add atributte class <code> .avatar-status-online | offline | away | busy</code> after
                        <code>.avatar</code> to create avatar with status
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-info"><i class="bx bx-user"></i>
                            </div>
                            <span class="avatar-status-online"></span>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-grey"><i class="bx bx-user"></i>
                            </div>
                            <span class="avatar-status-offline"></span>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-main"><i class="bx bx-user"></i>
                            </div>
                            <span class="avatar-status-away"></span>
                        </div>

                        <div class="avatar avatar-sm mr-3">
                            <div class="avatar-content bg-main">
                                <img src="assets/img/unsplash/ivana-cajina-_7LbC5J-jw4-unsplash.jpg">
                            </div>
                            <span class="avatar-status-busy"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last content 6 -->

    {{-- example 7 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Hover</h6>
                    <p>
                        Add atributte class <code>.multiple-avatar-icon</code>.
                    </p>
                    <div class="d-flex align-items-center">
                        <td>
                            <div class="multiple-avatar-icon">
                                <img src="assets/img/avatar_2.jpeg" class="rounded-circle" width="40"
                                    data-toggle="tooltip" title="" data-original-title="Alexander Thomson">
                                <img src="assets/img/avatar_3.jpeg" class="rounded-circle" width="40"
                                    data-toggle="tooltip" title="" data-original-title="Micahel Bara">
                                <img src="assets/img/avatar_4.jpeg" class="rounded-circle" width="40"
                                    data-toggle="tooltip" title="" data-original-title="Alexander Thomson">
                                <img src="assets/img/avatar_5.jpeg" class="rounded-circle" width="40"
                                    data-toggle="tooltip" title="" data-original-title="Micahel Bara">
                                <img src="assets/img/avatar.jpeg" class="rounded-circle" width="40"
                                    data-toggle="tooltip" title="" data-original-title="Alexander Thomson">
                            </div>
                        </td>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 7 --}}

</div>
@endsection