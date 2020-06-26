@extends('layouts.master')

@section('title','Form Layout')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css?v=1.0">
@endpush



@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
  <div><a href="#"><i class="icon-home"></i> Home</a></div>
  <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
  <div>Form Layout</div>
</div>
<div class="pd-20 pt-0">
  {{-- line 1 --}}
  <!-- layout example 1 -->
  <div class="row mt-4">
    <div class="col-md-6 col-12">
      <div class="card" style="height: 420px;">
        <div class="card-header">
          <h4 class="card-title">Horizontal Form</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form form-horizontal">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-4">
                    <label>First Name</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                    <label>Email</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email">
                  </div>
                  <div class="col-md-4">
                    <label>Mobile</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile">
                  </div>
                  <div class="col-md-4">
                    <label>Password</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="col-12 col-md-8 offset-md-4 form-group">
                    <fieldset>
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox__input" id="checkbox1" checked="">
                        <label for="checkbox1">Remember me</label>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-sm-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-outline-light mr-1 mb-1">Reset</button>
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <a href="" class="mt-3"><i class="bx bx-chevron-right">Next</i></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- last layout example 1  -->
    <!-- layout example 2 -->
    <div class="col-md-6 col-12">
      <div class="card" style="height: 420px;">
        <div class="card-header">
          <h4 class="card-title">Horizontal Form with Icons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form form-horizontal">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-4">
                    <label>First Name</label>
                  </div>
                  <div class="col-md-8 form-group ">
                    <div class="position-relative has-icon-left">
                      <input type="text" id="fname-icon" class="form-control" name="fname-icon"
                        placeholder="First Name">
                      <div class="form-control-position">
                        <i class="bx bx-user"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label>Email</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <div class="position-relative has-icon-left">
                      <input type="email" id="email-icon" class="form-control" name="email-id-icon" placeholder="Email">
                      <div class="form-control-position">
                        <i class="bx bx-mail-send"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label>Mobile</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <div class="position-relative has-icon-left">
                      <input type="number" id="contact-icon" class="form-control" name="contact-icon"
                        placeholder="Mobile">
                      <div class="form-control-position">
                        <i class="bx bx-mobile"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label>Password</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <div class="position-relative has-icon-left">
                      <input type="password" id="pass-icon" class="form-control" name="contact-icon"
                        placeholder="Password">
                      <div class="form-control-position">
                        <i class="bx bx-lock"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-8 offset-md-4">
                    <fieldset>
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                        <label for="checkbox2">Remember me</label>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-outline-light mr-1 mb-1">Reset</button>
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <a href="" class="mt-3"><i class="bx bx-chevron-right">Next</i></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- last layout exmaple 2 -->
  </div>
  {{-- last line 1 --}}


  {{-- example form line 2 --}}
  <!-- layout example 3 -->
  <div class="row mt-4">
    <div class="col-md-6 col-12">
      <div class="card" style="height: 520px;">
        <div class="card-header">
          <h4 class="card-title">Vertical Form</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form form-vertical">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="first-name-vertical">First Name</label>
                      <input type="text" id="first-name-vertical" class="form-control" name="fname"
                        placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="email-id-vertical">Email</label>
                      <input type="email" id="email-id-vertical" class="form-control" name="email-id"
                        placeholder="Email">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="contact-info-vertical">Mobile</label>
                      <input type="number" id="contact-info-vertical" class="form-control" name="contact"
                        placeholder="Mobile">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password-vertical">Password</label>
                      <input type="password" id="password-vertical" class="form-control" name="contact"
                        placeholder="Password">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox3">
                        <label for="checkbox3">Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-outline-light mr-1 mb-1">Reset</button>
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <a href="" class="mt-3"><i class="bx bx-chevron-right">Next</i></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- last layout example 3  -->
    <!-- layout example 4 -->
    <div class="col-md-6 col-12">
      <div class="card" style="height: 520px;">
        <div class="card-header">
          <h4 class="card-title">Vertical Form with Icons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form form-vertical">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="first-name-icon">First Name</label>
                      <div class="position-relative has-icon-left">
                        <input type="text" id="first-name-icon" class="form-control" name="fname-icon"
                          placeholder="First Name">
                        <div class="form-control-position">
                          <i class="bx bx-user"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="email-id-icon">Email</label>
                      <div class="position-relative has-icon-left">
                        <input type="email" id="email-id-icon" class="form-control" name="email-id-icon"
                          placeholder="Email">
                        <div class="form-control-position">
                          <i class="bx bx-mail-send"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="contact-info-icon">Mobile</label>
                      <div class="position-relative has-icon-left">
                        <input type="number" id="contact-info-icon" class="form-control" name="contact-icon"
                          placeholder="Mobile">
                        <div class="form-control-position">
                          <i class="bx bx-mobile"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password-icon">Password</label>
                      <div class="position-relative has-icon-left">
                        <input type="password" id="password-icon" class="form-control" name="contact-icon"
                          placeholder="Password">
                        <div class="form-control-position">
                          <i class="bx bx-lock"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox4">
                        <label for="checkbox4">Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-outline-light mr-1 mb-1">Reset</button>
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <a href="" class="mt-3"><i class="bx bx-chevron-right">Next</i></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- last layout exmaple 4 -->
  </div>
  {{-- last line 2 --}}

  {{-- line form 3 --}}
  <!-- layout example 5 -->
  <div class="row mt-4">
    <div class="col-md-6 col-12">
      <div class="card" style="height: 423.688px;">
        <div class="card-header">
          <h4 class="card-title">Form With Label Placeholder</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="first-name-floating" class="form-control" placeholder="First Name"
                        name="fname-floating">
                      <label for="first-name-floating">First Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="email" id="email-id-floating" class="form-control" name="email-id-floating"
                        placeholder="Email">
                      <label for="email-id-floating">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="number" id="contact-info-floating" class="form-control" name="contact-floating"
                        placeholder="Mobile">
                      <label for="contact-info-floating">Mobile</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="password" id="password-floating" class="form-control" name="contact-floating"
                        placeholder="Password">
                      <label for="password-floating">Password</label>
                    </div>
                  </div>
                  <div class="form-group col-12">
                    <fieldset>
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox5">
                        <label for="checkbox5">Remember me</label>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-outline-light mr-1 mb-1">Reset</button>
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <a href="" class="mt-3"><i class="bx bx-chevron-right">Next</i></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- last layout example 5 -->
    <!-- layout example 6 -->
    <div class="col-md-6 col-12">
      <div class="card" style="height: 423.688px;">
        <div class="card-header">
          <h4 class="card-title">Form With Label Placeholder with Icons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group position-relative has-icon-left">
                      <input type="text" id="first-name-floating-icon" class="form-control" name="fname-floating-icon"
                        placeholder="First Name">
                      <div class="form-control-position">
                        <i class="bx bx-user"></i>
                      </div>
                      <label for="first-name-floating-icon">First Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group position-relative has-icon-left">
                      <input type="email" id="email-id-floating-icon" class="form-control" name="email-id-floating-icon"
                        placeholder="Email">
                      <div class="form-control-position">
                        <i class="bx bx-mail-send"></i>
                      </div>
                      <label for="email-id-floating-icon">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group position-relative has-icon-left">
                      <input type="number" id="contact-floating-icon" class="form-control" name="contact-floating-icon"
                        placeholder="Mobile">
                      <div class="form-control-position">
                        <i class="bx bx-mobile"></i>
                      </div>
                      <label for="contact-floating-icon">Mobile</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group position-relative has-icon-left">
                      <input type="password" id="password-floating-icon" class="form-control"
                        name="password-floating-icon" placeholder="Password">
                      <div class="form-control-position">
                        <i class="bx bx-lock"></i>
                      </div>
                      <label for="password-floating-icon">Password</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox6">
                        <label for="checkbox6">Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="reset" class="btn btn-outline-light mr-1 mb-1">Reset</button>
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <a href="" class="mt-3"><i class="bx bx-chevron-right">Next</i></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- last layout exmaple 6 -->
  </div>
  {{-- last line 3 --}}



  {{-- line form 4 --}}
  <div class="card mt-4">
    <div class="row">
      <div class="col-md">
        <div class="card-body">
          <h4 class="card-title">Multiple Column</h4>
          <form class="form">
            <div class="form-body">
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-label-group">
                    <input type="text" id="first-name-column" class="form-control" placeholder="First Name"
                      name="fname-column">
                    <label for="first-name-column">First Name</label>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-label-group">
                    <input type="text" id="last-name-column" class="form-control" placeholder="Last Name"
                      name="lname-column">
                    <label for="last-name-column">Last Name</label>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-label-group">
                    <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                    <label for="city-column">City</label>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-label-group">
                    <input type="text" id="country-floating" class="form-control" name="country-floating"
                      placeholder="Country">
                    <label for="country-floating">Country</label>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-label-group">
                    <input type="text" id="company-column" class="form-control" name="company-column"
                      placeholder="Company">
                    <label for="company-column">Company</label>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-label-group">
                    <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                      placeholder="Email">
                    <label for="email-id-column">Email</label>
                  </div>
                </div>
                <div class="form-group col-12">
                  <div class="form-group">
                    <div class="checkbox">
                      <input type="checkbox" class="checkbox-input" id="checkbox7">
                      <label for="checkbox7">Remember me</label>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                  <button type="reset" class="btn btn-outline-light mr-1 mb-1">Reset</button>
                  <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- last line 4 --}}

</div>
</div>
@endsection