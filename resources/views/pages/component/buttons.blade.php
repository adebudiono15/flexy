@extends('layouts.master')

@section('title','Buttons')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Buttons</div>
</div>
<div class="pd-20 pt-0">

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Basic Buttons</h6>

            <div class="mt-3">
                <h6>Default</h6>
                <p>We have a series of Buttons component with default style.</p>
                <p>Just add to attribute <code>class="btn btn-[color_name]"</code>.</p>

                <div class="mt-3">
                    <a href="#" class="btn btn-main mr-2 mb-3">Main</a>
                    <a href="#" class="btn btn-primary mr-2 mb-3">Primary</a>
                    <a href="#" class="btn btn-secondary mr-2 mb-3">Secondary</a>
                    <a href="#" class="btn btn-success mr-2 mb-3">Success</a>
                    <a href="#" class="btn btn-warning mr-2 mb-3">Warning</a>
                    <a href="#" class="btn btn-danger mr-2 mb-3">Danger</a>
                    <a href="#" class="btn btn-info mr-2 mb-3">Info</a>
                    <a href="#" class="btn btn-light mr-2 mb-3">Light</a>
                    <a href="#" class="btn btn-dark mr-2 mb-3">Dark</a>
                </div>
            </div>

            <hr />

            <div class="mt-3">
                <h6>Rounded</h6>
                <p>We have a series of Buttons component with rounded style.</p>
                <p>Just add to attribute <code>class="btn btn-[color_name] btn-round"</code>.</p>

                <div class="mt-3">
                    <a href="#" class="btn btn-main btn-round mr-2 mb-3">Main</a>
                    <a href="#" class="btn btn-primary btn-round mr-2 mb-3">Primary</a>
                    <a href="#" class="btn btn-secondary btn-round mr-2 mb-3">Secondary</a>
                    <a href="#" class="btn btn-success btn-round mr-2 mb-3">Success</a>
                    <a href="#" class="btn btn-warning btn-round mr-2 mb-3">Warning</a>
                    <a href="#" class="btn btn-danger btn-round mr-2 mb-3">Danger</a>
                    <a href="#" class="btn btn-info btn-round mr-2 mb-3">Info</a>
                    <a href="#" class="btn btn-light btn-round mr-2 mb-3">Light</a>
                    <a href="#" class="btn btn-dark btn-round mr-2 mb-3">Dark</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Outline Buttons</h6>

            <div class="mt-3">
                <h6>Default</h6>
                <p>We have a series of Buttons component with outline style.</p>
                <p>Just add to attribute <code>class="btn btn-outline-[color_name]"</code>.</p>

                <div class="mt-3">
                    <a href="#" class="btn btn-outline-main mr-2 mb-3">Main</a>
                    <a href="#" class="btn btn-outline-primary mr-2 mb-3">Primary</a>
                    <a href="#" class="btn btn-outline-secondary mr-2 mb-3">Secondary</a>
                    <a href="#" class="btn btn-outline-success mr-2 mb-3">Success</a>
                    <a href="#" class="btn btn-outline-warning mr-2 mb-3">Warning</a>
                    <a href="#" class="btn btn-outline-danger mr-2 mb-3">Danger</a>
                    <a href="#" class="btn btn-outline-info mr-2 mb-3">Info</a>
                    <a href="#" class="btn btn-outline-light mr-2 mb-3">Light</a>
                    <a href="#" class="btn btn-outline-dark mr-2 mb-3">Dark</a>
                </div>
            </div>

            <hr />

            <div class="mt-3">
                <h6>Rounded</h6>
                <p>We have a series of Buttons component with rounded style.</p>
                <p>Just add to attribute <code>class="btn btn-outline-[color_name] btn-round"</code>.</p>

                <div class="mt-3">
                    <a href="#" class="btn btn-outline-main btn-round mr-2 mb-3">Main</a>
                    <a href="#" class="btn btn-outline-primary btn-round mr-2 mb-3">Primary</a>
                    <a href="#" class="btn btn-outline-secondary btn-round mr-2 mb-3">Secondary</a>
                    <a href="#" class="btn btn-outline-success btn-round mr-2 mb-3">Success</a>
                    <a href="#" class="btn btn-outline-warning btn-round mr-2 mb-3">Warning</a>
                    <a href="#" class="btn btn-outline-danger btn-round mr-2 mb-3">Danger</a>
                    <a href="#" class="btn btn-outline-info btn-round mr-2 mb-3">Info</a>
                    <a href="#" class="btn btn-outline-light btn-round mr-2 mb-3">Light</a>
                    <a href="#" class="btn btn-outline-dark btn-round mr-2 mb-3">Dark</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Shadow Buttons</h6>

            <div class="mt-3">
                <h6>Default</h6>
                <p>We have a series of Buttons component with shadow style.</p>
                <p>Just add to attribute <code>class="btn btn-[color_name] btn-shadow"</code>.</p>

                <div class="mt-3">
                    <a href="#" class="btn btn-main btn-shadow mr-2 mb-3">Main</a>
                    <a href="#" class="btn btn-primary btn-shadow mr-2 mb-3">Primary</a>
                    <a href="#" class="btn btn-secondary btn-shadow mr-2 mb-3">Secondary</a>
                    <a href="#" class="btn btn-success btn-shadow mr-2 mb-3">Success</a>
                    <a href="#" class="btn btn-warning btn-shadow mr-2 mb-3">Warning</a>
                    <a href="#" class="btn btn-danger btn-shadow mr-2 mb-3">Danger</a>
                    <a href="#" class="btn btn-info btn-shadow mr-2 mb-3">Info</a>
                    <a href="#" class="btn btn-light btn-shadow mr-2 mb-3">Light</a>
                    <a href="#" class="btn btn-dark btn-shadow mr-2 mb-3">Dark</a>
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Button Clean</h6>

            <div class="mt-3">
                <h6>Default</h6>
                <p>We have a series of Buttons component with clean color style.</p>
                <p>Just add to attribute <code>class="btn btn-clean-[color_name]"</code>.</p>

                <div class="mt-3">
                    <a href="#" class="btn btn-clean-main mr-2 mb-3">Main</a>
                    <a href="#" class="btn btn-clean-primary mr-2 mb-3">Primary</a>
                    <a href="#" class="btn btn-clean-secondary mr-2 mb-3">Secondary</a>
                    <a href="#" class="btn btn-clean-success mr-2 mb-3">Success</a>
                    <a href="#" class="btn btn-clean-warning mr-2 mb-3">Warning</a>
                    <a href="#" class="btn btn-clean-danger mr-2 mb-3">Danger</a>
                    <a href="#" class="btn btn-clean-info mr-2 mb-3">Info</a>
                    <a href="#" class="btn btn-clean-light mr-2 mb-3">Light</a>
                    <a href="#" class="btn btn-clean-dark mr-2 mb-3">Dark</a>
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Button Gradient</h6>

            <div class="mt-3">
                <h6>Diagonal Gradient</h6>
                <p>We have a series of Buttons component with diagonal gradient color style.</p>
                <p>Just add to attribute <code>class="btn d-gradient-[color_name]"</code>.</p>

                <div class="mt-3">
                    <a href="#" class="btn d-gradient-main mr-2 mb-3">Main</a>
                    <a href="#" class="btn d-gradient-primary mr-2 mb-3">Primary</a>
                    <a href="#" class="btn d-gradient-secondary mr-2 mb-3">Secondary</a>
                    <a href="#" class="btn d-gradient-success mr-2 mb-3">Success</a>
                    <a href="#" class="btn d-gradient-warning mr-2 mb-3">Warning</a>
                    <a href="#" class="btn d-gradient-danger mr-2 mb-3">Danger</a>
                    <a href="#" class="btn d-gradient-info mr-2 mb-3">Info</a>
                    <a href="#" class="btn d-gradient-light text-dark-grey mr-2 mb-3">Light</a>
                    <a href="#" class="btn d-gradient-dark mr-2 mb-3">Dark</a>
                </div>
            </div>
            <hr />
            <div class="mt-3">
                <h6>Vertical Gradient</h6>
                <p>We have a series of Buttons component with vertical gradient color style.</p>
                <p>Just add to attribute <code>class="btn v-gradient-[color_name]"</code>.</p>

                <div class="mt-3">
                    <a href="#" class="btn v-gradient-main mr-2 mb-3">Main</a>
                    <a href="#" class="btn v-gradient-primary mr-2 mb-3">Primary</a>
                    <a href="#" class="btn v-gradient-secondary mr-2 mb-3">Secondary</a>
                    <a href="#" class="btn v-gradient-success mr-2 mb-3">Success</a>
                    <a href="#" class="btn v-gradient-warning mr-2 mb-3">Warning</a>
                    <a href="#" class="btn v-gradient-danger mr-2 mb-3">Danger</a>
                    <a href="#" class="btn v-gradient-info mr-2 mb-3">Info</a>
                    <a href="#" class="btn v-gradient-light text-dark-grey mr-2 mb-3">Light</a>
                    <a href="#" class="btn v-gradient-dark mr-2 mb-3">Dark</a>
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Button Hover Effects</h6>

            <div class="mt-3">
                <h6>Default</h6>
                <p>We have a series of Buttons component with hover effect style.</p>
                <p>Just add to attribute <code>class="btn btn-[color_name] btn-hover-[effect_name]"</code>.</p>

                <div class="mt-3">
                    <a href="#" class="btn btn-main btn-hover-grow mr-2 mb-3">Grow</a>
                    <a href="#" class="btn btn-primary btn-hover-shrink mr-2 mb-3">Shrink</a>
                    <a href="#" class="btn btn-secondary btn-hover-up mr-2 mb-3">Up</a>
                    <a href="#" class="btn btn-success btn-hover-down mr-2 mb-3">Down</a>
                    <a href="#" class="btn btn-warning btn-hover-right mr-2 mb-3">Right</a>
                    <a href="#" class="btn btn-danger btn-hover-left mr-2 mb-3">Left</a>
                    <a href="#" class="btn btn-info btn-hover-shine mr-2 mb-3">Shine</a>
                    <a href="#" class="btn btn-light btn-hover-rotate mr-2 mb-3">Rotate</a>
                    <a href="#" class="btn btn-warning btn-hover-skew mr-2 mb-3">Skew</a>
                    <a href="#" class="btn btn-dark btn-hover-outline mr-2 mb-3">Outline</a>
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Buttons with Icon</h6>

            <div class="mt-3">
                <p>We have a series of Buttons component with icon style.</p>
                <p>Just add to attribute <code>class="btn btn-[color_name]"</code>.</p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">

                        <pre class="text-white">
