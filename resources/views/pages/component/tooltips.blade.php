@extends('layouts.master')

@section('title','Tooltips')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script>
    $(document).ready(function() {
        $(".show-tooltip").click(function() {
            $("#myTooltip").tooltip('show');
        });
        $(".hide-tooltip").click(function() {
            $("#myTooltip").tooltip('hide');
        });
        $(".toggle-tooltip").click(function() {
            $("#myTooltip").tooltip('toggle');
        });
        $(".enable-tooltip").click(function() {
            $("#myTooltip").tooltip('enable');
        });
        $(".disable-tooltip").click(function() {
            $("#myTooltip").tooltip('disable');
        });
        $(".toggle-enabled-tooltip").click(function() {
            $("#myTooltip").tooltip('toggleEnabled');
        });
        $(".toggle-update").click(function() {
            $("#myTooltip").tooltip('update');
        });
        $(".destroy-tooltip").click(function() {
            $("#myTooltip").tooltip('dispose');
        });
        // event
        // show
        $(".show-tooltips").tooltip({
            placement: 'top'
        });
        $(".show-tooltips").on('hidden.bs.tooltip', function() {
            alert("Tooltip has been completely closed. Place your mouse pointer over the link again to view the tooltip.");
        });
        // shown
        $(".shown-tooltips").tooltip({
            placement: 'top'
        });
        $(".shown-tooltips").on('shown.bs.tooltip', function() {
            alert("Shown event fired.");
        });
        // hidden
        $(".hidden-tooltips").tooltip({
            placement: 'top'
        });
        $(".hidden-tooltips").on('hidden.bs.tooltip', function() {
            alert("Tooltip Hidden Event.");
        });
        // hide
        $(".hide-tooltips").tooltip({
            placement: 'top'
        });
        $(".hide-tooltips").on('hide.bs.tooltip', function() {
            alert("Hide event fired.");
        });
    });
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Tooltips</div>
</div>

