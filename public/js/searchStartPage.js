let url;
async function showLocation(str, notFound) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let objects = JSON.parse(this.responseText);

                let parent = document.getElementById("cities_countries_list");
                let str_add = '';
                if(str.length !== 0) {
                    parent.style.display = "block";
                    for (let object of objects) {
                        if(object.type === "country") {
                            str_add += '<div class="value d-flex flex-row align-items-center" id="location' + object.id +'" onclick="chooseLocation(' + object.id + ',`'+ object.name + '`,null,`'+ object.type +'`,0,``)">\n' +
                                '                                    <div class="icon-location">\n' +
                                '                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">\n' +
                                '                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>\n' +
                                '                                        </svg>\n' +
                                '                                    </div>\n' +
                                '                                    <div class="ms-3">' + object.name + '</div>\n' +
                                '                                </div>';
                        }
                        else if(object.type === "city") {
                            str_add += '<div class="value d-flex flex-row align-items-center" id="location' + object.id +'" onclick="chooseLocation(' + object.id + ',`'+ object.name + '`,`' + object.name_country +'`,`'+ object.type +'`,0,``)">\n' +
                                '                                    <div class="icon-location">\n' +
                                '                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">\n' +
                                '                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>\n' +
                                '                                        </svg>\n' +
                                '                                    </div>\n' +
                                '                                    <div class="ms-3">' + object.name + ', ' + object.name_country + '</div>\n' +
                                '                                </div>';
                        }
                    }

                    if(objects.length === 0) {
                        str_add += '<div class="value d-flex flex-row align-items-center">\n' +
                            '                                    <div class="icon-location">\n' +
                            '                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">\n' +
                            '                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>\n' +
                            '                                        </svg>\n' +
                            '                                    </div>\n' +
                            '                                    <div class="ms-3">' + notFound + '</div>\n' +
                            '                                </div>';
                    }
                }
                else{
                    if(str.replace(/\s/g, '') === ""){
                        parent.style.display = "none";
                    }
                }

                parent.innerHTML = str_add;
                // for(let object of objects) {
                //     document.getElementById("location" + object.id).addEventListener();
                // }
            }
        };
        xmlhttp.open("GET", "api/location?text=" + str, true);
        xmlhttp.send();
}


function chooseLocation(id,name, name_country,type,countEnter, path){
    if(countEnter === 1){
        url = new URL(path);
    }
    let input_location_search = document.getElementById('input-location-search');
    let list = document.getElementById("cities_countries_list");

    url.searchParams.set('location_id',id);
    url.searchParams.set('location_type',type);

    input_location_search.value = name;
    list.style.display = 'none';
}

function chooseDate(type, date){
    if(date.value === ""){
        if(type === 'arrival'){
            url.searchParams.delete('arrivalDate')
        }
        else if(type === 'departure'){
            url.searchParams.delete('departureDate')
        }
    }
    else{
        $tmp_date = new Date(date.value);
        if(type === 'arrival'){
            url.searchParams.set('arrivalDate',$tmp_date.getTime().toString())
        }
        else if(type === 'departure'){
            url.searchParams.set('departureDate',$tmp_date.getTime().toString())
        }
    }
}

function buttonRedirect(){
    url.searchParams.set("guests","1");
    window.location.href = url.href;
}
