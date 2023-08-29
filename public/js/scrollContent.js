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
  

  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

  