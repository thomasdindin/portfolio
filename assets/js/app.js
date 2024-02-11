document.addEventListener("DOMContentLoaded", function () {
    let headerNav = document.querySelector("header .nav");
    let footerNav = document.querySelector("footer .nav");
    let navLinks = document.querySelectorAll("nav a");

    navLinks.forEach(function (item) {
        let li = document.createElement("li");

        let clonedItem = item.cloneNode(true); // Cloner l'élément pour éviter de le déplacer


        li.appendChild(clonedItem);
        headerNav.appendChild(li);
        footerNav.appendChild(li.cloneNode(true));
    });
});
