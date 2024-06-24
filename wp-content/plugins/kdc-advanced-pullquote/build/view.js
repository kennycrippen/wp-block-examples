/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************!*\
  !*** ./src/view.js ***!
  \*********************/
const elements = document.querySelectorAll('.wp-block-kdc-kdc-advanced-pullquote.is-style-animate');
const initObserver = toObserve => {
  if (toObserve.length <= 0) {
    return;
  }
  toObserve.forEach(el => {
    const observer = new IntersectionObserver(([entry]) => {
      if (entry.isIntersecting) {
        el.classList.add('animate-in');
        return;
      }
    }, {
      root: null,
      threshold: 0.5
    });
    observer.observe(el);
  });
};
if (elements.length > 0) {
  initObserver(elements);
}
/******/ })()
;
//# sourceMappingURL=view.js.map