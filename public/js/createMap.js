
function createMap(lat, lon, id){
    var map = L.map(id).setView([lat, lon], 13);
    console.log("create");
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([lat, lon]).addTo(map);
}
