$(document).foundation();

/* DROPDOWN NAV ------------- */
var lockNavBar = false;
$('.nav-bar a.flyout-toggle').live('click', function(e) {
    e.preventDefault();
    var flyout = $(this).siblings('.flyout');
    if (lockNavBar === false) {
        $('.nav-bar .flyout').not(flyout).slideUp(500);
        flyout.slideToggle(500, function(){
            lockNavBar = false;
        });
    }
    lockNavBar = true;
});
if (Modernizr.touch) {
$('.nav-bar>li.has-flyout>a.main').css({
  'padding-right' : '75px'
});
$('.nav-bar>li.has-flyout>a.flyout-toggle').css({
  'border-left' : '1px dashed #eee'
});
} else {
$('.nav-bar>li.has-flyout').hover(function() {
  $(this).children('.flyout').show();
}, function() {
  $(this).children('.flyout').hide();
})
}