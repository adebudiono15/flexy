@extends('layouts.master')

@section('title','Invoice')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script>
    function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Invoice</div>
</div>
<div class="pd-20 pt-0">

    <div class="content-body">
        <!-- app invoice View Page -->
        <section class="invoice-view-wrapper">
            <div class="row">
                <!-- invoice view page -->
                <div class="col-xl-9 col-md-8 col-12" id="p1">
                    <div class="card invoice-print-area">
                        <div class="card-content">
                            <div class="card-body pb-0 mx-25">
                                <!-- header section -->
                                <div class="row">
                                    <div class="col-xl-4 col-md-12">
                                        <span class="invoice-number mr-50">Invoice</span>
                                        <span>#150199</span>
                                    </div>
                                    <div class="col-xl-8 col-md-12">
                                        <div class="d-flex align-items-center justify-content-xl-end flex-wrap">
                                            <div class="mr-3">
                                                <small class="text-muted">Date Issue:</small>
                                                <span>08/10/2019</span>
                                            </div>
                                            <div>
                                                <small class="text-muted">Date Due:</small>
                                                <span>08/10/2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- logo and title -->
                                <div class="row my-3">
                                    <div class="col-6">
                                        <h3>Invoice</h3>
                                        <span>Software Development</span>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <img src="assets/img/flexy_text.png" alt="logo" height="46" width="164">
                                    </div>
                                </div>
                                <hr>
                                <!-- invoice address and contact -->
                                <div class="row invoice-info">
                                    <div class="col-6 mt-1">
                                        <h6 class="invoice-from">Bill From</h6>
                                        <div class="mb-1">
                                            <span>John Doe</span>
                                        </div>
                                        <div class="mb-1">
                                            <span>796 Silver Harbour, TX 79273, US</span>
                                        </div>
                                        <div class="mb-1">
                                            <span>john@example.com</span>
                                        </div>
                                        <div class="mb-1">
                                            <span>601-678-8022</span>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-1">
                                        <h6 class="invoice-to">Bill To</h6>
                                        <div class="mb-1">
                                            <span>Flexy Admin Template</span>
                                        </div>
                                        <div class="mb-1">
                                            <span>1111 Army Navy Drive</span>
                                        </div>
                                        <div class="mb-1">
                                            <span>flexy@hotmail.com</span>
                                        </div>
                                        <div class="mb-1">
                                            <span>567-5657-3453</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!-- product details table-->
                                <table class="table table-borderless mb-0">
                                    <thead>
                                        <tr class="border-0">
                                            <th scope="col">ITEM</th>
                                            <th scope="col">DESCRIPTION</th>
                                            <th scope="col">COST</th>
                                            <th scope="col">QTY</th>
                                            <th scope="col" class="text-right">PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Flexy Admin</td>
                                            <td>HTML Admin Template</td>
                                            <td>28</td>
                                            <td>1</td>
                                            <td class="text-right font-weight-bold">$28.00</td>
                                        </tr>
                                        <tr>
                                            <td>Apex Admin</td>
                                            <td>Anguler Admin Template</td>
                                            <td>24</td>
                                            <td>1</td>
                                            <td class="text-right font-weight-bold">$24.00</td>
                                        </tr>
                                        <tr>
                                            <td>Stack Admin</td>
                                            <td>HTML Admin Template</td>
                                            <td>24</td>
                                            <td>1</td>
                                            <td class="text-right font-weight-bold">$24.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- invoice subtotal -->
                            <div class="card-body pt-0 mx-25">
                                <hr>
                                <div class="row">
                                    <div class="col-4 col-sm-6 mt-75">
                                        <p>Thanks for your business.</p>
                                    </div>
                                    <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                        <div class="invoice-subtotal">
                                            <div class="invoice-calc d-flex justify-content-between">
                                                <span class="invoice-title">Subtotal</span>
                                                <span class="invoice-value font-weight-bold">$ 76.00</span>
                                            </div>
                                            <div class="invoice-calc d-flex justify-content-between">
                                                <span class="invoice-title">Discount</span>
                                                <span class="invoice-value font-weight-bold">- $ 09.60</span>
                                            </div>
                                            <div class="invoice-calc d-flex justify-content-between">
                                                <span class="invoice-title">Tax</span>
                                                <span class="invoice-value font-weight-bold">21%</span>
                                            </div>
                                            <hr>
                                            <div class="invoice-calc d-flex justify-content-between">
                                                <span class="invoice-title">Invoice Total</span>
                                                <span class="invoice-value font-weight-bold">$ 66.40</span>
                                            </div>
                                            <div class="invoice-calc d-flex justify-content-between">
                                                <span class="invoice-title">Paid to date</span>
                                                <span class="invoice-value font-weight-bold">- $ 00.00</span>
                                            </div>
                                            <div class="invoice-calc d-flex justify-content-between">
                                                <span class="invoice-title">Balance (USD)</span>
                                                <span class="invoice-value font-weight-bold">$ 10,953</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- invoice action  -->
                <div class="col-xl-3 col-md-4 col-12">
                    <div class="card invoice-action-wrapper shadow-none border">
                        <div class="card-body">
                            <div class="invoice-action-btn">
                                <button class="btn btn-primary btn-block invoice-send-btn">
                                    <i class="bx bx-send"></i>
                                    <span>Send Invoice</span>
                                </button>
                            </div>
                            <div class="invoice-action-btn mt-3">
                                <button class="btn btn-clean-info btn-block invoice-print" onclick="printContent('p1')">
                                    <i class="bx bx-printer"></i>
                                    <span>print</span>
                                </button>
                            </div>
                            <div class="invoice-action-btn mt-3">
                                <a href="edit-invoice.html" class="btn btn-clean-info btn-block">
                                    <i class="bx bx-pencil"></i>
                                    <span>Edit Invoice</span>
                                </a>
                            </div>
                            <div class="invoice-action-btn mt-3">
                                <button class="btn btn-success btn-block">
                                    <i class="bx bx-dollar"></i>
                                    <span>Add Payment</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



</div>
@endsection