// Generate random stars with GSAP animations
function createStars() {
  const container = document.getElementById("starsContainer");
  const starCount = 1500;

  for (let i = 0; i < starCount; i++) {
    const star = document.createElement("div");
    star.className = "star";

    // Random size
    const sizes = [
      "small",
      "small",
      "small",
      "small",
      "medium",
      "medium",
      "large",
    ];
    const randomSize = sizes[Math.floor(Math.random() * sizes.length)];
    star.classList.add(randomSize);

    // Random position
    const x = Math.random() * window.innerWidth;
    const y = Math.random() * window.innerHeight;

    gsap.set(star, {
      x: x,
      y: y,
      opacity: 0.3,
    });

    container.appendChild(star);

    // GSAP Twinkling animation
    gsap.to(star, {
      opacity: 1,
      scale: 1.2,
      duration: gsap.utils.random(2, 4),
      repeat: -1,
      yoyo: true,
      ease: "power2.inOut",
      delay: Math.random() * 3,
    });

    // GSAP Floating animation
    gsap.to(star, {
      x: `+=${gsap.utils.random(-20, 20)}`,
      y: `+=${gsap.utils.random(-15, 15)}`,
      duration: gsap.utils.random(15, 25),
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
      delay: Math.random() * 5,
    });
  }

  // Create shooting stars with GSAP
  for (let i = 0; i < 8; i++) {
    createShootingStar();
  }
}

function createShootingStar() {
  const shootingStar = document.createElement("div");
  shootingStar.className = "shooting-star";

  const startX = Math.random() * (window.innerWidth * 0.5);
  const startY =
    Math.random() * (window.innerHeight * 0.5) + window.innerHeight * 0.25;

  gsap.set(shootingStar, {
    x: startX,
    y: startY,
    opacity: 0,
    scale: 0,
  });

  document.getElementById("starsContainer").appendChild(shootingStar);

  // GSAP shooting star animation
  const tl = gsap.timeline({
    repeat: -1,
    delay: Math.random() * 8,
    repeatDelay: gsap.utils.random(8, 15),
  });

  tl.to(shootingStar, {
    opacity: 1,
    scale: 1,
    duration: 0.2,
  })
    .to(shootingStar, {
      x: startX + 200,
      y: startY - 200,
      opacity: 0.8,
      scale: 0.5,
      duration: 0.8,
      ease: "power2.out",
    })
    .to(shootingStar, {
      x: startX + 400,
      y: startY - 400,
      opacity: 0,
      scale: 0,
      duration: 0.5,
      ease: "power2.out",
    });
}

// Generate grid overlay with GSAP hover effects
function createGrid() {
  const gridContainer = document.getElementById("gridOverlay");
  const squareSize = 120;
  const screenWidth = window.innerWidth;
  const screenHeight = window.innerHeight;

  const cols = Math.ceil(screenWidth / squareSize);
  const rows = Math.ceil(screenHeight / squareSize);

  for (let row = 0; row < rows; row++) {
    for (let col = 0; col < cols; col++) {
      const square = document.createElement("div");
      square.className = "grid-square";

      gsap.set(square, {
        left: col * squareSize,
        top: row * squareSize,
        width: squareSize,
        height: squareSize,
        opacity: 1,
      });

      // GSAP hover animations
      square.addEventListener("mouseenter", () => {
        gsap.to(square, {
          opacity: 0,
          background: "transparent",
          duration: 0.3,
          ease: "power2.out",
        });
      });

      square.addEventListener("mouseleave", () => {
        gsap.to(square, {
          opacity: 1,
          background: "#0a0a0a",
          duration: 0.5,
          ease: "power2.out",
          delay: 2, // Delay before covering back up
        });
      });

      gridContainer.appendChild(square);
    }
  }
}

// Enhanced entrance animations
function initializeAnimations() {
  // Animate content entrance
  gsap.from(".content h1", {
    y: 50,
    opacity: 0,
    duration: 1,
    ease: "power3.out",
    delay: 0.5,
  });

  gsap.from(".content p", {
    y: 30,
    opacity: 0,
    duration: 1,
    ease: "power3.out",
    delay: 0.8,
  });

  // Animate grid squares entrance
  gsap.from(".grid-square", {
    scale: 0,
    opacity: 0,
    duration: 0.5,
    stagger: {
      amount: 2,
      from: "random",
    },
    ease: "back.out(1.7)",
    delay: 1,
  });
}

// Initialize everything
createStars();
createGrid();
initializeAnimations();

// Recreate grid on window resize
window.addEventListener("resize", () => {
  const gridContainer = document.getElementById("gridOverlay");
  gridContainer.innerHTML = "";
  createGrid();
});
