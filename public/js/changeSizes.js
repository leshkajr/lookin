function changeSizes(){
    let w = document.getElementsByClassName("listings")[0].offsetWidth;
    console.log(w);
    let listing_width = (w - (48*3))/4 - 1;
    let listing_width_str = listing_width + "px";
    let like_top = -(listing_width) + 15 + "px";
    let like_left = listing_width - 50 + "px";

    let listings = document.getElementsByClassName("listing-block");
    for (let i = 0; i < listings.length; i++){
        listings[i].children[0].style.width = listing_width_str;
        listings[i].children[0].style.height = listing_width_str;

        listings[i].children[1].style.marginTop = like_top;
        listings[i].children[1].style.marginLeft = like_left;
    }
    console.log(listing_width);

    scrollHeader('sticky-main-header');
}
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
