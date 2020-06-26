@extends('layouts.master')

@section('title','Navbar')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div> <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div> <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Navbar</div>
</div>
<div class="pd-20 pt-0">

    <div class="card mt-3">
        <div class="card-body">
            <h6 class="card-title mb-4" >Navbar Default</h6>

            <div class="mt-3">
                <p>We have a series of Navbar component.</p>
                <p>You can get detail documentation for navbar from <a href="https://getbootstrap.com/docs/4.4/components/navbar/">Bootstrap Navbar</a></p>

                <div class="mt-3">
                <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                <div class="bg-dark pd-20 pb-0">
<pre class="text-white">
&#x3C;div class=&#x22;navbar box-shadow&#x22;&#x3E;
    &#x3C;div class=&#x22;mr-auto navbar-title&#x22;&#x3E;
        Navbar Title
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;ml-auto d-flex justify-content-end align-items-center&#x22;&#x3E;
        &#x3C;a class=&#x22;navbar-info-icon&#x22; href=&#x22;#&#x22;&#x3E;&#x3C;i class=&#x22;icon-mail&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;span class=&#x22;info-count&#x22;&#x3E;3&#x3C;/span&#x3E;&#x3C;/a&#x3E;
        &#x3C;a class=&#x22;navbar-info-icon toggle-calendar&#x22; href=&#x22;javascript:;&#x22;&#x3E;&#x3C;i class=&#x22;icon-calendar&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;span class=&#x22;info-count&#x22;&#x3E;5&#x3C;/span&#x3E;&#x3C;/a&#x3E;
        &#x3C;div class=&#x22;dropdown&#x22;&#x3E;
            &#x3C;a class=&#x22;navbar-user-info toggle-dropdown&#x22; href=&#x22;javascript:;&#x22;&#x3E;&#x3C;img src=&#x22;assets/img/avatar_2.jpeg&#x22; alt=&#x22;user&#x22; class=&#x22;rounded-circle&#x22; width=&#x22;35&#x22; /&#x3E;&#x3C;/a&#x3E;
            &#x3C;ul class=&#x22;dropdown-wrapper dropdown-menu-right dropdown-menu-user&#x22;&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;&#x3C;i class=&#x22;icon-user&#x22;&#x3E;&#x3C;/i&#x3E; Edit Profile&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;&#x3C;i class=&#x22;icon-mail&#x22;&#x3E;&#x3C;/i&#x3E; My Inbox&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;&#x3C;i class=&#x22;icon-check-square&#x22;&#x3E;&#x3C;/i&#x3E; My Task&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;div class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/div&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;&#x3C;i class=&#x22;icon-power&#x22;&#x3E;&#x3C;/i&#x3E; Logout&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;/ul&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
                    </pre>
                </div>
                </div>
            </div>

            <div class="mt-3">
                
            @include('components.navbar')

            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h6 class="card-title mb-4" >Navbar Color</h6>

            <p>We have navbar components with background color</p>
            <p>You can add background color class on <a href="colors.html">Colors</a> page, <span class="bg-grey ph-5">.bg-[main/primary/secondary/success/warning/danger/ligh/dark]</span></p>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-main'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-primary'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-secondary'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-success'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-warning'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-danger'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-info'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-light'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-dark'])
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h6 class="card-title mb-4" >Navbar Gradient</h6>
                
            <p>We have navbar components with gradient background color</p>
            <p>You can add gradient background color class on <a href="colors.html">Colors</a> page, <code>.bg-gradient-[main/primary/secondary/success/warning/danger/ligh/dark]</code>.</p>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-gradient-main'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-gradient-primary'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-gradient-secondary'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-gradient-success'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-gradient-warning'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-gradient-danger'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-gradient-info'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-gradient-light'])
            </div>

            <div class="mt-3">
            @include('components.navbar', [ 'class' => 'bg-gradient-dark'])
            </div>
            
        </div>
    </div>

</div>
@endsection