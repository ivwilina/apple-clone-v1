var marginL = -20,
  i = 1;
var slides = document.getElementsByClassName("slider-item");
var anim = document.getElementById("first");
function imageSliderNext() {
  if (i < slides.length - 1) {
    i++;
    marginL -= 20;
    input = marginL + "%";
    anim.style.marginLeft = input;
  }
}
function imageSliderPrev() {
  if (i > 1) {
    i--;
    marginL += 20;
    input = marginL + "%";
    anim.style.marginLeft = input;
  }
}

var color_choice = document.getElementsByClassName("color-selection");
var storage_choice = document.getElementsByClassName("storage-selection");
function selectColor(id) {
  for (let i = 0; i < color_choice.length; i++) {
    color_choice[i].style.borderColor = "transparent";
  }
  this.id.style.borderColor = "black";
}
function selectStorage(id) {
    for (let i = 0; i < storage_choice.length; i++) {
        storage_choice[i].style.borderColor = "transparent";
      }
id.style.borderColor = "black";
}
