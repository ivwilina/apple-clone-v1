function selectItemList() {
  var item_type_selector = document.querySelector("#selector");
  var selected_item = item_type_selector.value;
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("table-list").innerHTML = this.responseText;
    }
  };

  xmlhttp.open("GET", "/baitaplon-final/user-interface/layout-files/php-files/admin-product-list.php?selecteditem=" + selected_item, true);

  xmlhttp.send();
}


function testUpdate() {
  var name=[];
  var detail=[];
  var stringTest="";
  var spec_infoname = document.getElementsByName('spec-infoname');
  var spec_infodetail = document.getElementsByName('spec-infodetail');
  spec_infoname.forEach((line) => {
    name.push(line.value);
  });
  spec_infodetail.forEach((line) => {
    detail.push(line.value);
  });
  for (let i = 0; i < name.length; i++) {
    stringTest = stringTest + name[i] + detail[i] + "^";
  }
  console.log(stringTest);
}