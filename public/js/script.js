gsap.fromTo("#mockupImage", 
    { opacity: 0, scale: 0.5, y: -100 },
    { opacity: 1, scale: 1, y: 0, duration: 1.5, ease: "bounce" });

const carouselItems = document.querySelectorAll('.carousel-item');
const duration = 4;
const fadeInDuration = 1;
const fadeOutDuration = 1;

let currentIndex = 0;

function nextSlide() {
    const nextIndex = (currentIndex + 1) % carouselItems.length;

    gsap.to(carouselItems[currentIndex], { opacity: 0, duration: fadeOutDuration, ease: "power2.inOut" });
    gsap.to(carouselItems[nextIndex], { opacity: 1, duration: fadeInDuration, ease: "power2.inOut" });

    currentIndex = nextIndex;
}

gsap.set(carouselItems[currentIndex], { opacity: 1 });
setInterval(nextSlide, duration * 1000);

const showPasswordCheckbox = document.getElementById('showPassword');
const passwordField = document.getElementById('password');
const confirmPasswordField = document.getElementById('password_confirmation');

showPasswordCheckbox.addEventListener('change', function() {
    if (this.checked) {
        passwordField.type = 'text';
        confirmPasswordField.type = 'text';
    } else {
        passwordField.type = 'password';
        confirmPasswordField.type = 'password';
    }
});



