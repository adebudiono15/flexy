@extends('layouts.master')

@section('title', 'Charts')

@push('css_plugin')
<link rel="stylesheet" href="libs/apexcharts/apexcharts.css">
@endpush

@push('js')
<script src="/assets/chart/apexcharts.js"></script>
<script src="libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/dashboard-chart.js?v=1.1.9"></script>

<script>
    var options = {
    chart: {
    height: 350,
    type: "line",
    stacked: false
    },
    dataLabels: {
    enabled: false
    },
    colors: ["#FF1654", "#247BA0"],
    series: [
    {
    name: "Series A",
    data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
    },
    {
    name: "Series B",
    data: [20, 29, 37, 36, 44, 45, 50, 58]
    }
    ],
    stroke: {
    width: [4, 4]
    },
    plotOptions: {
    bar: {
    columnWidth: "20%"
    }
    },
    xaxis: {
    categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016]
    },
    yaxis: [
    {
    axisTicks: {
    show: true
    },
    axisBorder: {
    show: true,
    color: "#FF1654"
    },
    labels: {
    style: {
    colors: "#FF1654"
    }
    },
    title: {
    text: "Series A",
    style: {
    color: "#FF1654"
    }
    }
    },
    {
    opposite: true,
    axisTicks: {
    show: true
    },
    axisBorder: {
    show: true,
    color: "#247BA0"
    },
    labels: {
    style: {
    colors: "#247BA0"
    }
    },
    title: {
    text: "Series B",
    style: {
    color: "#247BA0"
    }
    }
    }
    ],
    tooltip: {
    shared: false,
    intersect: true,
    x: {
    show: false
    }
    },
    legend: {
    horizontalAlign: "left",
    offsetX: 40
    }
    };
    
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    
    chart.render();
</script>

<script>
    var options = {
    chart: {
    height: 280,
    type: "area"
    },
    dataLabels: {
    enabled: false
    },
    series: [
    {
    name: "Series 1",
    data: [45, 52, 38, 45, 19, 23, 2]
    }
    ],
    fill: {
    type: "gradient",
    gradient: {
    shadeIntensity: 1,
    opacityFrom: 0.7,
    opacityTo: 0.9,
    stops: [0, 90, 100]
    }
    },
    xaxis: {
    categories: [
    "01 Jan",
    "02 Jan",
    "03 Jan",
    "04 Jan",
    "05 Jan",
    "06 Jan",
    "07 Jan"
    ]
    }
    };
    
    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    
    chart.render();
</script>

<script>
    var options = {
chart: {
type: "area",
height: 300,
foreColor: "#999",
stacked: true,
dropShadow: {
enabled: true,
enabledSeries: [0],
top: -2,
left: 2,
blur: 5,
opacity: 0.06
}
},
colors: ['#00E396', '#0090FF'],
stroke: {
curve: "smooth",
width: 3
},
dataLabels: {
enabled: false
},
series: [{
name: 'Total Views',
data: generateDayWiseTimeSeries(0, 18)
}, {
name: 'Unique Views',
data: generateDayWiseTimeSeries(1, 18)
}],
markers: {
size: 0,
strokeColor: "#fff",
strokeWidth: 3,
strokeOpacity: 1,
fillOpacity: 1,
hover: {
size: 6
}
},
xaxis: {
type: "datetime",
axisBorder: {
show: false
},
axisTicks: {
show: false
}
},
yaxis: {
labels: {
offsetX: 14,
offsetY: -5
},
tooltip: {
enabled: true
}
},
grid: {
padding: {
left: -5,
right: 5
}
},
tooltip: {
x: {
format: "dd MMM yyyy"
},
},
legend: {
position: 'top',
horizontalAlign: 'left'
},
fill: {
type: "solid",
fillOpacity: 0.7
}
};

var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);

chart.render();

function generateDayWiseTimeSeries(s, count) {
var values = [[
4,3,10,9,29,19,25,9,12,7,19,5,13,9,17,2,7,5
], [
2,3,8,7,22,16,23,7,11,5,12,5,10,4,15,2,6,2
]];
var i = 0;
var series = [];
var x = new Date("11 Nov 2012").getTime();
while (i < count) { series.push([x, values[s][i]]); x +=86400000; i++; } return series; }
</script>

