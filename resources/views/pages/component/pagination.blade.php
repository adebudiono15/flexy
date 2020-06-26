@extends('layouts.master')

@section('title','Pagination')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
div class="breadcrumb d-flex align-items-center pd-20 pb-0">
<div><a href="#"><i class="icon-home"></i> Home</a></div>
<div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
<div><a href="#">Components</a></div>
<div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
<div>Pagination</div>
</div>
<div class="pd-20 pt-0">

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Default</h5>
                    <p class="card-text">A default pagination with active item.</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Border</h5>
                    <p class="card-text">A pagination with active bordered item.</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link border-main" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Circle</h5>
                    <p class="card-text">A default pagination with active item circle. </p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Border Circle</h5>
                    <p class="card-text">A pagination with active bordered item circle.</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link border-main rounded-circle" href="#">3</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Pagination Pill</h5>
                    <p class="card-text">A pagination with background and pill, <br />just add
                        <code>.pagination-main .pagination-pill</code>.</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-main pagination-pill">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i>
                                    Prev</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i
                                        class="icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Background Main</h5>
                    <p class="card-text">A pagination with background, <br /> just add
                        <code>.pagination-main</code>.</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-main">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Pagination Pill</h5>
                    <p class="card-text">A pagination with background and pill, <br /> just add
                        <code>.pagination-primary .pagination-pill</code>.</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-primary pagination-pill">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i>
                                    Prev</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i
                                        class="icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Background Primary</h5>
                    <p class="card-text">A pagination with background, <br />just add
                        <code>.pagination-primary</code>.</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-primary">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Pagination Pill</h5>
                    <p class="card-text">A pagination with background and pill, <br /> just add
                        <code>.pagination-secondary .pagination-pill</code>.</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-secondary pagination-pill">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i>
                                    Prev</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i
                                        class="icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Background Secondary</h5>
                    <p class="card-text">A pagination with background, <br />just add
                        <code>.pagination-secondary</code> .</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-secondary">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Pagination Pill</h5>
                    <p class="card-text">A pagination with background and pill, <br /> just add
                        <code>.pagination-success .pagination-pill</code> .</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-success pagination-pill">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i>
                                    Prev</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i
                                        class="icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Background Success</h5>
                    <p class="card-text">A pagination with background, <br />just add
                        <code>.pagination-success</code> .</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-success">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Pagination Pill</h5>
                    <p class="card-text">A pagination with background and pill, <br /> just add
                        <code>.pagination-warning .pagination-pill</code> .</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-warning pagination-pill">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i>
                                    Prev</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i
                                        class="icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Background Warning</h5>
                    <p class="card-text">A pagination with background, <br />just add
                        <code>.pagination-warning</code> .</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-warning">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Pagination Pill</h5>
                    <p class="card-text">A pagination with background and pill, <br /> just add
                        <code>.pagination-danger .pagination-pill</code> .</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-danger pagination-pill">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i>
                                    Prev</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i
                                        class="icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Background Danger</h5>
                    <p class="card-text">A pagination with background, <br />just add
                        <code>.pagination-danger</code> .</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-danger">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>..
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Pagination Pill</h5>
                    <p class="card-text">A pagination with background and pill, <br /> just add
                        <code>.pagination-info .pagination-pill</code> .</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-info pagination-pill">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i>
                                    Prev</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i
                                        class="icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Background Info</h5>
                    <p class="card-text">A pagination with background, <br />just add <code>.pagination-info</code>.
                    </p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-info">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Pagination Pill</h5>
                    <p class="card-text">A pagination with background and pill, <br /> just add
                        <code>.pagination-dark .pagination-pill</code> </span></p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-dark pagination-pill">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i>
                                    Prev</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link rounded-circle" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i
                                        class="icon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Background Dark</h5>
                    <p class="card-text">A pagination with background, <br />just add <code>.pagination-dark</code>.
                    </p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination bg-pagination pagination-dark">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection