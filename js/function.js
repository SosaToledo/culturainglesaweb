function openMenu(){
  var items = document.getElementsByClassName("menuItem");
  if(items[1].style.position == "fixed"){
    for (let index = 0; index < items.length; index++) {
      const element = items[index];
      element.style.position = "relative";
    }
  }else{
    for (let index = 0; index < items.length; index++) {
      const element = items[index];
      element.style.position = "fixed";
    }
  }
}