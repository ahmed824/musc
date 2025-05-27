// GSAP Timeline and animations
const tl = gsap.timeline();
const container = document.getElementById('scrollCircle');
let isHovered = false;
let particles = [];
let isMobile = window.innerWidth <= 768;
let isTablet = window.innerWidth <= 1024 && window.innerWidth > 768;

// Handle window resize
window.addEventListener('resize', () => {
    isMobile = window.innerWidth <= 768;
    isTablet = window.innerWidth <= 1024 && window.innerWidth > 768;
    updateAnimationsForScreenSize();
});

// Initialize animations with screen size awareness
function initAnimations() {
    updateAnimationsForScreenSize();
}

function updateAnimationsForScreenSize() {
    // Clear existing animations
    gsap.killTweensOf('#mainArrow');
    gsap.killTweensOf('#arrowGlow');
    gsap.killTweensOf(container);

    // Arrow bouncing - adjusted for screen size
    gsap.to('#mainArrow', {
        y: isMobile ? -3 : -5,
        duration: isMobile ? 1.2 : 1.5,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });
    
    // Arrow glow pulsing - adjusted for screen size
    gsap.to('#arrowGlow', {
        scale: isMobile ? 1.2 : 1.3,
        opacity: isMobile ? 0.2 : 0.3,
        duration: isMobile ? 1.5 : 2,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });
    
    // Main container floating - adjusted for screen size
    gsap.to(container, {
        y: isMobile ? -8 : (isTablet ? -12 : -15),
        duration: isMobile ? 3 : 4,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });
}

// Create floating particles with screen size awareness
function createParticle() {
    if (particles.length >= (isMobile ? 10 : 20)) {
        return;
    }

    const particle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
    const x = 50 + Math.random() * 150;
    const y = 50 + Math.random() * 150;
    const size = isMobile ? (0.3 + Math.random() * 1.5) : (0.5 + Math.random() * 2);
    
    particle.setAttribute("cx", x);
    particle.setAttribute("cy", y);
    particle.setAttribute("r", size);
    particle.setAttribute("class", "particle");
    particle.setAttribute("opacity", "0");
    
    document.getElementById('particleContainer').appendChild(particle);
    particles.push(particle);
    
    gsap.to(particle, {
        opacity: 1,
        y: y - (isMobile ? 30 : 50),
        duration: isMobile ? 2 + Math.random() * 1.5 : 3 + Math.random() * 2,
        ease: "sine.out",
        onComplete: () => {
            particle.remove();
            particles = particles.filter(p => p !== particle);
        }
    });
    
    gsap.to(particle, {
        opacity: 0,
        duration: isMobile ? 0.8 : 1,
        delay: isMobile ? 1.5 + Math.random() : 2 + Math.random(),
        ease: "sine.out"
    });
}

// Touch device support
let touchStartTime = 0;
container.addEventListener('touchstart', (e) => {
    e.preventDefault();
    touchStartTime = Date.now();
    handleInteractionStart();
});

container.addEventListener('touchend', (e) => {
    e.preventDefault();
    const touchDuration = Date.now() - touchStartTime;
    handleInteractionEnd();
    
    if (touchDuration < 500) {
        handleClick(e);
    }
});

// Mouse interaction handlers
container.addEventListener('mouseenter', handleInteractionStart);
container.addEventListener('mouseleave', handleInteractionEnd);
container.addEventListener('click', handleClick);

function handleInteractionStart() {
    isHovered = true;
    
    gsap.to(container, {
        scale: isMobile ? 1.05 : 1.1,
        duration: isMobile ? 0.3 : 0.4,
        ease: "back.out(1.7)"
    });
    
    gsap.to('#scrollHint', {
        opacity: 1,
        y: isMobile ? -5 : -10,
        duration: 0.3,
        ease: "power2.out"
    });
    
    gsap.to('#loadingText', {
        opacity: 1,
        y: isMobile ? -5 : -10,
        duration: 0.3,
        ease: "power2.out"
    });
    
    // Speed up animations
    gsap.globalTimeline.timeScale(isMobile ? 1.3 : 1.5);
}

function handleInteractionEnd() {
    isHovered = false;
    
    gsap.to(container, {
        scale: 1,
        duration: isMobile ? 0.3 : 0.4,
        ease: "power2.out"
    });
    
    gsap.to('#scrollHint', {
        opacity: 0,
        y: 0,
        duration: 0.3,
        ease: "power2.out"
    });
    
    gsap.to('#loadingText', {
        opacity: 0,
        y: 0,
        duration: 0.3,
        ease: "power2.out"
    });
    
    // Reset animation speed
    gsap.globalTimeline.timeScale(1);
}

function handleClick(e) {
    // Scale animation adjusted for screen size
    gsap.to(container, {
        scale: isMobile ? 0.95 : 0.9,
        duration: 0.1,
        yoyo: true,
        repeat: 1,
        ease: "power2.inOut"
    });
    
    // Create multiple ripples - fewer on mobile
    const rippleCount = isMobile ? 2 : 3;
    for (let i = 0; i < rippleCount; i++) {
        setTimeout(() => {
            createRipple();
        }, i * (isMobile ? 150 : 200));
    }
    
    // Explosion effect
    createExplosion();
}

function createRipple() {
    const ripple = document.createElementNS("http://www.w3.org/2000/svg", "circle");
    ripple.setAttribute("cx", "125");
    ripple.setAttribute("cy", "125");
    ripple.setAttribute("r", "0");
    ripple.setAttribute("fill", "none");
    ripple.setAttribute("stroke", "rgba(255,255,255,0.8)");
    ripple.setAttribute("stroke-width", isMobile ? 1.5 : 2);
    
    document.getElementById('mainSvg').appendChild(ripple);
    
    gsap.to(ripple, {
        attr: { r: isMobile ? 100 : 150 },
        opacity: 0,
        duration: isMobile ? 1 : 1.2,
        ease: "power2.out",
        onComplete: () => {
            ripple.remove();
        }
    });
}

function createExplosion() {
    const sparkCount = isMobile ? 8 : 12;
    for (let i = 0; i < sparkCount; i++) {
        const spark = document.createElementNS("http://www.w3.org/2000/svg", "circle");
        spark.setAttribute("cx", "125");
        spark.setAttribute("cy", "125");
        spark.setAttribute("r", isMobile ? "1.5" : "2");
        spark.setAttribute("fill", "white");
        
        document.getElementById('mainSvg').appendChild(spark);
        
        const angle = (i / sparkCount) * Math.PI * 2;
        const distance = (isMobile ? 40 : 60) + Math.random() * (isMobile ? 30 : 40);
        
        gsap.to(spark, {
            x: Math.cos(angle) * distance,
            y: Math.sin(angle) * distance,
            opacity: 0,
            duration: (isMobile ? 0.8 : 1) + Math.random() * 0.5,
            ease: "power2.out",
            onComplete: () => {
                spark.remove();
            }
        });
    }
}

// Initialize everything
initAnimations();

// Create particles periodically - adjusted for screen size
setInterval(createParticle, isMobile ? 1500 : 1000);

// Enhanced particle creation on hover
setInterval(() => {
    if (isHovered) {
        createParticle();
    }
}, isMobile ? 500 : 300);

// Performance optimization for mobile
if (isMobile) {
    gsap.ticker.fps(30);
} else {
    gsap.ticker.fps(60);
} 