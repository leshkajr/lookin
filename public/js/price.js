var price=document.getElementById('price');
var owner_price=document.getElementById('owner_price');
var earnings=document.getElementById('earnings');

price.addEventListener('input',function (){
    var content=price.value;
   owner_price.textContent=content;
   earnings.textContent=content;
})
//var content=price.textContent;
//earnings.textContent=content;
