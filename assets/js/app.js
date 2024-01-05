VANTA.NET({
    el: "#hero",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x5413CC,
    backgroundColor: 0x060918,
    points: 20.00,
    maxDistance: 25.00,
    spacing: 20.00
})


var sidenav = document.querySelector(".sidenav");
var menu = document.getElementById("menu");
var main =document.querySelector("main");

menu.onclick = changeNav;


function changeNav() {
    if (sidenav.classList.contains("active")) {
        menu.style.animation = "rotateDown 0.5s linear 1 normal forwards"
        sidenav.classList.remove("active");
        sidenav.classList.add("closed");
        main.classList.remove("blur")
    } else {
        menu.style.animation = "rotateUp 0.5s linear 1 normal forwards"
        sidenav.classList.add("active");
        sidenav.classList.remove("closed");
        main.classList.add("blur")
    }
}

