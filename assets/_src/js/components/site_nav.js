import debounce from "lodash/debounce";

// navigation menu toggle show/hide
(function () {
  const menu = document.querySelector(".menu-panel--left");
  let showSiteNav = false;

  listenSiteNavToggle();
  // listentToSiteNavLinks();

  function listenSiteNavToggle() {
    [...document.querySelectorAll(".menu-panel--left--toggle")].forEach(
      (trigger) => {
        trigger.addEventListener("click", toggleMenu);
      }
    );
  }

  function listentToSiteNavLinks() {
    [...document.querySelectorAll(".menu-panel--left a")].forEach((trigger) => {
      trigger.addEventListener("click", (e) => {
        console.log(e.target.href);
        if (e.target.href.indexOf("#") === 0) {
          toggleMenu(e);
        }
      });
    });
  }

  function toggleMenu(e) {
    showSiteNav = !showSiteNav;

    if (showSiteNav) {
      menu.classList.add("d-block");
    } else {
      menu.classList.remove("d-block");
    }
  }
})();

// navigation menu resize on scroll
(function () {
  const menu = document.querySelector(".site-nav--container");
  let isScrolledDown = false;

  window.addEventListener("scroll", debounce(toggleMenuSize, 100));

  function toggleMenuSize(e) {
    window.requestAnimationFrame(function () {
      if (window.scrollY < 80 && isScrolledDown === true) {
        isScrolledDown = false;
        menu.classList.remove("reduce-size");
      } else if (window.scrollY > 80 && isScrolledDown === false) {
        isScrolledDown = true;
        menu.classList.add("reduce-size");
      }
    });
  }
})();
