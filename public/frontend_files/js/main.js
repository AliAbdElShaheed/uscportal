$(document).ready(function () {

    $(window).on('scroll', function () {

        if ($(this).scrollTop() > 500) {

            $('.navbar').addClass('bg-black'),
                $('.mega-menu .dropdown-menu ').addClass('bg-black'),
                $('.mega-menu .dropdown-item ').addClass('bg-black text-white'),
                $('.mega-menu hr ').addClass('text-white border border-light')


        } else {

            $('.navbar').removeClass('bg-black'),
                $('.mega-menu .dropdown-menu ').removeClass('bg-black'),
                $('.mega-menu .dropdown-item ').removeClass('bg-black text-white'),
                $('.mega-menu hr ').removeClass('text-white border border-light')

        }//end of else

    });//end of window scroll

});//end of document ready


let nums = document.querySelectorAll(".stats .number");
let statsSection = document.querySelector(".stats");
let started = false; // Function Started ? No

window.onscroll = function () {

    // Stats Increase Number
    if (window.scrollY >= statsSection.offsetTop - 300) {
        // console.log('arrive');
        if (!started) {
            nums.forEach((num) => startCount(num));
        }
        started = true;
    }
};

function startCount(el) {
    let goal = el.dataset.goal;
    let count = setInterval(() => {
        el.textContent++;
        if (el.textContent == goal) {
            clearInterval(count);
        }
    }, 2000 / goal);
}
