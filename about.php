<?php
// Include header component
include 'components/layout/header.php';
?>

<?php include './components/shared/hero-section.php'; ?>


<!-- About Section -->
<section class="about-section">
    <div class="container">
        <h1 class="section-title">
            FROM TOOLS TO REPAIRS <br />
            <img class="black-image d-inline-block mb-1" src="./utilities/Rectangle 9.png" alt="wire image" />
            BROWSE IT ALL IN ONE PLACE
        </h1>

        <p class="about-text">We are a specialized store offering reliable products including sockets and switches,
            water
            heaters, lighting, mixers, bidets, as well as security locks and cameras. At MUSC, we believe that quality,
            clarity, and trust are the foundation of every interaction. We are passionate about delivering a smooth and
            secure online shopping experience.</p>

        <!-- Mission and Vision Section -->
        <div class="about-section-mission-vision">
            <div class="about-section-mission-vision-content">
                <div class="about-section-mission">
                    <h3 class="about-section-mission-title">MISSION</h3>
                    <p class="about-section-mission-text">
                        WE BELIEVE THAT QUALITY, CLARITY, AND TRUST ARE THE FOUNDATION OF EVERY INTERACTION. WE WORK
                        PASSIONATELY TO DELIVER A SMOOTH, SECURE, AND ENJOYABLE ONLINE SHOPPING EXPERIENCE WITH
                        EXCELLENCE.
                    </p>
                    <img class="about-section-mission-image" src="./utilities/gif/mission.gif" alt="wire image" />
                </div>
                <div class="about-section-vision">
                    <img class="about-section-vision-image" src="./utilities/gif/eye.gif" alt="wire image" />
                    <h3 class="about-section-vision-title">VISION</h3>
                    <p class="about-section-vision-text">
                        WE BELIEVE THAT QUALITY, CLARITY, AND TRUST ARE THE FOUNDATION OF EVERY INTERACTION. WE WORK
                        PASSIONATELY TO DELIVER A SMOOTH, SECURE, AND ENJOYABLE ONLINE SHOPPING EXPERIENCE WITH
                        EXCELLENCE.
                    </p>
                </div>
            </div>
        </div>


    </div>
    <!-- bg light -->
    <div class="about-section-bg-light">
        <div class="about-section-bg-light-content container p-5">
            <h2 class="about-section-bg-light-title top">From Tools ... </h2>
            <h2 class="about-section-bg-light-title bottom">to Repairs .</h2>
        </div>
    </div>

    <!-- analysis section -->
    <div class="about-section-analysis container">
        <div class="row">
            <div class="col-md-6">

                <div class="image-container-analysis">
                    <img src="utilities/header3.png" alt="Middle Layer" class="bottom-layer-image" />
                    <img src="utilities/header1.png" alt="Front Layer" class="top-layer-image" />
                </div>
            </div>


            <div class="col-md-6 p-4 ">
                <h1 class="main-title">
                    LIGHT UP YOUR SPACE<br>
                    WITH TASTE AND ELEGANCE
                </h1>

                <div class="curved-line">
                    <svg width="236" height="44" viewBox="0 0 236 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 12.3722C87.0054 3.79046 253.826 -8.22392 233.065 12.3722C212.304 32.9682 160.867 41.0879 137.744 42.5732"
                            stroke="black" stroke-linecap="round" />
                    </svg>
                </div>


                <div class="d-flex flex-column">
                    <p class="description">
                        We are a specialized store offering reliable products including sockets and switches, water
                        heaters, lighting, mixers, bidets, as well as security locks and cameras. At MUSC, we believe
                        that quality, clarity, and trust are the foundation of every interaction. We are passionate
                        about delivering a smooth and secure online shopping experience.
                    </p>

                    <button class="shop-now-btn btn" id="shopNowBtn">
                        <span class="shop-now-text">SHOP NOW</span>
                        <div class="btn-circle">
                            <i class="fa-solid fa-arrow-up-long"></i>
                        </div>
                    </button>
                </div>

            </div>

        </div>
    </div>


    <div class="stats-container">
        <div class="stats-item">
            <h3 class="stats-number" data-target="50">0</h3>
            <p class="stats-description">Products</p>
        </div>
        <div class="stats-item">
            <h3 class="stats-number" data-target="100">0</h3>
            <p class="stats-description">Satisfied Clients</p>
        </div>
        <div class="stats-item">
            <h3 class="stats-number" data-target="20">0</h3>
            <p class="stats-description">Years of Experience</p>
        </div>

        <div class="stats-item">
            <h3 class="stats-number" data-target="20">0</h3>
            <p class="stats-description">Years of Experience</p>
        </div>
        
    </div>

</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.stats-number');

        counters.forEach(counter => {
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 100;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 20);
                } else {
                    counter.innerText = target + (target === 50 ? '+' : target === 100 ? '+' : '');
                }
            };

            // Start counter when element is in viewport
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    updateCounter();
                    observer.disconnect();
                }
            }, { threshold: 0.5 });

            observer.observe(counter);
        });
    });
</script>

<?php
// Include footer component
include 'components/layout/footer.php';
?>