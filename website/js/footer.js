/**
 * Footer JavaScript — Berlin/368
 * - Smooth scroll "Naar boven" knop
 * - Reveal animatie bij scrollen
 */

(function () {
  "use strict";

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  // ---- Naar boven smooth scroll ----
  var backTopBtn = document.getElementById("back-top-btn");

  if (backTopBtn) {
    backTopBtn.addEventListener("click", function (event) {
      event.preventDefault();

      window.scrollTo({
        top: 0,
        behavior: reduceMotion ? "auto" : "smooth",
      });

      // URL schoon houden
      history.replaceState(null, "", window.location.pathname);
    });
  }

  // ---- Footer reveal animatie ----
  var footer = document.getElementById("site-footer");

  if (footer && !reduceMotion && "IntersectionObserver" in window) {
    footer.style.opacity = "0";
    footer.style.transform = "translateY(20px)";
    footer.style.transition = "opacity 0.6s ease, transform 0.6s ease";

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            footer.style.opacity = "1";
            footer.style.transform = "translateY(0)";
            observer.unobserve(footer);
          }
        });
      },
      { threshold: 0.15 }
    );

    observer.observe(footer);
  }
})();
