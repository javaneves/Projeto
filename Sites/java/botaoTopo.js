
$(function () {
    $(window).scroll(function () {
        // 350 quer dizer depois de 350px o elemento irá aparecer
        if ($(this).scrollTop() > 250) {  
            $('#botaoazul').fadeIn();
        } else {
            $('#botaoazul').fadeOut();
        }
    });
});