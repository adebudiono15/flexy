@extends('layouts.master')

@section('title','Toast')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script>
    $(document).ready(function () {
            $(".show-toast").click(function () {
                $("#myToast ").toast('show');
            });

            $(".placement-toast").click(function () {
                $("#placement ").toast('show');
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
    <div>Toasts</div>
</div>

<div class="pd-20 pt-0">
    <!--  example 1 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Basic Toast</h6>
            <p>By default toasts will automatically hide if you do not set autohide to false.</p>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md basic-toast">
                        <button type="button" class="btn btn-outline-primary show-toast">Show Toast</button>
                        <div class="toast" aria-live="assertive" data-delay="500000" id="myToast"
                            style="position: fixed; top: 0; right: 0;">
                            <div class="toast-header bg-primary basic-toast">
                                <strong class="mr-auto"><i class="bx bx-bell bx-fw bx-sm"></i> Hello,
                                    world!</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="close" data-dismiss="toast">
                                    <i class="bx bx-x" style="margin-top: 1px;"></i>
                                </button>
                            </div>
                            <div class="toast-body">
                                <div>It's been a long time since you visited us. We've something special for
                                    you.
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                            <div class="bg-dark pd-20 pb-0">
                                <pre class="text-white">
&lt;div class=&quot;col-md basic-toast&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary show-toast&quot;&gt;Show Toast&lt;/button&gt;
        &lt;div class=&quot;toast&quot; aria-live=&quot;assertive&quot; data-delay=&quot;500000&quot; id=&quot;myToast&quot;
            style=&quot;position: fixed; top: 0; right: 0;&quot;&gt;
            &lt;div class=&quot;toast-header bg-primary basic-toast&quot;&gt;
                &lt;strong class=&quot;mr-auto&quot;&gt;&lt;i class=&quot;bx bx-bell bx-fw bx-sm&quot;&gt;&lt;/i&gt; Hello,
                    world!&lt;/strong&gt;
                &lt;small&gt;11 mins ago&lt;/small&gt;
                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;toast&quot;&gt;
                    &lt;i class=&quot;bx bx-x mt-1&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;toast-body&quot;&gt;
                &lt;div&gt;It's been a long time since you visited us. We've something special for
                    you.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
&lt;/div&gt;
    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 1 -->

    <!--  example 2 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Translucent</h6>
            <p>Toasts are slightly translucent, too, so they blend over whatever they might appear over. For
                browsers that support the backdrop-filter CSS property, we’ll also attempt to blur the elements
                under a toast.</p>
            <div class="mt-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="toast fade show" style=" margin-top: 10px;">
                            <div class="toast-header bg-primary">
                                <strong class="mr-auto"><i class="bx bx-bell bx-sm bx-fw"></i> Hello,
                                    world!</strong>
                                <small>Just now</small>
                                <button type="button" class="close" data-dismiss="toast"><i class="bx bx-x"
                                        style="margin-top: 1px;"></i></button>
                            </div>
                            <div class="toast-body">This is a basic toast message.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="toast fade show" style="margin-top: 10px;">
                            <div class="toast-header bg-grey">
                                <strong class="mr-auto"><i class="bx bx-sm bx-fw bx-bell"></i> Hello,
                                    world!</strong>
                                <small class="text-muted">5 minutes ago</small>
                                <button type="button" class="close" data-dismiss="toast"><i class="bx bx-x"
                                        style="margin-top: 1px;"></i></button>
                            </div>
                            <div class="toast-body">This is another toast message.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 2 -->

    <!--  example 3 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Placement</h6>
            <p>You can place toasts with custom CSS as you need them, put the positioning styles right on the
                .toast. or You can also get fancy with flexbox utilities to align toasts horizontally and/or
                vertically.
            </p>
            <div class="mt-2">
                <div class="row">
                    <div class="col-md placement-toast">
                        <button type="button" class="btn btn-primary placement-toast">Show
                            Toast</button>
                        <div class="toast" aria-live="assertive" data-delay="5000" id="placement"
                            style="position: fixed; top: 0; right: 0;">
                            <div class="toast-header bg-primary">
                                <strong class="mr-auto"><i class="bx bx-sm bx-fw bx-bell"></i>
                                    Hello...!</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="close" data-dismiss="toast">
                                    <span aria-hidden="true"><i class="bx bx-x" style="margin-top: 1px;"></i></span>
                                </button>
                            </div>
                            <div class="toast-body">
                                <div>It's been a long time since you visited us. We've something special for
                                    you.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 3 -->
</div>
@endsection