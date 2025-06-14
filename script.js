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

// Animate category cards with enhanced effects
function initCategoryAnimations() {
    // Create a timeline for each card
    const cards = document.querySelectorAll('.category-card');

    // First card animation (from top with rotation)
    gsap.from(cards[0], {
        scrollTrigger: {
            trigger: cards[0],
            start: "top 80%",
            end: "top 20%",
            toggleActions: "play none none reverse",
            markers: false
        },
        y: -200,
        rotation: -10,
        opacity: 0,
        duration: 1.2,
        ease: "power2.out"
    });

    // Middle card animation (from bottom with scale)
    gsap.from(cards[1], {
        scrollTrigger: {
            trigger: cards[1],
            start: "top 80%",
            end: "top 20%",
            toggleActions: "play none none reverse",
            markers: false
        },
        y: 200,
        scale: 0.8,
        opacity: 0,
        duration: 1.5,
        ease: "elastic.out(1, 0.8)"
    });

    // Last card animation (from top with rotation opposite)
    gsap.from(cards[2], {
        scrollTrigger: {
            trigger: cards[2],
            start: "top 80%",
            end: "top 20%",
            toggleActions: "play none none reverse",
            markers: false
        },
        y: -200,
        rotation: 10,
        opacity: 0,
        duration: 1.2,
        ease: "power2.out"
    });

    // Enhanced image animations
    cards.forEach((card, index) => {
        const img = card.querySelector('img');
        const title = card.querySelector('h3');
        const text = card.querySelector('p');

        // Create timeline for each card's contents
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: card,
                start: "top 80%",
                end: "top 20%",
                toggleActions: "play none none reverse"
            }
        });

        // Sequence of animations
        tl.from(img, {
                scale: 0,
                rotation: index === 1 ? 360 : -360,
                opacity: 0,
                duration: 1.5,
                ease: "power2.out"
            })
            .from(title, {
                x: index === 1 ? 100 : -100,
                opacity: 0,
                duration: 0.8
            }, "-=0.8")
            .from(text, {
                y: 50,
                opacity: 0,
                duration: 0.8
            }, "-=0.5")

    });

    // Add hover animations
    cards.forEach(card => {
        const img = card.querySelector('img');

        card.addEventListener('mouseenter', () => {
            gsap.to(img, {
                scale: 1.1,
                rotation: 5,
                duration: 0.3,
                ease: "power1.out"
            });
            gsap.to(card, {
                y: -10,
                duration: 0.3,
                ease: "power1.out"
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(img, {
                scale: 1,
                rotation: 0,
                duration: 0.3,
                ease: "power1.in"
            });
            gsap.to(card, {
                y: 0,
                duration: 0.3,
                ease: "power1.in"
            });
        });
    });
}

// Initialize animations when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initCategoryAnimations();
});


// Register ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Get the SVG path element
const path = document.querySelector('.curved-line path');

// Get the length of the path
const pathLength = path.getTotalLength();

// Set initial stroke-dasharray and stroke-dashoffset
path.style.strokeDasharray = pathLength;
path.style.strokeDashoffset = pathLength;

// GSAP timeline for hero section (excluding .curved-line)
gsap.timeline()
    .from('.main-title', {
        duration: 1.5,
        y: 50,
        opacity: 0,
        ease: 'power3.out'
    })
    .from('.description', {
        duration: 1,
        y: 30,
        opacity: 0,
        ease: 'power2.out'
    }, '-=0.6')
    .from('.dining-setup', {
        duration: 1.5,
        scale: 0.8,
        opacity: 0,
        ease: 'power3.out'
    }, '-=1.2')
    .from('.sale-badge', {
        duration: 0.8,
        scale: 0,
        rotation: 180,
        ease: 'back.out(1.7)'
    }, '-=0.3');

// ScrollTrigger animation for the SVG path drawing
gsap.to(path, {
    strokeDashoffset: 0, // Animate to 0 to reveal the full path
    duration: 2,
    ease: 'power2.out',
    scrollTrigger: {
        trigger: '.curved-line', // Element that triggers the animation
        start: 'top 80%', // Start when the top of .curved-line is at 80% of the viewport height
        end: 'top 20%', // End when the top of .curved-line is at 20% of the viewport height
        scrub: 1, // Smoothly animate as the user scrolls
        // toggleActions: 'play none none none' // Play animation on enter, no reverse
    }
});
// Shop Now button interactions
const shopBtn = document.getElementById('shopNowBtn');

shopBtn.addEventListener('mouseenter', () => {
    gsap.to('.btn-circle', {
        duration: 0.4,
        scale: 1.1,
        ease: 'power2.out'
    });
});

shopBtn.addEventListener('mouseleave', () => {
    gsap.to('.btn-circle', {
        duration: 0.4,
        scale: 1,
        ease: 'power2.out'
    });
});

