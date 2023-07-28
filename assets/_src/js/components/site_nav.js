import debounce from "lodash/debounce";

// navigation menu toggle show/hide
(function () {
  document.querySelector('.menu-trigger').addEventListener('click', (e) => {
    e.target.classList.toggle('active');
    document.querySelector('.menu-item-list').classList.toggle('active');
  });
})();

// navigation menu resize on scroll
(function () {
  console.log('menu-resize')
})();
