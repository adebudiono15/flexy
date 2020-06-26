@extends('layouts.master')

@section('title','File Uploader')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script type="text/javascript" charset="utf8" src="/assets/dropzone/dropzone.js"></script>
@endpush


@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
  <div><a href="#"><i class="icon-home"></i> Home</a></div>
  <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
  <div><a href="#">Form Elements</a></div>
  <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
  <div>File Uploader</div>
</div>
<div class="pd-20 pt-0">
  <div class="alert bg-rgba-warning" role="alert">
    <strong>Warning!</strong> Don’t forget to specify an url option if you’re not using a form element, since
    Dropzone doesn’t know where to post to without an action attribute.
  </div>

  <div class="alert bg-rgba-warning" role="alert">
    <strong>Warning!</strong> Dropzone does not handle your file uploads on the server. You have to implement the
    code to receive and store the file yourself. See the section <a
      href="http://www.dropzonejs.com/#server-side-implementation" class="alert-link">Server side implementation</a>
    for more information.
  </div>

  <div class="alert bg-rgba-primary" role="alert">
    <strong>Info: </strong>
    We have changed path of error and success mark from vendor's css.
  </div>


  <!-- example 1 -->
  <div class="card mt-4">
    <div class="row">
      <div class="col-md">
        <div class="card-body">
          <h6 class="card-title mb-4">Single File Upload</h6>
          <p class="card-text">This example uploads a single file using dropzone js library. By default, dropzone is a
            multiple file uploader and does not have specific option allowing us to switch to single file uploading
            mode, but this functionality can be achieved by adding more options to the plugin settings, such as
            <code>maxfilesexceeded</code> callback and <code>maxFiles</code> option set to 1. <code>maxFiles: 1</code>
            is used to tell dropzone that there should be only one file. When there is more then 1 file the function
            <code>maxfilesexceeded</code> will be called, with the exceeding file in the first parameter. Now only 1
            file can be selected and it will be replaced with another one instead of adding it to the preview.</p>
          <section>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="preview-zone hidden">
                        <div class="box box-solid">
                          <div class="box-header with-border">
                            <div><b>Preview</b></div>
                            <div class="box-tools pull-right">
                            </div>
                          </div>
                          <div class="box-body"></div>
                        </div>
                      </div>
                      <div class="dropzone-wrapper">
                        <div class="dropzone-desc">
                          <i class="glyphicon glyphicon-download-alt"></i>
                          <p>Choose an image file or drag it here.</p>
                        </div>
                        <input type="file" name="img_logo" class="dropzone">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        </form>
        </section>
      </div>
    </div>
  </div>
  <!-- last example 1 -->

  {{-- example 2 --}}
  <div class="card mt-4">
    <div class="row">
      <div class="col-md">
        <div class="card-body">
          <h6 class="card-title mb-4">With Button Reset</h6>
          <section>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="preview-zone hidden">
                        <div class="box box-solid">
                          <div class="box-header with-border">
                            <div><b>Preview</b></div>
                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-danger btn-xs remove-preview">
                                <i class="fa fa-times"></i> Reset This Form
                              </button>
                            </div>
                          </div>
                          <div class="box-body"></div>
                        </div>
                      </div>
                      <div class="dropzone-wrapper">
                        <div class="dropzone-desc">
                          <i class="glyphicon glyphicon-download-alt"></i>
                          <p>Choose an image file or drag it here.</p>
                        </div>
                        <input type="file" name="img_logo" class="dropzone">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        </form>
        </section>
      </div>
    </div>
  </div>
</div>
{{-- last example 2 --}}

</div>
@endsection