<div class="pd-20 pt-0">
    <!--  Position -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Position</h6>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-3">
                        <p class="font-weight-bold">Basic Top Tooltips</p>
                        <p>Add attribute <code>data-placement="top"</code> to add top tooltips.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-toggle="tooltip"
                            data-placement="top" title="Hello world !">
                            Top
                        </button>
                    </div>
                    <div class="col-md-3">
                        <p class="font-weight-bold">Basic Right Tooltips</p>
                        <p>Add attribute <code>data-placement="right"</code> to add right tooltips.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-toggle="tooltip"
                            data-placement="right" title="Hello world !">
                            Right
                        </button>
                    </div>

                    <div class="col-md-3">
                        <p class="font-weight-bold">Basic Left Tooltips</p>
                        <p class="mt-3">Add attribute <code>data-placement="left"</code> to add left tooltips.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-toggle="tooltip"
                            data-placement="left" title="Hello world !">
                            Left
                        </button>
                    </div>

                    <div class="col-md-3">
                        <p class="font-weight-bold">Basic Bottom Tooltips></p>
                        <p class="mt-3">Add attribute <code>data-placement="bottom"</code>to add bottom
                            tooltips.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-toggle="tooltip"
                            data-placement="bottom" title="Hello world !">
                            Bottom
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last Position -->

    <!-- triger -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Trigger</h6>
            <p>Tooltip is triggered using - click | hover | focus | manual options. You may pass multiple
                triggers; separate them with a space. "manual" cannot be combined with any other trigger.</p>
            <div class="mt-4">
                <div class="row">
                    <!-- click -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Click</p>
                        <p>Add attribute <code>data-trigger="click"</code> for click trigger.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-trigger="click"
                            data-toggle="tooltip" data-placement="top" data-original-title="Click Triggered">
                            Click
                        </button>
                    </div>
                    <!-- focus -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Focus</p>
                        <p>Add attribute <code>data-trigger="focus"</code> for focus trigger.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-trigger="focus"
                            data-toggle="tooltip" data-placement="top" data-original-title="Focus Triggered">
                            Focus
                        </button>
                    </div>
                    <!-- hover -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Hover</p>
                        <p>Add attribute <code>data-trigger="hover"</code> for hover trigger.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-trigger="hover"
                            data-toggle="tooltip" data-placement="top" data-original-title="Hover Triggered">
                            Hover
                        </button>
                    </div>
                    <!-- manual -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Manual</p>
                        <p>Add attribute <code>data-trigger="manual"</code> for manual trigger.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-trigger="manual"
                            data-toggle="tooltip" data-placement="top" data-original-title="Manual Triggered">
                            manual
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last triger -->

    <!-- option -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Options</h6>
            <div class="mt-4">
                <div class="row">
                    <!-- click -->
                    <div class="col-md-6">
                        <p class="font-weight-bold">Click</p>
                        <p>Add attribute <code>data-animation="false"</code> for click trigger.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-trigger="click"
                            data-toggle="tooltip" data-animation="false" data-placement="top"
                            data-original-title="No Animation">
                            No Animation
                        </button>
                    </div>
                    <!-- focus -->
                    <div class="col-md-6">
                        <p class="font-weight-bold">Delay Show/Hide</p>
                        <p>Delay showing and hiding the tooltip (<code>ms</code>) does not apply to manual
                            trigger type.
                        </p>
                        <button type="button" class="btn btn-outline-primary mr-4" data-trigger="click" data-delay="200"
                            data-toggle="tooltip" data-placement="top" data-original-title="Delay">
                            Delay Show/Hide
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- last option -->

    <!-- event -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Event</h6>
            <div class="mt-4">
                <div class="row">
                    <!-- show -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Show Event</p>
                        <p>This event fires immediately when the <code>show</code> instance method is called.
                        </p>
                        <button id="show-tooltips" type="button" class="btn btn-outline-primary show-tooltips mr-4"
                            data-trigger="fokus" data-toggle="tooltip" data-animation="false" data-placement="top"
                            data-original-title="Hello world !">
                            Show Event
                        </button>
                    </div>
                    <!-- shown -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Shown Event</p>
                        <p>This event is fired when the tooltip has been made visible to the user (will wait for
                            CSS transitions to complete).
                        </p>
                        <button id="shown-tooltips" type="button" class="btn btn-outline-primary shown-tooltips mr-4"
                            data-trigger="hover" data-toggle="tooltip" data-animation="false" data-placement="top"
                            data-original-title="Hello world !">
                            Shown Event
                        </button>
                    </div>
                    <!-- hidden -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Hidden Event</p>
                        <p>This event is fired when the tooltip has finished being hidden from the user (will
                            wait for CSS transitions to complete).
                        </p>
                        <button id="hidden-tooltips" type="button" class="btn btn-outline-primary hidden-tooltips mr-4"
                            data-trigger="fokus" data-toggle="tooltip" data-animation="false" data-placement="top"
                            data-original-title="Hello world !">
                            Hidden Event
                        </button>
                    </div>
                    <!-- hide -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Hide Event</p>
                        <p>This event is fired when the tooltip has finished being hidden from the user (will
                            wait for CSS transitions to complete).
                        </p>
                        <button id="hide-tooltips" type="button" class="btn btn-outline-primary hide-tooltips mr-4"
                            data-trigger="fokus" data-toggle="tooltip" data-animation="false" data-placement="top"
                            data-original-title="Hello world !">
                            Hide Event
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- last event -->



    <!--  Method -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title">Methods</h6>
            <div class="mt-3">
                <div class="row pd-20 ">
                    <button class="btn btn-outline-primary" data-toggle="tooltip" id="myTooltip"
                        title="This is default title">Controlled</button>
                </div>
                <div class="row pd-20">
                    <button type="button" class="btn btn-primary show-tooltip mr-2">Show</button>
                    <button type="button" class="btn btn-primary hide-tooltip mr-2">Hide</button>
                    <button type="button" class="btn btn-primary toggle-tooltip mr-2">Toogle</button>
                    <button type="button" class="btn btn-primary enable-tooltip mr-2">Enable</button>
                    <button type="button" class="btn btn-primary disable-tooltip mr-2">Disable</button>
                    <button type="button" class="btn btn-primary mr-2">Toogle
                        Enabled</button>
                    <button type="button" class="btn btn-primary update-tooltip mr-2">Update</button>
                    <button type="button" class="btn btn-primary destroy-tooltip">Destroy</button>
                </div>

            </div>
        </div>
    </div>
    <!-- last Methods -->

</div>
@endsection