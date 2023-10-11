let accountphoto=document.getElementById('account');
console.log(accountphoto)
function donwloan(input){

    var file= input.files[0];
    var reader=new FileReader();
    reader.readAsDataURL(file);

    reader.onload=function (){
        var imagrs= document.createElement('img');
        imagrs.style.borderRadius='50%';
        imagrs.classList.add('photos')
        imagrs.src=reader.result;
        accountphoto.appendChild(imagrs);

    }
}
