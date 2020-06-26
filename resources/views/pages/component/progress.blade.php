@extends('layouts.master')

@section('title','Progress')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Components</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Progress</div>
</div>
<div class="pd-20 pt-0">

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Default</h5>
            <p class="card-text">Use class <code>progress-bar .bg-[color_name] </code> to add
                different color.</p>

            <div class="progress mb-3">
                <div class="progress-bar bg-main" role="progressbar" style="width: 10%" aria-valuenow="10"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 90%" aria-valuenow="90"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>

        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Progress Bar with Label</h5>
            <p class="card-text">Use class <code>.progress-bar .bg-[color_name]</code> to add
                different color.</p>

            <div class="progress mb-3">
                <div class="progress-bar bg-main" role="progressbar" style="width: 10%" aria-valuenow="10"
                    aria-valuemin="0" aria-valuemax="100"><span>10%</span></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100"><span>25%</span></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"><span>50%</span></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40"
                    aria-valuemin="0" aria-valuemax="100"><span>40%</span></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"><span>75%</span></div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60"
                    aria-valuemin="0" aria-valuemax="100"><span>60%</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 90%" aria-valuenow="90"
                    aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
            </div>

        </div>
    </div>


    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Progress Bar Height</h5>
            <p class="card-text">Just add style <code>height</code> on class <code>.progress</code>.</p>

            <div class="progress mb-3" style="height: 5px;">
                <div class="progress-bar bg-main" role="progressbar" style="width: 10%" aria-valuenow="10"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3" style="height: 5px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3" style="height: 5px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3" style="height: 5px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3" style="height: 5px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress" style="height: 5px;">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 90%" aria-valuenow="90"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Progress Bar Top</h5>
                    <p class="card-text">Just add class <code>.progress-top</code>.</p>

                    <div class="progress progress-top" style="height: 5px;">
                        <div class="progress-bar bg-main" role="progressbar" style="width: 30%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Progress Bar Bottom</h5>
                    <p class="card-text">Just add class <code>.progress-bottom</code>.</p>

                    <div class="progress progress-bottom" style="height: 5px;">
                        <div class="progress-bar bg-main" role="progressbar" style="width: 30%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection