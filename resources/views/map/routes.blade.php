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
    <h1>Dispositivos Rutas</h1>
    <div id="map"></div>
</div>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
</script>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: new google.maps.LatLng(3.3487239, -76.5316285),
            mapTypeId: 'terrain'
        });

        var domicilios = @json($domicilios);

        domicilios.forEach(function(domicilio) {
            var recorrido = JSON.parse(domicilio.recorrido);
            // console.log('recorrido:', recorrido);
            var routeCoordinates = recorrido.map(function(point) {
                return new google.maps.LatLng(point.lat, point.lng);
            });

            var routePath = new google.maps.Polyline({
                path: routeCoordinates,
                geodesic: true,
                strokeColor: '#FF0000',
                strokeOpacity: 1.0,
                strokeWeight: 2
            });

            routePath.setMap(map);
        });

    }
</script>
@endsection