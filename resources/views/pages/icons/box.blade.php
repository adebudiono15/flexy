@extends('layouts.master')

@section('title','Icons Box')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css?v=1.0">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div> <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Icons</a></div> <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Box Icon</div>
</div>
<div class="pd-20 pt-0">

    <div class="card mt-3">
        <div class="card-body">

            <h6 class="widget-title mb-4" >Box Icons</h6>
            <p>Just add class="bx [name_of_icon]"</p>

            <ul class="nav nav-tabs mt-4" id="iconsTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="box-reg-tab" data-toggle="tab" href="#box-reg" role="tab" aria-controls="box-reg" aria-selected="true">Regular</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="box-solid-tab" data-toggle="tab" href="#box-solid" role="tab" aria-controls="box-solid" aria-selected="false">Solid</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="box-light-tab" data-toggle="tab" href="#box-light" role="tab" aria-controls="box-light" aria-selected="false">Light</a>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="box-reg" role="tabpanel" aria-labelledby="box-reg-tab">
                @include('components.icons.box-regular')
            </div>
            <div class="tab-pane fade" id="box-solid" role="tabpanel" aria-labelledby="box-solid-tab">
            @include('components.icons.box-solid')
            </div>
            <div class="tab-pane fade" id="box-light" role="tabpanel" aria-labelledby="box-light-tab">
                @include('components.icons.box-light')
            </div>
            </div>

        </div>
    </div>

</div>
@endsection