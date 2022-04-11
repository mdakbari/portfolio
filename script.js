// side

let menubtn = document.querySelector(".menu-btn");
let cancelbtn = document.querySelector(".cancel-btn");
let navBar = document.querySelector(".navbar");
let body = document.querySelector("body");

menubtn.onclick = function () {
  menubtn.style.opacity = "0";
  menubtn.style.pointerEvents = "none";
  navBar.classList.add("active");
  body.style.overflow = "hidden";
};

cancelbtn.onclick = function () {
  menubtn.style.opacity = "1";
  menubtn.style.pointerEvents = "auto";
  navBar.classList.remove("active");
  body.style.overflow = "auto";
};

// navbar
let val;
let nav = document.querySelector("nav");
window.onscroll = function () {
  if (document.documentElement.scrollTop > 20) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
};
