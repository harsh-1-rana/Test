document.addEventListener('click', function(event) {
    if (event.target.classList.includes("classA")) {
        event.target.classList.add("found");
    }
})