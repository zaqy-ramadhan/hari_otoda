$(document).ready(function () {
    const customSlider = $('.custom-slider');
    const dots = $('.dot');
    let currentIndex = 0;

    // Initialize the custom slider
    customSlider.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        arrows: true,
        dots: false,
        prevArrow: $('#prevBtnMS'),
        nextArrow: $('#nextBtnMS'),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    // Event for slide change
    customSlider.on('afterChange', function (event, slick, currentSlide) {
        currentIndex = currentSlide;
        updateActiveDot();
    });

    // Click event for each dot
    dots.each(function (index) {
        $(this).on('click', function () {
            currentIndex = index;
            updateSlidePosition();
            updateActiveDot();
        });
    });

    $('#prevBtnMS').on('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlidePosition();
            updateActiveDot();
        }
    });

    $('#nextBtnMS').on('click', function () {
        if (currentIndex < 6) { // Adjust according to the number of slides - 1
            currentIndex++;
            updateSlidePosition();
            updateActiveDot();
        }
    });

    function updateSlidePosition() {
        customSlider.slick('slickGoTo', currentIndex);
    }

    function updateActiveDot() {
        dots.removeClass('active-dot');
        dots.eq(currentIndex).addClass('active-dot');
    };
});

// Initialize the second slider
$(document).ready(function() {
    const slider = $('.bottom-slider');
    const slides = $('.slide-bottom-card');
    const slideWidth = slides.width();
    let position = 0;

    // Set slider width based on the number of slides
    slider.width(slides.length * slideWidth);

    // Function to move the slider to the next slide
    function moveToNextSlide() {
        if (position < slides.length - 1) {
            position++;
            slider.animate({ left: -position * slideWidth }, 500);
        }
    }

    // Function to move the slider to the previous slide
    function moveToPrevSlide() {
        if (position > 0) {
            position--;
            slider.animate({ left: -position * slideWidth }, 500);
        }
    }

    // Bind the next button click event
    $('#nextBtnMS').on('click', function() {
        moveToNextSlide();
    });

    // Bind the previous button click event
    $('#prevBtnMS').on('click', function() {
        moveToPrevSlide();
    });
});

/*Slider Bottom */
$(document).ready(function(){
    $('.custom-slider-container').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: $('.custom-prev-btn'),
      nextArrow: $('.custom-next-btn'),
      responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }
      ]
    });
  });

//Pop up 
$(document).ready(function() {
    $('.custom-see-button').click(function() {
        var videoSrc = $(this).data('src');
        $('#video').attr('src', videoSrc);
    });

    $('#myModal').on('hide.bs.modal', function () {
        $('#video').attr('src', '');
    });
});

$(document).ready(function() {
    $('.custom-button-explore').click(function() {
        var videoSrc = $(this).data('src');
        $('#video').attr('src', videoSrc);
    });

    $('#myModal').on('hide.bs.modal', function () {
        $('#video').attr('src', '');
    });
});
    
    
    