&#x3C;a href=&#x22;#&#x22; class=&#x22;btn btn-main mr-2 mb-3&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-home&#x22;&#x3E;&#x3C;/i&#x3E; 
&#x3C;span class=&#x22;align-middle&#x22;&#x3E;Home&#x3C;/span&#x3E;
&#x3C;/a&#x3E;
</pre>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="#" class="btn btn-main mr-2 mb-3"><i class="bx bx-home"></i> <span
                            class="align-middle">Home</span></a>
                    <a href="#" class="btn btn-primary btn-round mr-2 mb-3"><i class="bx bx-envelope"></i> <span
                            class="align-middle">Message</span></a>
                    <a href="#" class="btn btn-outline-warning mr-2 mb-3"><i class="bx bx-heart"></i> <span
                            class="align-middle">Featured</span></a>
                    <a href="#" class="btn btn-clean-success btn-round mr-2 mb-3"><i class="bx bx-check"></i>
                        <span class="align-middle">Done</span></a>
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Buttons Icon</h6>

            <div class="mt-3">
                <p>We have a series of Buttons component icon style.</p>
                <p>Just add to attribute <code>class="btn btn-icon btn-[color_name]"</code>.</p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">

                        <pre class="text-white">
&#x3C;a href=&#x22;#&#x22; class=&#x22;btn btn-main mr-2 mb-3&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-home&#x22;&#x3E;&#x3C;/i&#x3E;
&#x3C;/a&#x3E;
</pre>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="#" class="btn btn-icon btn-main mr-3 mb-3"><i class="bx bx-home"></i></a>
                    <a href="#" class="btn btn-icon btn-primary btn-round mr-3 mb-3"><i
                            class="bx bx-envelope"></i></a>
                    <a href="#" class="btn btn-icon btn-outline-warning mr-3 mb-3"><i
                            class="bx bx-heart"></i></a>
                    <a href="#" class="btn btn-icon btn-clean-success btn-round mr-3 mb-3"><i
                            class="bx bx-check"></i> </a>
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Buttons with Badge</h6>

            <div class="mt-3">
                <p>We have a series of Buttons component with badge style.</p>
                <p>Just add to attribute <code>class="btn btn-[color_name]"</code>.</p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">

                        <pre class="text-white">
