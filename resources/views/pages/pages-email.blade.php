@extends('layouts.master')

@section('title','Email')

@push('css')
<link rel="stylesheet" href="/assets/css/mail.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endpush

@push('js')
<script src="/assets/email/email.min.js"></script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-10">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Email</div>
</div>
<div class="pd-0 pt-0">

    {{-- Sidebar --}}
    <div>
        <div class="col mt-2">
            <div class="row inbox-wrapper">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 email-aside border-lg-right">
                                    <div class="aside-content">
                                        <div class="aside-header">
                                            <button class="navbar-toggle" data-target=".aside-nav"
                                                data-toggle="collapse" type="button"><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg></span></button><span class="title">Mail Service</span>
                                            <p class="description">amiahburton@gmail.com</p>
                                        </div>
                                        <div class="aside-compose"><a class="btn btn-primary btn-block" href="">Compose
                                                Email</a></div>
                                        <div class="aside-nav collapse">
                                            <ul class="nav">
                                                <li class="active"><a href=""><span class="icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-inbox">
                                                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12">
                                                                </polyline>
                                                                <path
                                                                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                                                </path>
                                                            </svg></span>Inbox<span
                                                            class="badge badge-danger-muted text-white font-weight-bold float-right">2</span></a>
                                                </li>
                                                <li><a href="#"><span class="icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-mail">
                                                                <path
                                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                                </path>
                                                                <polyline points="22,6 12,13 2,6"></polyline>
                                                            </svg></span>Sent Mail</a></li>
                                                <li><a href="#"><span class="icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-briefcase">
                                                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2">
                                                                </rect>
                                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16">
                                                                </path>
                                                            </svg></span>Important<span
                                                            class="badge badge-info-muted text-white font-weight-bold float-right">4</span></a>
                                                </li>
                                                <li><a href="#"><span class="icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-file">
                                                                <path
                                                                    d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                                </path>
                                                                <polyline points="13 2 13 9 20 9"></polyline>
                                                            </svg></span>Drafts</a></li>
                                                <li><a href="#"><span class="icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-star">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg></span>Tags</a></li>
                                                <li><a href="#"><span class="icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                            </svg></span>Trash</a></li>
                                            </ul>
                                            <span class="title">Labels</span>
                                            <ul class="nav nav-pills nav-stacked">
                                                <li>
                                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-tag text-warning">
                                                            <path
                                                                d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                            </path>
                                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                                        </svg> Important </a>
                                                </li>
                                                <li class="active"><a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-tag text-primary">
                                                            <path
                                                                d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                            </path>
                                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                                        </svg> Business </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-tag text-info">
                                                            <path
                                                                d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                            </path>
                                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                                        </svg> Inspiration </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 email-content">
                                    <div class="email-head">
                                        <div class="email-head-subject">
                                            <div class="title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="active" href="#"><span class="icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-star text-primary-muted">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg></span></a>
                                                    <span>New Project</span>
                                                </div>
                                                <div class="icons">
                                                    <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-share text-muted hover-primary-muted"
                                                            data-toggle="tooltip" title=""
                                                            data-original-title="Forward">
                                                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                                            <polyline points="16 6 12 2 8 6"></polyline>
                                                            <line x1="12" y1="2" x2="12" y2="15"></line>
                                                        </svg></a>
                                                    <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-printer text-muted"
                                                            data-toggle="tooltip" title="" data-original-title="Print">
                                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                            <path
                                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                            </path>
                                                            <rect x="6" y="14" width="12" height="8"></rect>
                                                        </svg></a>
                                                    <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash text-muted"
                                                            data-toggle="tooltip" title="" data-original-title="Delete">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="email-head-sender d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="/assets/img/avatar_3.jpeg" alt="Avatar"
                                                        class="rounded-circle user-avatar-md">
                                                </div>
                                                <div class="sender d-flex align-items-center">
                                                    <a href="#">John Doe</a> <span>to</span><a href="#">me</a>
                                                    <div class="actions dropdown">
                                                        <a class="icon" href="#" data-toggle="dropdown"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></a>
                                                        <div class="dropdown-menu" role="menu">
                                                            <a class="dropdown-item" href="#">Mark as read</a>
                                                            <a class="dropdown-item" href="#">Mark as unread</a>
                                                            <a class="dropdown-item" href="#">Spam</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="date">Nov 20, 11:20</div>
                                        </div>
                                    </div>
                                    <div class="email-body">
                                        <p>Hello,</p>
                                        <br>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque
                                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                            et quasi
                                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                            quia
                                            voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                            dolores eos
                                            qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                            ipsum
                                            quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                            modi
                                            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        <br>
                                        <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur
                                            ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                            tellus
                                            eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem
                                            neque sed
                                            ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                            Maecenas
                                            nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis
                                            faucibus.
                                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis
                                            leo. Sed
                                            fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                                        <br>
                                        <p><strong>Regards</strong>,<br> John Doe</p>
                                    </div>
                                    <div class="email-attachments">
                                        <div class="title">Attachments <span>(3 files, 12,44 KB)</span></div>
                                        <ul>
                                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-file">
                                                        <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                        </path>
                                                        <polyline points="13 2 13 9 20 9"></polyline>
                                                    </svg> Reference.zip <span class="text-muted tx-11">(5.10
                                                        MB)</span></a>
                                            </li>
                                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-file">
                                                        <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                        </path>
                                                        <polyline points="13 2 13 9 20 9"></polyline>
                                                    </svg> Instructions.zip <span class="text-muted tx-11">(3.15
                                                        MB)</span></a>
                                            </li>
                                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-file">
                                                        <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                        </path>
                                                        <polyline points="13 2 13 9 20 9"></polyline>
                                                    </svg> Team-list.pdf <span class="text-muted tx-11">(4.5
                                                        MB)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- last sidebar --}}


    </div>
    @endsection