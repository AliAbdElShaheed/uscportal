$(document).ready(function () {

    $(window).on('scroll', function () {

        if ($(this).scrollTop() > 500) {

            $('.navbar').addClass('bg-black')

        } else {

            $('.navbar').removeClass('bg-black')

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
