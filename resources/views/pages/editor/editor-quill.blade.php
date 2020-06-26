@extends('layouts.master')

@section('title','Quill')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
<link rel="stylesheet" href="/assets/css/quill.snow.css">
@endpush

@push('js')
<script src="/assets/quill/quill.js"></script>
<script>
    var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">HTML Editor</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Quill</div>
</div>

<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Simple example</h6>
                    <div id="editor">
                        <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                        <p><br></p>
                        <p>Quill is a free, <a href="https://github.com/quilljs/quill/" target="_blank">open source</a>
                            WYSIWYG editor built for
                            the modern web. With its <a href="http://quilljs.com/docs/modules/" target="_blank">modular
                                architecture</a> and
                            expressive <a href="http://quilljs.com/docs/api/" target="_blank">API</a>, it is completely
                            customizable to fit any
                            need.</p> <br>
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