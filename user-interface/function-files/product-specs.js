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
    color_choice[i].classList.remove("selectedColor");
  }
  var uid = document.getElementById(id);
  uid.style.borderColor = "#0675e4";
  uid.classList.add("selectedColor");
}
function selectStorage(id) {
  for (let i = 0; i < storage_choice.length; i++) {
    storage_choice[i].style.borderColor = "transparent";
    storage_choice[i].classList.remove("selectedStorage");
  }
  var uid = document.getElementById(id);
  uid.style.borderColor = "#0675e4";
  uid.classList.add("selectedStorage");
}




function getTime() {
  var today = new Date();
  var date =
    today.getFullYear() + '' +(today.getMonth() + 1) + '' + today.getDate();
  var time =
    today.getHours() + '' + today.getMinutes() + '' +  today.getSeconds();
  timestamp = date +''+ time;
  return timestamp;
}

var add_to_cart = document.getElementById("add-to-bag-button");
var selectedColor = document.getElementsByClassName("selectedColor");
var selectedStorage = document.getElementsByClassName("selectedStorage");
var user, itemid;
function addToCart(username,id) {
  var bagAdd;
  user = username;
  itemi = id;
  for (let i = 0; i < selectedColor.length; i++) {
    console.log(selectedColor[i].id);
  }
  for (let i = 0; i < selectedStorage.length; i++) {
    console.log(selectedStorage[i].id);
  }
  getTime();
  console.log(username);
  console.log(timestamp);
  console.log(id);
}
