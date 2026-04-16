$(document).ready(function () {
    $('.owl-one').owlCarousel({
        loop: true,
        autoWidth: true,
        autoplay: false,
        autoplayTimeout: 3000,
        center: false,
        items: 3,
        margin: 24,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                center: true,
            },
            600: {
                items: 3,
                center: true,
            },
            1000: {
                items: 5,
            }
        }
    });


    $('.owl-two').owlCarousel({
        loop: true,
        autoWidth: true,
        autoplay: false,
        autoplayTimeout: 3000,
        center: false,
        items: 3,
        margin: 24,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                center: true,
            },
            600: {
                items: 3,
                center: true,
            },
            1000: {
                items: 5,
            }
        }
    });


    $('.owl-three').owlCarousel({
        loop: true,
        autoWidth: true,
        items: 3,
        margin: 24,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                center: true,
            },
            600: {
                items: 3,
                center: true,
            },
            1000: {
                items: 5,
            }
        }
    });


    $('.owl-vebinar').owlCarousel({
        loop: true,
        autoWidth: true,
        items: 3,
        margin: 24,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                center: true,
            },
            600: {
                items: 3,
                center: true,
            },
            1000: {
                items: 5,
            }
        }
    });
});




$(document).ready(function () {
    $('.blog-item2').hide();
    $('.blog-item3').hide();
    $('.blog-item4').hide();

    $('.blog-card1').click(function () {
        $('.blog-item2').hide();
        $('.blog-card2').removeClass('blog-card-active')

        $('.blog-item3').hide();
        $('.blog-card3').removeClass('blog-card-active')

        $('.blog-item4').hide();
        $('.blog-card4').removeClass('blog-card-active')

        $('.blog-item1').fadeIn();
        $('.blog-card1').addClass('blog-card-active')
    })


    $('.blog-card2').click(function () {
        $('.blog-item1').hide();
        $('.blog-card1').removeClass('blog-card-active')

        $('.blog-item3').hide();
        $('.blog-card3').removeClass('blog-card-active')

        $('.blog-item4').hide();
        $('.blog-card4').removeClass('blog-card-active')

        $('.blog-item2').fadeIn();
        $('.blog-card2').addClass('blog-card-active')
    })
    

    $('.blog-card3').click(function () {
        $('.blog-item2').hide();
        $('.blog-card2').removeClass('blog-card-active')

        $('.blog-item1').hide();
        $('.blog-card1').removeClass('blog-card-active')

        $('.blog-item4').hide();
        $('.blog-card4').removeClass('blog-card-active')

        $('.blog-item3').fadeIn();
        $('.blog-card3').addClass('blog-card-active')
    })


    $('.blog-card4').click(function () {
        $('.blog-item2').hide();
        $('.blog-card2').removeClass('blog-card-active')

        $('.blog-item3').hide();
        $('.blog-card3').removeClass('blog-card-active')

        $('.blog-item1').hide();
        $('.blog-card1').removeClass('blog-card-active')

        $('.blog-item4').fadeIn();
        $('.blog-card4').addClass('blog-card-active')
    })


    




    $('.acc1').click(function () {
        $('.accordian-answer1').slideToggle();
        $('.accordian-answer2').slideUp();
        $('.accordian-answer3').slideUp();
        $('.accordian-answer4').slideUp();
    })
    $('.acc2').click(function () {
        $('.accordian-answer2').slideToggle();
        $('.accordian-answer1').slideUp();
        $('.accordian-answer3').slideUp();
        $('.accordian-answer4').slideUp();
    })
    $('.acc3').click(function () {
        $('.accordian-answer3').slideToggle();
        $('.accordian-answer2').slideUp();
        $('.accordian-answer1').slideUp();
        $('.accordian-answer4').slideUp();
    })
    $('.acc4').click(function () {
        $('.accordian-answer4').slideToggle();
        $('.accordian-answer2').slideUp();
        $('.accordian-answer3').slideUp();
        $('.accordian-answer1').slideUp();
    })
});