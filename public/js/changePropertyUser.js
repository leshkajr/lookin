const name=document.getElementById("name");
const lastname=document.getElementById("lastname");
const cancel=document.getElementById("cancel");
const button=document.getElementById("button");
const email_cancel=document.getElementById('email_cancel');
const save="Зберегти";
const buttons= document.querySelectorAll('.button');
const email=document.getElementById('email_input');
const input_phone=document.getElementById('input_phone');
const cancel_photo=document.getElementById('cansel_phone');
const input_address=document.querySelectorAll('.input_city input');

//const divbitton=document.querySelectorAll('.div_button');
function changePropertyUser(userId,type,text){

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
// button.addEventListener("click",()=>{
//     button.innerHTML=save;
//     cancel.style.display="flex";
//     name.removeAttribute("readonly");
//     lastname.removeAttribute("readonly");
// });
//let count=0;
function chencname(){
    cancel.style.display="none";
    name.attributes="readonly";
    lastname.attributes="readonly";
    let sevaname=document.getElementById('names');
    sevaname.style.display="none";
}
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
      var action = button.getAttribute('name');

      switch (action) {
          case 'names':
              cancel.style.display="flex";
         name.removeAttribute("readonly");
         lastname.removeAttribute("readonly");
         button.style.display="none";
         let sevaname=document.getElementById('names');
           sevaname.style.display="flex";


              console.log("name");
              break;
          case 'email':
             email_cancel.style.display="flex";
             email.removeAttribute('readonly');
             button.style.display="none";
              var saveemail=document.getElementById('email');
              saveemail.style.display="flex";
              console.log("email");
              break;
          case 'phone':
               cancel_photo.style.display="flex";
               input_phone.removeAttribute('readonly');
               button.style.display="none";
               var savephone=document.getElementById('phone');
               savephone.style.display="flex";
              console.log("phone");
              break;
          case 'address':
            console.log("address");
            var cansel_city=document.getElementById('cansel_city');
            var save_city= document.getElementById('save_city');
            button.style.display="none";
            cansel_city.style.display="flex";
            save_city.style.display="flex";

            break;
      }
    });
});
