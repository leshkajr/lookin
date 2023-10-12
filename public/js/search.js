let modal;

let button_where = document.getElementById("dialog-window-search-somewhere");
let button_when = document.getElementById("dialog-window-search-whenever");

let block_where = document.getElementById("m-s-b-where");
let block_when = document.getElementById("m-s-b-when");
let block_guests = document.getElementById("m-s-b-guests");

let header_text_container_where = document.getElementById("m-s-h-container-where");
let header_text_container_when_arrival = document.getElementById("m-s-h-container-when-arrival");
let header_text_container_when_departure = document.getElementById("m-s-h-container-when-departure");
let header_text_container_guests = document.getElementById("m-s-h-container-guests");

let main_where_description = document.getElementById('main-where-description');
let main_when_arrival_description = document.getElementById('main-when-arrival-description');
let main_when_departure_description = document.getElementById('main-when-departure-description');
let main_guests_description = document.getElementById('main-guests-description');

let input_location_search = document.getElementById('input-location-search');
function openSearch(type, id){
    modal = document.getElementById(id);

    if(!modal.classList.contains("show")){
        modal.classList.add("show");
    }
        if(type === "where"){
            button_where.classList.add("button-header-active-where");
            button_when.classList.remove("button-header-active-when");

            if(!header_text_container_where.classList.contains('m-s-h-container-active')){
                header_text_container_where.classList.add('m-s-h-container-active');
                header_text_container_when_arrival.classList.remove('m-s-h-container-active');
                header_text_container_when_departure.classList.remove('m-s-h-container-active');
                header_text_container_guests.classList.remove('m-s-h-container-active');
            }

            block_where.style.display = "flex";
            block_when.style.display = "none";
            block_guests.style.display = "none";
        }
        else if(type === "when"){
            button_when.classList.add("button-header-active-when");
            button_where.classList.remove("button-header-active-where");

            if(!header_text_container_when_arrival.classList.contains('m-s-h-container-active')){
                header_text_container_where.classList.remove('m-s-h-container-active');
                header_text_container_when_arrival.classList.add('m-s-h-container-active');
                header_text_container_when_departure.classList.remove('m-s-h-container-active');
                header_text_container_guests.classList.remove('m-s-h-container-active');
            }

            block_when.style.display = "flex";
            block_where.style.display = "none";
            block_guests.style.display = "none";
        }
        else if(type === "when-departure"){
            if(selectedDates.length > 0){
                button_when.classList.add("button-header-active-when");
                button_where.classList.remove("button-header-active-where");

                if(!header_text_container_when_departure.classList.contains('m-s-h-container-active')){
                    header_text_container_where.classList.remove('m-s-h-container-active');
                    header_text_container_when_arrival.classList.remove('m-s-h-container-active');
                    header_text_container_when_departure.classList.add('m-s-h-container-active');
                    header_text_container_guests.classList.remove('m-s-h-container-active');
                }

                block_when.style.display = "flex";
                block_where.style.display = "none";
                block_guests.style.display = "none";
            }
        }
        else if(type === "guests"){
            button_when.classList.remove("button-header-active-when");
            button_where.classList.remove("button-header-active-where");

            if(!header_text_container_guests.classList.contains('m-s-h-container-active')){
                header_text_container_where.classList.remove('m-s-h-container-active');
                header_text_container_when_arrival.classList.remove('m-s-h-container-active');
                header_text_container_when_departure.classList.remove('m-s-h-container-active');
                header_text_container_guests.classList.add('m-s-h-container-active');
            }

            block_guests.style.display = "flex";
            block_when.style.display = "none";
            block_where.style.display = "none";
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

async function showLocation(str, notFound) {
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
                        str_add += '<div class="value d-flex flex-row align-items-center" id="location' + object.id +'" onclick="chooseLocation(' + object.id + ',`'+ object.name + '`,null,`'+ object.type +'`)">\n' +
                            '                                    <div class="icon-location">\n' +
                            '                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">\n' +
                            '                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>\n' +
                            '                                        </svg>\n' +
                            '                                    </div>\n' +
                            '                                    <div class="ms-3">' + object.name + '</div>\n' +
                            '                                </div>';
                    }
                    else if(object.type === "city") {
                        str_add += '<div class="value d-flex flex-row align-items-center" id="location' + object.id +'" onclick="chooseLocation(' + object.id + ',`'+ object.name + '`,`' + object.name_country +'`,`'+ object.type +'`)">\n' +
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
                // for(let object of objects) {
                //     document.getElementById("location" + object.id).addEventListener();
                // }
            }
        };
        xmlhttp.open("GET", "api/location?text=" + str, true);
        xmlhttp.send();
    }
}

