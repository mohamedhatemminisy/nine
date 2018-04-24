$(function  () {

    // brand slider
    $('.inner-slider-brands').slick({
        slidesToShow: 5,
        prevArrow:'.arrow-brands-left',
        nextArrow:'.arrow-brands-right',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {

                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

});