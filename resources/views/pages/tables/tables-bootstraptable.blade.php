@extends('layouts.master')

@section('title','Bootsrtap Table')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
<link href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css" rel="stylesheet">

@endpush

@push('js')
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
<script
    src="https://unpkg.com/bootstrap-table@1.16.0/dist/extensions/filter-control/bootstrap-table-filter-control.min.js">
</script>
<script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
<script>
    var data = [{
    "id": "1",
    "name": "Jen",
    "city": "Melbourne",
    "age": "65"
    }, {
    "id": "2",
    "name": "Roger",
    "city": "Melbourne",
    "age": "34"
    }, {
    "id": "3",
    "name": "Rob",
    "city": "Sydney",
    "age": "23"
    }, {
    "id": "4",
    "name": "George",
    "city": "Sydney",
    "age": "45"
    }, {
    "id": "5",
    "name": "Fred",
    "city": "Perth",
    "age": "23"
    }, {
    "id": "6",
    "name": "Kelly",
    "city": "Melbourne",
    "age": "23"
    }, {
    "id": "7",
    "name": "Gina",
    "city": "Perth",
    "age": "25"
    }];
    
    
    $('#table').bootstrapTable({
    data: data,
    showColumns: true,
    });
    
    
    var sub_data = [{
    "street": "Gravy",
    "suburb": "Kew",
    }, {
    "street": "Donald",
    "suburb": "Collingwood",
    }, {
    "street": "Wells",
    "suburb": "St Kilda",
    }];
    
    
    function build_sub_table() {
    
    var data = JSON.parse(JSON.stringify(sub_data))
    
    $('#sub_table').bootstrapTable({
    columns: [{
    title: 'Street',
    field: 'street',
    sortable: true,
    },{
    title: 'Suburb',
    field: 'suburb',
    sortable: true,
    }],
    data: data
    })
    
    };
    
    function detailFormatter(index, row, element){
    return childDetail(index,row)
    };
    
    
    function childDetail(index,row){
    
    var row1 = document.createElement("div");
    row1.setAttribute('class','ui one column grid');
    
    var button = document.createElement("button");
    button.setAttribute('onclick','build_sub_table()')
    button.textContent="Get"
    
    row1.append(button);
    
    var row2 = document.createElement("div");
    row1.setAttribute('class','ui one column grid');
    
    var table = document.createElement('table');
    table.setAttribute('class','ui very compact table');
    table.setAttribute('id','sub_table');
    
    row2.append(table);
    
    row1.append(row2);
    
    return row1;
    };
</script>
@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div><a href="#">Tables</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Bootsrtap Table</div>
</div>
<div class="pd-20 pt-0">

    <!-- example 1 -->
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Basic Tables</h6>

                    <div id="toolbar">
                        <select class="form-control">
                            <option value="">Export Basic</option>
                            <option value="all">Export All</option>
                            <option value="selected">Export Selected</option>
                        </select>
                    </div>

                    <table id="table" data-toggle="table" data-toolbar="#toolbar" data-filter-control="true"
                        data-show-footer="false" data-detail-formatter="detailFormatter" data-detail-view="true"
                        data-hide-unused-select-options="true">
                        <thead>
                            <tr>
                                <th data-field="state" data-checkbox="true"></th>
                                <th data-field="id" data-filter-control="select">ID</th>
                                <th data-field="name" data-filter-control="select">Name</th>
                                <th data-field="city" data-filter-control="select">City</th>
                                <th data-field="age" data-filter-control="select" data-visible="false">Age</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- last example 1 -->


</div>
@endsection