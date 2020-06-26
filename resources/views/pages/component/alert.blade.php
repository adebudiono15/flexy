@extends('layouts.master')

@section('title','Alert')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Alert</div>
</div>
<div class="pd-20 pt-0">

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Alert Default</h6>

            <div class="mt-3">
                <p>We have a series of Alert component that are use Flat colors.</p>
                <p>If you want to use this alert, just add <code>class="alert [color_name]"</code> to your html
                    element:</p>

                <div class="mt-3">
                    <div class="alert bg-main">
                        This is Alert using bg-main color
                    </div>

                    <div class="alert bg-primary">
                        This is Alert using bg-primary color
                    </div>


                    <div class="alert bg-secondary">
                        This is Alert using bg-secondary color
                    </div>


                    <div class="alert bg-success">
                        This is Alert using bg-success color
                    </div>

                    <div class="alert bg-warning">
                        This is Alert using bg-warning color
                    </div>

                    <div class="alert bg-danger">
                        This is Alert using bg-danger color
                    </div>

                    <div class="alert bg-info">
                        This is Alert using bg-info color
                    </div>

                    <div class="alert bg-light">
                        This is Alert using bg-light color
                    </div>

                    <div class="alert bg-dark">
                        This is Alert using bg-dark color
                    </div>

                    <div class="alert bg-dark-light">
                        This is Alert using bg-dark-light color
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Alert with Icons</h6>

            <div class="mt-3">
                <p>We have a series of Alert component with Icons.</p>
                <p>If you want to use this alert, just add <code>class="alert [color_name]"</code> to your html
                    element:</p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark pd-20 pb-0">
                        <pre class="text-white">
&#x3C;div class=&#x22;alert bg-main&#x22;&#x3E;
&#x3C;div class=&#x22;d-flex&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-bell&#x22;&#x3E;&#x3C;/i&#x3E;
&#x3C;div&#x3E;This is Alert using bg-main color&#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;button type=&#x22;button&#x22; class=&#x22;close&#x22; data-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;
&#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#x26;times;&#x3C;/span&#x3E;
&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
                    </pre>
                    </div>
                </div>

                <hr />

                <div class="mt-3">

                    <div class="alert bg-main">
                        <div class="d-flex">
                            <i class="bx bx-bell"></i>
                            <div>This is Alert using bg-main color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-primary">
                        <div class="d-flex">
                            <i class="bx bx-folder"></i>
                            <div>This is Alert using bg-primary color</div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-secondary">
                        <div class="d-flex">
                            <i class="bx bx-file"></i>
                            <div>This is Alert using bg-secondary color</div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-success">
                        <div class="d-flex">
                            <i class="bx bx-alarm"></i>
                            <div>This is Alert using bg-success color</div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-warning">
                        <div class="d-flex">
                            <i class="bx bx-star"></i>
                            <div>This is Alert using bg-warning color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-danger">
                        <div class="d-flex">
                            <i class="bx bx-bulb"></i>
                            <div>This is Alert using bg-danger color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-info">
                        <div class="d-flex">
                            <i class="bx bx-bookmark"></i>
                            <div>This is Alert using bg-info color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-light">
                        <div class="d-flex">
                            <i class="bx bx-check-circle"></i>
                            <div>This is Alert using bg-light color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-dark">
                        <div class="d-flex">
                            <i class="bx bx-chat"></i>
                            <div>This is Alert using bg-dark color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-dark-light">
                        <div class="d-flex">
                            <i class="bx bx-envelope"></i>
                            <div>This is Alert using bg-dark-light color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Alert with Title</h6>

            <div class="mt-3">
                <p>We have a series of Alert component that are use Flat clean colors.</p>
                <p>If you want to use this alert, just add <code>class="alert [color_name]"</code> to your html
                    element:</p>
            </div>

            <div class="mt-3">
                <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                <div class="bg-dark pd-20 pb-0">
                    <pre class="text-white">
