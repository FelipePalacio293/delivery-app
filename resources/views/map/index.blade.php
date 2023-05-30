<!-- resources/views/map.blade.php -->

@extends('templates.app')

@section('content')
<style>
  #map {
    height: 800px;  /* You can set the height as per your requirement */
    width: 100%;
}
</style>
<div class="container">
    <h1>Dispositivos Conectados</h1>
    <div id="map"></div>
</div>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key&callback=initMap">
</script>

<script>
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: new google.maps.LatLng(3.3487239, -76.5316285),
        mapTypeId: 'terrain'
    });

    @foreach($devices as $device)
        var latLng = new google.maps.LatLng({{ $device->lat }}, {{ $device->lng }});
        var marker = new google.maps.Marker({
          position: latLng,
          map: map,
          title: '{{ $device->name }}'
        });

        var infowindow = new google.maps.InfoWindow({
          content: 'Device name: {{ $device->name }} <br> Battery level: {{ $device->battery_level }}%'
        });

        marker.addListener('mouseover', function() {
          infowindow.open(map, marker);
        });

        marker.addListener('mouseout', function() {
          infowindow.close();
        });
    @endforeach
}
</script>
@endsection