'use strict';
var $ =  jQuery;

var $root = $('html, body');

// RESPONSIVE MENU
$(".js-toggle-menu").click(function() {
    $(".header").toggleClass("header--active");
});

$(".menu__list").find("li").find("a").click(function(){
    $(".header").removeClass("header--active");
})

$(".social__item").click(function(){
    $(".header").removeClass("header--active");
})

// //Smooth scrolling with links
// $('a[href*=\\#]').on('click', function(e){     
//     e.preventDefault();
    
//     $root.animate({
//         scrollTop: $(this.hash).offset().top
//     }, 500, function() {
//         window.location.hash = target;
//     })
// });

// // Smooth scrolling when the document is loaded and ready
// $(document).ready(function(){    
//     e.preventDefault();
//     $root.animate({
//       scrollTop:$(location.hash).offset().‌​top
//     }, 500);
// });

