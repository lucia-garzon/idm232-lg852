// const nav = document.querySelector(".nav"),
//   searchIcon = document.querySelector("#searchIcon"),
//   searchForm = document.querySelector("#searchForm"),
//   navOpenBtn = document.querySelector(".navOpenBtn"),
//   navCloseBtn = document.querySelector(".navCloseBtn");

// // Toggle search form visibility
// searchIcon.addEventListener("click", () => {
//   nav.classList.toggle("openSearch");
//   searchForm.classList.toggle("active");
//   nav.classList.remove("openNav");

//   // Toggle search icon
//   if (nav.classList.contains("openSearch")) {
//     return searchIcon.classList.replace("uil-search", "uil-times");
//   }
//   searchIcon.classList.replace("uil-times", "uil-search");
// });

// // Open the navigation menu
// navOpenBtn.addEventListener("click", () => {
//   nav.classList.add("openNav");
//   nav.classList.remove("openSearch");
//   searchIcon.classList.replace("uil-times", "uil-search");
//   searchForm.classList.remove("active");
// });

// // Close the navigation menu
// navCloseBtn.addEventListener("click", () => {
//   nav.classList.remove("openNav");
// });
const nav = document.querySelector(".nav"),
        navOpenBtn = document.querySelector(".navOpenBtn"),
        navCloseBtn = document.querySelector(".navCloseBtn"),
        searchIcon = document.querySelector("#searchIcon"),
        searchBox = document.querySelector(".search-box");

// Toggle mobile menu visibility
navOpenBtn.addEventListener("click", () => {
    nav.classList.add("openNav");
});

navCloseBtn.addEventListener("click", () => {
    nav.classList.remove("openNav");
});

// Toggle search box visibility on mobile
searchIcon.addEventListener("click", () => {
    searchBox.classList.toggle("active");
});
