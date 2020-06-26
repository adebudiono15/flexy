@extends('layouts.master')

@section('title','Number Input')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script>
    $(document).on('click', '.number-spinner button', function() {
                var btn = $(this),
                    oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                    newVal = 0;
    
                if (btn.attr('data-dir') == 'up') {
                    newVal = parseInt(oldValue) + 1;
                } else {
                    if (oldValue > 1) {
                        newVal = parseInt(oldValue) - 1;
                    } else {
                        newVal = 1;
                    }
                }
                btn.closest('.number-spinner').find('input').val(newVal);
            });
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Form Elements</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Number Input</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Touchspin</h6>
                    <p>Add attribute <code>.number-spiner</code> class with input tag to add touchspin input group. Add
                        <code>.disabled-touchspin</code> class and add attribute <code>disabled</code> with
                        <code>input</code> tag to add disabled touchspin input group.</p>

                    <div class="d-inline-block mb-1">
                        <div class="input-group  number-spinner">
                            <span class="input-group-btn input-group-prepend">
                                <button class="btn btn-info" type="button" data-dir="dwn"><i
                                        class="bx bx-chevron-down"></i></button></span>
                            <input type="text" class="form-control text-center" value="1">
                            <span class="input-group-btn input-group-append">
                                <button class="btn btn-info" type="button" data-dir="up"><i
                                        class="bx bx-chevron-up"></i></button></span>
                        </div>
                    </div>

                    <div class="d-inline-block mb-1 mr-1">
                        <div class="input-group disabled-touchspin number-spinner">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected">
                                <button class="btn btn-info  disabled-touchspin" type="button">-</button></span>
                            <input type="number" class="touchspin form-control" value="50" disabled=""><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-info disabled-touchspin" type="button">+</button></span>
                        </div>
                    </div>

                    <div class="d-inline-block mb-1">
                        <div class="input-group number-spinner">
                            <span class="input-group-btn input-group-prepend">
                                <button class="btn btn-info bootstrap-touchspin-down" type="button"
                                    data-dir="dwn">-</button></span>
                            <input type="text" class="form-control text-center" value="1">
                            <span class="input-group-btn input-group-append">
                                <button class="btn btn-info bootstrap-touchspin-up" type="button"
                                    data-dir="up">+</button></span>
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
                    <h6 class="card-title mb-4">Size</h6>
                    <p>Add <code>.input-group-lg</code> and <code>.input-group-sm</code> class for touchspin large and
                        small respectively.
                    </p>
                    <div class="d-inline-flex align-items-center mb-1 mr-1">
                        <div class="input-group input-group-lg number-spinner">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-down" type="button">-</button></span><input
                                type="text" class="touchspin form-control" value="50"><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>


                    <div class="d-inline-flex align-items-center mb-1 mr-1">
                        <div class="input-group number-spinner">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-down" type="button">-</button></span><input
                                type="text" class="touchspin form-control" value="50"><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>

                    <div class="d-inline-flex align-items-center mb-1 mr-1">
                        <div class="input-group input-group-sm number-spinner">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-down" type="button">-</button></span><input
                                type="text" class="touchspin form-control" value="50"><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-up" type="button">+</button></span>
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
                    <h6 class="card-title mb-4">Colors Variation</h6>
                    <p>Add attribute <code>.btn-color name</code>for change colors spinner.
                    </p>

                    <div class="d-inline-flex align-items-center mb-3 mr-1">
                        <div class="input-group number-spinner">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-down" type="button">-</button></span><input
                                type="text" class="touchspin form-control" value="50"><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>

                    <div class="d-inline-flex align-items-center mb-1 mr-1">
                        <div class="input-group number-spinner">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                    class="btn btn-danger bootstrap-touchspin-down"
                                    type="button">-</button></span><input type="text" class="touchspin form-control"
                                value="50"><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-danger bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>

                    <div class="d-inline-flex align-items-center mb-1 mr-1">
                        <div class="input-group number-spinner">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                    class="btn btn-main bootstrap-touchspin-down" type="button">-</button></span><input
                                type="text" class="touchspin form-control" value="50"><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-main bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>

                    <div class="d-inline-flex align-items-center mb-1 mr-1">
                        <div class="input-group number-spinner">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                    class="btn btn-success bootstrap-touchspin-down"
                                    type="button">-</button></span><input type="text" class="touchspin form-control"
                                value="50"><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-success bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>

                    <div class="d-inline-flex align-items-center mb-1 mr-1">
                        <div class="input-group number-spinner">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                    class="btn btn-primary bootstrap-touchspin-down"
                                    type="button">-</button></span><input type="text" class="touchspin form-control"
                                value="50"><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span>
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
                    <h6 class="card-title mb-4">Touchspin Variation</h6>
                    <p>Add <code>data-bts-postfix="POSTFIX_VALUE"</code> attribute to input to add postfix to touchspin
                        input group and add <code>data-bts-prefix="PREFIX_VALUE"</code> attribute to input to add prefix
                        to
                        touchspin input group. Add
                        <code>.touchspin-vertical</code> class with <code>&lt;input&gt;</code> for Vertical Touchspin
                        Effect. Add
                        <code>.touchspin-glow</code> along with <code>.input-group</code> for adding glow effect to
                        touchspin.
                    </p>
                    <div class="d-inline-block mb-1 mr-3">
                        <div class="input-group number-spinner bootstrap-touchspin bootstrap-touchspin-injected">
                            <span class="input-group-btn input-group-prepend"><button
                                    class="btn btn-info bootstrap-touchspin-down" type="button">-</button></span><span
                                class="bootstrap-touchspin-prefix input-group-prepend"><span
                                    class="input-group-text">$</span></span><input type="text"
                                class="touchspin form-control" value="50" data-bts-prefix="$"><span
                                class="input-group-btn input-group-append"><button
                                    class="btn btn-info bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>

                    <div class="d-inline-block mb-3 mr-3">
                        <div class="input-group number-spinner bootstrap-touchspin bootstrap-touchspin-injected">
                            <span class="input-group-btn input-group-prepend"><button
                                    class="btn btn-info bootstrap-touchspin-down" type="button">-</button></span><input
                                type="text" class="touchspin form-control" value="20" data-bts-postfix="%"><span
                                class="bootstrap-touchspin-postfix input-group-append"><span
                                    class="input-group-text">%</span></span><span
                                class="input-group-btn input-group-append"><button
                                    class="btn btn-info bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>

                    <div class="d-inline-block mb-1 mr-3">
                        <div class="input-group number-spinner bootstrap-touchspin bootstrap-touchspin-injected">
                            <span class="input-group-btn input-group-prepend"><button
                                    class="btn btn-info bootstrap-touchspin-down" type="button">-</button></span><span
                                class="bootstrap-touchspin-prefix input-group-prepend"><span
                                    class="input-group-text">Pre</span></span><input type="text"
                                class="touchspin form-control" value="50" data-bts-postfix="Post"
                                data-bts-prefix="Pre"><span class="bootstrap-touchspin-postfix input-group-append"><span
                                    class="input-group-text">Post</span></span><span
                                class="input-group-btn input-group-append"><button
                                    class="btn btn-info bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>

                    <div class="d-inline-block mb-1">
                        <div class="input-group number-spinner bootstrap-touchspin bootstrap-touchspin-injected">
                            <span class="input-group-btn input-group-prepend bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-down" type="button">-</button></span><input
                                type="text" class="touchspin form-control" value="55"><span
                                class="input-group-btn input-group-append bootstrap-touchspin-injected"><button
                                    class="btn btn-info bootstrap-touchspin-up" type="button">+</button></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 4 -->

</div>
@endsection