function responsiveNav() {
    var x = document.getElementById("header-links-link");
    if (x.className === "header-links-link") {
      x.className += "responsive";
    } else {
      x.className = "header-links";
    }
  }