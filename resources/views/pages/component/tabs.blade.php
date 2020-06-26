@extends('layouts.master')

@section('title','Tabs')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush
@push('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var activeTab = $(e.target).text();
            var previousTab = $(e.relatedTarget).text();
            $(".active-tab span").html(activeTab);
            $(".previous-tab span").html(previousTab);
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
    <div>Tabs</div>
</div>

<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Creating Dynamic Tabs via Data Attributes</h6>
            <p>Simply specify the
                <code>data-toggle="tab"</code> on each tab, as well as create a <code>.tab-pane</code> with
                unique ID for every tab and
                wrap them in <code>.tab-content</code>.</p>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md">
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#home" class="nav-link active" data-toggle="tab"><i
                                            class="bx bx-home bx-fw"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile" class="nav-link" data-toggle="tab"><i
                                            class="bx bx-user bx-fw"></i>Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#messages" class="nav-link" data-toggle="tab"><i
                                            class="bx bx-message-square bx-fw"></i>Messages</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home">
                                    <h5 class="mt-3">Home tab content</h5>
                                    <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan
                                        american apparel, butcher voluptate nisi qui. Raw denim you probably
                                        haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                        aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                        carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                        dreamcatcher synth.</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h5 class="mt-3">Profile tab content</h5>
                                    <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh
                                        urna, ornare id gravida ut, mollis a magna. Aliquam porttitor
                                        condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum
                                        turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed
                                        consequat ante in rutrum convallis. Nunc facilisis leo at faucibus
                                        adipiscing.</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h5 class="mt-3">Messages tab content</h5>
                                    <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum
                                        sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec
                                        eleifend egestas. Donec eget mi consequat massa vestibulum laoreet.
                                        Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem.
                                        Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus
                                        et magnis.</p>
                                </div>
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
        <div class="card-body">
            <h6 class="card-title mb-4">Events</h6>
            <p>These are the standard Bootstrap events to enhance the tab functionality.</p>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md">
                        <div class="card-body">
                            <ul id="myTab" class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#home2" class="nav-link active" data-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile2" class="nav-link" data-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#messages2" class="nav-link" data-toggle="tab">Messages</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home2">
                                    <h4 class="mt-2">Home tab content</h4>
                                    <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan
                                        american apparel, butcher voluptate nisi qui. Raw denim you probably
                                        haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                        aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                        carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                        dreamcatcher synth.</p>
                                </div>
                                <div class="tab-pane fade" id="profile2">
                                    <h4 class="mt-2">Profile tab content</h4>
                                    <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh
                                        urna, ornare id gravida ut, mollis a magna. Aliquam porttitor
                                        condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum
                                        turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed
                                        consequat ante in rutrum convallis. Nunc facilisis leo at faucibus
                                        adipiscing.</p>
                                </div>
                                <div class="tab-pane fade" id="messages2">
                                    <h4 class="mt-2">Messages tab content</h4>
                                    <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum
                                        sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec
                                        eleifend egestas. Donec eget mi consequat massa vestibulum laoreet.
                                        Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem.
                                        Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus
                                        et magnis.</p>
                                </div>
                            </div>
                            <hr>
                            <p class="text-info"><em>Click on any other tab to see how it works.</em></p>
                            <p class="active-tab"><strong>Active Tab</strong>: <span></span></p>
                            <p class="previous-tab"><strong>Previous Tab</strong>: <span></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 2 -->



</div>
@endsection