&#x3C;a href=&#x22;#&#x22; class=&#x22;btn btn-main mr-2 mb-3&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-home&#x22;&#x3E;&#x3C;/i&#x3E;
&#x3C;span class=&#x22;align-middle ml-1&#x22;&#x3E;Home&#x3C;/span&#x3E;
&#x3C;span class=&#x22;badge badge-danger ml-2&#x22;&#x3E;23&#x3C;/span&#x3E;
&#x3C;/a&#x3E;
</pre>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="#" class="btn btn-main mr-3 mb-3">
                        <i class="bx bx-home"></i>
                        <span class="align-middle ml-1">Home</span>
                        <span class="badge badge-danger ml-2">23</span>
                    </a>
                    <a href="#" class="btn btn-primary mr-3 mb-3">
                        <i class="bx bx-envelope"></i>
                        <span class="align-middle ml-1">Message</span>
                        <span class="badge badge-warning ml-2">12</span>
                    </a>
                    <a href="#" class="btn btn-success mr-3 mb-3">
                        <span class="badge badge-primary mr-2">40</span>
                        <span>Notification</span>
                    </a>
                </div>
            </div>

            <hr />

            <div class="mt-3">
                <p>Button component with Badge on top position (left/right).</p>
                <p>Just add to attribute <code>class="btn btn-[color_name] btn-badge-[left/right]"</code>.</p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">

                        <pre class="text-white">
