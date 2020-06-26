@extends('layouts.master')

@section('title','Radio')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush


@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Form Elements</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Radio</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Custom Radio Button</h6>
                    <p>Add attribute <code>.custom-control.custom-radio</code> as a single wrapper &amp; add
                        <code>.custom-control-label</code>
                        for better output.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="customRadio"
                                        id="customRadio1" checked="">
                                    <label class="custom-control-label" for="customRadio1">Active</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="customRadio"
                                        id="customRadio2">
                                    <label class="custom-control-label" for="customRadio2">Inactive</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" checked="" id="customRadio3"
                                        disabled="">
                                    <label class="custom-control-label" for="customRadio3">Active - disabled</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customRadio4" disabled="">
                                    <label class="custom-control-label" for="customRadio4">Inactive - disabled</label>
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
                    <h6 class="card-title mb-4">Custom Colored Radio Button</h6>
                    <p>To change the color of the Custom Radios, use the <code>.bg-Color Name</code> with
                        <code>.custom-control-input</code> class.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input bg-primary"
                                        name="customRadioColored" id="customColorRadio1" checked="">
                                    <label class="custom-control-label" for="customColorRadio1">Primary</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input bg-secondary"
                                        name="customRadioColored" id="customColorRadio2">
                                    <label class="custom-control-label" for="customColorRadio2">Secondary</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input bg-success"
                                        name="customRadioColored" id="customColorRadio3">
                                    <label class="custom-control-label" for="customColorRadio3">Success</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input bg-danger" name="customRadioColored"
                                        id="customColorRadio4">
                                    <label class="custom-control-label" for="customColorRadio4">Danger</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input bg-info" name="customRadioColored"
                                        id="customColorRadio5">
                                    <label class="custom-control-label" for="customColorRadio5">Info</label>
                                </div>
                            </fieldset>
                        </li>
                        <li class="d-inline-block mb-1">
                            <fieldset>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input bg-warning"
                                        name="customRadioColored" id="customColorRadio6">
                                    <label class="custom-control-label" for="customColorRadio6">Warning</label>
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
                    <h6 class="card-title mb-4">Form Control File and Range</h6>
                    <p>Add attribute <code>.form-control-range</code> class to input type"range" or
                        <code>.form-control-file</code> to input type"file" to style a range
                        control.</p>
                    <div class="form-group">
                        <input type="range" class="form-control-range" name="range">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file border" name="file">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 3 --}}


</div>
@endsection