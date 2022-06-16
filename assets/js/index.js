/*Quantity incrementer */
var counter = 0;

function incrementer() {
    counter++;
    document.getElementById("quantityInc").innerHTML = counter;
}

function decrementer() {
    counter > 0 ? counter-- : counter;
    document.getElementById("quantityInc").innerHTML = counter;
}

/*product deitals img slider */
$(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: ".slider-nav",
});
$(".slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: true,
    focusOnSelect: true,
});