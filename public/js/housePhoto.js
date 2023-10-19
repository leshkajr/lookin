let counters=document.getElementById('housePhotos');

// function downloads(input){
//     for (const file of input.files) {
//         console.log(file);
//         var reader = new FileReader();
//         reader.onload = function (){
//             var imag_cont = document.createElement('div');
//             var imag = document.createElement('img');
//             imag_cont.classList.add('photo');
//             imag.src = reader.result;
//             imag_cont.appendChild(imag);
//             counters.appendChild(imag_cont);
//         }
//         reader.readAsDataURL(file);
//     }
// }
let fileList = [];
function downloads(e) {
    const files = e.files;
    document.getElementById("icon_download_photo").style.display = "none";
    for (const element of document.getElementsByClassName("remove_button")) {
        element.remove();
    }
    Object.keys(files).forEach(i => {
        const file = files[i];
        fileList.push(file);
        console.log(file);
        const reader = new FileReader();
        reader.onload = (e) => {
            var imag_cont = document.createElement('div');
            var imag = document.createElement('img');
            imag_cont.classList.add('photo');
            imag.src = reader.result;
            imag_cont.appendChild(imag);
            counters.appendChild(imag_cont);
            if(files.length - 1 === parseInt(i)){
                let str = '\n' +
                    '                    <div class="photo remove_button d-flex justify-content-center align-items-center" title="Remove photos" onclick="remove_photos();">\n' +
                    '                        <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">\n' +
                    '                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>\n' +
                    '                        </svg>\n' +
                    '                    </div>';
                counters.innerHTML += str;
            }
        }
        reader.readAsDataURL(file);
    })
}

function remove_photos(){
    let photos = document.getElementById('housePhotos');
    photos.innerHTML = '';
    document.getElementById("icon_download_photo").style.display = "flex";
    fileList = [];
}

async function clickPhotoButtonNext(nameProperty){
    for (let file of fileList) {
        let fd = new FormData();
        fd.append('listingId',document.getElementById('listingId').value);
        fd.append('propertyName',nameProperty);
        fd.append('propertyValue',file);
        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: fd,
            url: '../api/loadPhotosListing',
            contentType: false,
            processData: false,
            dataType: 'json',
            async: true,

            success: function(result){
                console.log(result);
            },

            error: function(result){
                console.log(result);
            }
        });
    }

    document.getElementById("form").submit();
}
