let textarea = document.getElementById("keylogger");

document.addEventListener("keypress", (event) => {
    let key = event.key;
    if(key >= 'a' && key <= 'z') {
        textarea.value += key;
    }
});
