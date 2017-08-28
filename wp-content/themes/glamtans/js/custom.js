/* 

1. Add your custom JavaScript code below
2. Place the this code in your template:

  

*/

var $root = $('html, body');
$('a').click(function() {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});