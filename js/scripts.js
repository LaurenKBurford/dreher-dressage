jQuery(function() {
  jQuery('.menu-button').on('click', function(e) {
    jQuery(this).toggleClass('active');
    jQuery('#menu').slideToggle( 'slow', function(){});
    jQuery('#menu').toggleClass('active');
    });
  });