@extends('layouts.master')

@section('title','Navs')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script type="text/javascript">
    $(document).ready(function () {
                $('a[id="event"]').on('shown.bs.tab', function (e) {
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
    <div>Navs</div>
</div>

<div class="pd-20 pt-0">
    <!--  example 1 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Alignment of Nav Item</h6>
            <p>By default, navs are left-aligned, but you can easily align them to center or right using flexbox
                utilities.
                The following example uses the class <code>.justify-content-center</code> to align nav items to
                center.</p>
            <div class="mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-8" style="border: 1px solid #eee">
                        <nav class="nav justify-content-center">
                            <a href="#" class="nav-item nav-link active">Home</a>
                            <a href="#" class="nav-item nav-link">Profile</a>
                            <a href="#" class="nav-item nav-link">Messages</a>
                            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 1 -->

    <!-- example 2 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Pills with dropdown</h6>
            <p>Require <code>role="tablist", role="tab", role="tabpanel"</code>, and additional
                <code>aria-</code> attributes in order to convey
                their structure, functionality and current state to users of assistive technologies (such as
                screen readers).</p>
            <div class="mt-4">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">Home</div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">Profile</div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">Messages</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">Settings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 2 -->

    <!-- example 3 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Basic Tab</h6>
            <p>Simply, add the class <code>.nav-tabs</code> to the basic nav to generate a tabbed navigation.
                You can also add icons to your tab items to make it more attractive, as shown here:</p>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md">
                        <div class="card-body">
                            <nav class="nav nav-tabs">
                                <a href="#" class="nav-item nav-link active"> Home</a>
                                <a href="#" class="nav-item nav-link">Profile</a>
                                <a href="#" class="nav-item nav-link">Messages</a>
                                <a href="#" class="nav-item nav-link">Reports</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 3 -->

    <!-- example 4 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Tab with Dropdown</h6>
            <p>The following example will show you how to add simple dropdown menus to a tab.</p>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md">
                        <div class="card-body">
                            <nav class="nav nav-tabs">
                                <a href="#" class="nav-item nav-link active">Home</a>
                                <a href="#" class="nav-item nav-link">Profile</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Inbox</a>
                                        <a href="#" class="dropdown-item">Sent</a>
                                        <a href="#" class="dropdown-item">Drafts</a>
                                    </div>
                                </div>
                                <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 4 -->

    <!-- example 5 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Event</h6>
            <p>These are the standard Bootstrap events to enhance the tab functionality.</p>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md">
                        <div class="card-body">
                            <ul id="myTab" class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#home2" id="event" class="nav-link active" data-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile2" id="event" class="nav-link" data-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#messages2" id="event" class="nav-link" data-toggle="tab">Messages</a>
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
    <!-- last example 5 -->

    <!-- example 6 -->
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="card-title mb-4">Variations</h6>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md">
                        <div class="card-body">
                            <ul id="myTab2" role="tablist"
                                class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
                                <li class="nav-item flex-sm-fill">
                                    <a id="homevariations2-tab" data-toggle="tab" href="#homevariations2" role="tab"
                                        aria-controls="homevariations2" aria-selected="true"
                                        class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Home</a>
                                </li>
                                <li class="nav-item flex-sm-fill">
                                    <a id="profilevariations2-tab" data-toggle="tab" href="#profilevariations2"
                                        role="tab" aria-controls="profilevariations2" aria-selected="false"
                                        class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0">Profile</a>
                                </li>
                                <li class="nav-item flex-sm-fill">
                                    <a id="contactvariations2-tab" data-toggle="tab" href="#contactvariations2"
                                        role="tab" aria-controls="contactvariations2" aria-selected="false"
                                        class="nav-link text-uppercase font-weight-bold rounded-0">Contact</a>
                                </li>
                            </ul>
                            <div id="myTab2Content" class="tab-content">
                                <div id="homevariations2" role="tabpanel" aria-labelledby="home-tab"
                                    class="tab-pane fade px-4 py-5 show active">
                                    <p class="leade font-italic">Raw denim you probably haven't heard of them
                                        jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                        cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                        Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater
                                        eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia
                                        cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                        voluptate nisi qui.</p>
                                </div>
                                <div id="profilevariations2" role="tabpanel" aria-labelledby="profile-tab"
                                    class="tab-pane fade px-4 py-5">
                                    <p class="leade font-italic">Food truck fixie locavore, accusamus
                                        mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1
                                        labore velit, blog sartorial PBR leggings next level wes anderson
                                        artisan four loko farm-to-table craft beer twee. Qui photo booth
                                        letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco
                                        ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic
                                        magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit
                                        sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson
                                        8-bit, sustainable jean shorts beard ut DIY ethical culpa terry
                                        richardson biodiesel. Art party scenester stumptown, tumblr butcher vero
                                        sint qui sapiente accusamus tattooed echo park.</p>
                                </div>
                                <div id="contactvariations2" role="tabpanel" aria-labelledby="contact-tab"
                                    class="tab-pane fade px-4 py-5">
                                    <p class="leade font-italic">Etsy mixtape wayfarers, ethical wes anderson
                                        tofu before they sold out mcsweeney's organic lomo retro fanny pack
                                        lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed
                                        craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie
                                        helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit
                                        cred pitchfork. Williamsburg banh mi whatever gluten-free, carles
                                        pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred
                                        you probably haven't heard of them, vinyl craft beer blog stumptown.
                                        Pitchfork sustainable tofu synth chambray yr.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- last example 6 -->


    </div>
    @endsection