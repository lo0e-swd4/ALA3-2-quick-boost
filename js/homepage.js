var slideShow;
var slides;
var count= 0;

window.onload = function(){
    slideShow = document.getElementById('slideShow');
    slides = ['advertentie1.png', 'advertentie2.png', 'advertentie3.png'];

    setInterval(showSlides, 1000);

}

function showSlides(){
    slideShow.style.backgroundImage = 'url(images/" + slides[count] + ")';
    if(count >= 2){
        count = 0;
    }else{
        count++;
    }
}
