$(document).ready(function () {

    $(window).on('scroll', function () {

        if ($(this).scrollTop() > 500) {

            $('.navbar').addClass('bg-black')

        } else {

            $('.navbar').removeClass('bg-black')

        }//end of else

    });//end of window scroll

});//end of document ready
