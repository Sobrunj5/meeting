@extends('templates.adminmitra')
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Hai Admin Mitra</div>
            </div>
        </div>
    </div>
    <div id="map" style="height: 400px; "></div>


@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            var map = L.map('map').setView([-6.879704, 109.125595], 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var geocodeService = L.esri.Geocoding.geocodeService();
            let marker;
            map.on('click', function (e) {
                if (marker) { // check
                    map.removeLayer(marker);
                    marker.remove();
                }

                geocodeService.reverse().latlng(e.latlng).run(function (error, result) {
                    if (error) {
                        return;
                    }
                    marker = new L.Marker(e.latlng);
                    marker.addTo(map).bindPopup(result.address.Match_addr).openPopup();
                });

            });
        });

    </script>
    @endsection