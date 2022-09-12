$(document).ready(function () {
    // main slider for whole page
    const toggleSlidePrevButton = function () {
        if (this.realIndex === 0) {
            $('.main-slider-prev').addClass('opacity-0 invisible');
        } else {
            $('.main-slider-prev').removeClass('opacity-0 invisible');
        }
    };
    const mainSlider = new Swiper('.main-slider', {
        direction: 'vertical',
        slidesPerView: 1,
        loop: false,
        speed: 800,
        allowTouchMove: false,
        navigation: {
            prevEl: '.main-slider-prev',
            nextEl: '.main-slider-next',
        },
        on: {
            init: toggleSlidePrevButton,
            slideChange: toggleSlidePrevButton,
        }
    });
    // mainSlider.slideTo(6);

    // noUiSlider
    const slider = document.getElementById('electricity-bill-slider');
    const billSlider = noUiSlider.create(slider, {
        start: 100,
        behaviour: 'snap',
        connect: [true, false],
        range: {
            min: 0,
            max: 1000
        },
        tooltips: [wNumb({
            thousand: ',',
            decimals: 0,
            prefix: '$ ',
        })],
        pips: {
            mode: 'range',
            density: 20,
        }
    });
    const electricityBill = $('[name=electricityBill]');
    billSlider.on('update', function (values, handle) {
        electricityBill.val(values[handle]);
        electricityBill[0]?.dispatchEvent(new Event('input'));
    });

    // my code ----------------------------------------------------------------------
    $.each($('[data-bg-img]'), (index, item) => {
        $(item).css('background-image', $(item).data('bgImg'));
    })

    // preloader
    // $(".preloader").animate({
    //     top: -2000000
    // }, 1500);

    // form data save in session storage
    let data = JSON.parse(sessionStorage.getItem('data')) || {};
    Object.keys(data).forEach(key => {
        $(`input[name=${key}]`).val(data[key]);

        if (key === 'electricityBill') {
            billSlider.set(data[key]);
        }
    });
    
    const form = document.querySelector('.main-form');
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        data = sessionStorage.getItem('data');
        sessionStorage.removeItem('data');
        console.log('Form data removed from session.');
        data = {};
        this.reset();
    });

    $(form).find('input, select').on('input', function () {
        const name = $(this).attr('name');
        const value = $(this).val();
        data[name] = value;

        sessionStorage.setItem('data', JSON.stringify(data));
    });
});
