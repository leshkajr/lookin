function changeSizes(){
    let w = window.innerWidth;
    let listing_width = w/4.5 - 50;
    let listing_width_str = w/4.5 - 50 + "px";
    let like_top = -(listing_width) + 10 + "px";
    let like_left = listing_width - 45 + "px";

    let listings = document.getElementsByClassName("listing-block");
    for (let i = 0; i < listings.length; i++){
        listings[i].children[0].style.width = listing_width_str;
        listings[i].children[0].style.height = listing_width_str;

        listings[i].children[1].style.marginTop = like_top;
        listings[i].children[1].style.marginLeft = like_left;
    }
    console.log(listing_width);
}
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
