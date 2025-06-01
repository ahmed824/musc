<!-- Main image section (starts immediately) -->
<div class="image-section" id="imageSection">
  <h2 class="section-title" id="sectionTitle">from tools to fixes...</h2>

  <!-- Scroll Circle -->
  <a href="#mainCat" class="scroll-circle-container" id="scrollCircle">
    <div class="scroll-hint" id="scrollHint">Ready to Explore?</div>

    <svg width="250" height="250" viewBox="0 0 250 250" id="mainSvg">
      <!-- Animated background gradient -->
      <defs>
        <radialGradient id="bgGradient" cx="50%" cy="50%" r="50%">
          <stop offset="0%" style="stop-color: rgba(255, 255, 255, 0.1); stop-opacity: 1" />
          <stop offset="100%" style="stop-color: rgba(255, 255, 255, 0); stop-opacity: 1" />
        </radialGradient>

        <filter id="glow">
          <feGaussianBlur stdDeviation="3" result="coloredBlur" />
          <feMerge>
            <feMergeNode in="coloredBlur" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
      </defs>

      <!-- Main circles -->
      <circle cx="125" cy="125" r="115" class="outer-circle" />
      <circle cx="125" cy="125" r="75" class="inner-circle" />

      <!-- Circular text paths -->
      <defs>
        <path id="circle-path-outer" d="M 125, 125 m -90, 0 a 90,90 0 1,1 180,0 a 90,90 0 1,1 -180,0" />
        <path id="circle-path-inner" d="M 125, 125 m -60, 0 a 60,60 0 1,1 120,0 a 60,60 0 1,1 -120,0" />
      </defs>

      <!-- Outer text -->
      <text class="circle-text" font-size="11" id="outerText">
        <textPath href="#circle-path-outer" startOffset="0%">
          SCROLL TO EXPLORE &nbsp; SCROLL TO EXPLORE &nbsp; SCROLL TO
          EXPLORE &nbsp; SCROLL TO EXPLORE &nbsp; SCROLL TO EXPLORE &nbsp;
          SCROLL TO EXPLORE &nbsp;
        </textPath>
      </text>

      <!-- Central arrow with enhanced design -->
      <g class="arrow-container" id="arrowContainer" transform="translate(125, 125)">
        <!-- Arrow glow background -->
        <circle cx="0" cy="0" r="25" fill="rgba(255,255,255,0.1)" id="arrowGlow" />

        <!-- Main arrow -->
        <g class="arrow-icon" id="mainArrow">
          <!-- Arrow shaft -->
          <rect x="-2.5" y="-20" width="5" height="25" rx="2.5" />
          <!-- Arrow head -->
          <path d="M -12,8 L 0,20 L 12,8 Z" />
          <!-- Arrow tail -->
          <circle cx="0" cy="-17" r="3" fill="rgba(255,255,255,0.6)" />
        </g>
      </g>

      <!-- Floating particles -->
      <g id="particleContainer"></g>
    </svg>

    <div class="loading-text" id="loadingText">Click to Continue</div>
  </a>

  <div class="image-container">
    <!-- Back image (moves left during scroll) -->
    <img src="utilities/header2.png" alt="Back Layer" class="image-item back-image" id="backImage" />

    <!-- Middle image (moves right during scroll) -->
    <img src="utilities/header3.png" alt="Middle Layer" class="image-item middle-image" id="middleImage" />

    <!-- Front image (visible first, stays center) -->
    <img src="utilities/header1.png" alt="Front Layer" class="image-item front-image" id="frontImage" />
  </div>

  <h2 class="section-bottom-title text-center">
    Everything you need to power, fix, <br />
    and upgrade your space
  </h2>
</div> 