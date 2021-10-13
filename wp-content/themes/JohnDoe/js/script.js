//Slider
jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    items: 1,
})
var owl = jQuery('.owl-carousel');
owl.owlCarousel();
jQuery(".right").click(function(){
 owl.trigger("next.owl.carousel");
});

jQuery(".left").click(function(){
 owl.trigger("prev.owl.carousel");
});

//Open hidden-menu
var burger = document.getElementById("burger");
burger.addEventListener("click", function (event) {
    event.preventDefault();
    jQuery(".hidden-menu").css('right', '0').css('transition', 'right 0.4s linear');
});

// Close hidden-menu
var close_menu = document.getElementById("close-menu");
close_menu.addEventListener("click", function (event) {
    event.preventDefault();
    jQuery(".hidden-menu").css('right', '-300px').css('transition', 'right 0.4s linear');
});

