
function showLocation(str, notFound) {
    if (str.length == 0) {
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let objects = JSON.parse(this.responseText);
                console.log(objects);
            }
        };
        xmlhttp.open("GET", "api/location?text=" + str, true);
        xmlhttp.send();
    }
}
