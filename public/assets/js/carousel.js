const carousel = document.querySelector('.carousel');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const images = document.querySelectorAll('.carousel img');

let currentIndex = 0;

// Function to update the carousel display
function updateCarousel() {
    const translateValue = -currentIndex * 33.33 + '%';
    carousel.style.transform = `translateX(${translateValue})`;

    images.forEach((img, index) => {
        if (index === currentIndex) {
            img.classList.add('active');
        } else {
            img.classList.remove('active');
        }
    });
}

// Function to handle next slide
// Function to handle next slide
function nextSlide() {
    currentIndex = (currentIndex + 1) % images.length;
    console.log("Next button clicked"); // Add this line for debugging
    updateCarousel();
}

// Function to handle previous slide
function prevSlide() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    console.log("Previous button clicked"); // Add this line for debugging
    updateCarousel();
}


// Event listeners for navigation buttons
nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

// Initialize the carousel
updateCarousel();

