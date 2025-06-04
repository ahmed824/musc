<?php
// Include header component
include 'components/layout/header.php';
?>

<?php include './components/shared/hero-section.php'; ?>


<!-- contact-us Section -->
<section class="contact-us-section">
    <div class="container">
        <!-- Contact Information Cards -->
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <img src="./utilities/gif/phone.gif" class="contact-icon-img" alt="phone icon">
                    </div>
                    <h5 class="contact-title">Phone Number</h5>
                    <p class="contact-info">+966 54 135 3137</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-card middle">
                    <div class="contact-icon">
                        <img src="./utilities/gif/location.gif" class="contact-icon-img" alt="location icon">
                    </div>
                    <h5 class="contact-title">WhatsApp</h5>
                    <p class="contact-info">+966 54 135 3137</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="contact-card">
                    <div class="contact-icon">
                        <img src="./utilities/gif/email.gif" class="contact-icon-img" alt="email icon">
                    </div>
                    <h5 class="contact-title">Email</h5>
                    <p class="contact-info">music@gmail.com</p>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex flex-column justify-content-evenly h-100">
                    <h2 class="section-title">
                        Keep In Touch <br>
                        With Us Anytime
                    </h2>

                    <div class="phone-illustration">
                        <img src="./utilities/phone-24.gif" class="  phone-24" alt="contact us - available 24 hours">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-section">
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full name</label>
                            <div class="position-relative">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" class="form-control" id="fullName" placeholder="demo name" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="position-relative">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" class="form-control" id="email" placeholder="yourname@email.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone number</label>
                            <div class="position-relative">
                                <i class="fas fa-phone input-icon"></i>
                                <input type="tel" class="form-control" id="phoneNumber" placeholder="+966 800 2298 3700">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4"
                                placeholder="write message here"></textarea>
                        </div>

                        <!-- From Uiverse.io by wang3616359git -->
                        <button class="bt" id="bt">
                            <span class="msg" id="msg"></span>
                            Send Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    // Form submission handler
    document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault();

        // Get form data
        const formData = {
            fullName: document.getElementById('fullName').value,
            email: document.getElementById('email').value,
            phoneNumber: document.getElementById('phoneNumber').value,
            message: document.getElementById('message').value
        };

        // Simulate form submission
        const submitBtn = document.querySelector('.bt');
        const originalText = submitBtn.innerHTML;

        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
        submitBtn.disabled = true;

        setTimeout(() => {
            alert('Message sent successfully!');
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            this.reset();
        }, 2000);
    });

    // Label color change handler
    const formInputs = document.querySelectorAll('.form-control');
    formInputs.forEach(input => {
        // Handle both input and textarea
        const label = input.parentElement ? 
            input.parentElement.previousElementSibling : 
            input.previousElementSibling;
        
        input.addEventListener('focus', () => {
            label.style.color = '#000';
        });
        
        input.addEventListener('blur', () => {
            label.style.color = '#999999';
        });
    });
</script>


<?php
// Include footer component
include 'components/layout/footer.php';
?>