<script>
    var options = {
    chart: {
    height: 380,
    type: 'line',
    stacked: false,
    },
    stroke: {
    width: [0, 2, 5],
    curve: 'smooth'
    },
    plotOptions: {
    bar: {
    columnWidth: '50%'
    }
    },
    series: [{
    name: 'TEAM A',
    type: 'column',
    data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
    }, {
    name: 'TEAM B',
    type: 'area',
    data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
    }],
    fill: {
    opacity: [0.85,0.25,1],
    gradient: {
    inverseColors: false,
    shade: 'light',
    type: "vertical",
    opacityFrom: 0.85,
    opacityTo: 0.55,
    stops: [0, 100, 100, 100]
    }
    },
    labels: ['01/01/2003',
    '02/01/2003','03/01/2003','04/01/2003','05/01/2003','06/01/2003','07/01/2003','08/01/2003','09/01/2003','10/01/2003','11/01/2003'],
    markers: {
    size: 0
    },
    xaxis: {
    type:'datetime'
    },
    yaxis: {
    title: {
    text: 'Points',
    },
    },
    tooltip: {
    shared: true,
    intersect: false,
    y: [{
    formatter: function (y) {
    if(typeof y !== "undefined") {
    return y.toFixed(0) + " points";
    }
    return y;
    
    }
    }, {
    formatter: function (y) {
    if(typeof y !== "undefined") {
    return y.toFixed(2) + " $";
    }
    return y;
    
    }
    }]
    }
    
    }
    
    var chart = new ApexCharts(
    document.querySelector("#chart3"),
    options
    );
    
    chart.render();
</script>

<script>
    var options = {
    chart: {
    height: 350,
    type: "radialBar"
    },
    plotOptions: {
    circle: {
    dataLabels: {
    showOn: "hover"
    }
    }
    },
    series: [44, 55, 67, 83],
    labels: ["Apples", "Oranges", "Bananas", "Berries"]
    };
    
    var chart = new ApexCharts(document.querySelector("#chart5"), options);
    
    chart.render();
    
    var chartAreaBounds = chart.w.globals.dom.baseEl.querySelector('.apexcharts-inner').getBoundingClientRect();
    
    chart.addText({
    x: chartAreaBounds.width / 2,
    y: 10,
    text: "0",
    fontSize: 16,
    textAnchor: "middle"
    });
    
    chart.addText({
    x: chartAreaBounds.width - 5,
    y: chartAreaBounds.height / 2 + 10,
    text: "90",
    fontSize: 16,
    textAnchor: "start"
    });
    
    chart.addText({
    x: chartAreaBounds.width / 2,
    y: chartAreaBounds.height + 30,
    text: "180",
    fontSize: 16,
    textAnchor: "middle"
    });
    
    chart.addText({
    x: 5,
    y: chartAreaBounds.height / 2 + 10,
    text: "270",
    fontSize: 16,
    textAnchor: "end"
    });
</script>

<script>
    var options = {
    chart: {
    width: 380,
    type: "donut"
    },
    dataLabels: {
    enabled: false
    },
    series: [44, 55, 13, 33]
    };
    
    var chart = new ApexCharts(document.querySelector("#chart6"), options);
    
    chart.render();
    
    function random() {
    return Math.floor(Math.random() * (100 - 1 + 1)) + 1;
    }
    
    function appendData() {
    var arr = chart.w.globals.series.map(() => {
    return random();
    });
    arr.push(random());
    return arr;
    }
    
    function removeData() {
    var arr = chart.w.globals.series.map(() => {
    return random()
    });
    arr.pop();
    return arr;
    }
    
    function randomize() {
    return chart.w.globals.series.map(() => {
    return random();
    });
    }
    
    function reset() {
    return options.series;
    }
    
    document.querySelector("#randomizeDonut").addEventListener("click", function() {
    chart.updateSeries(randomize());
    });
    
    document.querySelector("#addDonut").addEventListener("click", function() {
    console.log(appendData());
    chart.updateSeries(appendData());
    });
    
    document.querySelector("#removeDonut").addEventListener("click", function() {
    chart.updateSeries(removeData());
    });
    
    document.querySelector("#resetDonut").addEventListener("click", function() {
    chart.updateSeries(reset());
    });
</script>

<script>
    var series = [{
    name: 'Net Profit',
    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }, {
    name: 'Revenue',
    data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
    }, {
    name: 'Free Cash Flow',
    data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
    }]
    
    series = series.map((s) => {
    return {
    name: s.name,
    data: s.data.map((d) => {
    return d -70
    })
    }
    })
    
    console.log(series)
    var options = {
    chart: {
    height: 350,
    type: 'bar',
    },
    plotOptions: {
    bar: {
    horizontal: false,
    endingShape: 'rounded',
    columnWidth: '55%',
    },
    },
    dataLabels: {
    enabled: false
    },
    stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
    },
    series: series,
    xaxis: {
    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
    },
    yaxis: {
    labels: {
    formatter: function(val) {
    return val + 70
    }
    }
    },
    fill: {
    opacity: 1
    
    },
    tooltip: {
    y: {
    formatter: function (val) {
    return val + 70
    }
    }
    }
    }
    
    var chart = new ApexCharts(
    document.querySelector("#chart7"),
    options
    );
    
    chart.render();
