<!--jquery-->
<script src="{{ asset('frontend_files/js/jquery-3.4.0.min.js') }}"></script>

<!--bootstrap-->
<script src="{{ asset('frontend_files/js/bootstrap.bundle.min.js') }}"></script>

<!--Font Awesome-->
<script src="{{ asset('frontend_files/js/all.min.js') }}"></script>

<!--main scripts-->
<script src="{{ asset('frontend_files/js/main.js') }}"></script>

{{--custom js--}}


<script type="text/javascript">
    //Javacript for responsive navigation menu
    /*    const menuBtn = document.querySelector(".menu-btn");
            const navigation = document.querySelector(".navigation");

            menuBtn.addEventListener("click", () => {
                menuBtn.classList.toggle("active");
                navigation.classList.toggle("active");
        });*/

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function (manual) {
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        contents.forEach((content) => {
            content.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            sliderNav(i);
        });
    });
</script>
