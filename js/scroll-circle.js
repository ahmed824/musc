// GSAP Timeline and animations
const tl = gsap.timeline();
const container = document.getElementById('scrollCircle');
let isHovered = false;
let particles = [];

// Initialize animations
function initAnimations() {
    // Arrow bouncing
    gsap.to('#mainArrow', {
        y: -5,
        duration: 1.5,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });
    
    // Arrow glow pulsing
    gsap.to('#arrowGlow', {
        scale: 1.3,
        opacity: 0.3,
        duration: 2,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });
    
    // Main container floating
    gsap.to(container, {
        y: -15,
        duration: 4,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });
}

// Create floating particles
function createParticle() {
    const particle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
    const x = 50 + Math.random() * 150;
    const y = 50 + Math.random() * 150;
    const size = 0.5 + Math.random() * 2;
    
    particle.setAttribute("cx", x);
    particle.setAttribute("cy", y);
    particle.setAttribute("r", size);
    particle.setAttribute("class", "particle");
    particle.setAttribute("opacity", "0");
    
    document.getElementById('particleContainer').appendChild(particle);
    
    gsap.to(particle, {
        opacity: 1,
        y: y - 50,
        duration: 3 + Math.random() * 2,
        ease: "sine.out",
        onComplete: () => {
            particle.remove();
        }
    });
    
    gsap.to(particle, {
        opacity: 0,
        duration: 1,
        delay: 2 + Math.random(),
        ease: "sine.out"
    });
}

// Enhanced hover effects
container.addEventListener('mouseenter', () => {
    isHovered = true;
    
    gsap.to(container, {
        scale: 1.1,
        duration: 0.4,
        ease: "back.out(1.7)"
    });
    
    gsap.to('#scrollHint', {
        opacity: 1,
        y: -10,
        duration: 0.3,
        ease: "power2.out"
    });
    
    gsap.to('#loadingText', {
        opacity: 1,
        y: -10,
        duration: 0.3,
        ease: "power2.out"
    });
    
    // Speed up animations
    gsap.globalTimeline.timeScale(1.5);
});

container.addEventListener('mouseleave', () => {
    isHovered = false;
    
    gsap.to(container, {
        scale: 1,
        duration: 0.4,
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
});

// Enhanced click effects
container.addEventListener('click', (e) => {
    // Scale animation
    gsap.to(container, {
        scale: 0.9,
        duration: 0.1,
        yoyo: true,
        repeat: 1,
        ease: "power2.inOut"
    });
    
    // Create multiple ripples
    for (let i = 0; i < 3; i++) {
        setTimeout(() => {
            createRipple();
        }, i * 200);
    }
    
    // Explosion effect
    createExplosion();
    
    // Screen shake
    // gsap.to('body', {
    //     x: 2,
    //     duration: 0.1,
    //     yoyo: true,
    //     repeat: 5,
    //     ease: "power2.inOut",
    //     onComplete: () => {
    //         gsap.set('body', { x: 0 });
    //     }
    // });
});

function createRipple() {
    const ripple = document.createElementNS("http://www.w3.org/2000/svg", "circle");
    ripple.setAttribute("cx", "125");
    ripple.setAttribute("cy", "125");
    ripple.setAttribute("r", "0");
    ripple.setAttribute("fill", "none");
    ripple.setAttribute("stroke", "rgba(255,255,255,0.8)");
    ripple.setAttribute("stroke-width", "2");
    
    document.getElementById('mainSvg').appendChild(ripple);
    
    gsap.to(ripple, {
        attr: { r: 150 },
        opacity: 0,
        duration: 1.2,
        ease: "power2.out",
        onComplete: () => {
            ripple.remove();
        }
    });
}

function createExplosion() {
    for (let i = 0; i < 12; i++) {
        const spark = document.createElementNS("http://www.w3.org/2000/svg", "circle");
        spark.setAttribute("cx", "125");
        spark.setAttribute("cy", "125");
        spark.setAttribute("r", "2");
        spark.setAttribute("fill", "white");
        
        document.getElementById('mainSvg').appendChild(spark);
        
        const angle = (i / 12) * Math.PI * 2;
        const distance = 60 + Math.random() * 40;
        
        gsap.to(spark, {
            x: Math.cos(angle) * distance,
            y: Math.sin(angle) * distance,
            opacity: 0,
            duration: 1 + Math.random() * 0.5,
            ease: "power2.out",
            onComplete: () => {
                spark.remove();
            }
        });
    }
}

// Initialize everything
initAnimations();

// Create particles periodically
setInterval(createParticle, 1000);

// Enhanced particle creation on hover
setInterval(() => {
    if (isHovered) {
        createParticle();
    }
}, 300); 