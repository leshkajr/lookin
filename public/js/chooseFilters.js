let priceMin = null;
let priceMax = null;
let countRooms = null;
let countBathrooms = null;
let countBeds = null;
let propertyType = null;
let amenities = "";
let hostLanguages = "";

function chooseCount(e,type, idParent){
    let objectParentChildren = document.getElementById(idParent).children;
    for(let child of objectParentChildren){
        if(child.classList.contains('active')){
            child.classList.remove('active');
        }
    }
    let object = e;
    object.classList.add('active');
    if(object.textContent !== "Any"){
        let count = parseInt(object.textContent);
        if(type === "rooms"){
            countRooms = count;
        }
        else if(type === "bathrooms"){
            countBathrooms = count;
        }
        else if(type === "beds"){
            countBeds = count;
        }

        console.log(object);
        console.log("count: " + count);
    }
}
function chooseTypeListing(e,type, idParent){
    let objectParentChildren = document.getElementById(idParent).children;
    let object = e;
    let isHasActive = object.classList.contains('active')
    for(let child of objectParentChildren){
        if(child.classList.contains('active')){
            child.classList.remove('active');
        }
    }
    if(!isHasActive){
        object.classList.add('active');
        propertyType = type;
    }
    else{
        object.classList.remove('active');
        propertyType = null;
    }
}
let counterCheckbox = 0;  //strange things
function chooseCheckbox(e,type,text){
    counterCheckbox++;
    if(counterCheckbox === 2){
        if(type === 'amenities'){
            if(!amenities.includes(text)){
                amenities += text + ';';
            }
            else{
                amenities = amenities.replace(text + ';','')
            }
        }
        else if(type === 'hostLanguages'){
            if(!hostLanguages.includes(text)){
                hostLanguages += text + ';';
            }
            else{
                hostLanguages = hostLanguages.replace(text + ';','')
            }
        }
        counterCheckbox = 0;
    }
}
function buttonShow(){
    // let amenities = Array.from(new Set(amenities.split(','))).toString();
    // let hostLanguages = Array.from(new Set(hostLanguages.split(','))).toString();
    console.log(amenities);
    console.log(hostLanguages);

    let min = document.getElementById('priceMinimum').value;
    if(min !== "") url.searchParams.set('priceMin',min); else url.searchParams.delete('priceMin');
    let max = document.getElementById('priceMaximum').value;
    if(max !== "") url.searchParams.set('priceMax',max); else url.searchParams.delete('priceMax');

    if(countRooms !== null) url.searchParams.set('countRooms',countRooms); else url.searchParams.delete('countRooms');
    if(countBathrooms !== null) url.searchParams.set('countBathrooms',countBathrooms); else url.searchParams.delete('countBathrooms');
    if(countBeds !== null) url.searchParams.set('countBeds',countBeds); else url.searchParams.delete('countBeds');

    if(propertyType !== null) url.searchParams.set('propertyType',propertyType); else url.searchParams.delete('propertyType');

    if(hostLanguages !== "") url.searchParams.set('hostLanguages',hostLanguages.slice(0, -1)); else url.searchParams.delete('hostLanguages');
    if(amenities !== "") url.searchParams.set('amenities',amenities.slice(0, -1)); else url.searchParams.delete('amenities');

    window.location.href = url.href;
}
