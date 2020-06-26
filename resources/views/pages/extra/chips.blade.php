@extends('layouts.master')

@section('title','Chips')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush


@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Extra Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Chips</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Default Chips</h6>
                    <p>
                        Helps you represent simple data with Various options.you can create a chip by using
                        <code>.chip</code> and
                        <code>.chip-body</code>. to add avatar use class <code>.avatar</code> inside
                        <code>.chip-body</code>. use class <code>.chip-text</code> for chip text.
                    </p>
                    <div class="chip mr-1">
                        <div class="chip-body">
                            <span class="chip-text"> Basic Chip</span>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <div class="avatar-content">
                                    FY
                                </div>
                            </div>
                            <span class="chip-text">Avatar Text</span>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <span><i class="bx bx-user"></i></span>
                            </div>
                            <span class="chip-text">Avatar Icon</span>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <img class="img-fluid" src="assets/img/avatar_4.jpeg" alt="generic img placeholder"
                                    height="20" width="20">
                            </div>
                            <span class="chip-text">Avatar Image</span>
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
                    <h6 class="card-title mb-4">Color Chips</h6>
                    <p>use class <code>.chip-color-name</code> with <code>.chip</code> to change background color of
                        chip.</p>

                    <div class="chip chip-primary mr-1">
                        <div class="chip-body">
                            <span class="chip-text text-white">Primary chip</span>
                        </div>
                    </div>

                    <div class="chip chip-success mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <div class="avatar-content">
                                    LD
                                </div>
                            </div>
                            <span class="chip-text text-white">Avatar Text</span>
                        </div>
                    </div>

                    <div class="chip chip-info mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <span><i class="bx bx-user"></i></span>
                            </div>
                            <span class="chip-text text-white">Avatar Icon</span>
                        </div>
                    </div>

                    <div class="chip chip-warning mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <img class="img-fluid" src="assets/img/avatar_3.jpeg" alt="generic img placeholder"
                                    height="20" width="20">
                            </div>
                            <span class="chip-text text-white">Avatar Image</span>
                        </div>
                    </div>

                    <div class="chip chip-danger mr-1">
                        <div class="chip-body">
                            <span class="chip-text text-white">Avatar Closeable</span>
                            <div class="chip-closeable" onclick="this.parentElement.style.display='none'">
                                <i class="bx bx-x"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- last example 2 -->

    <!-- emaple 3 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Colored Avatar</h6>
                    <p>You can change background color of avatar by using <code>.bg-{color-name}</code> with
                        <code>.avatar</code></p>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <div class="avatar bg-primary">
                                <span>FX</span>
                            </div>
                            <span class="chip-text">Avatar Text</span>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <div class="avatar bg-success">
                                <span>EX</span>
                            </div>
                            <span class="chip-text">Avatar Text</span>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <div class="avatar bg-info">
                                <i class="bx bx-user"></i>
                            </div>
                            <span class="chip-text">Avatar Text</span>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <div class="avatar bg-danger">
                                <i class="bx bx-user"></i>
                            </div>
                            <span class="chip-text">Avatar Text</span>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <div class="avatar bg-warning">
                                <i class="bx bx-user"></i>
                            </div>
                            <span class="chip-text">Avatar Text</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- last emaple 3 -->

    <!-- example 4 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Icon</h6>
                    <p>To add icons in your chips wrap them inside <code>.avatar</code></p>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <i class="bx bx-user"></i>
                            </div>
                            <span class="chip-text">Default chip</span>
                        </div>
                    </div>

                    <div class="chip chip-primary mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <i class="bx bx-download"></i>
                            </div>
                            <span class="chip-text text-white">Share Icon</span>
                        </div>
                    </div>

                    <div class="chip chip-success mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <i class="bx bx-envelope"></i>
                            </div>
                            <span class="chip-text text-white">Mail Icon</span>
                        </div>
                    </div>

                    <div class="chip chip-danger mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <i class="bx bx-block"></i>
                            </div>
                            <span class="chip-text text-white">Block Icon</span>
                        </div>
                    </div>

                    <div class="chip chip-warning mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <i class="bx bx-battery"></i>
                            </div>
                            <span class="chip-text text-white">Battery Icon</span>
                        </div>
                    </div>

                    <div class="chip chip-info mr-1">
                        <div class="chip-body">
                            <div class="avatar">
                                <i class="bx bx-edit"></i>
                            </div>
                            <span class="chip-text text-white">Edit Icon</span>
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
                    <h6 class="card-title mb-4">Closeable</h6>
                    <p>To make your chip closeable use class <code>.chip-closeable</code></p>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <span class="chip-text">Dribble</span>
                            <div class="chip-closeable" onclick="this.parentElement.style.display='none'">
                                <i class="bx bx-x"></i>
                            </div>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <span class="chip-text">Github</span>
                            <div class="chip-closeable" onclick="this.parentElement.style.display='none'">
                                <i class="bx bx-x"></i>
                            </div>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <span class="chip-text">Behance</span>
                            <div class="chip-closeable" onclick="this.parentElement.style.display='none'">
                                <i class="bx bx-x"></i>
                            </div>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <span class="chip-text">Vue Js</span>
                            <div class="chip-closeable" onclick="this.parentElement.style.display='none'">
                                <i class="bx bx-x"></i>
                            </div>
                        </div>
                    </div>

                    <div class="chip mr-1">
                        <div class="chip-body">
                            <span class="chip-text">Frest</span>
                            <div class="chip-closeable" onclick="this.parentElement.style.display='none'">
                                <i class="bx bx-x"></i>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- last example 5 -->

</div>
@endsection