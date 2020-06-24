var filters = [];
var filterIds = [];

//function for removing a value from a array.
Array.prototype.remove = function() {
  var what, a = arguments, L = a.length, ax;
  while (L && this.length) {
    what = a[--L];
    while ((ax = this.indexOf(what)) !== -1) {
        this.splice(ax, 1);
    }
  }
  return this;
};
function login(){
  document.getElementById("background-login").style.display = "block";
  document.body.style.overflow = 'hidden';
}
function register(){
  document.getElementById("background-register").style.display = "block";
  document.body.style.overflow = 'hidden';
}

function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}


function filterUpdate(id, statement){
/*
if statement is false then product filter isn't selected, so if true filter should be enabled for this filter option.
id is the filter option name and id of the element.
*/
  idElement = document.getElementById(id);

  if(statement == false){
    idElementNext = document.getElementById(id+".hidden");

    idElement.classList.add("hide");
    idElementNext.classList.remove("hide");
    filters.push(id);
  }else{
    idElementPrevious = id.split(".")[0];

    filters.remove(idElementPrevious);

    idElement = document.getElementById(id);
    idElementPrevious = document.getElementById(idElementPrevious);

    idElement.classList.add("hide");
    idElementPrevious.classList.remove("hide");
  }

  showProducts();
}

function showProducts(){
  var productsList = document.getElementById("productsList");
  
  productsList.innerHTML = '';

  for(var x = 0; x <= items.length -1;x++) {
      if(filters.length != 0){
        for(var t = 0; t <= filters.length -1; t++){
          // if(filters[t] == items[x]["sex"] && filterIds.indexOf(items[x]["id"]) == -1){
          //   filterIds.push(items[x]["id"]);
          //   productsList.innerHTML += "<a href='items.php?id="+items[x]["id"]+"' class='col-sm-4 items' style='background-image: url("+items[x]["productImg"]+")'><div class='vakken-productnaam'>"+items[x]["vakken"]+" - "+items[x]["productnaam"]; "</div></a>";          }
          // if(filters[t] == items[x]["kleding"] && filterIds.indexOf(items[x]["id"]) == -1){
          //   filterIds.push(items[x]["id"]);
          //   productsList.innerHTML += "<a href='items.php?id="+items[x]["id"]+"' class='col-sm-4 items' style='background-image: url("+items[x]["productImg"]+")'><div class='vakken-productnaam'>"+items[x]["vakken"]+" - "+items[x]["productnaam"]+" €"+items[x]["prijs"]+",00</div></a>";          }
          if(filters[t] == items[x]["vakken"] && filterIds.indexOf(items[x]["id"]) == -1){
            filterIds.push(items[x]["id"]);
            productsList.innerHTML += "<a href='items.php?id="+items[x]["id"]+"' class='col-sm-4 items' style='background-image: url("+items[x]["productImg"]+")'><div class='vakken-productnaam'>"+items[x]["vakken"]+" - "+items[x]["productnaam"];"</div></a>";          }
        }
      }else{
        productsList.innerHTML += "<a href='items.php?id="+items[x]["id"]+"' class='col-sm-4 items' style='background-image: url("+items[x]["productImg"]+")'><div class='vakken-productnaam'>"+items[x]["vakken"]+" - "+items[x]["productnaam"]+" €"+items[x]["prijs"]+",00</div></a>";
      }
  }
  filterIds = [];
}

showProducts();
function bestelRemoveAdd(id){
  var id_str = id.toString()
  while(id_str.length <=7){
    id_str = "0" + id_str;
    }
  
  window.open("plannen.php?id="+id_str, "_self"); 
}

