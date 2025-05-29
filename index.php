<?php
// Include header component
include 'components/layout/header.php';
?>

<!-- Main content will go here -->
<main>

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

  <!-- main categorey section -->
  <section class="main-cat" id="mainCat">
    <h1>
      FROM TOOLS TO REPAIRS <br />
      <img class="black-image d-inline-block mb-1" src="./utilities/Rectangle 9.png" alt="wire image" />
      BROWSE IT ALL IN ONE PLACE
    </h1>
    <div class="container">
      <div class="row g-4">
        <!-- Electrical Tools -->
        <div class="col-md-4 p-0">
          <div class="category-card border-top-bottom">
            <div>
              <div class="d-flex flex-column m-4">
                <h3>ELECTRICAL TOOLS</h3>
                <p>
                  A Set Of Essential Electrical Tools And Components — Bulbs,
                  Socket, Switch, Plug, Wires, And Pliers
                </p>
              </div>
              <div class="img-cat-container">
                <img src="./utilities/lamp.png" alt="Light Bulb" />
                <a href="#" class="shop-now-btn">SHOP NOW
                  <svg class="ms-2" width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="15" cy="15" r="14.5" stroke="black" />
                    <path
                      d="M18.4932 13.0822C18.5386 12.8098 18.3546 12.5522 18.0822 12.5068L13.6434 11.767C13.371 11.7216 13.1134 11.9056 13.068 12.178C13.0226 12.4504 13.2066 12.708 13.479 12.7534L17.4246 13.411L16.767 17.3566C16.7216 17.629 16.9056 17.8866 17.178 17.932C17.4504 17.9774 17.708 17.7934 17.7534 17.521L18.4932 13.0822ZM11 18L11.2906 18.4069L18.2906 13.4069L18 13L17.7094 12.5931L10.7094 17.5931L11 18Z"
                      fill="black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Sanitary Ware -->
        <div class="col-md-4 p-0">
          <div class="category-card border-all">
            <div>

              <div class="img-cat-container">
                <img src="./utilities/hanafia.png" alt="Faucet" />
                <a href="#" class="shop-now-btn">SHOP NOW
                  <svg class="ms-2" width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="15" cy="15" r="14.5" stroke="black" />
                    <path
                      d="M18.4932 13.0822C18.5386 12.8098 18.3546 12.5522 18.0822 12.5068L13.6434 11.767C13.371 11.7216 13.1134 11.9056 13.068 12.178C13.0226 12.4504 13.2066 12.708 13.479 12.7534L17.4246 13.411L16.767 17.3566C16.7216 17.629 16.9056 17.8866 17.178 17.932C17.4504 17.9774 17.708 17.7934 17.7534 17.521L18.4932 13.0822ZM11 18L11.2906 18.4069L18.2906 13.4069L18 13L17.7094 12.5931L10.7094 17.5931L11 18Z"
                      fill="black" />
                  </svg>
                </a>
              </div>

              <div class="d-flex flex-column m-4">
                <h3>SANITARY WARE</h3>
                <p>
                  A Set Of Essential Electrical Tools And Components — Bulbs,
                  Socket, Switch, Plug, Wires, And Pliers
                </p>
              </div>

            </div>
          </div>
        </div>
        <!-- Cameras -->
        <div class="col-md-4 p-0">
          <div class="category-card border-top-bottom">
            <div>
              <div class="d-flex flex-column m-4">
                <h3>CAMERAS</h3>
                <p>
                  A Set Of Essential Electrical Tools And Components — Bulbs,
                  Socket, Switch, Plug, Wires, And Pliers
                </p>
              </div>
              <div class="img-cat-container">
                <img src="./utilities/cam.png" alt="Camera" />
                <a href="#" class="shop-now-btn">SHOP NOW
                  <svg class="ms-2" width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="15" cy="15" r="14.5" stroke="black" />
                    <path
                      d="M18.4932 13.0822C18.5386 12.8098 18.3546 12.5522 18.0822 12.5068L13.6434 11.767C13.371 11.7216 13.1134 11.9056 13.068 12.178C13.0226 12.4504 13.2066 12.708 13.479 12.7534L17.4246 13.411L16.767 17.3566C16.7216 17.629 16.9056 17.8866 17.178 17.932C17.4504 17.9774 17.708 17.7934 17.7534 17.521L18.4932 13.0822ZM11 18L11.2906 18.4069L18.2906 13.4069L18 13L17.7094 12.5931L10.7094 17.5931L11 18Z"
                      fill="black" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- hero section -->
  <section class="hero-section">
    <div class="content-wrapper">
      <div class="left-content">
        <h1 class="main-title">
          LIGHT UP YOUR SPACE<br>
          WITH TASTE AND ELEGANCE
        </h1>

        <div class="curved-line">
          <svg width="236" height="43" viewBox="0 0 236 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M1.1875 11.985C87.1929 3.40325 254.013 -8.61112 233.252 11.985C212.491 32.581 161.054 40.7007 137.931 42.186"
              stroke="white" stroke-linecap="round" />
          </svg>
        </div>

        <div class="d-flex flex-column left-content-text">
          <p class="description">
            Modern LED Touches For Bulbs, Wall Lights, And Strips –
            Combining Beauty And Functionality For Every Corner
          </p>

          <button class="shop-now-btn" id="shopNowBtn">
            <span class="shop-now-text">SHOP NOW</span>
            <div class="btn-circle">
              <i class="fa-solid fa-arrow-up-long"></i>
            </div>
          </button>
        </div>
      </div>

      <div class="right-content">
        <div class="furniture-scene">
          <div class="dining-setup">
            <img src="./utilities/decor.png" alt="decor image">

            <div class="sale-badge">
              <div class="sale-text">Sale Up To</div>
              <div class="sale-percentage">%50</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="equipment-section" id="equipmentSection">
    <div class="container">
      <div class="section-header d-flex justify-content-between align-items-center mb-4">
        <h2 class="section-title">Electrical Equipment</h2>
        <a href="#" class="show-all-link">
          Show All
          <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="15" cy="15" r="14.5" stroke="black" />
            <path
              d="M18.4932 13.0822C18.5386 12.8098 18.3546 12.5522 18.0822 12.5068L13.6434 11.767C13.371 11.7216 13.1134 11.9056 13.068 12.178C13.0226 12.4504 13.2066 12.708 13.479 12.7534L17.4246 13.411L16.767 17.3566C16.7216 17.629 16.9056 17.8866 17.178 17.932C17.4504 17.9774 17.708 17.7934 17.7534 17.521L18.4932 13.0822ZM11 18L11.2906 18.4069L18.2906 13.4069L18 13L17.7094 12.5931L10.7094 17.5931L11 18Z"
              fill="black" />
          </svg>
        </a>
      </div>

      <!-- Swiper -->
      <div class="swiper equipment-swiper">
        <div class="swiper-wrapper">
          <!-- Card 1 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product1.png" alt="Equipment 1">
              </div>
              <div class="card-content">
                <h3>Professional Drill Machine</h3>
                <p class="price">$299.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product2.png" alt="Equipment 2">
              </div>
              <div class="card-content">
                <h3>Electric Screwdriver Set</h3>
                <p class="price">$149.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$15">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 3">
              </div>
              <div class="card-content">
                <h3>Power Tool Kit Pro</h3>
                <p class="price">$399.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$35">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product4.png" alt="Equipment 4">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$25">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Add navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Add pagination -->
        <div class="swiper-pagination"></div>

      </div>
    </div>
  </section>

  <!-- hero section -->
  <section class="hero-section">
    <div class="content-wrapper">
      <div class="left-content">
        <h1 class="main-title">
          Flexible Services <br>
          to Fit all Your Needs .
        </h1>

        <div class="curved-line">
          <svg width="236" height="43" viewBox="0 0 236 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M1.1875 11.985C87.1929 3.40325 254.013 -8.61112 233.252 11.985C212.491 32.581 161.054 40.7007 137.931 42.186"
              stroke="white" stroke-linecap="round" />
          </svg>
        </div>

        <div class="d-flex flex-column left-content-text">
          <p class="description">
            We offer fast shipping and professional installation servicesacross the Kingdom — flexible, reliable, and
            tailored to your needs.
          </p>

          <button class="shop-now-btn" id="shopNowBtn">
            <span class="shop-now-text">SHOP NOW</span>
            <div class="btn-circle">
              <i class="fa-solid fa-arrow-up-long"></i>
            </div>
          </button>
        </div>
      </div>

      <div class="right-content">
        <div class="container py-5">
          <div class="row justify-content-center g-4 cards-container">
            <!-- Shipping Only Card -->
            <div class="col-md-4">
              <div class="card-arch">
                <div class="card-icon">
                  <img src="https://img.icons8.com/ios-filled/50/000000/delivery.png" alt="Shipping Icon" />
                </div>
                <div>
                  <div class="card-title">SHIPPING ONLY</div>
                  <p class="card-text">Shipping Services Are Available Across All Regions Of The Kingdom.</p>
                </div>
              </div>
            </div>

            <!-- Shipping & Install Card -->
            <div class="col-md-4">
              <div class="card-arch round-bottom">
                <div>
                  <div class="card-title">SHIPPING & INSTALL</div>
                  <p class="card-text">Installation And Maintenance Services Are Limited To Jeddah Only</p>
                </div>
                <div class="card-icon mt-4">
                  <img src="https://img.icons8.com/ios-filled/50/000000/maintenance.png" alt="Install Icon" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Lighting Equipment Section -->
  <section class="equipment-section" id="equipmentSection">
    <div class="container">
      <div class="section-header d-flex justify-content-between align-items-center mb-4">
        <h2 class="section-title">Lighting Equipment</h2>
        <a href="#" class="show-all-link">
          Show All
          <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="15" cy="15" r="14.5" stroke="black" />
            <path
              d="M18.4932 13.0822C18.5386 12.8098 18.3546 12.5522 18.0822 12.5068L13.6434 11.767C13.371 11.7216 13.1134 11.9056 13.068 12.178C13.0226 12.4504 13.2066 12.708 13.479 12.7534L17.4246 13.411L16.767 17.3566C16.7216 17.629 16.9056 17.8866 17.178 17.932C17.4504 17.9774 17.708 17.7934 17.7534 17.521L18.4932 13.0822ZM11 18L11.2906 18.4069L18.2906 13.4069L18 13L17.7094 12.5931L10.7094 17.5931L11 18Z"
              fill="black" />
          </svg>
        </a>
      </div>

      <!-- Swiper -->
      <div class="swiper equipment-swiper">
        <div class="swiper-wrapper">
          <!-- Card 1 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product1.png" alt="Equipment 1">
              </div>
              <div class="card-content">
                <h3>Professional Drill Machine</h3>
                <p class="price">$299.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product2.png" alt="Equipment 2">
              </div>
              <div class="card-content">
                <h3>Electric Screwdriver Set</h3>
                <p class="price">$149.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$15">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 3">
              </div>
              <div class="card-content">
                <h3>Power Tool Kit Pro</h3>
                <p class="price">$399.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$35">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product4.png" alt="Equipment 4">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$25">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Add navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Add pagination -->
        <div class="swiper-pagination"></div>

      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="stars-section">
    <div class="stars-container" id="starsContainer"></div>
    <div class="grid-overlay" id="gridOverlay"></div>

    <!-- Content goes here -->
    <div class="content">
      <h1>TESTIMONIALS</h1>
      <div class="testimonial-container">
        <p class="testimonial-quote">
          “We Offer Fasst Shippinng And Professsional Installationn Services Across The Kingdomm.<br>
          Flexible, Reliable, And Tailored To Your Needs”
        </p>
        <div class="testimonial-author">
          <div class="author-info">
            <div class="author-name">Dr. Ahmed Mohammed</div>
            <div class="author-title">Any Job Title</div>
          </div>
          <img class="author-image" src="./utilities/profile.png" alt="Author Image">

        </div>
      </div>

      <div class="cont-name">
        <img src="./utilities/bg-stars.png" alt="Author Image">
        <div class="cont-name-text">DR. AHMED MOHAMMED</div>
      </div>
      <div class="d-flex justify-content-between w-100 h-20 mb-5 align-items-center">
        <img class="qutes-image" src="./utilities/testemonial (1).png" alt="Author Image">
        <img class="qutes-image" src="./utilities/testemonial (2).png" alt="Author Image">
      </div>

    </div>
  </section>

  <!-- Sanitary Ware Section -->
  <section class="equipment-section" id="equipmentSection">
    <div class="container">
      <div class="section-header d-flex justify-content-between align-items-center mb-4">
        <h2 class="section-title">Sanitary Ware</h2>
        <a href="#" class="show-all-link">
          Show All
          <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="15" cy="15" r="14.5" stroke="black" />
            <path
              d="M18.4932 13.0822C18.5386 12.8098 18.3546 12.5522 18.0822 12.5068L13.6434 11.767C13.371 11.7216 13.1134 11.9056 13.068 12.178C13.0226 12.4504 13.2066 12.708 13.479 12.7534L17.4246 13.411L16.767 17.3566C16.7216 17.629 16.9056 17.8866 17.178 17.932C17.4504 17.9774 17.708 17.7934 17.7534 17.521L18.4932 13.0822ZM11 18L11.2906 18.4069L18.2906 13.4069L18 13L17.7094 12.5931L10.7094 17.5931L11 18Z"
              fill="black" />
          </svg>
        </a>
      </div>

      <!-- Swiper -->
      <div class="swiper equipment-swiper">
        <div class="swiper-wrapper">
          <!-- Card 1 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product1.png" alt="Equipment 1">
              </div>
              <div class="card-content">
                <h3>Professional Drill Machine</h3>
                <p class="price">$299.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product2.png" alt="Equipment 2">
              </div>
              <div class="card-content">
                <h3>Electric Screwdriver Set</h3>
                <p class="price">$149.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$15">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 3">
              </div>
              <div class="card-content">
                <h3>Power Tool Kit Pro</h3>
                <p class="price">$399.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$35">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product4.png" alt="Equipment 4">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$25">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="swiper-slide">
            <div class="equipment-card">
              <div class="card-image">
                <img src="./utilities/products/product3.png" alt="Equipment 5">
              </div>
              <div class="card-content">
                <h3>Cordless Impact Wrench</h3>
                <p class="price">$249.99</p>
                <div class="over-flow-hidden" data-tooltip="Price:-$20">
                  <div class="add-to-cart">
                    <div class="button-wrapper">
                      <div class="text">Add to Cart</div>
                      <span class="icon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                          </path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Add navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Add pagination -->
        <div class="swiper-pagination"></div>

      </div>
    </div>
  </section>

</main>

<?php
// Include footer component
include 'components/layout/footer.php';
?> 