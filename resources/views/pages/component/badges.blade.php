@extends('layouts.master')

@section('title','Badges')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Badges</div>
</div>
<div class="pd-20 pt-0">
    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Basic Badges</h6>

            <div class="mt-3">
                <h6>Default</h6>
                <p>We have a series of Badges component with default style.</p>
                <p>Just add to attribute <code>class="badge badge-[color_name]"</code>.</p>

                <div class="mt-3">
                    <span class="badge badge-main mr-2 mb-3">Main</span>
                    <span class="badge badge-primary mr-2 mb-3">Primary</span>
                    <span class="badge badge-secondary mr-2 mb-3">Secondary</span>
                    <span class="badge badge-success mr-2 mb-3">Success</span>
                    <span class="badge badge-warning mr-2 mb-3">Warning</span>
                    <span class="badge badge-danger mr-2 mb-3">Danger</span>
                    <span class="badge badge-info mr-2 mb-3">Info</span>
                    <span class="badge badge-light mr-2 mb-3">Light</span>
                    <span class="badge badge-dark mr-2 mb-3">Dark</span>
                </div>
            </div>

            <hr />

            <div class="mt-3">
                <h6>Rounded</h6>
                <p>We have a series of Badges component with rounded style.</p>
                <p>Just add to attribute <code>class="badge badge-[color_name]badge-pill"</code>.</p>

                <div class="mt-3">
                    <span class="badge badge-main badge-pill mr-2 mb-3">Main</span>
                    <span class="badge badge-primary badge-pill mr-2 mb-3">Primary</span>
                    <span class="badge badge-secondary badge-pill mr-2 mb-3">Secondary</span>
                    <span class="badge badge-success badge-pill mr-2 mb-3">Success</span>
                    <span class="badge badge-warning badge-pill mr-2 mb-3">Warning</span>
                    <span class="badge badge-danger badge-pill mr-2 mb-3">Danger</span>
                    <span class="badge badge-info badge-pill mr-2 mb-3">Info</span>
                    <span class="badge badge-light badge-pill mr-2 mb-3">Light</span>
                    <span class="badge badge-dark badge-pill mr-2 mb-3">Dark</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Outline Badges</h6>

            <div class="mt-3">
                <h6>Default</h6>
                <p>We have a series of Badges component with outline style.</p>
                <p>Just add to attribute <code>class="badge badge-outline-[color_name]"</code>.</p>

                <div class="mt-3">
                    <span class="badge badge-outline-main mr-2 mb-3">Main</span>
                    <span class="badge badge-outline-primary mr-2 mb-3">Primary</span>
                    <span class="badge badge-outline-secondary mr-2 mb-3">Secondary</span>
                    <span class="badge badge-outline-success mr-2 mb-3">Success</span>
                    <span class="badge badge-outline-warning mr-2 mb-3">Warning</span>
                    <span class="badge badge-outline-danger mr-2 mb-3">Danger</span>
                    <span class="badge badge-outline-info mr-2 mb-3">Info</span>
                    <span class="badge badge-outline-light mr-2 mb-3">Light</span>
                    <span class="badge badge-outline-dark mr-2 mb-3">Dark</span>
                </div>
            </div>

            <hr />

            <div class="mt-3">
                <h6>Rounded</h6>
                <p>We have a series of Badges component with rounded style.</p>
                <p>Just add to attribute <code>class="badge badge-outline-[color_name] badge-pill"</code>.</p>

                <div class="mt-3">
                    <span class="badge badge-outline-main badge-pill mr-2 mb-3">Main</span>
                    <span class="badge badge-outline-primary badge-pill mr-2 mb-3">Primary</span>
                    <span class="badge badge-outline-secondary badge-pill mr-2 mb-3">Secondary</span>
                    <span class="badge badge-outline-success badge-pill mr-2 mb-3">Success</span>
                    <span class="badge badge-outline-warning badge-pill mr-2 mb-3">Warning</span>
                    <span class="badge badge-outline-danger badge-pill mr-2 mb-3">Danger</span>
                    <span class="badge badge-outline-info badge-pill mr-2 mb-3">Info</span>
                    <span class="badge badge-outline-light badge-pill mr-2 mb-3">Light</span>
                    <span class="badge badge-outline-dark badge-pill mr-2 mb-3">Dark</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Badges Clean</h6>

            <div class="mt-3">
                <h6>Default</h6>
                <p>We have a series of Badges component with clean color style.</p>
                <p>Just add to attribute <code>class="badge badge-clean-[color_name]"</code>.</p>

                <div class="mt-3">
                    <span class="badge badge-clean-main mr-2 mb-3">Main</span>
                    <span class="badge badge-clean-primary mr-2 mb-3">Primary</span>
                    <span class="badge badge-clean-secondary mr-2 mb-3">Secondary</span>
                    <span class="badge badge-clean-success mr-2 mb-3">Success</span>
                    <span class="badge badge-clean-warning mr-2 mb-3">Warning</span>
                    <span class="badge badge-clean-danger mr-2 mb-3">Danger</span>
                    <span class="badge badge-clean-info mr-2 mb-3">Info</span>
                    <span class="badge badge-clean-light mr-2 mb-3">Light</span>
                    <span class="badge badge-clean-dark mr-2 mb-3">Dark</span>
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Badges with Icon</h6>

            <div class="mt-3">
                <p>We have a series of Badges component with icon style.</p>
                <p>Just add to attribute <code>class="badge badge-[color_name]"</code>.</p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">

                        <pre class="text-white">
