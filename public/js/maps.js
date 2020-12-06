const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

var mymap = L.map('mapid').setView([-27.462694, -58.837521], 20);

L.tileLayer(tilesProvider, {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    // id: 'mapbox/streets-v11',
    //  tileSize: 512,
    //  zoomOffset: -1,
    // accessToken: 'your.mapbox.access.token'
}).addTo(mymap);

var marker = L.marker([-27.462694, -58.837521]).addTo(mymap);

// var circle = L.circle([-27.462694, -58.837521], {
//     color: 'red',
//     fillColor: '#f03',
//     fillOpacity: 0.5,
//     radius: 500
// }).addTo(mymap);