/* =========================================================
   XodoSoft custom scripts (loaded after js/script.js)
   ========================================================= */

/* FAQ / accordions: stop the page jumping to the top when an answer opens or closes.
   Opening an answer changes the page height. ScrollSmoother (v3.11.4) then runs its own
   internal refresh, which loses the scroll position and slides the page back to the top.
   Route that refresh through the global ScrollTrigger.refresh(), which keeps the position. */
(function () {
  function patchSmoother() {
    var sm = window.ScrollSmoother && ScrollSmoother.get();
    if (!sm || !window.ScrollTrigger) return false;
    if (!sm.__xodoPatched) {
      sm.refresh = function () { ScrollTrigger.refresh(); };
      sm.__xodoPatched = true;
    }
    return true;
  }
  if (!patchSmoother()) {
    document.addEventListener('DOMContentLoaded', patchSmoother);
    window.addEventListener('load', patchSmoother);
  }
})();

/* Footer copyright year (fallback; PHP already prints the current year) */
document.addEventListener('DOMContentLoaded', function () {
  var yearNode = document.querySelector('.current-year');
  if (yearNode) {
    yearNode.textContent = new Date().getFullYear();
  }
});