&#x3C;div class=&#x22;alert bg-main&#x22;&#x3E;
&#x3C;h5 class=&#x22;alert-heading&#x22;&#x3E;Success!&#x3C;/h5&#x3E;
&#x3C;p&#x3E;Database has been created&#x3C;/p&#x3E;
&#x3C;hr&#x3E;
&#x3C;p class=&#x22;mb-0&#x22;&#x3E;This is Alert using bg-clean-main color&#x3C;/p&#x3E;
&#x3C;/div&#x3E;
                    </pre>
                </div>
            </div>

            <hr />

            <div class="mt-3">

                <div class="alert bg-main">
                    <h5 class="alert-heading">Success!</h5>
                    <p>Database has been created</p>
                    <hr>
                    <p class="mb-0">This is Alert using bg-clean-main color</p>
                </div>

                <div class="alert bg-clean-main">
                    <h5 class="alert-heading">Success!</h5>
                    <p>Database has been created</p>
                    <hr>
                    <p class="mb-0">This is Alert using bg-clean-main color</p>
                </div>

                <div class="alert border-main">
                    <h5 class="alert-heading">Success!</h5>
                    <p>Database has been created</p>
                    <hr>
                    <p class="mb-0">This is Alert using bg-clean-main color</p>
                </div>

            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Alert Dismissing</h6>

            <div class="mt-3">
                <p>We have a series of Alert component with Dismissing.</p>
                <p>If you want to use this alert, just add <code>class="alert [color_name]"</code> to your html
                    element:</p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">

                        <pre class="text-white">
&#x3C;div class=&#x22;alert bg-primary&#x22;&#x3E;
This is Alert using bg-primary color
&#x3C;button type=&#x22;button&#x22; class=&#x22;close&#x22; data-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;
&#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#x26;times;&#x3C;/span&#x3E;
&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
</pre>
                    </div>
                </div>

                <hr />

                <div class="mt-3">

                    <div class="alert bg-primary">
                        This is Alert using bg-primary color
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert bg-clean-primary">
                        This is Alert using bg-clean-primary color
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-primary">
                        This is Alert using border-primary color
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Alert Clean</h6>

            <div class="mt-3">
                <p>We have a series of Alert component that are use Flat clean colors.</p>
                <p>If you want to use this alert, just add <code>class="alert bg-clean-[color_name]"</code> to
                    your html element:</p>
            </div>

            <div class="mt-3">
                <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                <div class="bg-dark text-white pd-20 pb-10">

                    <pre class="text-white">
&#x3C;div class=&#x22;alert bg-clean-main&#x22;&#x3E;
&#x3C;div class=&#x22;d-flex&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-bell&#x22;&#x3E;&#x3C;/i&#x3E;
&#x3C;div&#x3E;This is Alert using bg-clean-main color&#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;button type=&#x22;button&#x22; class=&#x22;close&#x22; data-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;
&#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#x26;times;&#x3C;/span&#x3E;
&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
</pre>
                </div>
            </div>

            <hr />

            <div class="mt-3">
                <div class="alert bg-clean-main">
                    <div class="d-flex">
                        <i class="bx bx-bell"></i>
                        <div>This is Alert using bg-clean-main color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert bg-clean-primary">
                    <div class="d-flex">
                        <i class="bx bx-folder"></i>
                        <div>This is Alert using bg-clean-primary color</div>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert bg-clean-secondary">
                    <div class="d-flex">
                        <i class="bx bx-file"></i>
                        <div>This is Alert using bg-clean-secondary color</div>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert bg-clean-success">
                    <div class="d-flex">
                        <i class="bx bx-alarm"></i>
                        <div>This is Alert using bg-clean-success color</div>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert bg-clean-warning">
                    <div class="d-flex">
                        <i class="bx bx-star"></i>
                        <div>This is Alert using bg-clean-warning color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert bg-clean-danger">
                    <div class="d-flex">
                        <i class="bx bx-bulb"></i>
                        <div>This is Alert using bg-clean-danger color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert bg-clean-info">
                    <div class="d-flex">
                        <i class="bx bx-bookmark"></i>
                        <div>This is Alert using bg-clean-info color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert bg-clean-dark">
                    <div class="d-flex">
                        <i class="bx bx-envelope"></i>
                        <div>This is Alert using bg-clean-dark color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Alert Border</h6>

            <div class="mt-3">
                <p>We have a series of Alert component that are use border.</p>
                <p>If you want to use this alert, just add <code>class="alert border-[color_name]"</code> to
                    your html element:</p>
            </div>

            <div class="mt-3">
                <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                <div class="bg-dark text-white pd-20 pb-10">

                    <pre class="text-white">
