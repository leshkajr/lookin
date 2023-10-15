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


async function clickButtonNext(nameProperty, value){
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
        async: false,

        success: function(result){
            // openSwal('Вдалось!','Ви успішно змінили свої дані.');
        },

        error: function(){
            // openSwal('Вдалось!','Ви успішно змінили свої дані.');
        }
    });

    document.getElementById("form").submit();
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
