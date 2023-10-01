const buttonLeng=document.getElementById('button_lang');
const langmenu=document.getElementById('menuleng')
buttonLeng.addEventListener('click',function (){

    console.log(" я нажата");
    buttonLeng.textContent="Додати";
    if(langmenu.style.display==="flex")
    {
        langmenu.style.display="none";
    }
    else{
        langmenu.style.display="flex"

    }
});
