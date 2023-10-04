function openSearch(type, id){
    document.getElementById(id).classList.add("show");
    if(type === "where"){
        document.getElementById("dialog-window-search-somewhere").classList.add("button-header-active");
    }
}
function closeSearch(event,id){
    const dialog_window_search = document.getElementById(id);
    if (event.target === event.currentTarget) {
        if(dialog_window_search.classList.contains("show")){
            dialog_window_search.classList.remove("show");
            document.getElementById("dialog-window-search-somewhere").classList.remove("button-header-active");
            document.getElementById("dialog-window-search-whenever").classList.remove("button-header-active");
        }
    }
}
function scrollOnSearch(id){
    let dialog = document.getElementById(id);
    if(dialog.classList.contains("show")){
        if(window.scrollY !== 0){
            dialog.classList.remove("show");
        }
    }
}

function showLocation(str, notFound) {
    if (str.length == 0) {
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let objects = JSON.parse(this.responseText);

                let parent = document.getElementById("cities_countries_list");
                let str_add = '';

                for (let object of objects) {
                    if(object.type === "country") {
                        str_add += '<div class="value d-flex flex-row align-items-center">\n' +
                            '                                    <div class="icon-location">\n' +
                            '                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">\n' +
                            '                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>\n' +
                            '                                        </svg>\n' +
                            '                                    </div>\n' +
                            '                                    <div class="ms-3">' + object.name + '</div>\n' +
                            '                                </div>';
                    }
                    else if(object.type === "city") {
                        str_add += '<div class="value d-flex flex-row align-items-center">\n' +
                            '                                    <div class="icon-location">\n' +
                            '                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">\n' +
                            '                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>\n' +
                            '                                        </svg>\n' +
                            '                                    </div>\n' +
                            '                                    <div class="ms-3">' + object.name + ', ' + object.name_country + '</div>\n' +
                            '                                </div>';
                    }
                }
                parent.innerHTML = str_add;
            }
        };
        xmlhttp.open("GET", "api/location?text=" + str, true);
        xmlhttp.send();
    }
}
