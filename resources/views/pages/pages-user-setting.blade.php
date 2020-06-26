@extends('layouts.master')

@section('title','User Seting')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />
@endpush

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="/assets/js/select2.min.js"></script>
<script src="/assets/js/form-select2.min.js"></script>
<script>
    $(function(){
        $(".datepicker").datepicker({
          format: 'yyyy-mm-dd',
          autoclose: true,
          todayHighlight: true,
        });
      });
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>User Seting</div>
</div>

<div class="pd-20 pt-0">
    <section id="page-account-settings">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0 pills-stacked">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="account-pill-general"
                                    data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i class="bx bx-cog mr-2"></i>
                                    General
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="account-pill-password"
                                    data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i class="bx bx-lock mr-2"></i>
                                    <span>Change Password</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="account-pill-info" data-toggle="pill"
                                    href="#account-vertical-info" aria-expanded="false">
                                    <i class="bx bx-info-circle mr-2"></i>
                                    <span>Info</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="account-pill-social"
                                    data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                    <i class="bx bxl-twitch mr-2"></i>
                                    <span>Social links</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="account-pill-connections"
                                    data-toggle="pill" href="#account-vertical-connections" aria-expanded="false">
                                    <i class="bx bx-link mr-2"></i>
                                    <span>Connections</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="account-pill-notifications"
                                    data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                    <i class="bx bx-bell mr-2"></i>
                                    <span>Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                            aria-labelledby="account-pill-general" aria-expanded="true">
                                            <div class="media">
                                                <a href="">
                                                    <img src="/assets/img/avatar_2.jpeg" class="rounded mr-75"
                                                        alt="profile image" height="64" width="64">
                                                </a>
                                                <div class="media-body mt-25">
                                                    <div
                                                        class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                        <label for="select-files"
                                                            class="btn btn-sm btn-clean-info ml-3 mb-3 mb-sm-0">
                                                            <span>Upload new photo</span>
                                                            <input id="select-files" type="file" hidden="">
                                                        </label>
                                                        <button class="btn btn-sm btn-clean-dark ml-3">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <form novalidate="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Username</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username" value="Budiono15" required=""
                                                                    data-validation-required-message="This username field is required">
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Name" value="Ade Budiono" required=""
                                                                    data-validation-required-message="This name field is required">
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>E-mail</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email" value="adebudiono15@hogward.com"
                                                                    required=""
                                                                    data-validation-required-message="This email field is required">
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="alert bg-rgba-warning alert-dismissible mb-2"
                                                            role="alert">
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <p class="mb-0">
                                                                Your email is not confirmed. Please check your inbox.
                                                            </p>
                                                            <a href="" style="text-decoration:none;">Resend
                                                                confirmation</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Company</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Company name">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                            aria-labelledby="account-pill-password" aria-expanded="false">
                                            <form novalidate="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Old Password</label>
                                                                <input type="password" class="form-control" required=""
                                                                    placeholder="Old Password"
                                                                    data-validation-required-message="This old password field is required">
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>New Password</label>
                                                                <input type="password" name="password"
                                                                    class="form-control" placeholder="New Password"
                                                                    required=""
                                                                    data-validation-required-message="The password field is required"
                                                                    minlength="6">
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Retype new Password</label>
                                                                <input type="password" name="con-password"
                                                                    class="form-control" required=""
                                                                    data-validation-match-match="password"
                                                                    placeholder="New Password"
                                                                    data-validation-required-message="The Confirm password field is required"
                                                                    minlength="6">
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                            aria-labelledby="account-pill-info" aria-expanded="false">
                                            <form novalidate="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Bio</label>
                                                            <textarea class="form-control" id="accountTextarea" rows="3"
                                                                placeholder="Your Bio data here..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Birth date</label>
                                                                <input type="text" class="form-control datepicker"
                                                                    id="date" name="date" placeholder="Your Birth date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <select class="form-control" id="accountSelect">
                                                                <option>USA</option>
                                                                <option>India</option>
                                                                <option>Canada</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Languages</label>
                                                            <select
                                                                class="select2 form-control select2-hidden-accessible"
                                                                multiple="" data-select2-id="1" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option value="English" data-select2-id="1">English
                                                                </option>
                                                                <option value="Spanish" selected="" data-select2-id="9">
                                                                    Spanish</option>
                                                                <option value="French" data-select2-id="2">French
                                                                </option>
                                                                <option value="Russian" data-select2-id="3">Russian
                                                                </option>
                                                                <option value="German" data-select2-id="4">German
                                                                </option>
                                                                <option value="Arabic" selected="" data-select2-id="5">
                                                                    Arabic</option>
                                                                <option value="Indonesia" data-select2-id="6">
                                                                    Indonesia
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Phone</label>
                                                                <input type="text" class="form-control" required=""
                                                                    placeholder="Phone number" value="(+656) 254 2568"
                                                                    data-validation-required-message="This phone number field is required">
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Website</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Website address">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Favorite Music</label>
                                                            <select
                                                                class="select2 form-control select2-hidden-accessible"
                                                                multiple="" data-select2-id="7" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option value="Jazz" data-select2-id="7">Jazz
                                                                </option>
                                                                <option value="Disco" selected="" data-select2-id="8">
                                                                    Disco</option>
                                                                <option value="Pop" data-select2-id="9">Pop
                                                                </option>
                                                                <option value="Folk" data-select2-id="10">Folk
                                                                </option>
                                                                <option value="Techno" data-select2-id="11">Techno
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Favorite Movie</label>
                                                            <select
                                                                class="select2 form-control select2-hidden-accessible"
                                                                multiple="" data-select2-id="12" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option value="Iron Man" data-select2-id="12">Iron Man
                                                                </option>
                                                                <option value="Harry Potter" selected=""
                                                                    data-select2-id="13">
                                                                    Harry Potter</option>
                                                                <option value="Airplane" data-select2-id="14">Airplane
                                                                </option>
                                                                <option value="Perl Harbour" data-select2-id="15">Perl
                                                                    Harbour
                                                                </option>
                                                                <option value="The Dark Knight" data-select2-id="16">
                                                                    The Dark Knight
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-social" role="tabpanel"
                                            aria-labelledby="account-pill-social" aria-expanded="false">
                                            <form>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Twitter</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Add link" value="https://www.twitter.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Facebook</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Google+</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>LinkedIn</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Add link" value="https://www.linkedin.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Instagram</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Quora</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                                            aria-labelledby="account-pill-connections" aria-expanded="false">
                                            <div class="row">
                                                <div class="col-12 my-2">
                                                    <a href="javascript: void(0);" class="btn btn-info">Connect to
                                                        <strong>Twitter</strong></a>
                                                </div>
                                                <hr>
                                                <div class="col-12 my-2">
                                                    <button class=" btn btn-sm btn-clean-dark float-right">edit</button>
                                                    <h6>You are connected to facebook.</h6>
                                                    <p>budiono@gmail.com</p>
                                                </div>
                                                <hr>
                                                <div class="col-12 my-2">
                                                    <a href="javascript: void(0);" class="btn btn-danger">Connect to
                                                        <strong>Google</strong>
                                                    </a>
                                                </div>
                                                <hr>
                                                <div class="col-12 my-2">
                                                    <button class=" btn btn-sm btn-clean-dark float-right">edit</button>
                                                    <h6>You are connected to Instagram.</h6>
                                                    <p>budiono@gmail.com</p>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                        changes</button>
                                                    <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                            aria-labelledby="account-pill-notifications" aria-expanded="false">
                                            <div class="row">
                                                <h6 class="m-1">Activity</h6>
                                                <div class="col-12 mb-1 mt-3">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" checked=""
                                                            id="accountSwitch1">
                                                        <label class="custom-control-label mr-1"
                                                            for="accountSwitch1"></label>
                                                        <span class="switch-label w-100">Email me when someone comments
                                                            onmy
                                                            article</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" checked=""
                                                            id="accountSwitch2">
                                                        <label class="custom-control-label mr-1"
                                                            for="accountSwitch2"></label>
                                                        <span class="switch-label w-100">Email me when someone answers
                                                            on
                                                            my
                                                            form</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="accountSwitch3">
                                                        <label class="custom-control-label mr-1"
                                                            for="accountSwitch3"></label>
                                                        <span class="switch-label w-100">Email me hen someone follows
                                                            me</span>
                                                    </div>
                                                </div>
                                                <h6 class="m-1 mt-3">Application</h6>
                                                <div class="col-12 mb-1 mt-3">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" checked=""
                                                            id="accountSwitch4">
                                                        <label class="custom-control-label mr-1"
                                                            for="accountSwitch4"></label>
                                                        <span class="switch-label w-100">News and announcements</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="accountSwitch5">
                                                        <label class="custom-control-label mr-1"
                                                            for="accountSwitch5"></label>
                                                        <span class="switch-label w-100">Weekly product updates</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" checked=""
                                                            id="accountSwitch6">
                                                        <label class="custom-control-label mr-1"
                                                            for="accountSwitch6"></label>
                                                        <span class="switch-label w-100">Weekly blog digest</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                        changes</button>
                                                    <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection