<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MUSC</title>

    <!-- Google Fonts - Rubik -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet" />
    <link href="responsive.css" rel="stylesheet" />
    <link href="css/scroll-circle.css" rel="stylesheet" />

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>

<body class="<?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'home-page' : ''; ?>">
    <!-- Floating Navigation -->
    <nav class="floating-nav">
        <div class="nav-container">
            <ul class="nav-links">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About Us</a></li>
                <li><a href="./products.php">products</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./contact-us.php">Contact us</a></li>
            </ul>
            <div class="search-container">
                <button class="search-toggle">
                    <svg class="search-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="search-input-wrapper">
                    <input type="text" class="search-input" placeholder="Search..." />
                    <button class="close-search">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <nav class="navbar">
                <a href="./index.php" class="logo">
                    <img src="utilities/logo.svg" alt="Logo" class="logo-img" />
                </a>
                <div class="nav-center"></div>
                <div class="auth-buttons">
                    <a href="./login.php" class="btn btn-login">Log in</a>
                    <a href="./sign-up.php" class="btn btn-signup">Sign up</a>
                </div>
            </nav>
        </div>
    </header>
 
</body>

</html>