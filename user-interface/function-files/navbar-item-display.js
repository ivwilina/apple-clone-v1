let search_hidden = true;
let inventory_hidden = true;
function display_search() {
    var search = document.getElementById("search-dropdown");
    var section = document.getElementsByTagName("section");
    if (inventory_hidden==false) {
        display_inventory();
    }
    search_hidden ? search_hidden=false : search_hidden=true 
    search.classList.toggle("reveal");
    for (let i = 0; i < section.length; i++) {
        section[i].classList.toggle("blur");
    }
}
function display_inventory() {
    var inventory = document.getElementById("inventory-sidebar");
    var section = document.getElementsByTagName("section");
    if (search_hidden==false) {
        display_search();
    }
    inventory_hidden ? inventory_hidden=false : inventory_hidden=true
    inventory.classList.toggle("reveal1");
    for (let i = 0; i < section.length; i++) {
        section[i].classList.toggle("blur");
    }
}