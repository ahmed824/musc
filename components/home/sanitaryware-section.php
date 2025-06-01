<!-- Equipment Section -->
<section class="equipment-section" id="equipmentSection">
  <div class="container">
    <div class="section-header d-flex justify-content-between align-items-center mb-4">
      <h2 class="section-title">Sanitary ware</h2>
      <a href="#" class="show-all-link" aria-label="View all electrical equipment">
        Show All
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <circle cx="15" cy="15" r="14.5" stroke="black"/>
          <path d="M18.4932 13.0822C18.5386 12.8098 18.3546 12.5522 18.0822 12.5068L13.6434 11.767C13.371 11.7216 13.1134 11.9056 13.068 12.178C13.0226 12.4504 13.2066 12.708 13.479 12.7534L17.4246 13.411L16.767 17.3566C16.7216 17.629 16.9056 17.8866 17.178 17.932C17.4504 17.9774 17.708 17.7934 17.7534 17.521L18.4932 13.0822ZM11 18L11.2906 18.4069L18.2906 13.4069L18 13L17.7094 12.5931L10.7094 17.5931L11 18Z" fill="black"/>
        </svg>
      </a>
    </div>

    <!-- Swiper -->
    <div class="position-relative">
      <div class="swiper sanitaryware-swiper">
      <div class="swiper-wrapper">
          <!-- Card 1 -->
              <div class="swiper-slide">
              <?php include './components/shared/card.php';?>
              </div>
              <div class="swiper-slide">
              <?php include './components/shared/card.php';?>
              </div>
              <div class="swiper-slide">
              <?php include './components/shared/card.php';?>
              </div>
              <div class="swiper-slide">
              <?php include './components/shared/card.php';?>
              </div>
              <div class="swiper-slide">
              <?php include './components/shared/card.php';?>
              </div>
              <div class="swiper-slide">
              <?php include './components/shared/card.php';?>
              </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination" aria-label="Slide navigation"></div>
      </div>
      <!-- Navigation buttons -->
      <div class="custom-navigation">
        <div class="swiper-button-prev sanitaryware-prev" aria-label="Previous slide"></div>
        <div class="swiper-button-next sanitaryware-next" aria-label="Next slide"></div>
      </div>
    </div>
  </div>
</section>

