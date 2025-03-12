// Ambil tombol
let myButton = document.getElementById("myBtn");

// Jalankan fungsi saat pengguna scroll
window.onscroll = function () {
    scrollFunctionBTT();
};

function scrollFunctionBTT() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        myButton.style.display = "block";
    } else {
        myButton.style.display = "none";
    }
}

// Fungsi scroll ke atas
function topFunction() {
    window.scrollTo({ top: 0, behavior: "smooth" });
}


(function ($) {
    "use strict";

    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
})(jQuery);