shopBtn.addEventListener('click', (e) => {
    e.preventDefault();

    // Click animation
    gsap.timeline()
        .to('.shop-now-btn', {
            duration: 0.1,
            scale: 0.95,
            ease: 'power2.out'
        })
        .to('.shop-now-btn', {
            duration: 0.3,
            scale: 1,
            ease: 'back.out(1.7)'
        })
        .to('.btn-circle', {
            duration: 0.6,
            rotation: 360,
            ease: 'power2.inOut'
        }, '-=0.3');

    console.log('Shop Now clicked!');
});

// Ambient lighting animation
gsap.to('.ambient-glow', {
    duration: 3,
    scale: 1.3,
    opacity: 0.4,
    repeat: -1,
    yoyo: true,
    ease: 'sine.inOut'
});

// Subtle furniture animations
gsap.to('.pendant-light', {
    duration: 4,
    rotation: 2,
    repeat: -1,
    yoyo: true,
    ease: 'sine.inOut',
    transformOrigin: 'top center'
});

gsap.to('.wall-light::before', {
    duration: 2,
    scale: 1.2,
    repeat: -1,
    yoyo: true,
    ease: 'sine.inOut'
});


// Initialize Swiper for equipment section
const equipmentSwiper = new Swiper('.equipment-swiper', {
    // Enable smooth sliding
    speed: 800,

    // Configure slides per view
    slidesPerView: 'auto',
    spaceBetween: 30,

    // Enable loop
    loop: false,

    // Enable mousewheel control
    mousewheel: {
        invert: false,
        forceToAxis: true
    },

    // Enable keyboard control
    keyboard: {
        enabled: true,
        onlyInViewport: true
    },

    // Configure autoplay
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
    },

    // Configure pagination
    pagination: {
        el: '.equipment-swiper .swiper-pagination', // Scope to equipment-swiper
        clickable: true,
        type: 'progressbar',
        renderProgressbar: function(progressbarFillClass) {
            return '<span class="' + progressbarFillClass + '"></span>';
        }
    },

    // Configure navigation
    navigation: {
        nextEl: '.equipment-next',
        prevEl: '.equipment-prev'
    },

    // Responsive breakpoints
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        480: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    },

    // Enable smooth effects
    effect: 'slide',
    grabCursor: true,

    // Add a11y features
    a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
        firstSlideMessage: 'This is the first slide',
        lastSlideMessage: 'This is the last slide',
        paginationBulletMessage: 'Go to slide {{index}}'
    }
});

// Add hover pause functionality
const equipmentSwiperContainer = document.querySelector('.equipment-swiper');

equipmentSwiperContainer.addEventListener('mouseenter', () => {
    equipmentSwiper.autoplay.stop();
});

equipmentSwiperContainer.addEventListener('mouseleave', () => {
    equipmentSwiper.autoplay.start();
});

// Add touch swiping improvements
equipmentSwiper.on('touchStart', () => {
    equipmentSwiper.autoplay.stop();
});

equipmentSwiper.on('touchEnd', () => {
    equipmentSwiper.autoplay.start();
});

// Initialize Swiper for sanitaryware section
const sanitarywareSwiper = new Swiper('.sanitaryware-swiper', {
    // Enable smooth sliding
    speed: 800,

    // Configure slides per view
    slidesPerView: 'auto',
    spaceBetween: 30,

    // Enable loop
    loop: false,

    // Enable mousewheel control
    mousewheel: {
        invert: false,
        forceToAxis: true
    },

    // Enable keyboard control
    keyboard: {
        enabled: true,
        onlyInViewport: true
    },

    // Configure autoplay
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
    },

    // Configure pagination
    pagination: {
        el: '.sanitaryware-swiper .swiper-pagination', // Scope to sanitaryware-swiper
        clickable: true,
        type: 'progressbar',
        renderProgressbar: function(progressbarFillClass) {
            return '<span class="' + progressbarFillClass + '"></span>';
        }
    },

    // Configure navigation
    navigation: {
        nextEl: '.sanitaryware-next',
        prevEl: '.sanitaryware-prev'
    },

    // Responsive breakpoints
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        480: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    },

    // Enable smooth effects
    effect: 'slide',
    grabCursor: true,

    // Add a11y features
    a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
        firstSlideMessage: 'This is the first slide',
        lastSlideMessage: 'This is the last slide',
        paginationBulletMessage: 'Go to slide {{index}}'
    }
});

// Add hover pause functionality
const sanitarywareSwiperContainer = document.querySelector('.sanitaryware-swiper');

sanitarywareSwiperContainer.addEventListener('mouseenter', () => {
    sanitarywareSwiper.autoplay.stop();
});

sanitarywareSwiperContainer.addEventListener('mouseleave', () => {
    sanitarywareSwiper.autoplay.start();
});

// Add touch swiping improvements
sanitarywareSwiper.on('touchStart', () => {
    sanitarywareSwiper.autoplay.stop();
});

sanitarywareSwiper.on('touchEnd', () => {
    sanitarywareSwiper.autoplay.start();
});

// Add slide change animation
equipmentSwiper.on('slideChange', () => {
    const activeSlide = document.querySelector('.swiper-slide-active');
    if (activeSlide) {
        activeSlide.style.transform = 'scale(1.02)';
        setTimeout(() => {
            activeSlide.style.transform = 'scale(1)';
        }, 300);
    }
});

