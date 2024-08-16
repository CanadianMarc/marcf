function toggleMobileNav() {
    var x = document.querySelectorAll("mbl")[0];
    if(x.style.display == "" || x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}