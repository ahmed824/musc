<section class="hero-section hero-section-page">
    <div class="container">
        <div class="content-wrapper">
            <div class="left-content">
                <h1 class="main-title">
                    FROM TOOLS <br> TO FIXES...
                </h1>
                <div class="curved-line">
                    <svg width="236" height="43" viewBox="0 0 236 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.1875 11.985C87.1929 3.40325 254.013 -8.61112 233.252 11.985C212.491 32.581 161.054 40.7007 137.931 42.186"
                            stroke="white" stroke-linecap="round" />
                    </svg>
                </div>
                <p class="description">Everything you need to power your projects year-round.</p>
            </div>

            <div class="right-content">
                <img src="./utilities/lamp.gif" alt="decor image">

                <a href="#mainCat" class="scroll-circle-container scroll-circle-container-page" id="scrollCircle">
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
                            <path id="circle-path-outer"
                                d="M 125, 125 m -90, 0 a 90,90 0 1,1 180,0 a 90,90 0 1,1 -180,0" />
                            <path id="circle-path-inner"
                                d="M 125, 125 m -60, 0 a 60,60 0 1,1 120,0 a 60,60 0 1,1 -120,0" />
                        </defs>

                        <!-- Outer text -->
                        <text class="circle-text" font-size="11" id="outerText">
                            <textPath href="#circle-path-outer" startOffset="0%">
                                SCROLL TO EXPLORE   SCROLL TO EXPLORE   SCROLL TO
                                EXPLORE   SCROLL TO EXPLORE   SCROLL TO EXPLORE  
                                SCROLL TO EXPLORE  
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
            </div>
        </div>
    </div>
</section>