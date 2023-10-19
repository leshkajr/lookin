const name=document.getElementById("name");
const lastname=document.getElementById("lastname");
// const cancel=document.getElementById("cancel");
// const button=document.getElementById("button");
// const email_cancel=document.getElementById('email_cancel');
// const save="Зберегти";
// const buttons= document.querySelectorAll('.button');
 const email=document.getElementById('email_input');
// const input_phone=document.getElementById('input_phone');
// const cancel_photo=document.getElementById('cansel_phone');
// const input_address=document.querySelectorAll('.personal_divs input');

//const divbitton=document.querySelectorAll('.div_button');
function changePropertyUser(userId,type,text,e){

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
        hideButtons(type,e);
}

function showSave(type,e){
    e.parentElement.children[0].style.display = "flex";
    e.parentElement.children[1].style.display = "flex";
    e.parentElement.children[2].style.display = "none";
    e.parentElement.children[3].style.display = "none";
    switch(type){
        case 'name':
            name.removeAttribute("readonly");
            lastname.removeAttribute("readonly");
            break;
        case 'email':
            email.removeAttribute("readonly");
            break;

    }

    // switch (type) {
    //     case 'name':
    //         cancel.style.display="flex";
    //         name.removeAttribute("readonly");
    //         lastname.removeAttribute("readonly");
    //         button.style.display="none";
    //         let sevaname=document.getElementById('names');
    //         sevaname.style.display="flex";
    //
    //         console.log("name");
    //         break;
    //     case 'email':
    //         email_cancel.style.display="flex";
    //         email.removeAttribute('readonly');
    //         button.style.display="none";
    //         var saveemail=document.getElementById('email');
    //         saveemail.style.display="flex";
    //         console.log("email");
    //         break;
    //     case 'phone':
    //         cancel_photo.style.display="flex";
    //         input_phone.removeAttribute('readonly');
    //         button.style.display="none";
    //         var savephone=document.getElementById('phone');
    //         savephone.style.display="flex";
    //         console.log("phone");
    //         break;
    //     case 'address':
    //         console.log("address");
    //         //input_address.removeAttribute('readonly');
    //         break;
    // }
}

function hideButtons(type,e){
    e.parentElement.children[0].style.display = "none";
    e.parentElement.children[1].style.display = "none";
    e.parentElement.children[2].style.display = "flex";
    e.parentElement.children[3].style.display = "flex";
    switch(type){
        case 'name':
            name.setAttribute("readonly", "true");
            lastname.setAttribute("readonly","true");
            break;
        case 'email':
            email.setAttribute("readonly","true");
    }

}

// button.addEventListener("click",()=>{
//     button.innerHTML=save;
//     cancel.style.display="flex";
//     name.removeAttribute("readonly");
//     lastname.removeAttribute("readonly");
// });
//let count=0;


// buttons.forEach(function(button) {
//     button.addEventListener('click', function() {
//
//     });
// });
