@extends('layouts.master')

@section('title','Divider')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush


@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Extra Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Divider</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Default</h6>
                    <p>
                        You can add a line to divide your section using
                        <code>&lt;hr&gt;</code>
                    </p>
                    <p>
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
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
                    <h6 class="card-title mb-4">Text</h6>
                    <p>Add atributte class <code>.divider</code> as wrapper for <code>.divider-text</code> to create a
                        divider text.</p>
                    <div class="divider">
                        <div class="divider-text">My Text</div>
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
                    <h6 class="card-title mb-4">Text Position</h6>
                    <p>
                        Add atributte class <code>.divider-left | left-center | right | right-center</code> with
                        <code>.divider</code> to set text position.
                    </p>
                    <div class="divider divider-left">
                        <div class="divider-text">Left</div>
                    </div>
                    <div class="divider divider-left-center">
                        <div class="divider-text">Left Center</div>
                    </div>
                    <div class="divider">
                        <div class="divider-text">Center(Default)</div>
                    </div>
                    <div class="divider divider-right-center">
                        <div class="divider-text">Right Center</div>
                    </div>
                    <div class="divider divider-right">
                        <div class="divider-text">Right</div>
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
                    <h6 class="card-title mb-4">Icons</h6>

                    <div class="divider divider-left">
                        <div class="divider-text"><i class="bx bx-down-arrow-alt"></i></div>
                    </div>
                    <div class="divider divider-left-center">
                        <div class="divider-text"><i class="bx bx-star"></i></div>
                    </div>
                    <div class="divider">
                        <div class="divider-text"><i class="bx bx-check"></i></div>
                    </div>
                    <div class="divider divider-right-center">
                        <div class="divider-text"><i class="bx bx-x-circle"></i></div>
                    </div>
                    <div class="divider divider-right">
                        <div class="divider-text"><i class="bx bx-time-five"></i></div>
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
                    <h6 class="card-title mb-4">Style</h6>
                    <p>
                        Add atributte class <code>.dotted | dashed | solid</code> to change divider style. solid is
                        default style you don't have to add any class for it.
                    </p>

                    <div class="d-flex">
                        <hr class="my-auto flex-grow-1 dotted">
                        <div class="px-4">Dotted</div>
                        <hr class="my-auto flex-grow-1 dotted">
                    </div>

                    <div class="d-flex mt-3">
                        <hr class="my-auto flex-grow-1 dashed">
                        <div class="px-4">Dashed</div>
                        <hr class="my-auto flex-grow-1 dashed">
                    </div>

                    <div class="d-flex mt-3">
                        <hr class="my-auto flex-grow-1 solid">
                        <div class="px-4">Solid</div>
                        <hr class="my-auto flex-grow-1 solid">
                    </div>

                </div>
            </div>
        </div>
        <!-- last example 5 -->


    </div>
    @endsection