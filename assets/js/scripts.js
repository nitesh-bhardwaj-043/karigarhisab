(function (window, $) {
    "use strict";

    // ========= MOBILE MENU ===========
    $('.exc-menu-btn').on('click', function () {
        const $this = $(this);
        const isOpened = $this.hasClass('exc-menu-close');

        $('.main-navigation').animate({
            right: isOpened ? "-220px" : "0px"
        }, 500);

        $('body').animate({
            right: isOpened ? "0px" : "220px"
        }, 500);

        $this.toggleClass('exc-menu-close');
    });

    // ========= DROPDOWN MENU ===========
    $('li.dropdown.dropdown-custom > a').on('click', function (e) {
        e.preventDefault();

        const $this = $(this);
        const parentLi = $this.parent();

        $('li.dropdown.dropdown-custom').not(parentLi).removeClass('open');
        parentLi.toggleClass('open');
    });

    // ========= DROPDOWN MENU ITEM CLICK ===========
    $('.dropdown-menu li a').on('click', function () {
        console.log("Dropdown item clicked");
    });

    // ========= CLOSE COLLAPSE ===========
    $('.close-collapse').on('click', function () {
        $(this).parent().removeClass('in');
    });

    // ========= PERFECT SCROLLBAR INIT ===========
    if ($.fn.perfectScrollbar) {
        $('.scroll-block').perfectScrollbar();
    }

})(window, jQuery);


// ========= SLIDER FUNCTIONALITY (VANILLA JS) ===========
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelector('.slides');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    if (slides && prevButton && nextButton) {
        let currentIndex = 0;

        function showSlide(index) {
            const slide = document.querySelector('.slide');
            if (slide) {
                const slideWidth = slide.clientWidth;
                slides.style.transform = `translateX(${-index * slideWidth}px)`;
            }
        }

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.children.length - 1;
            showSlide(currentIndex);
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex < slides.children.length - 1) ? currentIndex + 1 : 0;
            showSlide(currentIndex);
        });

        // Auto-play (Optional)
        setInterval(() => {
            currentIndex = (currentIndex < slides.children.length - 1) ? currentIndex + 1 : 0;
            showSlide(currentIndex);
        }, 5000);
    }
});
