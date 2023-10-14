const decrementguests=document.getElementById('decrement_guests');
const countGuest=document.getElementById('count_guests');
const incrementguests = document.getElementById('increment_guests');
let countquest=0;
function updatequest()
{
    countGuest.textContent=countquest;
}
incrementguests.addEventListener('click',()=>{
  countquest++;
  updatequest();

});
 decrementguests.addEventListener('click',()=>{
     countquest--;
     if( countquest<0)
     {
         countquest=0;
     }
     updatequest();
 });

const decrementbedrooms=document.getElementById('decrement_bedrooms');
const countbedrooms=document.getElementById('count_bedrooms');
const incrementbedrooms = document.getElementById('increment_bedrooms');

let count=0;

function updatabedrums()
{
    countbedrooms.textContent=count;
}
decrementbedrooms.addEventListener('click',()=>{
   count--;
   count=(count<0)?0:count;
   updatabedrums();
});
incrementbedrooms.addEventListener("click",()=>{
    count++;
    updatabedrums();
});

 const decrement_beds=document.getElementById("decrement_beds");
 const beds=document.getElementById("count_beds");
 const increment_beds=document.getElementById("increment_beds");
 let coutbeds=0;
 decrement_beds.addEventListener('click',()=>{
    coutbeds--;
    coutbeds=(coutbeds<0)?0:coutbeds;

     beds.textContent=coutbeds;
 });
 increment_beds.addEventListener('click',()=>{
     coutbeds++;
     beds.textContent=coutbeds;
 });
 const decrement_bathrooms=document.getElementById("decrement_bathrooms");
 const count_bathrooms=document.getElementById("count_bathrooms");
 const increment_bathrooms=document.getElementById("increment_bathrooms");

 let countbat=0;
 decrement_bathrooms.addEventListener('click',()=>{
     countbat=0;
     countbat=(countbat<0)?0:coutbeds;
     count_bathrooms.textContent=countbat;
 });
 increment_bathrooms.addEventListener('click',()=>{
     countbat++;
     count_bathrooms.textContent=countbat;

 });
