$(document).ready(function () {

    $('.full-width-slider').slick({
        dots: true,
        infinite: true,
        autoplaySpeed: 2000,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    infinite: true,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    autoplay: true,
                    autoplaySpeed: 2000,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    dots: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
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


    $('#SubmitButton').on('click', function () {
        var title = $('#Product-title').text();
        var uid = $('#Product-title').attr('data-uid');
        var counter = $('#Basket-Button .badge').text();
        console.log(counter);
        if ($('#Basket ul li').length) {
            $.each($('#Basket ul li'), function (index, value) {
                if($(this).attr('data-uid') !== uid) {
                    $('#Basket ul').append('<li data-uid=' + uid + ' >' + title + '</li>');
                    $('#Basket-Button .badge').empty();
                    $('#Basket-Button .badge').text( parseInt(counter) + parseInt(1));
                }
            });
        } else {

            $('#Basket ul').append('<li data-uid=' + uid + ' >' + title + '</li>');
            $('#Basket-Button .badge').empty();
            $('#Basket-Button .badge').text( parseInt(counter) + parseInt(1));
        }

    });
});