</script>

<script>
    function generateData(count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) { var x="w" + (i + 1).toString(); var y=Math.floor(Math.random() * (yrange.max - yrange.min + 1)) +
        yrange.min; series.push({ x: x, y: y }); i++; } return series; } var options={ series: [ { name: "Metric1" , data:
        generateData(18, { min: 0, max: 90 }) }, { name: "Metric2" , data: generateData(18, { min: 0, max: 90 }) }, {
        name: "Metric3" , data: generateData(18, { min: 0, max: 90 }) }, { name: "Metric4" , data: generateData(18, { min:
        0, max: 90 }) }, { name: "Metric5" , data: generateData(18, { min: 0, max: 90 }) }, { name: "Metric6" , data:
        generateData(18, { min: 0, max: 90 }) }, { name: "Metric7" , data: generateData(18, { min: 0, max: 90 }) }, {
        name: "Metric8" , data: generateData(18, { min: 0, max: 90 }) }, { name: "Metric9" , data: generateData(18, { min:
        0, max: 90 }) } ], chart: { height: 350, type: "heatmap" }, plotOptions: { heatmap: { radius: 0 } }, dataLabels: {
        enabled: false }, stroke: { width: 0 }, colors: ["#008FFB"] }; var chart=new
        ApexCharts(document.querySelector("#chart8"), options); chart.render();
</script>
@endpush


@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Charts</div>
</div>
<div class="pd-20 pt-0">
    <p>An Apexcharts.js component for ApexCharts. Read full documnetation
        <a href="https://apexcharts.com/docs/installation/" target="_blank">here</a>
    </p>
    {{-- example 1 --}}
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Time Line</h6>
                <div id="chart4">
                    <div id="timeline-chart"></div>
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div id=&quot;chart4&quot;&gt;
    &lt;div id=&quot;timeline-chart&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last example 1  -->
        <!-- example 2 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Area</h6>
                <div id="chart2">
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div&gt;
    &lt;div id=&quot;chart2&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last exmaple 2 -->
    </div>

    <div class="row mt-4">
        {{-- example 3 --}}
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Mixed Chart</h6>
                <div id="chart3">
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div&gt;
    &lt;div id=&quot;chart3&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last example 3  -->
        <!-- example 4 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Line</h6>
                <div id="chart">
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div&gt;
    &lt;div id=&quot;chart&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last exmaple 4 -->
    </div>

    <div class="row mt-4">
        {{-- example 5 --}}
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Pie</h6>
                <div id="chart5">
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div&gt;
    &lt;div id=&quot;chart5&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last example 5  -->
        <!-- example 6 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Donut</h6>
                <div class="mt-4" id="chart6">
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div&gt;
    &lt;div id=&quot;chart6&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last exmaple 6 -->
    </div>

    <div class="row mt-4">
        {{-- example 7 --}}
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Column</h6>
                <div id="chart7">
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div&gt;
    &lt;div id=&quot;chart7&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last example 7  -->
        <!-- example 8 -->
        <div class="col-md-6">
            <div class="card shadow">
                <h6 class="card-title mt-3 ml-3">Heat Map Chart</h6>
                <div id="chart8">
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div&gt;
    &lt;div id=&quot;chart8&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last exmaple 8 -->
    </div>

    <div class="row mt-4">
        {{-- example 9 --}}
        <div class="col-md-6">
            <div class="card widget-sparkchart">
                <div class="card-body pd-0">
                    <div class="widget-icon bg-clean-main"><i class="icon-users"></i></div>
                    <div id="chartinq"></div>
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div&gt;
    &lt;div id=&quot;chartinq&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last example 9  -->
        <!-- example 10 -->
        <div class="col-md-6">
            <div class="card widget-sparkchart">
                <div class="card-body pd-0">
                    <div class="widget-icon bg-clean-info"><i class="icon-dollar-sign"></i></div>
                    <div id="chartsales"></div>
                </div>
                <div class="mt-3">
                    <span class="pd-10 bg-danger text-white d-inline-block">HTML Code</span>
                    <div class="bg-dark text-white pd-20 pb-20">
                        <pre class="text-white">

&lt;div&gt;
    &lt;div id=&quot;chartsales&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
                </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- last exmaple 10 -->
    </div>

    <div class="row mt-4">
        {{-- example 11 --}}
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
        <!-- last example 11  -->
        <!-- example 12 -->
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
        <!-- last exmaple 12 -->
    </div>



</div>
@endsection