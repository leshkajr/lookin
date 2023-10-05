const next = document.getElementById('next');
const text=document.getElementById('textarea');
const countertext=document.getElementById('textcounter');

text.addEventListener("input", function (){
   var content=text.value;
    var length = content.length;

    countertext.textContent=length;


});


