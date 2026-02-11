// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById("mobile-menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

if (mobileMenuBtn && mobileMenu) {
  mobileMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
}

// Navbar Scroll Effect
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    navbar.classList.add(
      "bg-gray-900/90",
      "backdrop-blur-lg",
      "border-b",
      "border-gray-800",
    );
    navbar.classList.remove("glass");
  } else {
    navbar.classList.remove(
      "bg-gray-900/90",
      "backdrop-blur-lg",
      "border-b",
      "border-gray-800",
    );
    navbar.classList.add("glass");
  }
});
