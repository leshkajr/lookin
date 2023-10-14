const name=document.getElementById("name");
const lastname=document.getElementById("lastname");
const cancel=document.getElementById("cancel");
const button=document.getElementById("button");
const save="Зберегти";
function changePropertyUser(userId,type,text){

    if(button.innerHTML===save)
    {
        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                userId: userId,
                propertyName: type,
                propertyText: text,
            },
            url: '../api/changepropertyuser',
            dataType: 'json',
            async: false,

            success: function(result){
                openSwal('Вдалось!','Ви успішно змінили свої дані.');
            },

            error: function(){
                openSwal('Вдалось!','Ви успішно змінили свої дані.');
            }
        });
    }




}
button.addEventListener("click",()=>{
    button.innerHTML=save;
    cancel.style.display="flex";
    name.removeAttribute("readonly");
    lastname.removeAttribute("readonly");
});
