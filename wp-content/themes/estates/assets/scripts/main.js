/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {
  try {
    Typekit.load({
      loading: function() {
      // Javascript to execute when fonts start loading
      },
      active: function() {
      // Javascript to execute when fonts become active
      },
      inactive: function() {
      // Javascript to execute when fonts become inactive
      }
    });
  } catch(e) {
    console.log(e);
  }

  /*console.log("Foo!");
  if $('body').hasClass('home'){
    $("a[href='/']").addClass('active');
  }

  if $('body').hasClass('about-me'){
    $("a[href='/about-me']").addClass('active');
  }*/
})(jQuery); // Fully reference jQuery after this point.