&#x3C;div class=&#x22;alert border-main&#x22;&#x3E;
&#x3C;div class=&#x22;d-flex&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-bell&#x22;&#x3E;&#x3C;/i&#x3E;
&#x3C;div&#x3E;This is Alert using border-main color&#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;button type=&#x22;button&#x22; class=&#x22;close&#x22; data-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;
&#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#x26;times;&#x3C;/span&#x3E;
&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
</pre>
                </div>
            </div>

            <hr />


            <div class="mt-3">
                <div class="alert border-main">
                    <div class="d-flex">
                        <i class="bx bx-bell"></i>
                        <div>This is Alert using border-main color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert border-primary">
                    <div class="d-flex">
                        <i class="bx bx-folder"></i>
                        <div>This is Alert using border-primary color</div>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert border-secondary">
                    <div class="d-flex">
                        <i class="bx bx-file"></i>
                        <div>This is Alert using border-secondary color</div>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert border-success">
                    <div class="d-flex">
                        <i class="bx bx-alarm"></i>
                        <div>This is Alert using border-success color</div>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert border-warning">
                    <div class="d-flex">
                        <i class="bx bx-star"></i>
                        <div>This is Alert using border-warning color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert border-danger">
                    <div class="d-flex">
                        <i class="bx bx-bulb"></i>
                        <div>This is Alert using border-danger color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert border-info">
                    <div class="d-flex">
                        <i class="bx bx-bookmark"></i>
                        <div>This is Alert using border-info color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert border-light">
                    <div class="d-flex">
                        <i class="bx bx-check-circle"></i>
                        <div>This is Alert using border-light color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert border-dark">
                    <div class="d-flex">
                        <i class="bx bx-chat"></i>
                        <div>This is Alert using border-dark color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="alert border-dark-light">
                    <div class="d-flex">
                        <i class="bx bx-envelope"></i>
                        <div>This is Alert using border-dark-light color</div>
                    </div>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>

        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h6 class="widget-title mb-4">Alert Border Top</h6>

            <div class="mt-3">
                <p>We have a series of Alert component that are use border top.</p>
                <p>If you want to use this alert, just add <code>class="alert border-top-[color_name]"</code> to
                    your html element:</p>

                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-10">

                        <pre class="text-white">
&#x3C;div class=&#x22;alert border-top-main&#x22;&#x3E;
&#x3C;div class=&#x22;d-flex&#x22;&#x3E;
&#x3C;i class=&#x22;bx bx-bell&#x22;&#x3E;&#x3C;/i&#x3E;
&#x3C;div&#x3E;This is Alert using border-top-main color&#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;button type=&#x22;button&#x22; class=&#x22;close&#x22; data-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;
&#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#x26;times;&#x3C;/span&#x3E;
&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
</pre>
                    </div>
                </div>

                <hr />

                <div class="mt-3">
                    <div class="alert border-top-main">
                        <div class="d-flex">
                            <i class="bx bx-bell"></i>
                            <div>This is Alert using border-top-main color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-top-primary">
                        <div class="d-flex">
                            <i class="bx bx-folder"></i>
                            <div>This is Alert using border-top-primary color</div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-top-secondary">
                        <div class="d-flex">
                            <i class="bx bx-file"></i>
                            <div>This is Alert using border-top-secondary color</div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-top-success">
                        <div class="d-flex">
                            <i class="bx bx-alarm"></i>
                            <div>This is Alert using border-top-success color</div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-top-warning">
                        <div class="d-flex">
                            <i class="bx bx-star"></i>
                            <div>This is Alert using border-top-warning color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-top-danger">
                        <div class="d-flex">
                            <i class="bx bx-bulb"></i>
                            <div>This is Alert using border-top-danger color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-top-info">
                        <div class="d-flex">
                            <i class="bx bx-bookmark"></i>
                            <div>This is Alert using border-top-info color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-top-light">
                        <div class="d-flex">
                            <i class="bx bx-check-circle"></i>
                            <div>This is Alert using border-top-light color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-top-dark">
                        <div class="d-flex">
                            <i class="bx bx-chat"></i>
                            <div>This is Alert using border-top-dark color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="alert border-top-dark-light">
                        <div class="d-flex">
                            <i class="bx bx-envelope"></i>
                            <div>This is Alert using border-top-dark-light color</div>
                        </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection