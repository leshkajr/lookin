function handleFileSelect(evt) {
    const imageProfile = document.getElementById("imageProfile");

    let files = evt.target.files;
    let f = files[0];
    let fileReader = new FileReader();

    fileReader.onload = (function(e) {
            imageProfile.src = e.target.result
    });
    fileReader.readAsDataURL(f);

    if (f) {
        const formData = new FormData();
        formData.append("file", f);

        fetch("../api/loadImage", {
            method: "POST",
            body: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        })
            .then(response => {console.log(response);return response.json()})
            .then(data => {
            })
            .catch(error => {
                console.error("Произошла ошибка: " + error);
            });
    } else {
    }
}

document.getElementById('fileInputImage').addEventListener('change', handleFileSelect, false);
$("#imageProfile").click(function(e){
    e.preventDefault();
    $("#fileInputImage").trigger('click');
});
