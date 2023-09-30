
function createPhotoForStart(){

}

function getIP() {
    fetch('https://api.ipify.org?format=json')
        .then(response => response.json())
        .then(data => {
            const ipAddress = data.ip;
            console.log(ipAddress);
        })
        .catch(error => {
            console.error('Произошла ошибка при получении IP-адреса:', error);
        });
}


function getLocation() {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            document.getElementById("coordinates").innerHTML = "Широта: " + latitude + "<br>Долгота: " + longitude;


            var xhr = new XMLHttpRequest();
            var url = "./api/cityfromip"; // Замените на адрес вашего сервера
            var params = "latitude=" + latitude + "&longitude=" + longitude;
            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    let objects = JSON.parse(this.responseText);
                    console.log(objects);
                }
            };
            xhr.send(params);
        });
    } else {
        document.getElementById("coordinates").innerHTML = "Геолокация не поддерживается в вашем браузере.";
    }
}
window.onload = getIP;
