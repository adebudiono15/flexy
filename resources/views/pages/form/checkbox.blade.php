@extends('layouts.master')

@section('title','Checkbox')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Form Elements</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Checkbox</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Custom Checkboxes</h6>
                    <p>Add <code>.custom-control .custom-checkbox</code> as a single wrapper and add
                        <code>.custom-control-label</code> for better output.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="" name="customCheck"
                                        id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Active</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck"
                                        id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Inactive</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="" name="customCheck"
                                        id="customCheck3" disabled="">
                                    <label class="custom-control-label" for="customCheck3">Active - disabled</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck" disabled=""
                                        id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Inactive - disabled</label>
                                </div>
                            </fieldset>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 1 -->

    {{-- example 2 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Custom Colored Checkboxes</h6>
                    <p>To change the color of the Custom CheckBoxes, use the <code>.bg-Color Name</code> with
                        <code>.custom-control-input</code> class.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input bg-primary" checked=""
                                        name="customCheck" id="customColorCheck1">
                                    <label class="custom-control-label" for="customColorCheck1">Primary</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input bg-secondary" checked=""
                                        name="customCheck" id="customColorCheck2">
                                    <label class="custom-control-label" for="customColorCheck2">Secondary</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input bg-success" checked=""
                                        name="customCheck" id="customColorCheck3">
                                    <label class="custom-control-label" for="customColorCheck3">Success</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input bg-danger" checked=""
                                        name="customCheck" id="customColorCheck4">
                                    <label class="custom-control-label" for="customColorCheck4">Danger</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input bg-info" checked=""
                                        name="customCheck" id="customColorCheck5">
                                    <label class="custom-control-label" for="customColorCheck5">Info</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mb-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input bg-warning" checked=""
                                        name="customCheck" id="customColorCheck6">
                                    <label class="custom-control-label" for="customColorCheck6">Warning</label>
                                </div>
                            </fieldset>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 2 --}}

    {{-- example 3 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Checkboxes Glow</h6>
                    <p>To change the color of the checkBox, use the <code>checkbox-Color Name</code> for primary,
                        secondary, success,
                        danger, info, warning.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" id="colorCheckbox1" checked="">
                                    <label for="colorCheckbox1">Primary</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="checkbox checkbox-secondary">
                                    <input type="checkbox" id="colorCheckbox2" checked="">
                                    <label for="colorCheckbox2">Secondary</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" id="colorCheckbox3" checked="">
                                    <label for="colorCheckbox3">Success</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="checkbox checkbox-danger">
                                    <input type="checkbox" id="colorCheckbox4" checked="">
                                    <label for="colorCheckbox4">Danger</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="colorCheckbox5" checked="">
                                    <label for="colorCheckbox5">Info</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mb-1">
                            <fieldset>
                                <div class="checkbox checkbox-warning">
                                    <input type="checkbox" id="colorCheckbox6" checked="">
                                    <label for="colorCheckbox6">Warning</label>
                                </div>
                            </fieldset>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 3 --}}

    {{-- example  4 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Checkboxes Shadow</h6>
                    <p>Use class <code>.checkbox-shadow</code> class with <code>.checkbox</code> for shadow effect to
                        Checkboxes.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="checkbox checkbox-shadow">
                                    <input type="checkbox" id="checkboxshadow1" checked="">
                                    <label for="checkboxshadow1">Primary</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="checkbox checkbox-shadow">
                                    <input type="checkbox" id="checkboxshadow2" disabled="" checked="">
                                    <label for="checkboxshadow2">Disabled</label>
                                </div>
                            </fieldset>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 4 --}}

    {{-- example 5 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Checkboxes Sizes</h6>
                    <p>To add a checkBox with different sizes, we have the <code>.checkbox-sm</code> class for small
                        Checkboxes. Add it
                        alongwith <code>.checkbox</code> class.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="checkbox checkbox-sm">
                                    <input type="checkbox" id="checkboxsmall" checked="">
                                    <label for="checkboxsmall">Small Checkbox</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mb-1">
                            <fieldset>
                                <div class="checkbox">
                                    <input type="checkbox" id="checkboxdefault" checked="">
                                    <label for="checkboxdefault">Default Checkbox</label>
                                </div>
                            </fieldset>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 5 --}}


</div>
@endsection