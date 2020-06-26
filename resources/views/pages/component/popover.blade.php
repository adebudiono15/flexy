@extends('layouts.master')

@section('title','Popovers')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        // Method
        $(".show-popover").click(function () {
            $("#myPopover").popover('show');
        });
        $(".hide-popover").focus(function () {
            $("#myPopover").popover('hide');
        });
        $(".toggle-popover").click(function () {
            $("#myPopover").popover('toggle');
        });
        $(".destroy-popover").click(function () {
            $("#myPopover").popover('dispose');
        });
        // event show
        $(".show-event").popover({
            placement: 'top'
        });
        $(".show-event").on('hidden.bs.popover', function () {
            alert("Popover has been completely closed. Click the button again to view the popover.");
        });
        // shown
        $(".shown-event").popover({
            placement: 'top'
        });
        $(".shown-event").on('hidden.bs.popover', function () {
            alert("Shown event fired.");
        });
        // event hide
        $(".hide-event").popover({
            placement: 'top'
        });
        $(".hide-event").on('hide.bs.popover', function () {
            alert("Popover has been completely closed.");
        });
        // hidden
        $(".hidden-event").popover({
            placement: 'top'
        });
        $(".hidden-event").on('hidden.bs.popover', function () {
            alert("Hidden event fired.");
        });

    }); </script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Popovers</div>
</div>

