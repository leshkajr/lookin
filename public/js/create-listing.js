
let inputCategoryId = document.getElementById('categoryId');
let buttonNext = document.getElementById('buttonNext');
let inputTypeId = document.getElementById('typeId');
function chooseCategory(idCategory,e){
    for (const child of e.parentElement.children) {
        child.classList.remove("house_block_active");
    }
    e.classList.add("house_block_active");
    inputCategoryId.value = idCategory;
    buttonNext.disabled = false;
}
function chooseType(idType,e){
    for (const child of e.parentElement.children) {
        child.classList.remove("house_block1_active");
    }
    e.classList.add("house_block1_active");
    inputTypeId.value = idType;
    buttonNext.disabled = false;
}

let isLoading = true;
async function clickButtonNext(nameProperty, value){

    if(nameProperty === "amenities"){
        value = amenities.join(";");
    }
    else if(nameProperty === "confirmation"){
        for (const valueElement of value) {
            if(valueElement.checked === true){
                value = valueElement.value;
                break;
            }
        }
        console.log(value);
    }
    else if(nameProperty === "price"){
        value = value.replace(/\D/g, "");
    }
    $.ajax({
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            listingId: document.getElementById('listingId').value,
            propertyName: nameProperty,
            propertyValue: value,
        },
        url: '../api/changepropertylisting',
        dataType: 'json',
        async: true,

        success: function(result){
            console.log(result);
            isLoading = false;
        },

        error: function(){
            isLoading = false;
        }
    });
    if(nameProperty === 'location'){
        document.getElementById('geolocation-loading').style.display = 'block';
        for(let i = 0; i < 60; i++) {
            if(isLoading === false){
                document.getElementById('geolocation-loading').children[1].style.display = 'none';
                document.getElementById('geolocation-loading').children[2].style.display = 'block';
                await sleep(1000);
                document.getElementById('geolocation-loading').style.display = 'none';
                document.getElementById('geolocation-loading').children[1].style.display = 'block';
                document.getElementById('geolocation-loading').children[2].style.display = 'none';
                document.getElementById("form").submit();
                break;
            }
            await sleep(1000);
        }
    }
    else if(nameProperty === 'price'){
        // window.location.href = routeListingHost;
    }
    else{
        document.getElementById("form").submit();
    }
}

async function uploadCities(countryId, notFound) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let objects = JSON.parse(this.responseText);

            let parent = document.getElementById("cityId");
            parent.disabled = false;
            let str_add = '';

            for (let object of objects) {
                str_add += "<option value='"+ object.id +"'>" + object.name + "</option>"
            }
            parent.innerHTML = str_add;
        }
    };
    xmlhttp.open("GET", "../api/getCities?countryId=" + countryId, true);
    xmlhttp.send();
}

let amenities = [];
let isEven = false;
function chooseAmenities(amenityId) {
    if(isEven === true) {
        console.log(amenityId);
        if(amenities.includes(amenityId)){
            amenities = amenities.filter(number => number !== amenityId);
        }
        else{
            amenities.push(amenityId);
        }
        isEven = false;
    }
    else{
        isEven = true;
    }
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
