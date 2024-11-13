// Global Variables
const menuBtn = document.getElementById("menuBtn");
const navigationsCont = document.querySelector(".navigations-cont");
const goToTopBtn = document.getElementById("goToTopBtn");

// Menu Button Toggle
menuBtn.onclick = () => {
    navigationsCont.classList.toggle("active");
};

// Scroll to Top Button
window.onscroll = () => {
    if (document.documentElement.scrollTop > 500) {
        goToTopBtn.classList.add("show");
    } else {
        goToTopBtn.classList.remove("show");
    }
};

goToTopBtn.onclick = () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
};

// Navigation Functions
function goToLogin() {
    window.location.href = "auth/login_form.php";
}

function goToSignUp() {
    window.location.href = "auth/register_form.php";
}

function authGoToLogin() {
    window.location.href = "login_form.php";
}

function authGoToSignUp() {
    window.location.href = "register_form.php";
}

// Smooth Scroll for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
            // Close mobile menu if open
            navigationsCont.classList.remove("active");
        }
    });
});

// Add to Cart Animation
const cartIcon = document.querySelector('.fa-shopping-cart');
cartIcon.addEventListener('click', () => {
    cartIcon.classList.add('shake');
    setTimeout(() => {
        cartIcon.classList.remove('shake');
    }, 500);
});

// Initialize AOS
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        once: true,
        duration: 800,
        offset: 100
    });
});