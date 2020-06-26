@extends('layouts.master')

@section('title','Input Group')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Form Elements</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Input Group</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Basic Input Group</h6>
                    <p>Add span with <code>.input-group-text</code> class <b>before</b>
                        <code>&lt;input&gt;</code> for input-group-prepend and add span with
                        <code>.input-group-text</code> class <b>after</b>
                        <code>&lt;input&gt;</code> for input-group-append.</p>
                    <div class="row">
                        <div class="col-lg-4 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Addon to Left"
                                        aria-describedby="basic-addon1">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Addon To Right"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Addon On Both Side"
                                        aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </fieldset>
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
                    <h6 class="card-title mb-4">Multiple Input</h6>
                    <p>While multiple <code>&lt;input&gt;</code>s are supported visually, validation styles are only
                        available for input groups with a single <code>&lt;input&gt;</code>.</p>
                    <div class="row">
                        <div class="col-12">
                            <fieldset>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">First and last name</span>
                                    </div>
                                    <input type="text" aria-label="First name" class="form-control"
                                        placeholder="First Name">
                                    <input type="text" aria-label="Last name" class="form-control"
                                        placeholder="Last Name">
                                </div>
                            </fieldset>
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
                    <h6 class="card-title mb-4">Multiple Addons</h6>
                    <p>Multiple add-ons are supported and can be mixed with checkbox and radio input versions.
                    </p>
                    <div class="row">
                        <div class="col-sm-6 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        aria-label="Dollar amount (with dot and two decimal places)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </div>
                            </fieldset>
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
                    <h6 class="card-title mb-4">Input Groups With Checkboxes And Radio</h6>
                    <p>Input Groups can use with checkboxes and radio buttons also. For it add code for
                        <code>.checkbox</code> class and
                        <code>.radio</code> class respectively.</p>
                    <div class="row">
                        <div class="col-sm-6 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <div class="checkbox">
                                                <input type="checkbox" class="checkbox__input" id="checkboxinput"
                                                    name="checkbox">
                                                <label for="checkboxinput"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <div class="radio">
                                                <input type="radio" id="radioinput" name="radio">
                                                <label for="radioinput"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with radio button">
                                </div>
                            </fieldset>
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
                    <h6 class="card-title mb-4">Input Groups With Different Size</h6>
                    <p>Add atributte <code>.input-group-lg/sm</code> class to <code>.input-group</code> for Large/Small
                        addon/prepend.</p>
                    <div class="row">
                        <div class="col-sm-6 mb-1">
                            <fieldset>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="sizing-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Large Addon"
                                        aria-describedby="sizing-addon1">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <fieldset>
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="sizing-addon3">@example.com</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Small Addon"
                                        aria-describedby="sizing-addon3">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 5 -->

    <!-- example 6 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Input Groups With Button</h6>
                    <p>Add span with <code>.input-group-btn</code> class and add button inside <b>before</b> or
                        <b>after</b>
                        <code>&lt;input&gt;</code>.</p>
                    <div class="row">
                        <div class="col-md-6 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Button on right"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append" id="button-addon2">
                                        <button class="btn btn-primary btn-sm" type="button">Go</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary btn-sm" type="button"><i
                                                class="bx bx-search"></i></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Button on both side"
                                        aria-label="Amount">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm" type="button">Search !</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 6 -->

    <!-- example 7 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Input Groups With Dropdown</h6>
                    <p>Add <code>&lt;button&gt;</code> with <code>.dropdown-toggle</code> class and add dropdown-menu
                        after it to get input group with dropdown.</p>
                    <div class="row">
                        <div class="col-md-6 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-primary  btn-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Dropdown on left">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6 mb-1">
                            <fieldset>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-primary  btn-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bxs-pencil"></i>
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start"
                                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 39px, 0px);">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Dropdown on both side"
                                        aria-label="Amount">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 7 -->

</div>
@endsection