<div class="pd-20 pt-0">
    <!-- Align popovers -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Positions</h6>
            <div class="mt-4">
                <!-- Position -->
                <p>Four options are available: top, right, bottom, and left aligned.</p>
                <div class="row mt-4">
                    <!-- top -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Top</p>
                        <p>Add attribute <code>data-toggle="popover" & data-placement="top" </code>to element
                            for popover top position.
                        </p>
                        <button type="button" class="btn btn-outline-main" data-toggle="popover" data-placement="top"
                            data-content="I really like mountains, every Sunday I go to mountains.">
                            Popover on top
                        </button>
                    </div>
                    <!-- last top -->
                    <!-- left -->
                    <div class="col-md-3 ">
                        <p class="font-weight-bold">Left</p>
                        <p>Add attribute <code>data-toggle="popover" & data-placement="left" </code>to element
                            for popover left position.
                        </p>
                        <button type="button" class="btn btn-outline-main" data-toggle="popover" data-placement="left"
                            data-content="I really like mountains, every Sunday I go to mountains.">
                            Popover on left
                        </button>
                    </div>
                    <!-- last left -->
                    <!-- right -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Right</p>
                        <p>Add attribute <code>data-toggle="popover" & data-placement="right" </code>to element
                            for popover right position.
                        </p>
                        <button type="button" class="btn btn-outline-main" data-toggle="popover" data-placement="right"
                            data-content="I really like mountains, every Sunday I go to mountains. ">
                            Popover on right
                        </button>
                    </div>
                    <!-- last right -->
                    <!-- bottom -->
                    <div class="col-md-3">
                        <p class="font-weight-bold">Bottom</p>
                        <p>Add attribute <code>data-toggle="popover" & data-placement="bottom" </code>to element
                            for popover bottom position. </p>
                        <button type="button" class="btn btn-outline-main" data-toggle="popover" data-placement="bottom"
                            data-content="I really like mountains, every Sunday I go to mountains. ">
                            Popover on bottom
                        </button>
                    </div>
                    <!-- last bottom -->
                </div>
                <!-- last position -->
            </div>
        </div>
    </div>
    <!-- last align popovers-->

    <!-- triger -->
    <div class="card mt-4 ">
        <div class="card-body ">
            <h6 class="card-title mb-4 ">Triggers</h6>
            <div class="mt-4 ">
                <p>Popover is triggered using - click | hover | focus | manual options. You may pass multiple
                    triggers; separate them with a space. "manual " cannot be combined with any other trigger.
                </p>
                <div class="mt-3 ">
                    <div class="row mt-4 ">
                        <!-- triger -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Hover</p>
                            <p>Add attribute <code>data-trigger="hover"</code> for hover trigger.
                            </p>
                            <button type="button" class="btn btn-primary" data-trigger="hover" data-toggle="popover"
                                data-placement="top"
                                data-content="I really like mountains, every Sunday I go to mountains. ">
                                Hover
                            </button>
                        </div>
                        <!-- last hover -->
                        <!-- click -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Click</p>
                            <p>Add attribute <code>data-trigger="click"</code> for click trigger. This is a
                                default
                                trigger.
                            </p>
                            <button type="button" class="btn btn-primary" data-trigger="click" data-toggle="popover"
                                data-placement="top"
                                data-content="I really like mountains, every Sunday I go to mountains. ">
                                Click
                            </button>
                        </div>
                        <!-- last click -->
                        <!-- focus -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Focus</p>
                            <p>Add attribute <code>data-trigger="focus"</code> for focus trigger.
                            </p>
                            <button type="button" class="btn btn-primary " data-trigger="focus" data-toggle="popover"
                                data-placement="top"
                                data-content="I really like mountains, every Sunday I go to mountains. ">
                                Focus
                            </button>
                        </div>
                        <!-- last focus -->
                        <!-- manual -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Manual</p>
                            <p>Add attribute <code>data-trigger="manual"</code> for manual trigger. You can do
                                show/hide
                                using js.
                            </p>
                            <button type="button" class="btn btn-primary" data-trigger="manual" data-toggle="popover"
                                data-placement="top"
                                data-content="I really like mountains, every Sunday I go to mountains.">
                                Manual
                            </button>
                        </div>
                        <!-- last manual -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last triger -->
    <!-- option -->
    <div class="card mt-4 ">
        <div class="card-body ">
            <h6 class="card-title mb-4 ">Options</h6>
            <div class="mt-4 ">
                <p>Options can be passed via data attributes or JavaScript.
                </p>
                <div class="mt-3 ">
                    <div class="row mt-4 ">
                        <!-- with title -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Popover with title</p>
                            <p>Add attribute <code>data-original-title="title"</code> attribute to add a title.
                            </p>
                            <button type="button" class="btn btn-primary" data-trigger="click" data-toggle="popover"
                                data-placement="top" data-original-title="Title"
                                data-content="I really like mountains, every Sunday I go to mountains. ">
                                Title
                            </button>
                        </div>
                        <!-- last with title -->

                        <!-- with no animation -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Disable Animation</p>
                            <p>Add attribute <code>data-animation="false"</code> to remove fade animation.
                                Default is
                                true.
                            </p>
                            <button type="button" class="btn btn-primary" data-trigger="click" data-toggle="popover"
                                data-placement="top" data-animation="false"
                                data-content="I really like mountains, every Sunday I go to mountains. ">
                                No Animation
                            </button>
                        </div>
                        <!-- last noanimation -->

                        <!-- with delay -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Delay</p>
                            <p>Delay showing and hiding the popover (<code>ms</code>) - does not apply to manual
                                trigger type.
                            </p>
                            <button type="button" class="btn btn-primary" data-trigger="click" data-delay="500"
                                data-toggle="popover" data-placement="top"
                                data-content="I really like mountains, every Sunday I go to mountains. ">
                                Delay Popover
                            </button>
                        </div>
                        <!-- last delay -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last option -->

    <!-- method -->
    <div class="card mt-4 ">
        <div class="card-body ">
            <h6 class="card-title mb-4 ">Methods</h6>
            <div class="mt-4 ">
                <p>This is considered a “manual” triggering of the popover.Popovers whose both title and content
                    are zero-length are never displayed.
                </p>
                <div class="mt-3 ">
                    <div class="row mt-4 ">
                        <!-- with show -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Show</p>
                            <p>Reveals an element’s popover. Returns to the caller before the popover has
                                actually been shown.(i.e. before the <code>shown.bs.popover</code> event occurs)
                            </p>
                            <button id="myPopover" type="button" class="btn btn-primary show-popover"
                                data-placement="top" data-toggle="popover" data-original-title="Title"
                                data-content="I really like mountains, every Sunday I go to mountains.">
                                Show
                            </button>
                        </div>
                        <!-- last show -->
                        <!-- hide -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Hide</p>
                            <p>Hides an element’s popover. Returns to the caller before the popover has actually
                                been hidden (i.e. before the <code>hidden.bs.popover</code> event occurs).
                            </p>
                            <button id="myPopover" type="button" class="btn btn-primary hide-popover"
                                data-placement="top" data-trigger="click" data-toggle="popover">
                                Hide
                            </button>
                        </div>
                        <!-- last hide -->
                        <!-- toogle -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Toggle</p>
                            <p>Toggles an element’s popover. Returns to the caller before the popover has
                                actually been shown or hidden (i.e. before the
                                <code>shown.bs.popover or hidden.bs.popover</code> event occurs).
                            </p>
                            <button id="myPopover" type="button" class="btn btn-primary toogle-popover"
                                data-placement="top" data-trigger="click" data-toggle="popover"
                                data-original-title="Title"
                                data-content="I really like mountains, every Sunday I go to mountains.">
                                Toogle
                            </button>
                        </div>
                        <!-- last toogle -->
                        <!-- destroy -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Dispose</p>
                            <p>Toggles an element’s popover. Returns to the caller before the popover has
                                actually been shown or hidden (i.e. before the
                                <code>shown.bs.popover or hidden.bs.popover</code> event occurs).
                            </p>
                            <button id="myPopover" type="button" class="btn btn-primary destroy-popover"
                                data-placement="top" data-trigger="click" data-toggle="popover">
                                Dispose
                            </button>
                        </div>
                        <!-- last destroy -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last methode -->
    <div class="card mt-4 ">
        <div class="card-body ">
            <h6 class="card-title mb-4 ">Events</h6>
            <div class="mt-4 ">
                <p>Popover class includes few events for hooking into popover functionality.
                </p>
                <div class="mt-3 ">
                    <div class="row mt-4 ">
                        <!-- event show -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Show Event</p>
                            <p>This event fires immediately when the <code>show</code> instance method is
                                called.
                            </p>
                            <button type="button" class="btn btn-primary show-event" data-placement="top"
                                data-toggle="manual" data-original-title="Title" data-trigger="focus"
                                data-content="I really like mountains, every Sunday I go to mountains.">
                                Show Event
                            </button>
                        </div>
                        <!-- last event show -->
                        <!-- shown -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Shown Event</p>
                            <p>This event is fired when the popover has been made visible to the user. It will
                                wait until the CSS transition process has been fully completed before getting
                                fired.
                            </p>
                            <button type="button" class="btn btn-primary shown-event" data-placement="top"
                                data-original-title="Title" data-trigger="focus"
                                data-content="I really like mountains, every Sunday I go to mountains.">
                                Shown Event
                            </button>
                        </div>
                        <!-- last shown -->
                        <!-- hide -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Hidden Event</p>
                            <p>This event is fired immediately when the <code>hide</code> instance method has
                                been called.
                            </p>
                            <button type="button" class="btn btn-primary hide-event" data-placement="top"
                                data-toggle="manual" data-original-title="Title" data-trigger="focus"
                                data-content="I really like mountains, every Sunday I go to mountains.">
                                Hide Event
                            </button>
                        </div>
                        <!-- hide event -->
                        <!-- hidden 2 -->
                        <div class="col-md-3 ">
                            <p class="font-weight-bold">Hide Event</p>
                            <p>This event is fired when the popover has finished being hidden from the user
                                (will wait for CSS transitions to complete).
                            </p>
                            <button type="button" class="btn btn-primary hidden-event" data-placement="top"
                                data-toggle="manual" data-original-title="Title" data-trigger="focus"
                                data-content="I really like mountains, every Sunday I go to mountains.">
                                Hidden Event
                            </button>
                        </div>
                        <!-- last hidden 2 -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection