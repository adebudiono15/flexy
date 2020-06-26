@extends('layouts.master')

@section('title','Date & Time Picker')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('css_plugin')
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css"
    rel="stylesheet" type="text/css" />
@endpush

@push('js')
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js">
</script>
<script>
    $('#example1').calendar();
    $('#example2').calendar({
    type: 'date'
    });
    $('#example3').calendar({
    type: 'time'
    });
    $('#rangestart').calendar({
    type: 'date',
    endCalendar: $('#rangeend')
    });
    $('#rangeend').calendar({
    type: 'date',
    startCalendar: $('#rangestart')
    });
    $('#example4').calendar({
    startMode: 'year'
    });
    $('#example5').calendar();
    $('#example6').calendar({
    ampm: false,
    type: 'time'
    });
    $('#example7').calendar({
    type: 'month'
    });
    $('#example8').calendar({
    type: 'year'
    });
    $('#example9').calendar();
    $('#example10').calendar({
    on: 'hover'
    });
    var today = new Date();
    $('#example11').calendar({
    minDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() - 5),
    maxDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 5)
    });
    $('#example12').calendar({
    monthFirst: false
    });
    $('#example13').calendar({
    monthFirst: false,
    formatter: {
    date: function (date, settings) {
    if (!date) return '';
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    return day + '/' + month + '/' + year;
    }
    }
    });
    $('#example14').calendar({
    inline: true
    });
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div class="mt-1"><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div class="mt-1"><a href="#">Form Elements</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div class="mt-1">Date & Time Picker</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Default</h6>
                    <div class="ui calendar" id="example1">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="text" placeholder="Date/Time">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Date only</h6>
                    <div class="ui calendar" id="example2">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="text" placeholder="Date/Time">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Time only</h6>
                    <div class="ui calendar" id="example3">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="text" placeholder="Date/Time">
                        </div>
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
                    <h6 class="card-title mb-4">Range</h6>
                    <div class="ui form">
                        <div class="two fields">
                            <div class="field">
                                <label>Start date</label>
                                <div class="ui calendar" id="rangestart">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Start">
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label>End date</label>
                                <div class="ui calendar" id="rangeend">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="End">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- last example 2 --}}

    {{-- example 3 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card-body">
                    <h6 class="card-title mb-4">Year First</h6>
                    <div class="ui calendar" id="example4">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="text" placeholder="Date/Time">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-body">
                    <h6 class="card-title mb-4">Initial Value</h6>
                    <div class="ui calendar" id="example5">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="text" placeholder="Date" value="5/30/2015 3pm">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-body">
                    <h6 class="card-title mb-4">24 Hour</h6>
                    <div class="ui calendar" id="example6">
                        <div class="ui input left icon">
                            <i class="time icon"></i>
                            <input type="text" placeholder="Time">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-body">
                    <h6 class="card-title mb-4">Month And Year</h6>
                    <div class="ui calendar" id="example6">
                        <div class="ui input left icon">
                            <i class="time icon"></i>
                            <input type="text" placeholder="Time">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- last example 3 --}}

    {{-- example 4 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Min/Max Date</h6>
                    <div class="ui calendar" id="example11">
                        <div class="ui input">
                            <input type="text" placeholder="Date">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Day First</h6>
                    <div class="ui calendar" id="example12">
                        <div class="ui input">
                            <input type="text" placeholder="Date">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Costume Format</h6>
                    <div class="ui calendar" id="example13">
                        <div class="ui input">
                            <input type="text" placeholder="Date">
                        </div>
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
                    <h6 class="card-title mb-4">Inline</h6>
                    <div class="ui calendar" id="example14">
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- last example 5 --}}

</div>
@endsection