// Add hover animations for equipment cards
const equipmentCards = document.querySelectorAll('.equipment-card');

equipmentCards.forEach(card => {
    const cardImage = card.querySelector('.card-image img');

    // Create hover timeline
    const hoverTl = gsap.timeline({ paused: true });

    hoverTl
        .to(cardImage, {
            scale: 1.1,
            duration: 0.3,
            ease: "power2.out"
        })


    // Add hover listeners
    card.addEventListener('mouseenter', () => {
        hoverTl.play();
    });

    card.addEventListener('mouseleave', () => {
        hoverTl.reverse();
    });
});

// ... existing code ...
// Initialize Swiper for ELECTRICAL section
const electricalSwiper = new Swiper('.ELECTRICAL-swiper', {
    // Enable smooth sliding
    speed: 800,

    // Configure slides per view
    slidesPerView: 'auto',
    spaceBetween: 30,

    // Enable loop
    loop: false,

    // Enable mousewheel control
    mousewheel: {
        invert: false,
        forceToAxis: true
    },

    // Enable keyboard control
    keyboard: {
        enabled: true,
        onlyInViewport: true
    },

    // Configure autoplay
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
    },

    // Configure pagination
    pagination: {
        el: '.ELECTRICAL-swiper .swiper-pagination', // Scope to ELECTRICAL-swiper
        clickable: true,
        type: 'progressbar',
        renderProgressbar: function(progressbarFillClass) {
            return '<span class="' + progressbarFillClass + '"></span>';
        }
    },

    // Configure navigation
    navigation: {
        nextEl: '.ELECTRICAL-next',
        prevEl: '.ELECTRICAL-prev'
    },

    // Responsive breakpoints
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        480: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    },

    // Enable smooth effects
    effect: 'slide',
    grabCursor: true,

    // Add a11y features
    a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
        firstSlideMessage: 'This is the first slide',
        lastSlideMessage: 'This is the last slide',
        paginationBulletMessage: 'Go to slide {{index}}'
    }
});

// Add hover pause functionality
const electricalSwiperContainer = document.querySelector('.ELECTRICAL-swiper');

electricalSwiperContainer.addEventListener('mouseenter', () => {
    electricalSwiper.autoplay.stop();
});

electricalSwiperContainer.addEventListener('mouseleave', () => {
    electricalSwiper.autoplay.start();
});

// Add touch swiping improvements
electricalSwiper.on('touchStart', () => {
    electricalSwiper.autoplay.stop();
});

electricalSwiper.on('touchEnd', () => {
    electricalSwiper.autoplay.start();
});

// Add slide change animation
electricalSwiper.on('slideChange', () => {
    const activeSlide = document.querySelector('.swiper-slide-active');
    if (activeSlide) {
        activeSlide.style.transform = 'scale(1.02)';
        setTimeout(() => {
            activeSlide.style.transform = 'scale(1)';
        }, 300);
    }
});

// Add hover animations for ELECTRICAL cards
const electricalCards = document.querySelectorAll('.ELECTRICAL-section .equipment-card');

electricalCards.forEach(card => {
    const cardImage = card.querySelector('.card-image img');

    // Create hover timeline
    const hoverTl = gsap.timeline({ paused: true });

    hoverTl
        .to(cardImage, {
            scale: 1.1,
            duration: 0.3,
            ease: "power2.out"
        });

    // Add hover listeners
    card.addEventListener('mouseenter', () => {
        hoverTl.play();
    });

    card.addEventListener('mouseleave', () => {
        hoverTl.reverse();
    });
});
// Footer Accordion
document.addEventListener('DOMContentLoaded', function() {
    const footerTitles = document.querySelectorAll('.footer-title');

    footerTitles.forEach(title => {
        if (window.innerWidth <= 991) { // Only add click event for mobile devices
            title.addEventListener('click', function() {
                // Remove active class from all other titles
                footerTitles.forEach(otherTitle => {
                    if (otherTitle !== title) {
                        otherTitle.classList.remove('active');
                    }
                });

                // Toggle active class on clicked title
                this.classList.toggle('active');

                // Smooth height animation for content
                const content = this.nextElementSibling;
                if (content) {
                    if (this.classList.contains('active')) {
                        content.style.display = 'block';
                        const height = content.scrollHeight;
                        content.style.height = '0px';
                        setTimeout(() => {
                            content.style.height = height + 'px';
                        }, 0);
                    } else {
                        content.style.height = '0px';
                        content.addEventListener('transitionend', function handler() {
                            if (!title.classList.contains('active')) {
                                content.style.display = 'none';
                            }
                            content.removeEventListener('transitionend', handler);
                        });
                    }
                }
            });
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 991) {
            // Reset all accordions when screen size becomes larger
            footerTitles.forEach(title => {
                title.classList.remove('active');
                const content = title.nextElementSibling;
                if (content) {
                    content.style.display = '';
                    content.style.height = '';
                }
            });
        }
    });
});