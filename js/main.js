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
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        center: true,
        autoplay: true,
        smartSpeed: 1500,
        margin: 30,
        dots: true,
        loop: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);
document.addEventListener('DOMContentLoaded', () => {
    const languageSelector = {
        init() {
            this.selectedLang = document.querySelector('.selected-lang');
            this.dropdownItems = document.querySelectorAll('.dropdown-item');
            this.setupEventListeners();
            this.loadSavedLanguage();
        },

        setupEventListeners() {
            this.dropdownItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    e.preventDefault();
                    const langCode = item.dataset.lang.toUpperCase();
                    this.updateSelectedLanguage(langCode, item);
                    this.closeDropdown();
                });
            });
        },

        updateSelectedLanguage(langCode, selectedItem) {
            // Actualizar texto del botón
            this.selectedLang.textContent = langCode;
            
            // Actualizar estado activo
            this.dropdownItems.forEach(item => item.classList.remove('active'));
            selectedItem.classList.add('active');
            
            // Guardar preferencia
            localStorage.setItem('selectedLang', langCode);
            
            // Aquí llamarías a tu función de cambio de idioma
            changeLanguage(selectedItem.dataset.lang);
        },

        loadSavedLanguage() {
            const savedLang = localStorage.getItem('selectedLang') || 'ES';
            const correspondingItem = Array.from(this.dropdownItems).find(
                item => item.dataset.lang.toUpperCase() === savedLang
            );
            
            if (correspondingItem) {
                this.updateSelectedLanguage(savedLang, correspondingItem);
            }
        },

        closeDropdown() {
            const dropdown = document.querySelector('.dropdown-menu');
            const bootstrapDropdown = bootstrap.Dropdown.getInstance(dropdown);
            if (bootstrapDropdown) {
                bootstrapDropdown.hide();
            }
        }
    };

    languageSelector.init();
});
