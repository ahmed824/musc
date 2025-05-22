// Register ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Navigation scroll behavior with GSAP
const floatingNav = document.querySelector('.floating-nav');
const header = document.querySelector('.main-header');
const navCenter = document.querySelector('.nav-center');
const searchToggle = document.querySelector('.search-toggle');
const closeSearch = document.querySelector('.close-search');
const searchInput = document.querySelector('.search-input');

// Search functionality
searchToggle.addEventListener('click', () => {
    floatingNav.classList.add('search-active');
    searchInput.focus();
});

closeSearch.addEventListener('click', () => {
    floatingNav.classList.remove('search-active');
    searchInput.value = '';
});

// Close search on escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && floatingNav.classList.contains('search-active')) {
        floatingNav.classList.remove('search-active');
        searchInput.value = '';
    }
});

// Create a timeline for the navigation animation
const navTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: "body",
        start: "top top",
        end: "+=100",
        scrub: 1,
        onEnter: () => {
            floatingNav.classList.add('scrolled');
        },
        onLeaveBack: () => {
            floatingNav.classList.remove('scrolled');
        }
    }
});

// Add hover effect to nav links
const navLinks = document.querySelectorAll('.nav-links li a');
navLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
        gsap.to(link, {
            y: -2,
            duration: 0.3,
            ease: "power2.out"
        });
    });
    
    link.addEventListener('mouseleave', () => {
        gsap.to(link, {
            y: 0,
            duration: 0.3,
            ease: "power2.out"
        });
    });
});

// Set initial state
// Front image is visible from the start
gsap.set("#frontImage", { 
    x: 0, 
    y: 0, 
    opacity: 1, 
    scale: 0.98,
    z: 50
});

// Right image starts close behind
gsap.set("#middleImage", { 
    x: 80, 
    y: 0, 
    opacity: 0.9, 
    scale: 0.98,
    z: 0
});

// Left image starts close behind
gsap.set("#backImage", { 
    x: -80, 
    y: 0, 
    opacity: 0.9, 
    scale: 0.98,
    z: 10
});

// Title starts hidden
gsap.set("#sectionTitle", { y: -280, opacity: 0 });

// Create main timeline with ScrollTrigger
const mainTl = gsap.timeline({
    scrollTrigger: {
        trigger: "#imageSection",
        start: "top top",
        end: "bottom bottom",
        scrub: 1,
        pin: true,
        anticipatePin: 1,
        markers: false
    }
});

// Animation sequence
mainTl
// 1. Show title first
.to("#sectionTitle", {
    y: -110,
    opacity: 1,
    duration: 0.2,
    ease: "power2.out"
})

// 2. Move back images out from behind the front image
.to("#middleImage", {
    x: 400,
    y: -50,
    z: 50,
    opacity: 1,
    scale: 1,
    rotation: 15,
    duration: 1,
    ease: "power2.out"
}, 0.2)
.to("#backImage", {
    x: -400,
    y: 50,
    z: 50,
    opacity: 1,
    scale: 1,
    rotation: -15,
    duration: 1,
    ease: "power2.out"
}, 0.2)

// 3. Slight adjustment to front image for emphasis
.to("#frontImage", {
    y: -30,
    z: 100,
    scale: 1.1,
    duration: 0.5,
    ease: "power2.out"
}, 0.5);

// Floating animation for front image only
gsap.to("#frontImage", {
    y: "+=10",
    duration: 3,
    yoyo: true,
    repeat: -1,
    ease: "sine.inOut",
    delay: 1
});

// Refresh ScrollTrigger after page load
window.addEventListener('load', () => {
    ScrollTrigger.refresh();
}); 