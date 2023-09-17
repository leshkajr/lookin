function showMore(e){
    let parent = e.parentElement.parentElement.children[0];
    let neighbor = e.parentElement.children[1];
    parent.style.height = "auto";
    e.style.display = "none";
    neighbor.style.display = "inline-block";
}

function showLess(e) {
    let parent = e.parentElement.parentElement.children[0];
    let neighbor = e.parentElement.children[0];
    parent.style.height = "185px";
    e.style.display = "none";
    neighbor.style.display = "inline-block";
}
