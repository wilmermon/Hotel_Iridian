$raiz = '';
if(window.location.href.indexOf("app_dev.php") > -1) {
    $raiz = '/app_dev.php';
}
$(function(){
    if(isMobile){
        var slideout = new Slideout({
            'panel': document.getElementById('panel'),
            'menu': document.getElementById('menu'),
            'padding': 256,
            'tolerance': 70
        });
        $('.menu_h').on('click', function() {
            slideout.toggle();
        });
    }

    var swiper = new Swiper('.rotador_nosotros', {
        slidesPerView: 1,
        //autoplay: 3000,
        speed: 1000,
        loop: true,
        pagination: '.swiper-pagination',
        paginationClickable: true
    });

    $( ".desplega" ).click(function() {
        console.log('click');
        $(this).next('.fechas_ciudades').slideToggle( "fast", function() {
            // Animation complete.
        });
    });

    $(".desplega_hotel").click(function() {
        var padre = $(this).closest('.content_list_host');
        console.log(padre.data('id'));
        padre.next().find(".slide_hotels").slideToggle( "fast", function() {
            // Animation complete.
        });
    });

    $(".stars_rating").rating({
        min: 0,
        max: 5,
        step: 1,
        emptyStar: '<i class="fa fa-star-o" aria-hidden="true"></i>',
        filledStar: '<i class="fa fa-star" aria-hidden="true"></i>',
        rtl: false,
        showCaption: false,
        size: 'xs'
    });

    var url = window.location.href;

    $(".mainMenu a").each(function() {
        if(url == (this.href)) {
            $(this).closest("li").addClass("menuActive");
        }
    })

});



$( document ).ready(function() {

});


$( window ).resize(function() {
});


$(window).on("load", function() {

});

$(window).scroll(function(){

});



function isMobile() {
    return(/Android|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) );
}

function isIpad(){
    return navigator.userAgent.match(/iPad/i);
}