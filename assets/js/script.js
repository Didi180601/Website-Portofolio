let docTitle = document.title;
window.addEventListener("blur", () => {
    document.title = "Jgn Kemana-mana dong :( ;(";
});

window.addEventListener("focus", () => {
    document.title = docTitle;
});