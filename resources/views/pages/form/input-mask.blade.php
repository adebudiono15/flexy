@extends('layouts.master')

@section('title','Input Mask')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">

@endpush

@push('js')
<script src="/assets/masking/jquery.min.js"></script>
<script src="/assets/masking/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $('.date').mask('00/00/0000');
          $('.time').mask('00:00:00');
          $('.date_time').mask('00/00/0000 00:00:00');

         
        $('.phone').mask('0000-0000');
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.phone_us').mask('(000) 000-0000');

        $('.credit_card').mask('0000 0000 0000 0000');
        $('.valid').mask('00/00');

        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {reverse: true});
        $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
        $('.mixed').mask('AAA 000-S0S');
         });
</script>
@endpush


@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Form Elements</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Input Mask</div>
</div>
<div class="pd-20 pt-0">

    <div class="row mt-4">
        {{-- example 1 --}}
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h6 class="card-title mb-4">Masking Date and Time</h6>
                    <label>Date</label>
                    <input type="text" name="date" class="form-control date" placeholder="00/00/0000" maxlength="10">

                    <label class="mt-3">Time</label>
                    <input type="text" name="time" class="form-control time" placeholder="00:00:00" maxlength="8">

                    <label class="mt-3">Date Time</label>
                    <input type="text" name="date_time" class="form-control date_time" placeholder="00/00/0000 00:00:00"
                        maxlength="19">
                </div>
            </div>
        </div>
        <!-- last example 1  -->
        <!--  example 2 -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h6 class="card-title mb-4">Masking Phone</h6>
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control phone" placeholder="0000-0000" maxlength="9">

                    <label class="mt-3">Phone Us</label>
                    <input type="text" name="phone_us" class="form-control phone_us" placeholder="(000) 000-0000"
                        maxlength="14">

                    <label class="mt-3">Phone With DDD</label>
                    <input type="text" name="phone_with_ddd" class="form-control phone_with_ddd"
                        placeholder="(00) 0000-0000" maxlength="14">
                </div>
            </div>
        </div>
        <!-- last example 2 -->
    </div>

    <div class="row mt-4">
        {{-- example 3 --}}
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h6 class="card-title mb-4">Masking Billing</h6>
                    <label>Credit Card</label>
                    <input type="text" name="credit_card" class="form-control credit_card"
                        placeholder="0000 0000 0000 0000" maxlength="19">

                    <label class="mt-3">Valid</label>
                    <input type="text" name="valid" class="form-control valid" placeholder="00/00" maxlength="5">

                    <label class="mt-3">Money</label>
                    <input type="text" name="money" class="form-control money" placeholder="000.000.000.000.000,00"
                        maxlength="22">

                    <label class="mt-3">Unlimited Money</label>
                    <input type="text" name="money2" class="form-control money2" placeholder="#.##0,00">
                </div>
            </div>
        </div>
        <!-- last example 3  -->
        <!--  example 4 -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h6 class="card-title mb-4">Other</h6>
                    <label>Percent</label>
                    <input type="text" name="percent" class="form-control percent" placeholder="##0,00%">

                    <label class="mt-3">IP Address</label>
                    <input type="text" name="ip_address" class="form-control ip_address2" placeholder="099.099.099.099">

                    <label class="mt-3">Mixed Numbers and Letters</label>
                    <input type="text" name="mixed" class="form-control mixed" placeholder="AAA 000-S0S" maxlength="11">

                    <label class="mt-3">Placeholder</label>
                    <input type="text" name="placeholder" class="form-control placeholder" placeholder="__/__/____"
                        maxlength="10">

                </div>
            </div>
        </div>
        <!-- last example 4 -->
    </div>




</div>
@endsection