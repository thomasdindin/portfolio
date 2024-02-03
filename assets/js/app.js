document.addEventListener("DOMContentLoaded", function() {
    let sidenav = document.querySelector(".sidenav");
    let menu = document.getElementById("menu");
    let main =document.querySelector("main");
    
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
    
});

