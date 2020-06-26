@extends('layouts.master')

@section('title', 'Maps')

@push('css')
<link rel="stylesheet" href="/assets/css/ui.css">
@endpush

@push('js')
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
    function initialize() {
  var Map = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var map = new google.maps.Map(document.getElementById("googleMap"), Map);
  
  // create Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-8.5830695,116.3202515),
      map: map,
      animation: google.maps.Animation.BOUNCE
  });

}

// event window  
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
    var marker=new google.maps.Marker({
position: new google.maps.LatLng(-8.5830695,116.3202515),
map: map,
animation: google.maps.Animation.BOUNCE
});
</script>
<script type="text/javascript">
    var locations = [
      ['Bondi Beach', -33.890542, 151.274856, 4],
      ['Coogee Beach', -33.923036, 151.259052, 5],
      ['Cronulla Beach', -34.028249, 151.157507, 3],
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
      ['Maroubra Beach', -33.950198, 151.259302, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
</script>

<script>
    var panorama, position, currentHeading, viewElement = document.getElementById('view');

/** kicked off from google maps **/
function initialize() {
position = {lat: 43.0258778, lng: -87.8989059};
currentHeading = 160;

panorama = new google.maps.StreetViewPanorama(
viewElement, {
position: position,
pov: {
heading: currentHeading,
pitch: -10
},
linksControl: false,
panControl: false,
enableCloseButton: false,
zoomControl: false,
fullscreenControl: false
});
/** wait a bit - then fade in and start rotate **/
setTimeout(function() {
viewElement.className = 'fade-in';
rotate();
}, 20000);
}

/** Turn the head from hoan to down town **/
function rotate()
{
var endHeading = -15;

var anim = setInterval(function() {
currentHeading -= 0.2;
if (currentHeading < endHeading) { clearInterval(anim); return; } panorama.setPov({ heading: currentHeading, pitch: -10
    }); }, 20); } google.maps.event.addDomListener(window, 'load' , initialize);
</script>

@endpush

@section('content')
<div class="breadcrumb d-flex align-items-center pd-20 pb-0">
    <div><a href="#"><i class="icon-home"></i> Home</a></div>
    <div class="breadcrumb-sep"><i class="icon-chevron-right"></i></div>
    <div>Maps</div>
</div>
<div class="pd-20 pt-0">

    {{-- example 1 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Basic Map</h6>
                    <div id="googleMap" style="width:100%;height:380px;"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 1 --}}

    {{-- example 2 --}}
    <div class="card mt-4">
        <div class="row">
            <div class="col-md">
                <div class="card-body">
                    <h6 class="card-title mb-4">Info Window</h6>
                    <p>A basic example of using a single info window for 4 markers.</p>
                    <div id="map" style="width:100%;height:380px;">
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
                    <h6 class="card-title mb-4">Street View</h6>
                    <p>Example of creating google map - street view</p>
                    <div id="view" style="width:100%;height:380px;"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- last example 3 --}}

</div>
@endsection