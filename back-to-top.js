window.addEventListener("scroll", function() {
    var backToTopButton = document.getElementById("backToTop");
    if (window.scrollY > 300) { // Adjust this value based on when you want the button to appear
        backToTopButton.classList.add("show");
    } else {
        backToTopButton.classList.remove("show");
    }
});
