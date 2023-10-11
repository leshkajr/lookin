let counters=document.getElementById('housePhoto');

function donwloans(input){
    var files=input.files[0];
    var reader= new FileReader();
    reader.readAsDataURL(files);

    reader.onload=function (){
        var imag =document.createElement('img');
        imag.classList.add('photo');
        imag.src=reader.result;
        counters.appendChild(imag);
    }



}
