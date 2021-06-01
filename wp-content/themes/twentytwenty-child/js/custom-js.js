$(document).ready(function() {


});


var ticking = false;

window.addEventListener('load', (event) => {
  processAnim(window.scrollY);
});

document.addEventListener('scroll', function(e) {
  lastKnownScrollPosition = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      processAnim(lastKnownScrollPosition);
      ticking = false;
    });
    ticking = true;
  }
});



function processAnim(scrollPos) {
  let elements = document.querySelectorAll('.anim');
  
  elements.forEach(el => {
    let top = offset(el).top;
    let threshold = scrollPos + window.innerHeight;
    if (el.classList.contains('up')) {
      threshold -= el.scrollHeight;
    }
    if (el.classList.contains('down')) {
      threshold += el.scrollHeight;
    }
    if (top < threshold) {
      el.classList.add('done');
    }
  });
}

function offset(el) {
  var rect = el.getBoundingClientRect(),
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
}