&#x3C;a href=&#x22;#&#x22; class=&#x22;btn btn-main btn-badge-right mr-2 mb-3&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-home&#x22;&#x3E;&#x3C;/i&#x3E;
&#x3C;span class=&#x22;align-middle&#x22;&#x3E;Home&#x3C;/span&#x3E;
&#x3C;span class=&#x22;badge badge-danger&#x22;&#x3E;23&#x3C;/span&#x3E;
&#x3C;/a&#x3E;
</pre>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="#" class="btn btn-main btn-badge-right mr-3 mb-3">
                        <i class="bx bx-home"></i>
                        <span class="align-middle">Home</span>
                        <span class="badge badge-danger">23</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-badge-right mr-5 mb-3">
                        <i class="bx bx-envelope"></i>
                        <span class="align-middle">Message</span>
                        <span class="badge badge-warning">12</span>
                    </a>
                    <a href="#" class="btn btn-outline-warning btn-badge-left mr-4 mb-3">
                        <i class="bx bx-info-circle"></i>
                        <span>Notification</span>
                        <span class="badge badge-primary">40</span>
                    </a>
                    <a href="#" class="btn btn-danger btn-icon btn-badge-left mr-3 mb-3">
                        <i class="bx bx-chat"></i>
                        <span class="badge badge-warning">8</span>
                    </a>
                    <a href="#" class="btn btn-warning btn-icon btn-badge-right mr-3 mb-3">
                        <i class="bx bx-chat"></i>
                        <span class="badge badge-primary">8</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

 '   <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Buttons Group</h6>

            <div class="mt-3">

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">

                        <pre class="text-white">
