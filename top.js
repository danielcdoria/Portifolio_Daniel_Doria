
window.addEventListener("scroll", function() {
    const scrollButton = document.querySelector(".scroll-to-top");

    if (window.scrollY > 200) { // Mostrar botão depois de rolar 200 pixels
        scrollButton.classList.add("show-button");
    } else {
        scrollButton.classList.remove("show-button");
    }
});