async function firstShowLocation(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let object = JSON.parse(this.responseText);
            let user_ip = object['ip'];

            var xmlhttp1 = new XMLHttpRequest();
            xmlhttp1.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let object = JSON.parse(this.responseText);
                    let city = object['city'];
                    showLocation(city);
                }
            };
            xmlhttp1.open("GET", "http://ip-api.com/json/"+user_ip, true);
            xmlhttp1.send();
        }
    };
    xmlhttp.open("GET", "https://api.ipify.org?format=json", true);
    xmlhttp.send();
}

function chooseLocation(id,name, name_country,type){
    url.searchParams.set('location_id',id);
    url.searchParams.set('location_type',type);

    main_where_description.children[0].style.display = 'none';
    main_where_description.children[1].style.display = 'block';
    main_where_description.children[2].style.display = 'flex';
    if(name_country == null){
        main_where_description.children[1].textContent = name;
    }
    else{
        main_where_description.children[1].textContent = name + ', ' + name_country;
    }

    input_location_search.value = name;

    block_where.style.display = "none";
    block_when.style.display = "flex";

    header_text_container_where.classList.remove('m-s-h-container-active');
    header_text_container_when_arrival.classList.add('m-s-h-container-active');
}

function removeChoose(type){
    if(type === 'location'){
        url.searchParams.delete('location_id');
        url.searchParams.delete('location_type');

        input_location_search.value = "";
        main_where_description.children[0].style.display = 'block';
        main_where_description.children[1].style.display = 'none';
        main_where_description.children[2].style.display = 'none';
    }
    else if(type === 'date-arrival'){

        for (let calendarElement of document.getElementById('calendar-main-1').children) {
            if(calendarElement.textContent === selectedDates[0].getDate().toString()) {
                calendarElement.classList.remove('selected');
            }
        }
        for (let calendarElement of document.getElementById('calendar-main-2').children) {
            if(calendarElement.textContent === selectedDates[0].getDate().toString()) {
                calendarElement.classList.remove('selected');
            }
        }


        url.searchParams.delete('arrivalDate');
        selectedDates = selectedDates.filter(date => !isSameDate(date, selectedDates[0]));

        if(selectedDates.length === 1){
            main_when_departure_description.children[0].style.display = 'block';
            main_when_departure_description.children[1].style.display = 'none';
            main_when_departure_description.children[2].style.display = 'none';
            main_when_arrival_description.children[1].textContent =
                monthNamesEng[selectedDates[0].getMonth()].substring(0,3) + " " + selectedDates[0].getDate();
        }
        else{
            main_when_arrival_description.children[0].style.display = 'block';
            main_when_arrival_description.children[1].style.display = 'none';
            main_when_arrival_description.children[2].style.display = 'none';
        }
    }
    else if(type === 'date-departure'){

        for (let calendarElement of document.getElementById('calendar-main-1').children) {
            if(calendarElement.textContent === selectedDates[1].getDate().toString()) {
                calendarElement.classList.remove('selected');
            }
        }
        for (let calendarElement of document.getElementById('calendar-main-2').children) {
            if(calendarElement.textContent === selectedDates[1].getDate().toString()) {
                calendarElement.classList.remove('selected');
            }
        }


        url.searchParams.delete('departureDate');
        selectedDates = selectedDates.filter(date => !isSameDate(date, selectedDates[1]));

        main_when_departure_description.children[0].style.display = 'block';
        main_when_departure_description.children[1].style.display = 'none';
        main_when_departure_description.children[2].style.display = 'none';
    }
}


function buttonSearch(){
    if(selectedDates.length === 2){
        if(!url.searchParams.has('arrivalDate')){url.searchParams.append('arrivalDate', selectedDates[0].getTime());}
        else{url.searchParams.set('arrivalDate', selectedDates[0].getTime());}

        if(!url.searchParams.has('departureDate')){url.searchParams.append('departureDate', selectedDates[1].getTime());}
        else{url.searchParams.set('departureDate', selectedDates[1].getTime());}

        if(url.searchParams.has('location_id') && url.searchParams.has('location_type')){
            window.location.href = url.href;
        }
    }
}


async function checkMain(e) {
    await sleep(1);
    let v = parseInt(e.textContent);
    if (v < 0) e.textContent = 0;
    if (v > 9) e.textContent = 9;
    if(isNaN(v)) e.textContent = 0;
}

function number_counter(idInput,action,params){
    let input = document.getElementById(idInput);
    if(action === "plus"){
        let value = parseInt(input.textContent) + 1;
        input.textContent = value.toString();
    }
    else if(action === "minus"){
        let value = parseInt(input.textContent) - 1;
        input.textContent = value.toString();
    }
    checkMain(input);

    if(!url.searchParams.has(params)){url.searchParams.append(params, input.textContent);}
    else{url.searchParams.set(params, input.textContent);}
}

