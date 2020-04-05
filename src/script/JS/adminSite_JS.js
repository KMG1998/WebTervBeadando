document.onload = reloadAfterWait();

function reloadAfterWait() {
    setTimeout(function () {
        location.reload();
    }, 60000)
}