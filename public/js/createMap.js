
function createMap(lat, lon, id){
    console.log("enter");
    var map = L.map(id).setView([lat, lon], 15);
    console.log("create");
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([lat, lon]).addTo(map);
}
