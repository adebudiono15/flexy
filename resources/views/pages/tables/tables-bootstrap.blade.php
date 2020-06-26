@extends('layouts.master')

@section('title','Table')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush


@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Tables</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Table</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Basic Tables</h6>
                    <p class="card-text">Using the most basic table up, here’s how
                        <code>.table</code>-based tables look in Bootstrap. You can use any example
                        of below table for your table and it can be use with any type of bootstrap tables.</p>
                    <p><span class="text-bold-600">Example 1:</span> Table with outer spacing</p>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                    <h6 class="card-title mb-4">Inverse Table</h6>
                    <p>You can also invert the colors—with light text on dark backgrounds—with <code>.table-dark</code>.
                    </p>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-dark mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="mt-5">You can also invert the colors—with dark text on light backgrounds—with
                        <code>.table-light</code>.</p>
                    <div class="table-responsive">
                        <table class="table table-light mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-white text-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-white text-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-white text-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-white text-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-white text-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                    <h6 class="card-title mb-4">Table Head Options</h6>
                    <p>Similar to tables and dark tables, use the modifier classes <code>.thead-light</code> or <code
                            class="highlighter-rouge">.thead-dark</code> to
                        make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 3 --}}

    {{-- example 4 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Striped Rows</h6>
                    <p>Use <code>.table-striped</code> to add zebra-striping to any
                        table row within the <code>&lt;tbody&gt;</code>. This styling doesn't work in IE8
                        and below as <code>:nth-child</code> CSS selector isn't supported.</p>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 4 --}}

    {{-- example 5 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Striped Inverse Dark</h6>
                    <p>Use <code>.table-dark</code> with <code>.table-striped</code> to add zebra-striping to
                        any inverse table row within the <code>&lt;tbody&gt;</code>. This styling doesn't work in IE8
                        and below as
                        <code>:nth-child</code> CSS selector isn't supported.</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-dark mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i class="badge-circle bx bx-envelope font-medium-1"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 5 --}}

    {{-- example 6 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Bordered Table</h6>
                    <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells. For
                        Inverse Dark Table, add <code>.table-dark</code> along with <code>.table-bordered</code>.</p>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 6 --}}

    {{-- example 7 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Borderless Table</h6>
                    <p>Add <code>.table-borderless</code> for a table without borders. It can also be used on
                        dark tables.</p>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 7 --}}

    {{-- example 8 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Hoverable Rows</h6>
                    <p>Add <code>.table-hover</code> to enable a hover state on table rows within a
                        <code>&lt;tbody&gt;</code>.</p>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 8 --}}

    {{-- example 9 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Contextual Classes</h6>
                    <p>Use contextual classes to color table rows or individual cells. Read full documnetation <a
                            href="https://getbootstrap.com/docs/4.3/content/tables/#contextual-classes"
                            target="_blank">here.</a></p>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <td class="text-bold-600">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr class="table-primary">
                                    <td class="text-bold-600">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-600">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td class="text-bold-600">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr class="table-success">
                                    <td class="text-bold-600">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr class="table-danger">
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr class="table-warning">
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr class="table-info">
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr class="table-light">
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr class="table-dark">
                                    <td class="text-bold-600">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-600">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 9 --}}

    {{-- example 10 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Responsive tables</h6>
                        <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table
                            responsive across all
                            viewports by adding <code class="highlighter-rouge">.table-responsive</code> class on <code
                                class="highlighter-rouge">.table</code>. Or, pick a maximum breakpoint with which to
                            have a responsive
                            table up to by adding <code
                                class="highlighter-rouge"> .table-responsive{-sm|-md|-lg|-xl}</code>. Read full
                            documnetation <a href="https://getbootstrap.com/docs/4.3/content/tables/#responsive-tables"
                                target="_blank">here.</a></p>
                    </div>

                    <!-- table responsive -->
                    <table class="table table-responsive mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Heading 1</th>
                                <th scope="col">Heading 2</th>
                                <th scope="col">Heading 3</th>
                                <th scope="col">Heading 4</th>
                                <th scope="col">Heading 5</th>
                                <th scope="col">Heading 6</th>
                                <th scope="col">Heading 7</th>
                                <th scope="col">Heading 8</th>
                                <th scope="col">Heading 9</th>
                                <th scope="col">Heading 10</th>
                                <th scope="col">Heading 11</th>
                                <th scope="col">Heading 12</th>
                                <th scope="col">Heading 13</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Michael Right</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>Michael Right</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <td>Michael Right</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- last example 10 --}}



</div>
@endsection