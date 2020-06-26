@extends('layouts.master')

@section('title','Dropdown')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Dropdowns</div>
</div>

<div class="pd-20 pt-0">
    <!--  split -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Split Dropdowns</h6>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <p>To create a split button add class <code>.dropdown-toggle-split</code> with your
                            dropdown toggle class And to add divider between dropdown item use class
                            <code>.doprdown-divider</code>.
                        </p>
                        <!-- danger -->
                        <div class="btn-group mr-1">
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- primary -->
                        <div class="btn-group mr-1">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- secondary -->
                        <div class="btn-group mr-1">
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- success -->
                        <div class="btn-group mr-1">
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- info -->
                        <div class="btn-group mr-1">
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- warning -->
                        <div class="btn-group mr-1">
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- split -->


    <!-- icon -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Dropdown With Icons</h6>
            <div class="mt-4">
                <div class="row">
                    <!-- left -->
                    <div class="col-md-12">
                        <div class="btn-group mr-1">
                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx 
                                        bx-slider-alt mr-2"></i>Icon Left
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                style="position: absolute; transform: translate3d(38px, 39px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#"><i class="bx 
                                            bx-mail-send"></i> Action</a>
                                <a class="dropdown-item mt-1" href="#"><i class="bx bx-layer-plus"></i>
                                    Another
                                    action</a>
                                <a class="dropdown-item mt-1" href="#"><i class="bx 
                                            bx-message-detail"></i> Something else here</a>
                            </div>
                        </div>

                        <!-- right -->
                        <div class="btn-group">
                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Icon Right<i class="bx 
                                        bx-slider-alt ml-2"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                style="position: absolute; transform: translate3d(38px, 39px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#">Action <i class="bx 
                                            bx-mail-send"></i></a>
                                <a class="dropdown-item mt-1" href="#">Another
                                    action <i class="bx bx-layer-plus"></i></a>
                                <a class="dropdown-item mt-1" href="#">Something else here <i class="bx 
                                            bx-message-detail"></i></a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                            <div class="bg-dark pd-20 pb-0">
                                <pre class="text-white">
&lt;button class=&quot;btn btn-info dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria expanded=&quot;false&quot;&gt;
 Icon Right&lt;i class=&quot;bx bx-slider-alt&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu dropdown-menu-right&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action &lt;i class=&quot;bx bx-mail-send&quot;&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;a class=&quot;dropdown-item mt-1&quot; href=&quot;#&quot;&gt;Another action &lt;i class=&quot;bx bx-layer-plus&quot;&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;a class=&quot;dropdown-item mt-1&quot; href=&quot;#&quot;&gt;Something else here &lt;i class=&quot;bx bx-message-detail&quot;&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/div&gt;
</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last icon -->

    <!-- directions -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Directions</h6>
            <p>Add attribute <code>.dropdown-menu-right</code> to a <code>.dropdown-menu</code> to right align
                the dropdown menu. Trigger
                dropdown menus at the up / right / left of the elements by adding
                <code>.dropup | .dropright | .dropleft</code> to the parent element.</p>
            <div class="mt-4">
                <div class="row">
                    <!-- right -->
                    <div class="col-md-12">
                        <div class="btn-group mr-1">
                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Drop bottom right
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                style="position: absolute; transform: translate3d(38px, 39px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <!-- up -->
                        <div class="btn-group dropup mr-1">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Drop
                                up</button>
                            <div class="dropdown-menu mb-2" x-placement="top-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -141px, 0px);">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <!-- right -->
                        <div class="btn-group dropright mr-1">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Drop
                                Right</button>
                            <div class="dropdown-menu ml-2" x-placement="right-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -141px, 0px);">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <!-- left -->
                        <div class="btn-group dropleft">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Drop
                                Right</button>
                            <div class="dropdown-menu mr-2" x-placement="left-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -141px, 0px);">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                            <div class="bg-dark pd-20 pb-0">
                                <pre class="text-white">
&lt;button class=&quot;btn btn-info dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria expanded=&quot;false&quot;&gt;
 Icon Right&lt;i class=&quot;bx bx-slider-alt&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;div class=&quot;dropdown-menu dropdown-menu-right&quot; aria-labelledby=&quot;dropdownMenuButton&quot;
    style=&quot;position: absolute; transform: translate3d(38px, 39px, 0px); top: 0px; left: 0px; will-change: transform;&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action &lt;i class=&quot;bx bx-mail-send&quot;&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;a class=&quot;dropdown-item mt-1&quot; href=&quot;#&quot;&gt;Another action &lt;i class=&quot;bx bx-layer-plus&quot;&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;a class=&quot;dropdown-item mt-1&quot; href=&quot;#&quot;&gt;Something else here &lt;i class=&quot;bx bx-message-detail&quot;&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/div&gt;
</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- last direction -->

    <!--  size -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Sizes</h6>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <p>Button dropdowns work with buttons of all sizes, including default and split dropdown
                            buttons.
                        </p>
                        <!-- Large -->
                        <div class="btn-group mr-1">
                            <button type="button" class="btn btn-info btn-lg">Large</button>
                            <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- default -->
                        <div class="btn-group mr-1">
                            <button type="button" class="btn btn-info">Default</button>
                            <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- small -->
                        <div class="btn-group">
                            <button class="btn btn-info btn-sm" type="button">
                                Small
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-outline-info dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- Split -->

                        <!-- Large -->
                        <div class="btn-group ml-3 mr-1">
                            <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Small
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- default -->
                        <div class="btn-group mr-1">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Small
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <!-- small -->
                        <div class="btn-group">
                            <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Small
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                            <div class="bg-dark pd-20 pb-0">
                                <pre class="text-white">
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-lg&quot;&gt;Large&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
        &lt;div class=&quot;dropdown-menu&quot;&gt;
            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
            &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
        &lt;/div&gt;
&lt;/div&gt;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- size -->

        <!-- variations -->
        <div class="card mt-4">
            <div class="card-body">
                <h6 class="card-title mb-4">Variations</h6>
                <p>To create a dropdown with groups you can use <code>.dropdown-header</code> for the header of groups and for sepration of group you can use <code>.dropdown-divider</code>. To create a dropdown with icons use class <code>.dropdown-icon-wrapper</code> with <code>.dropdown</code>.</p>
                <div class="mt-4">
                    <div class="row">
                        <!-- group -->
                        <div class="col-md-12">
                            <div class="btn-group mr-1 dropup">
                                <button type="button" class="btn btn-info dropdown-toggle"
                                    data-toggle="dropdown">Groups</button>
                                <div class="dropdown-menu mb-2" x-placement="top-start"
                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -141px, 0px);">
                                    <p class="dropdown-header font-weight-bold">Group 1</p>
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Separated link</a>
                                    <div class="dropdown-divider"></div>
                                    <p class="dropdown-header font-weight-bold">Group 2</p>
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Separated link</a>

                                </div>
                            </div>

                            <!-- icon -->
                            <div class="btn-group dropup form">
                                <button type="button" class="btn btn-info dropdown-toggle"
                                    data-toggle="dropdown">Form</button>
                                <div class="dropdown-menu mb-2" x-placement="top-start"
                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; width:250px; transform: translate3d(0px, -141px, 0px);">
                                    <form class="px-2 py-2">
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                                placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormPassword1">Password</label>
                                            <input type="password" class="form-control"
                                                id="exampleDropdownFormPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <input type="checkbox" class="checkbox-input" id="dropdownCheck1">
                                                <label for="dropdownCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info">Sign in</button>
                                    </form>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                                <div class="bg-dark pd-20 pb-0">
                                    <pre class="text-white">
&lt;div class=&quot;btn-group dropup form&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot;
            data-toggle=&quot;dropdown&quot;&gt;Form&lt;/button&gt;
        &lt;div class=&quot;dropdown-menu mb-2&quot; x-placement=&quot;top-start&quot;&gt;
            &lt;form class=&quot;px-2 py-2&quot;&gt;
                &lt;div class=&quot;form-group&quot;&gt;
                    &lt;label for=&quot;exampleDropdownFormEmail1&quot;&gt;Email address&lt;/label&gt;
                    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormEmail1&quot;
                        placeholder=&quot;email&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;form-group&quot;&gt;
                    &lt;label for=&quot;exampleDropdownFormPassword1&quot;&gt;Password&lt;/label&gt;
                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot;
                        id=&quot;exampleDropdownFormPassword1&quot; placeholder=&quot;Password&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;form-group&quot;&gt;
                    &lt;div class=&quot;checkbox&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;checkbox-input&quot; id=&quot;dropdownCheck1&quot;&gt;
                        &lt;label for=&quot;dropdownCheck1&quot;&gt;Remember me&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;button type=&quot;submit&quot; class=&quot;btn btn-info&quot;&gt;Sign in&lt;/button&gt;
            &lt;/form&gt;
        &lt;/div&gt;
&lt;/div&gt;
                            </div>
                        </div>
                        </div>
                    </div>
@endsection