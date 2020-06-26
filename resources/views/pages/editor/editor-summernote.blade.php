@extends('layouts.master')

@section('title','Summernote')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">HTML Editor</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Summernote</div>
</div>

<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Simple example</h6>
                    <div id="summernote">
                        <h1 class="ql-align-center">Summernote Text Editor</h1>
                        <p><br></p>
                        <iframe class="ql-video ql-align-center" frameborder="0" allowfullscreen="true"
                            src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0" height="238"
                            width="560"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- last example 1 -->

</div>
@endsection