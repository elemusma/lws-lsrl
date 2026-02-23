lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
  })


  // Fix crawlability issue after lightbox builds its DOM
// document.addEventListener('DOMContentLoaded', function() {
//   const lbClose = document.querySelector('a.lb-close');
//   if (lbClose) {
//     lbClose.setAttribute('href', '#');
//     lbClose.setAttribute('aria-label', 'Close lightbox');
//   }
// });