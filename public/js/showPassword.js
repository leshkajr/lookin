function changeText(password_container_str){
    let password_container = document.getElementById(password_container_str);
    let password = password_container.children[0];
    if(password.value === ""){
        password_container.children[1].style.display = "none";
    }
    else{
        password_container.children[1].style.display = "flex";
    }
    // if (password === "password") {
    //     password.type = "text";
    //     password_container.children[1].children[0].style.display = "none";
    //     password_container.children[1].children[1].style.display = "block";
    // } else {
    //     password.type = "password";
    //     password_container.children[1].children[0].style.display = "block";
    //     password_container.children[1].children[1].style.display = "none";
    // }
}
function showPassword(password_container_str) {
    let password_container = document.getElementById(password_container_str);
    let password = password_container.children[0];
    if (password.type === "password") {
        password.type = "text";
        password_container.children[1].children[0].style.display = "none";
        password_container.children[1].children[1].style.display = "block";
    } else {
        password.type = "password";
        password_container.children[1].children[0].style.display = "block";
        password_container.children[1].children[1].style.display = "none";
    }
}
