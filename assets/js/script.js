function orderBy() {
    const select = document.querySelector("#selector");
    const choice = select.selectedIndex  // Récupération de l'index du <option> choisi

    const category = select.options[choice].value; // Récupération du texte du <option> d'index "choice"
    let url = document.location.href;
    if (url.includes("?category")) {
        console.log(url.search("/?category/"));
        url = url.substring(0, url.search("/?category/"));
    }
    url += "?category=" + encodeURI(category);
    document.location.replace(url);
    return;

}

const buttonValid = document.querySelector("#valid");
buttonValid.addEventListener("click", orderBy);