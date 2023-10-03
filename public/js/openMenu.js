async function openMenu(strId){
    await sleep(1);
    const menu = document.getElementById(strId);
    if(menu.style.display == "none")
        menu.style.display = "flex";
    else
        menu.style.display = "none";
}
async function closeMenu(strId){
    const menu = document.getElementById(strId);
    if(menu.style.display == "flex"){
        await sleep(1);
        menu.style.display = "none";
    }
    menu.style.display = "none";
}


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
