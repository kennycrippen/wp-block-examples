/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************!*\
  !*** ./src/view.js ***!
  \*********************/
const block = document.querySelector('.wp-block-kdc-kdc-social-share');
if (block) {
  const triggerSocialShareDropdown = block.querySelector('.js--trigger-social-share-dropdown');
  const socialShareDropdown = block.querySelector('.k-block--social-networks-dropdown');

  // Open the social share dropdown on click.
  triggerSocialShareDropdown?.addEventListener('click', () => {
    triggerSocialShareDropdown.classList.toggle('open');
    socialShareDropdown.classList.toggle('open');
    if (triggerSocialShareDropdown.classList.contains('open')) {
      triggerSocialShareDropdown.setAttribute("aria-expanded", "true");
    } else {
      triggerSocialShareDropdown.setAttribute("aria-expanded", "false");
    }
  });

  // Hide the dropdown on document click.
  document.addEventListener('click', e => {
    if (!triggerSocialShareDropdown.contains(e.target) && !socialShareDropdown.contains(e.target)) {
      socialShareDropdown.classList.remove('open');
      triggerSocialShareDropdown.classList.remove('open');
    }
  });

  // Hide the dropdown on ESC press.
  document.onkeydown = evt => {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
      isEscape = evt.key === "Escape" || evt.key === "Esc";
    } else {
      isEscape = evt.keyCode === 27;
    }
    if (isEscape) {
      socialShareDropdown.classList.remove('open');
      triggerSocialShareDropdown.classList.remove('open');
    }
  };

  // Copy post URL to clipboard.
  block.querySelector('.copy-button')?.addEventListener('click', e => {
    e.preventDefault();
    const text = block.querySelector('.report-url-for-copy').innerHTML;
    navigator.clipboard.writeText(text);
    block.querySelector('.custom-tooltip').style.display = 'inline-flex';
    setTimeout(function () {
      block.querySelector('.custom-tooltip').style.display = 'none';
    }, 2000);
  });

  // Trigger print.
  block.querySelector('.js-print-button')?.addEventListener('click', e => {
    e.preventDefault();
    window.print();
  });

  // Mobile social share with Web Share API.
  const btn = block.querySelector(".js--trigger-mobile-share");
  const shareData = {
    title: "KDC Website",
    text: btn.dataset.shareText,
    url: btn.dataset.shareUrl
  };
  if (typeof navigator.share === 'function') {
    btn?.addEventListener('click', async () => {
      try {
        await navigator.share(shareData);
      } catch (err) {
        console.log(err);
      }
    });
  }
}
/******/ })()
;
//# sourceMappingURL=view.js.map