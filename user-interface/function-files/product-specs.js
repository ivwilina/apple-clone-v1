var marginL=-20, i=1;
var slides = document.getElementsByClassName("slider-item");
var anim = document.getElementById("first")
function imageSliderNext() {
    if (i < (slides.length - 1)) {
        i++;
        marginL -=20;
        input = marginL + "%";
        anim.style.marginLeft= input;
    }
}
function imageSliderPrev() {
    if (i > 1) {
        i--;
        marginL +=20;
        input = marginL + "%";
        anim.style.marginLeft= input;
    }
}