&#x3C;div class=&#x22;row&#x22;&#x3E;
&#x3C;div class=&#x22;col-md-4&#x22;&#x3E;
&#x3C;div class=&#x22;btn-group&#x22; role=&#x22;group&#x22; aria-label=&#x22;Basic example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-main&#x22;&#x3E;Left&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-main&#x22;&#x3E;Middle&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-main&#x22;&#x3E;Right&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;col-md-5&#x22;&#x3E;
&#x3C;div class=&#x22;btn-group&#x22; role=&#x22;group&#x22; aria-label=&#x22;Basic example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-warning btn-round-left&#x22;&#x3E;Round Left&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-warning&#x22;&#x3E;Middle&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-warning btn-round-right&#x22;&#x3E;Round Right&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;col-md-3&#x22;&#x3E;
&#x3C;div class=&#x22;btn-group&#x22; role=&#x22;group&#x22; aria-label=&#x22;Basic example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary&#x22;&#x3E;&#x3C;i class=&#x22;bx bx-home&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary&#x22;&#x3E;&#x3C;i class=&#x22;bx bx-envelope&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary&#x22;&#x3E;&#x3C;i class=&#x22;bx bx-heart&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</pre>
                    </div>
                </div>

                <div class="mt-4 row">
                    <div class="col-md-4">
                        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-dark btn-round-left">Round
                                Left</button>
                            <button type="button" class="btn btn-outline-dark">Middle</button>
                            <button type="button" class="btn btn-outline-dark btn-round-right">Round
                                Right</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-home"></i></button>
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-envelope"></i></button>
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-heart"></i></button>
                        </div>
                    </div>
                </div>

                <div class="mt-4 row">
                    <div class="col-md-4">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-dark btn-round-left">Round
                                Left</button>
                            <button type="button" class="btn btn-outline-dark">Middle</button>
                            <button type="button" class="btn btn-outline-dark btn-round-right">Round
                                Right</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-home"></i></button>
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-envelope"></i></button>
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-heart"></i></button>
                        </div>
                    </div>
                </div>

                <div class="mt-4 row">
                    <div class="col-md-4">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-dark btn-round-left">Round
                                Left</button>
                            <button type="button" class="btn btn-outline-dark">Middle</button>
                            <button type="button" class="btn btn-outline-dark btn-round-right">Round
                                Right</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-home"></i></button>
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-envelope"></i></button>
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-heart"></i></button>
                        </div>
                    </div>
                </div>

                <div class="mt-4 row">
                    <div class="col-md-4">
                        <div class="btn-group btn-group-xs" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="btn-group btn-group-xs" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-dark btn-round-left">Round
                                Left</button>
                            <button type="button" class="btn btn-outline-dark">Middle</button>
                            <button type="button" class="btn btn-outline-dark btn-round-right">Round
                                Right</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="btn-group btn-group-xs" role="group" aria-label="Basic example">
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-home"></i></button>
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-envelope"></i></button>
                            <button type="button" class="btn v-gradient-light text-dark-grey"><i
                                    class="bx bx-heart"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Buttons Size</h6>

            <div class="mt-3">

                <p>We have a series of Button component size.</p>


                <div class="mt-4 row">
                    <div class="col-md-7">
                        <div>
                            <p>Just add class <code>.btn-lg</code> for large button or
                                <code>.btn-sm</code> for small button or <code>.btn-xs</code> for extra small
                                button.</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-lg mr-3">Large</button>
                            <button type="button" class="btn d-gradient-main mr-3">Default</button>
                            <button type="button" class="btn v-gradient-dark btn-sm mr-3">Small</button>
                            <button type="button" class="btn v-gradient-light text-dark-grey btn-xs mr-3">Extra
                                Small</button>
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-primary btn-lg mr-3">Large</button>
                            <button type="button" class="btn btn-outline-main mr-3">Default</button>
                            <button type="button" class="btn btn-outline-dark btn-sm mr-3">Small</button>
                            <button type="button" class="btn btn-outline-light text-dark-grey btn-xs mr-3">Extra
                                Small</button>
                        </div>
                        <div class="mt-3">
                            <button type="button"
                                class="btn btn-outline-primary btn-lg btn-round mr-3">Large</button>
                            <button type="button" class="btn btn-outline-main btn-round mr-3">Default</button>
                            <button type="button"
                                class="btn btn-outline-dark btn-sm btn-round mr-3">Small</button>
                            <button type="button"
                                class="btn btn-outline-light btn-xs text-dark-grey btn-round mr-3">Extra
                                Small</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div>
                            <p>Just add class <code>.btn-block</code> for block full width
                                button.</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button
                            large</button>
                        <button type="button" class="btn d-gradient-main btn-block ">Block level button
                            default</button>
                        <button type="button" class="btn v-gradient-warning btn-sm btn-block">Block level button
                            small</button>
                        <button type="button" class="btn v-gradient-light btn-xs text-dark-grey btn-block">Block
                            level button extra small</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Buttons Floating</h6>

            <div class="mt-3">

                <p>You can see the floating button on the bottom right.</p>
                <p>You can put this code anywhere, the floating button is always on the bottom right position.
                </p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">
                        <pre class="text-white">
&#x3C;div class=&#x22;btn-float-group&#x22;&#x3E;
&#x3C;a href=&#x22;javascript:;&#x22; class=&#x22;btn btn-main btn-shadow btn-float toggle-btn-float&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-plus&#x22;&#x3E;&#x3C;/i&#x3E;
&#x3C;/a&#x3E;
&#x3C;div class=&#x22;btn-float-menu&#x22;&#x3E;
&#x3C;a href=&#x22;#&#x22; class=&#x22;btn btn-primary btn-shadow&#x22;&#x3E;&#x3C;i class=&#x22;bx bx-envelope&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;
&#x3C;a href=&#x22;#&#x22; class=&#x22;btn btn-warning btn-shadow&#x22;&#x3E;&#x3C;i class=&#x22;bx bx-edit&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;
&#x3C;a href=&#x22;#&#x22; class=&#x22;btn btn-success btn-shadow&#x22;&#x3E;&#x3C;i class=&#x22;bx bx-clipboard&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;
&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</pre>
                    </div>
                </div>

                <div class="btn-float-group">
                    <a href="javascript:;" class="btn btn-main btn-shadow btn-float toggle-btn-float">
                        <i class="bx bx-plus"></i>
                    </a>
                    <div class="btn-float-menu">
                        <a href="#" class="btn btn-primary btn-shadow"><i class="bx bx-envelope"></i></a>
                        <a href="#" class="btn btn-warning btn-shadow"><i class="bx bx-edit"></i></a>
                        <a href="#" class="btn btn-success btn-shadow"><i class="bx bx-clipboard"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection