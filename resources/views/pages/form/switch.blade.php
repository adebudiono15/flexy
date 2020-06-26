@extends('layouts.master')

@section('title','Switch')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush


@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
  <div><a href="#"><i class="icon-home"></i> Home</a></div>
  <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
  <div><a href="#">Form Elements</a></div>
  <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
  <div>Switch</div>
</div>
<div class="pd-20 pt-0">

  <!-- example 1 -->
  <div class="card mt-4">
    <div class="row">
      <div class="col-md">
        <div class="card-body">
          <h6 class="card-title mb-4">Basic Switch</h6>
          <div class="custom-control custom-switch custom-control-inline mb-1">
            <input type="checkbox" class="custom-control-input" checked="" id="customSwitch1">
            <label class="custom-control-label mr-1" for="customSwitch1">
            </label>
            <span>Active Switch</span>
          </div>
          <div class="custom-control custom-switch custom-control-inline mb-1">
            <input type="checkbox" class="custom-control-input" id="customSwitch2">
            <label class="custom-control-label mr-1" for="customSwitch2">
            </label>
            <span>Inactive Switch</span>
          </div>
          <div class="custom-control custom-switch custom-control-inline mb-1">
            <input type="checkbox" class="custom-control-input" checked="" disabled="" id="customSwitch3">
            <label class="custom-control-label mr-1" for="customSwitch3">
            </label>
            <span>Disabled Active Switch</span>
          </div>
          <div class="custom-control custom-switch custom-control-inline mb-1">
            <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch4">
            <label class="custom-control-label mr-1" for="customSwitch4">
            </label>
            <span>Disabled Inactive Switch</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- last example 1 -->

  {{-- example 2 --}}
  <div class="card mt-4">
    <div class="row">
      <div class="col-md">
        <div class="card-body">
          <h6 class="card-title mb-4">Color</h6>
          <p>Use class <code>.custom-control-input-Color Name</code> with <code>.custom-control-input</code> to change
            switch's
            color</p>
          <div class="d-flex justify-content-start flex-wrap">
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input" checked="" id="customSwitchcolor1">
              <label class="custom-control-label" for="customSwitchcolor1"></label>
            </div>
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-success" id="customSwitchcolor2">
              <label class="custom-control-label" for="customSwitchcolor2"></label>
            </div>
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-dark" id="customSwitchcolor3">
              <label class="custom-control-label" for="customSwitchcolor3"></label>
            </div>
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-info" id="customSwitchcolor4">
              <label class="custom-control-label" for="customSwitchcolor4"></label>
            </div>
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-warning" id="customSwitchcolor5">
              <label class="custom-control-label" for="customSwitchcolor5"></label>
            </div>
            <div class="custom-control custom-switch mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-danger" id="customSwitchcolor6">
              <label class="custom-control-label" for="customSwitchcolor6"></label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- last example 2 --}}

  {{-- example 3 --}}
  <div class="card mt-4">
    <div class="row">
      <div class="col-md">
        <div class="card-body">
          <h6 class="card-title mb-4">Icon</h6>
          <p>Use class <code>.switch-icon-right</code> inside of
            <code>.custom-control-label</code> to create a switch with icon.
          </p>
          <div class="d-flex justify-content-start flex-wrap">
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input" checked="" id="customSwitch10">
              <label class="custom-control-label" for="customSwitch10">
                <span class="switch-icon-right"><i class="bx bx-bell"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch  mr-2 mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-danger" id="customSwitch11">
              <label class="custom-control-label" for="customSwitch11">
                <span class="switch-icon-right"><i class="bx bx-check"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-success" id="customSwitch12">
              <label class="custom-control-label" for="customSwitch12">
                <span class="switch-icon-right"><i class="bx bx-x"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-info" id="customSwitch13">
              <label class="custom-control-label" for="customSwitch13">
                <span class="switch-icon-right"><i class="bx bx-error-circle"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-dark" id="customSwitch14">
              <label class="custom-control-label" for="customSwitch14">
                <span class="switch-icon-right"><i class="bx bx-error"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch mr-2 mb-1">
              <input type="checkbox" class="custom-control-input custom-control-input-warning" id="customSwitch15">
              <label class="custom-control-label" for="customSwitch15">
                <span class="switch-icon-right"><i class="bx bx-volume-mute"></i></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- last example 3 --}}



</div>
@endsection