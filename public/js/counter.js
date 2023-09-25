const decrementguests=document.getElementById('decrement_guests');
const countGuest=document.getElementById('count_guests');
const incrementguests = document.getElementById('increment_guests');
//--------------------------------------------------------------------------------------
let countguest=0;

function updatecountguest(){
    countGuest.textContent=countguest;
}
decrementguests.addEventListener('click',function (){
    countguest--;
    if(countguest<0)
    {
        countguest=0;
    }
    updatecountguest();
});
incrementguests.addEventListener('click',function (){
   countguest++;
   updatecountguest();
});
//----------------------------------
const decrementbedrooms=document.getElementById('decrement_bedrooms');
const countbedrooms=document.getElementById('count_bedrooms');
const incrementbedrooms = document.getElementById('increment_bedrooms');

let count=0;
function updatacount()
{
    countbedrooms.textContent=count;
}
incrementbedrooms.addEventListener('click',function (){
    count++;
    updatacount();
});
decrementbedrooms.addEventListener('click',function (){
    count--;
    if(count<0)
    {
        count=0;
    }
    updatacount();
})
//-------------------
const decrementbeds=document.getElementById('decrement_beds');
const countbeds=document.getElementById('count_beds');
const incrementbeds = document.getElementById('increment_beds');
let countBeds=0;

function updatebeds()
{
    countbeds.textContent=countBeds;
}
decrementbeds.addEventListener('click',function (){
    countBeds--;
   if(countBeds<0)
   {
       countBeds=0;
   }

   updatebeds();
});
incrementbeds.addEventListener('click',function (){
    countBeds++;
    updatebeds();
});
//--------------------------------------------
const decrementbathrooms=document.getElementById('decrement_bathrooms');
const countbathrooms=document.getElementById('count_bathrooms');
const incrementbathrooms = document.getElementById('increment_bathrooms');

let countBathrooms=0;

function updatebathrooms()
{
    countbathrooms.textContent=countBathrooms;
}
decrementbathrooms.addEventListener('click',function (){
    countBathrooms--;
    if(countBathrooms<0)
    {
        countBathrooms=0;
    }

    updatebathrooms();
});
incrementbathrooms.addEventListener('click',function (){
    countBathrooms++;
    updatebathrooms();
});
