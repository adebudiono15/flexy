@extends('layouts.master')

@section('title','Textarea')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script>
    var maxLength = 20;
            $('textarea').keyup(function() {
                var textlen = maxLength - $(this).val().length;
                $('#rchars').text(textlen);
            });
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Form Elements</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Textarea</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Default</h6>
                    <p>To add a Textarea we have the component <code>textarea</code>.</p>
                    <div class="row">
                        <div class="col-12">
                            <fieldset class="form-group">
                                <textarea class="form-control" id="basicTextarea" rows="3"
                                    placeholder="Textarea"></textarea>
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
                    <div class="row">
                        <div class="col-12">
                            <h6 class="card-title mb-4">Horizontal Input</h6>
                            <p>To make label in center of form-control, use <code>.col-form-label</code> class with
                                <code>&lt;label&gt;</code> element. This is default bootstrap class.</p>
                        </div>
                        <div class="col-12">
                            <div class="form-group row align-items-center">
                                <div class="col-sm-1 col-4">
                                    <label class="col-form-label">Description</label>
                                </div>
                                <div class="col-sm-11 col-8">
                                    <textarea class="form-control" id="horizontalTextarea" rows="3"
                                        placeholder="Textarea"></textarea>
                                </div>
                            </div>
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
                    <h6 class="card-title mb-4">Floating Label</h6>
                    <p class="mb-2">Use <code>.form-label-group</code> to add a Floating Label with Textarea.
                    </p>
                    <div class="row mt-3">
                        <div class="col-12">
                            <fieldset class="form-label-group">
                                <textarea class="form-control" id="label-textarea" rows="3"
                                    placeholder="Label in Textarea"></textarea>
                                <label for="label-textarea">Label in Textarea</label>
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
                    <h6 class="card-title mb-4">Counter</h6>
                    <p class="mb-2">There are times when we need the user to only enter a certain number of characters
                        for it, we have the property counter, the value is a number and determines the maximum. Use
                        <code>.char-textarea</code> with
                        <code>&lt;textarea&gt;</code>tag for counting text-length.</p>
                    <div class="row">
                        <div class="col-12">
                            <form>
                                <fieldset class="form-label-group mb-0">
                                    <textarea maxlength="20" class="form-control char-textarea" id="textarea" rows="3"
                                        placeholder="Counter"></textarea>
                                    <label for="textarea-counter"></label>
                                </fieldset>
                                <small class="counter-value float-right"><span id="rchars">20</span>
                                </small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 4 -->


</div>
@endsection