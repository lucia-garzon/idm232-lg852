
const nav = document.querySelector(".nav"),
        navOpenBtn = document.querySelector(".navOpenBtn"),
        navCloseBtn = document.querySelector(".navCloseBtn"),
        searchBox = document.querySelector(".search-box");

// Toggle mobile menu visibility
navOpenBtn.addEventListener("click", () => {
    nav.classList.add("openNav");
});

navCloseBtn.addEventListener("click", () => {
    nav.classList.remove("openNav");
});

// Toggle search box visibility on mobile
// searchIcon.addEventListener("click", () => {
//     searchBox.classList.toggle("active");
// });
