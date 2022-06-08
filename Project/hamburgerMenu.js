const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

//eventlistener for clicks
hamburger.addEventListener("click", mobileMenu);

//function for activating the menu
function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");
navLink.forEach(n => n.addEventListener("click", closeMenu));

//function for closing the menu
function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}