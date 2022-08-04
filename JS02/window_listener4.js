document.addEventListener("mouseover", function(event) {
    event.target.classList.add("active");
});

document.addEventListener("mouseout", function(event) {
    event.target.classList.remove("active");
});