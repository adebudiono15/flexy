@extends('layouts.master')

@section('title','Spinner')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Spinner</div>
</div>
<div class="pd-20 pt-0">

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Border Spinner</h5>
                    <p class="card-text">Use class <code>.spinner-border</code> or display
                        loading border.</p>
                    <div class="spinner-border"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Color Spinner</h5>
                    <p class="card-text">Use <code>text-[color_name]</code> on <code>.spinner-border</code> for
                        display color spinner.</p>
                    <div class="spinner-border text-main"></div>
                    <div class="spinner-border text-primary"></div>
                    <div class="spinner-border text-secondary"></div>
                    <div class="spinner-border text-success"></div>
                    <div class="spinner-border text-warning"></div>
                    <div class="spinner-border text-danger"></div>
                    <div class="spinner-border text-dark"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Growing Spinner</h5>
                    <p class="card-text">Use class <code>.spinner-grow</code> for display
                        loading grow.</p>
                    <div class="spinner-grow"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Color Grow Spinner</h5>
                    <p class="card-text">Use <code>text-[color_name]</code> on <code>.spinner-grow</code> for
                        display color spinner.</p>
                    <div class="spinner-grow text-main"></div>
                    <div class="spinner-grow text-primary"></div>
                    <div class="spinner-grow text-secondary"></div>
                    <div class="spinner-grow text-success"></div>
                    <div class="spinner-grow text-warning"></div>
                    <div class="spinner-grow text-danger"></div>
                    <div class="spinner-grow text-dark"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Align Right</h5>
                    <p class="card-text">Use class <code>.text-right</code> for display right
                        align.</p>
                    <div class="text-right">
                        <div class="spinner-border"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Float Right</h5>
                    <p class="card-text">Use class <code>.float-right</code> for display right
                        position.</p>
                    <div class="clearfix">
                        <div class="spinner-grow float-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Size</h5>
                    <p class="card-text">Just add class <code>.spinner-[border/grow]-sm</code> after
                        <code>.spinner-[border/grow]</code>.</p>
                    <div class="mt-5">
                        <div class="spinner-border spinner-border-sm"></div>
                        <div class="spinner-grow spinner-grow-sm"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Custom Size</h5>
                    <p class="card-text">Just add custom <code>style="width:3rem;height:3rem;"</code> on
                        <code>.spinner-[border/grow]</code>.</p>
                    <div class="mt-2">
                        <div class="spinner-border" style="width:3rem;height:3rem;"></div>
                        <div class="spinner-grow" style="width:3rem;height:3rem;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Buttons</h5>
            <p class="card-text">Use spinner with buttons to indicate an action.</p>
            <div class="mt-2">
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </button>
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>

            <div class="mt-3">
                <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                <div class="bg-dark pd-20 pb-0">
                    <pre class="text-white">
        &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; disabled&#x3E;
        &#x3C;span class=&#x22;spinner-border spinner-border-sm&#x22; role=&#x22;status&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
        &#x3C;span class=&#x22;sr-only&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
        &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; disabled&#x3E;
        &#x3C;span class=&#x22;spinner-border spinner-border-sm&#x22; role=&#x22;status&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E; Loading...
        &#x3C;/button&#x3E;
                        </pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection