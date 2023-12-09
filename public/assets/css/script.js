function show_hide() {
    // Get the element with the ID "harambee-member"
    var x = document.getElementById("harambee-member");

    // Toggle the visibility of the element
    if (x.style.display === "none") {
      x.style.display = "";
    } else {
      x.style.display = "none";
    }
  }
