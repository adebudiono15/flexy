@extends('layouts.master')

@section('title','Input')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script>
    ! function(t, e, n) {
            "use strict";
            n("button").click(function() {
                var t = n(".needs-validation");
                !1 === t[0].checkValidity() && (event.preventDefault(), event.stopPropagation()), t.addClass("was-validated")
            })
        }(window, document, jQuery);
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>

    <div><a href="#">Form Elements</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Input</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Basic Input</h6>
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="basicInput">Basic Input</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                                </fieldset>

                                <fieldset class="form-group">
                                    <label for="helpInputTop">Input text with help</label>
                                    <small class="text-muted">eg.<i>someone@example.com</i></small>
                                    <input type="text" class="form-control" id="helpInputTop">
                                </fieldset>

                                <fieldset class="form-group">
                                    <label for="helperText">With Helper Text</label>
                                    <input type="text" id="helperText" class="form-control" placeholder="Name">
                                    <p><small class="text-muted">Find helper text here for given
                                            textbox.</small></p>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="disabledInput">Disabled Input</label>
                                    <input type="text" class="form-control" id="disabledInput"
                                        placeholder="Disabled Text" disabled="">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="disabledInput">Readonly Input</label>
                                    <input type="text" class="form-control" id="readonlyInput" readonly="readonly"
                                        value="You can't update me :P">
                                </fieldset>

                                <fieldset class="form-group">
                                    <label for="disabledInput">Static Text</label>
                                    <p class="form-control-static" id="staticInput">email@flexy.com</p>
                                </fieldset>
                            </div>
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
                    <h6 class="card-title mb-4">Input Style</h6>
                    <p>To set rounded border to input box, use <code>.round</code> class and to set square border to
                        input box, use <code>.sqaure</code> class alongwith
                        <code>.form-control</code> class.</p>
                    <div class="row">

                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label for="roundText">Rounded Input</label>
                                <input type="text" id="roundText" class="form-control round"
                                    placeholder="Rounded Input">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label for="squareText">Square Input</label>
                                <input type="text" id="squareText" class="form-control square"
                                    placeholder="Square Input">
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
                    <h6 class="card-title mb-4">Horizontal Input</h6>
                    <p>To make label in center of form-control, use <code>.col-form-label</code> class with
                        <code>&lt;label&gt;</code> element. This is default bootstrap class.</p>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">First Name</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="first-name" class="form-control" name="fname"
                                        placeholder="First Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Last Name</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="last-name" class="form-control" name="fname"
                                        placeholder="Last Name">
                                </div>
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
                    <h6 class="card-title mb-4">File Input</h6>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <fieldset class="form-group">
                                <label for="basicInputFile">Simple File Input</label>
                                <input type="file" class="form-control-file" id="basicInputFile">
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <fieldset class="form-group">
                                <label for="basicInputFile">With Browse button</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                        file</label>
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
                    <h6 class="card-title mb-4">Input With Icon</h6>
                    <p>For Input Box with icon use <code>.position-relative</code> class with
                        <code>.form-group</code> and use class
                        <code>.has-icon-left</code> class for icon on left side.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <h6>Left Icon</h6>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control" id="iconLeft1"
                                    placeholder="Icon Left, Default Input">
                                <div class="form-control-position">
                                    <i class="bx bx-user bx-sm"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-6">
                            <h6>Right Icon</h6>
                            <fieldset class="form-group position-relative">
                                <input type="text" class="form-control" id="iconLeft2"
                                    placeholder="Icon Right, Default Input">
                                <div class="form-control-position">
                                    <i class="bx bx-file-blank bx-sm"></i>
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
                    <div class="row">
                        <div class="col-12">
                            <h6 class="card-title mb-4">Control Sizing Option</h6>
                            <p>For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp;
                                <code>.form-control-sm</code> for Large, Small input box.</p>
                        </div>
                        <div class="col-sm-4">
                            <h6>Large</h6>
                            <input class="form-control form-control-lg" type="text" placeholder="Large Input">
                        </div>
                        <div class="col-sm-4">
                            <h6>Default</h6>
                            <input class="form-control" type="text" placeholder="Default Input">
                        </div>
                        <div class="col-sm-4">
                            <h6>Small</h6>
                            <input class="form-control form-control-sm" type="text" placeholder="Small Input">
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
                    <h6 class="card-title mb-4">Input Validation States</h6>
                    <div class="row">
                        <div class="col-12">
                            <p>You can indicate invalid and valid form fields with <code>.is-invalid</code> and
                                <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with
                                these classes.</p>
                        </div>
                        <div class="col-sm-6">
                            <label for="valid-state">Valid State</label>
                            <input type="text" class="form-control is-valid" id="valid-state" placeholder="Valid"
                                value="Valid" required="">
                            <div class="valid-feedback">
                                This is valid state.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="invalid-state">Invalid State</label>
                            <input type="text" class="form-control is-invalid" id="invalid-state" placeholder="Invalid"
                                value="Invalid" required="">
                            <div class="invalid-feedback">
                                This is invalid state.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--last  example 7 -->

    <!-- example 8 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Input Validation States With Tooltip</h6>
                    <p>Add atributte <code>.needs-validation</code> with <code>&lt;form&gt;</code> for Input Validation
                        states with tooltip,
                        <code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes
                        to display validation feedback in a styled tooltip.</p>
                    <form class="needs-validation" novalidate="">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">First name</label>
                                <input type="text" class="form-control" id="validationTooltip01"
                                    placeholder="First name" value="Mark" required="">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Last name</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name"
                                    value="Otto" required="">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>


                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip03">City</label>
                                <input type="text" class="form-control" id="validationTooltip03" placeholder="City"
                                    required="">
                                <div class="invalid-tooltip">
                                    Please provide a valid city.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-5" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 8 -->

</div>
@endsection