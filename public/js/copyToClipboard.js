// import swal from "sweetalert";

function copyToClipboard(text_header, text_description){
    copyTextToClipboard(window.location.href);

    Swal.fire(
        text_header,
        text_description,
        'success'
    )
}

function copyTextToClipboard(text) {
    if (!navigator.clipboard) {
        fallbackCopyTextToClipboard(text);
        return;
    }
    navigator.clipboard.writeText(text).then(function() {
        console.log('Async: Copying to clipboard was successful!');
    }, function(err) {
        console.error('Async: Could not copy text: ', err);
    });
}
