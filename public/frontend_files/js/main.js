// (Navbar Work)
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

});//end of document ready (navbar work)

// Vars For Statistics Work
let nums = document.querySelectorAll(".stats .number");
let statsSection = document.querySelector(".stats");
let started = false; // Function Started ? No

// Var For Scroll To Top Button
let upSpan = document.querySelector(".up");


window.onscroll = function () {
    // ************************* Statistics Work
    // if (window.scrollY >= 3000) {  // Test scrolling
    // Stats Increase Number
    if (window.scrollY >= statsSection.offsetTop - 300) {
        // console.log(this.scrollY);
        if (!started) {
            nums.forEach((num) => startCount(num));
        }
        started = true;
    }

    // ************************* Scroll To Top Button
    this.scrollY >= 1000 ? upSpan.classList.add("show") : upSpan.classList.remove("show");


};

// Function For Statistics Work
function startCount(el) {
    let goal = el.dataset.goal;
    let count = setInterval(() => {
        el.textContent++;
        if (el.textContent == goal) {
            clearInterval(count);
        }
    }, 2000 / goal);
}

// this function was only for scroll to top arrow & it included above in the statistics function
/*window.onscroll = function () {
    /!*console.log(this.scrollY);
    if (this.scrollY >= 1000) {
        // console.log('arrive')
        span.classList.add("show");

    } else {
        span.classList.remove("show");
    }*!/
    this.scrollY >= 1000 ? span.classList.add("show") : span.classList.remove("show");
};*/

// Function For Scroll To Top Button
upSpan.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};


