// Initialize and add the map
function initMap() {
    // Posisi STMIK DIPANEGARA
    var posisi = { lat: -5.140362, lng: 119.4830809 };
    // The map, Centered at Stmik Dipanegara
    var map = new google.maps.Map(
        document.getElementById('map'), { zoom: 16, center: posisi });
    // The marker, positioned at Stmik Dipanegara
    var marker = new google.maps.Marker({ position: posisi, map: map });
}    // <!--Load the API from the specified URL
// * The async attribute allows the browser to render the page while the API loads
// * The key parameter will contain your own API key (which is not needed for this tutorial)
// * The callback parameter executes the initMap() function
// -->



const menu = document.querySelector(".menu");
const nav = document.querySelector(".nav");
menu.addEventListener('click', () => {
    nav.classList.toggle("show");
});

const dropdown_trigger = document.querySelectorAll('.drop-trigger');
const submenu_icon = document.querySelectorAll('.submenu-icon');
for (let i = 0; i < dropdown_trigger.length; i++){
    dropdown_trigger[i].addEventListener('mouseover',() => {
        submenu_icon[i].style.transform = "rotate(180deg)";
    });
    dropdown_trigger[i].addEventListener('mouseleave',() => {
        submenu_icon[i].style.transform = "rotate(0deg)";
    });
}


let slideIndex = 0;
let i;
const slides = document.querySelectorAll(".mySlides");
const dots = document.querySelectorAll(".dot");
showSlides(slideIndex);
showSlidesAuto();
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    if (n > slides.length) {
        slideIndex = 1;
    }else if(n < 1){
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active","");
    }
    
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";

}

function showSlidesAuto() {
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active","");
    }
    
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlidesAuto, 3000);
}

// end of slider

