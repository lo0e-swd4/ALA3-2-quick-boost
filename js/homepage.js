var slideShow;
var slides;
var count= 0;

window.onload = function(){
    slideshow = document.getElementById("slideShow");
    slides = ['ad1.png', 'ad2.png', 'ad3.png'];

    setInterval(showSlides, 1000);

}

function showSlides(){
    slideShow.style.backgroundImage = "url(images/" + slides[count] + ")";
    if(count >= 2){
        count = 0;
    }else{
        count++;
    }
}