&#x3C;span class=&#x22;badge badge-main mr-2 mb-3&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-home&#x22;&#x3E;&#x3C;/i&#x3E; 
&#x3C;span class=&#x22;align-middle&#x22;&#x3E;Home&#x3C;/span&#x3E;
&#x3C;/span&#x3E;
</pre>
                    </div>
                </div>

                <div class="mt-4">
                    <span class="badge badge-primary mr-2 mb-3"><i class="bx bxl-facebook"></i> <span
                            class="align-middle ml-1">Facebook</span></span>
                    <span class="badge badge-danger mr-2 mb-3"><i class="bx bxl-google"></i> <span
                            class="align-middle ml-1">Google</span></span>
                    <span class="badge badge-dark badge-pill mr-2 mb-3"><i class="bx bxl-github"></i> <span
                            class="align-middle ml-1">Github</span></span>
                    <span class="badge badge-outline-info badge-pill mr-2 mb-3"><i class="bx bxl-twitter"></i>
                        <span class="align-middle ml-1">Twitter</span></span>
                    <span class="badge badge-clean-dark badge-pill mr-2 mb-3"><i class="bx bxl-microsoft"></i>
                        <span class="align-middle ml-1">Microsoft</span></span>
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Badges Icon</h6>

            <div class="mt-3">
                <p>We have a series of Badges component icon style.</p>
                <p>Just add to attribute <code>class="badge badge-icon badge-[color_name]"</code>.</p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">

                        <pre class="text-white">
&#x3C;span class=&#x22;badge badge-icon badge-primary mr-2 mb-3&#x22;&#x3E;
&#x3C;i class=&#x22;bx bxl-facebook&#x22;&#x3E;&#x3C;/i&#x3E; 
&#x3C;span class=&#x22;align-middle&#x22;&#x3E;&#x3C;/span&#x3E;
&#x3C;/span&#x3E;
                     </pre>
                    </div>
                </div>

                <div class="mt-4">
                    <span class="badge badge-icon badge-primary mr-2 mb-3"><i class="bx bxl-facebook"></i> <span
                            class="align-middle"></span></span>
                    <span class="badge badge-icon badge-outline-dark badge-pill mr-2 mb-3"><i class="bx bxl-github"></i>
                        <span class="align-middle"></span></span>
                    <span class="badge badge-icon badge-danger mr-2 mb-3"><i class="bx bxl-google"></i> <span
                            class="align-middle"></span></span>
                    <span class="badge badge-icon badge-info badge-pill mr-2 mb-3"><i class="bx bxl-twitter"></i> <span
                            class="align-middle"></span></span>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection