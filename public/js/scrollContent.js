async function scrollContentRight() {
    const container = document.querySelector('.scroll-container');
    const content = document.querySelector('.content');
    for (let index = 0; index < 10; index++) {
        // if (container.scrollLeft < content.scrollWidth - container.clientWidth) {
          content.scrollLeft += 2;
            await sleep(1);
          // }
    }
    for (let index = 0; index < 50; index++) {
      // if (container.scrollLeft < content.scrollWidth - container.clientWidth) {
        content.scrollLeft += 4;
          await sleep(1);
        // }
    }
    for (let index = 0; index < 10; index++) {
      // if (container.scrollLeft < content.scrollWidth - container.clientWidth) {
        content.scrollLeft += 2;
          await sleep(1);
        // }
    }

    console.log(content.scrollLeft);
  }

 async function scrollContentLeft() {
    const container = document.querySelector('.scroll-container');
    const content = document.querySelector('.content');
    for (let index = 0; index < 10; index++) {
      // if (container.scrollLeft < content.scrollWidth - container.clientWidth) {
        content.scrollLeft -= 2;
          await sleep(1);
        // }
  }
  for (let index = 0; index < 50; index++) {
    // if (container.scrollLeft < content.scrollWidth - container.clientWidth) {
      content.scrollLeft -= 4;
        await sleep(1);
      // }
  }
  for (let index = 0; index < 10; index++) {
    // if (container.scrollLeft < content.scrollWidth - container.clientWidth) {
      content.scrollLeft -= 2;
        await sleep(1);
      // }
  }

  }

  function onScroll(scrollHeaderHeader,search_dialog_window_id){
      scrollHeader(scrollHeaderHeader);
      showListingHeaderInfo();
      if(search_dialog_window_id !== null){
          scrollOnSearch(search_dialog_window_id);
      }
  }

    function scrollHeader(header){
        if(document.getElementsByClassName(header).length !== 0){
            if(window.scrollY > 25){
                document.getElementsByClassName(header)[0].classList.add("sticky-main-header-border");
            }
            else{
                document.getElementsByClassName(header)[0].classList.remove("sticky-main-header-border");
            }
        }
    }

    function showListingHeaderInfo(){
        if(document.getElementById("listing-header-info") !== null){

            if(window.scrollY > 900){
                document.getElementById("listing-header-info").style.display = 'block';
            }
            else{
                document.getElementById("listing-header-info").style.display = 'none';
            }
        }
    }

  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

