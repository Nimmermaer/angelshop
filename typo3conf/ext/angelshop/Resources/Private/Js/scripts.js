$(document).ready(function () {
    $('.carousel').carousel({
        interval: 6000,
        wrap: true
    });
    lightbox.option({
        albumLabel: 'Bild %1 von %2'
    });

    $('.datepicker').datepicker();

    $('.trader-slider').slick({
        dots: false,
        infinite: true,
        speed: 3000,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $.cookieBar({
        declineButton: false,
        message: 'Diese Website verwendet Cookies. Indem Sie fortfahren, akzeptieren Sie die Verwendung von Cookies.',
        acceptButton: true,
        acceptText: 'Danke Für die Info',
        acceptFunction: true,
        policyButton: true,
        policyText: 'Ich möchte mehr wissen',
        policyURL: 'https://aba-angelshop.de/impressum/#c1144',
        autoEnable: true,
        effect: 'slide',
        element: 'body',
        zindex: '',
        domain: 'https://aba-angelshop.de/',
        referrer: 'https://aba-angelshop.de/'
    });
    $('.panel').matchHeight();
});
