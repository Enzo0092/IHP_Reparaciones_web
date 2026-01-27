document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.getElementById("menu-toggle");
  const nav = document.getElementById("menu-nav");

  toggle.addEventListener("click", () => {
    nav.classList.toggle("active");
  });
});
