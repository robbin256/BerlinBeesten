/**
 * Header JavaScript — Berlin/368
 * - Hamburger menu toggle (mobiel)
 * - Scroll-based sticky header
 * - Smooth scroll voor ankerlinks
 */

(function () {
  "use strict";

  // ---- DOM referenties ----
  var header = document.getElementById("site-header");
  var hamburger = document.getElementById("hamburger-btn");
  var nav = document.getElementById("main-nav");
  var overlay = document.getElementById("nav-overlay");
  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  // ---- Hamburger menu toggle ----
  function toggleMenu() {
    var isOpen = hamburger.classList.toggle("active");
    nav.classList.toggle("open", isOpen);
    overlay.classList.toggle("active", isOpen);
    hamburger.setAttribute("aria-expanded", isOpen ? "true" : "false");

    // Voorkom scrollen als menu open is
    document.body.style.overflow = isOpen ? "hidden" : "";
  }

  function closeMenu() {
    hamburger.classList.remove("active");
    nav.classList.remove("open");
    overlay.classList.remove("active");
    hamburger.setAttribute("aria-expanded", "false");
    document.body.style.overflow = "";
  }

  if (hamburger) {
    hamburger.addEventListener("click", toggleMenu);
  }

  if (overlay) {
    overlay.addEventListener("click", closeMenu);
  }

  // Sluit menu bij klik op een nav link
  if (nav) {
    nav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", closeMenu);
    });
  }

  // ---- Scroll-based sticky header ----
  var scrollThreshold = 80;

  function handleScroll() {
    if (!header) return;

    if (window.scrollY > scrollThreshold) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  }

  window.addEventListener("scroll", handleScroll, { passive: true });
  // Check meteen bij laden
  handleScroll();

  // ---- Smooth scroll voor ankerlinks ----
  document.querySelectorAll('a[href^="#"]').forEach(function (link) {
    link.addEventListener("click", function (event) {
      var id = link.getAttribute("href");
      if (!id || id === "#") return;

      var target = document.querySelector(id);
      if (!target) return;

      event.preventDefault();
      target.scrollIntoView({
        behavior: reduceMotion ? "auto" : "smooth",
        block: "start",
      });
      history.replaceState(null, "", id);
    });
  });

  // ---- Sluit menu met Escape toets ----
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      closeMenu();
    }
  });
})();
