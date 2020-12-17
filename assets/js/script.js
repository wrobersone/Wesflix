function volumeToggle(button) {
    // setting the volume property with jQuery
    var muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);
    // toggle volume on and off
    $(button).find("i").toggleClass("fa-volume-mute");
    $(button).find("i").toggleClass("fa-volume-up");
}

function previewEnded() {
    $(".previewVideo").toggle();
    $(".previewImage").toggle();
}