@extends('layouts.master')

@section('title', 'Dashboard')

@push('css_plugin')
<link rel="stylesheet" href="libs/apexcharts/apexcharts.css">
@endpush

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@section('content')
<div class="dashboard pd-20">
    <div class="row">
        <div class="col-md-4">
            <div class="card widget-sparkchart">
                <div class="card-body pd-0">
                    <div class="widget-icon bg-clean-main"><i class="icon-users"></i></div>
                    <div id="chartinq"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card widget-sparkchart">
                <div class="card-body pd-0">
                    <div class="widget-icon bg-clean-info"><i class="icon-dollar-sign"></i></div>
                    <div id="chartsales"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-gradient-info widget-anniversary">
                <div class="card-body d-flex justify-content-center align-items-center" style="height:170px">
                    <div>
                        <div class="text-center">
                            <div class="mr-2"><img src="assets/img/avatar_2.jpeg" class="rounded-circle" width="50" />
                            </div>
                            <h5 class="mt-2 anniversary-title">Top Sales 2020</h5>
                            <div class="font-weight-light"><em>Alexander Thomson</em> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="mb-0">2.7 K <small class="text-grey">(2.780)</small></h5>
                            <div>Avg Visitor</div>

                            <div class="mt-4 mb-2">
                                <div><small>Direct URL: 28K</small></div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-main" role="progressbar" style="width: 28%"
                                        aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="mt-3"><small>Social Media: 58K</small></div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar" role="progressbar" style="width: 58%" aria-valuenow="58"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="mt-3"><small>Referal: 75K</small></div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="mt-3"><small>Ads: 90K</small></div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-5">
                            <div id="sparkBar"></div>
                            <div class="text-center mt-3">
                                <a href="#" class="btn btn-info btn-sm text-white">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Tickets</h6>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="mt-3 d-flex">
                                <div class="ph-10 pv-5 mb-0 mt-0 rounded-left bg-main w-50px text-center">120</div>
                                <div class="ph-10 pv-5 rounded-right bg-light"><small>Bronze
                                        Tickets</small>
                                </div>
                            </div>
                            <div class="mt-3 d-flex">
                                <div
                                    class="ph-10 pv-5 mb-0 mt-0 rounded-left bg-secondary text-white w-50px text-center">
                                    110</div>
                                <div class="ph-10 pv-5 rounded-right bg-light flex-grow-1"><small>Silver Tickets</small>
                                </div>
                            </div>
                            <div class="mt-3 d-flex">
                                <div class="ph-10 pv-5 mb-0 mt-0 rounded-left bg-warning w-50px text-center">90</div>
                                <div class="ph-10 pv-5 rounded-right bg-light flex-grow-1"><small>Gold Tickets</small>
                                </div>
                            </div>
                            <div class="mt-3 d-flex">
                                <div class="ph-10 pv-5 mb-0 mt-0 rounded-left bg-info text-white w-50px text-center">40
                                </div>
                                <div class="ph-10 pv-5 rounded-right bg-light flex-grow-1"><small>Platinum
                                        Tickets</small></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="ticketChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-4">Product Order</h6>
                    <div id="chartOrder" class="mb-2"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-4">Visitor by Country</h6>

                    <div class="mt-3">
                        <table class="table table-sm align-middle mb-1">
                            <thead class="sm-head">
                                <tr>
                                    <th>Flag</th>
                                    <th>Name</th>
                                    <th>Visitor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="assets/img/usa_icon.png" class="rounded-circle" width="25" /></td>
                                    <td>United States</td>
                                    <td width="20"><strong>129</strong></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/img/japan_icon.png" class="rounded-circle" width="25" /></td>
                                    <td>Japan</td>
                                    <td><strong>100</strong></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/img/korea_icon.png" class="rounded-circle" width="25" /></td>
                                    <td>Korea</td>
                                    <td><strong>80</strong></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/img/spain_icon.png" class="rounded-circle" width="25" /></td>
                                    <td>Spain</td>
                                    <td><strong>70</strong></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/img/brazil_icon.png" class="rounded-circle" width="25" /></td>
                                    <td>Brazil</td>
                                    <td><strong>60</strong></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/img/uk_icon.png" class="rounded-circle" width="25" /></td>
                                    <td>United Kingdom</td>
                                    <td><strong>50</strong></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/img/indonesia_icon.png" class="rounded-circle" width="25" />
                                    </td>
                                    <td>Indonesia</td>
                                    <td><strong>40</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-4">Upcoming Event</h6>

                    <div class="row event-list-item mt-4">
                        <div class="col-4">
                            <div class="rounded bg-main text-center pt-1 pb-1">
                                <div class="fs-sm">MAY</div>
                                <div class="fs-2hr font-weight-light">14</div>
                                <div class="fs-sm">SUNDAY</div>
                            </div>
                        </div>
                        <div class="col-8 pl-0">
                            <h6><a href="#">Elephant kind live in California</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="row event-list-item mt-3">
                        <div class="col-4">
                            <div class="rounded bg-info text-center pt-1 pb-1">
                                <div class="fs-sm">MAY</div>
                                <div class="fs-2hr font-weight-light">24</div>
                                <div class="fs-sm">MONDAY</div>
                            </div>
                        </div>
                        <div class="col-8 pl-0">
                            <h6><a href="#">Gallery of the World</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="row event-list-item mt-3">
                        <div class="col-4">
                            <div class="rounded bg-warning text-center pt-1 pb-1">
                                <div class="fs-sm">JUN</div>
                                <div class="fs-2hr font-weight-light">28</div>
                                <div class="fs-sm">THURSDAY</div>
                            </div>
                        </div>
                        <div class="col-8 pl-0">
                            <h6><a href="#">We The Fest 2020</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sales-order-wrapper mt-4">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Sales Order</h6>

                <div class="mt-4 table-responsive">
                    <table class="table table-md align-middle table-zoom-hover no-border">
                        <thead class="md-head">
                            <tr>
                                <th>No Order</th>
                                <th>Status</th>
                                <th style="width:180px;">Sales</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#66453</td>
                                <td><span class="badge badge-pill badge-md font-weight-light badge-primary">Open</span>
                                </td>
                                <td>
                                    <div class="multiple-avatar-icon">
                                        <img src="assets/img/avatar_2.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Alexander Thomson" />
                                        <img src="assets/img/avatar_3.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Michael Bara" />
                                        <img src="assets/img/avatar_4.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Gerald Olando" />
                                        <small>2+</small>
                                    </div>
                                </td>
                                <td>John Doe</td>
                                <td>$24.00</td>
                                <td>2020/05/23</td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-light mr-2" data-toggle="tooltip"
                                        title="View Detail"><i class="icon-eye"></i></a>
                                    <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip"
                                        title="Cancel Order"><i class="bx bxs-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>#66453</td>
                                <td><span
                                        class="badge badge-pill badge-md font-weight-light badge-success">Closed</span>
                                </td>
                                <td>
                                    <div class="multiple-avatar-icon">
                                        <img src="assets/img/avatar_2.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Alexander Thomson" />
                                        <img src="assets/img/avatar_3.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Michael Bara" />
                                        <img src="assets/img/avatar_4.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Alexander Thomson" />
                                        <img src="assets/img/avatar_5.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Gerald Olando" />
                                        <small>2+</small>
                                    </div>
                                </td>
                                <td>Alexander Luxor</td>
                                <td>$19.80</td>
                                <td>2020/05/23</td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-light mr-2" data-toggle="tooltip"
                                        title="View Detail"><i class="icon-eye"></i></a>
                                    <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip"
                                        title="Cancel Order"><i class="bx bxs-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>#66453</td>
                                <td><span class="badge badge-pill badge-md font-weight-light badge-warning">On
                                        Progress</span></td>
                                <td>
                                    <div class="multiple-avatar-icon">
                                        <img src="assets/img/avatar_2.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Alexander Thomson" />
                                        <img src="assets/img/avatar_3.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Micahel Bara" />
                                        <img src="assets/img/avatar_4.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Alexander Thomson" />
                                        <img src="assets/img/avatar_5.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Micahel Bara" />
                                        <img src="assets/img/avatar.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Alexander Thomson" />
                                    </div>
                                </td>
                                <td>Boeniva Duanoe</td>
                                <td>$32.00</td>
                                <td>2020/05/23</td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-light mr-2" data-toggle="tooltip"
                                        title="View Detail"><i class="icon-eye"></i></a>
                                    <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip"
                                        title="Cancel Order"><i class="bx bxs-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>#66453</td>
                                <td><span
                                        class="badge badge-pill badge-md font-weight-light badge-success">Closed</span>
                                </td>
                                <td>
                                    <div class="multiple-avatar-icon">
                                        <img src="assets/img/avatar_2.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Alexander Thomson" />
                                        <img src="assets/img/avatar_3.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Michael Bara" />
                                        <img src="assets/img/avatar_4.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Alexander Thomson" />
                                        <img src="assets/img/avatar_5.jpeg" class="rounded-circle" width="30"
                                            data-toggle="tooltip" title="Michael Bara" />
                                        <small>2+</small>
                                    </div>
                                </td>
                                <td>Alexander Luxor</td>
                                <td>$14.00</td>
                                <td>2020/05/23</td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-light mr-2" data-toggle="tooltip"
                                        title="View Detail"><i class="icon-eye"></i></a>
                                    <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip"
                                        title="Cancel Order"><i class="bx bxs-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav class="mt-4" aria-label="Table navigation">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">12</a></li>
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

@push('js')
<script src="libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/dashboard-chart.js?v=1.1.9"></script>
@endpush