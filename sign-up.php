<?php
// Include header component
include 'components/layout/header.php';
?>



<!-- sign up Section -->

<div class="sign-up-section">
    <div class="container d-flex ">
        <div class="left px-5">
            <?php
            // Include login-head component
            include 'components/shared/login-head.php';
            ?>
        </div>

        <div class="signup-form-container right w-100 ">
            <h2 class="form-title">Please Fill These Inputs</h2>

            <form id="signupForm" novalidate>
                <div class="form-group">
                    <label class="form-label" for="fullName">Full name</label>
                    <div class="position-relative">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" class="form-control with-icon" id="fullName" placeholder="Demo name"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email address</label>
                    <div class="position-relative">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control with-icon" id="email" placeholder="yourname@email.com"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="phone">Phone number</label>
                    <div class="position-relative">
                        <i class="fas fa-phone input-icon"></i>
                        <input type="tel" class="form-control with-icon" id="phone" placeholder="+966 800 2758 9700">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Create password</label>
                    <div class="position-relative">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control with-icon" id="password" placeholder="••••••••"
                            required>
                        <i class="fas fa-eye password-toggle" onclick="togglePassword('password')"></i>
                    </div>
                    <div class="strength-meter">
                        <div class="strength-bar" id="strengthBar"></div>
                    </div>
                    <div class="password-hint">Password must contain a minimum of 8 characters</div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="confirmPassword">Confirm password</label>
                    <div class="position-relative">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control with-icon" id="confirmPassword"
                            placeholder="••••••••" required>
                        <i class="fas fa-eye password-toggle" onclick="togglePassword('confirmPassword')"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="country">Country</label>
                    <div class="position-relative">
                        <i class="fas fa-globe input-icon"></i>
                        <select class="form-control with-icon" id="country" required>
                            <option value="">Select Location</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="KW">Kuwait</option>
                            <option value="QA">Qatar</option>
                            <option value="BH">Bahrain</option>
                            <option value="OM">Oman</option>
                            <option value="EG">Egypt</option>
                            <option value="JO">Jordan</option>
                            <option value="LB">Lebanon</option>
                            <option value="US">United States</option>
                            <option value="UK">United Kingdom</option>
                            <option value="CA">Canada</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn-form-signup">
                    <span class="btn-text">Sign Up</span>
                    <i class="fas fa-spinner fa-spin d-none"></i>
                </button>

                <div class="login-link">
                    Already a user? <a href="#" class="login-link">Login</a>
                </div>

                <div class="checkbox-wrapper mt-3 ">
                    <input id="terms-checkbox-37" name="checkbox" type="checkbox">
                    <label class="terms-label" for="terms-checkbox-37">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200" class="checkbox-svg">
                            <mask fill="white" id="path-1-inside-1_476_5-37">
                                <rect height="200" width="200"></rect>
                            </mask>
                            <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box"
                                height="200" width="200"></rect>
                            <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick"></path>
                        </svg>
                        <span class="label-text"> I have agreed to <a href="#" class="terms-condition-link">terms and
                                conditions</a></span>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    // Password toggle functionality
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        const toggle = field.nextElementSibling;

        if (field.type === 'password') {
            field.type = 'text';
            toggle.classList.remove('fa-eye');
            toggle.classList.add('fa-eye-slash');
        } else {
            field.type = 'password';
            toggle.classList.remove('fa-eye-slash');
            toggle.classList.add('fa-eye');
        }
    }

    // Custom checkbox toggle
    function toggleCheckbox() {
        const checkbox = document.getElementById('terms');
        const customCheckbox = document.querySelector('.custom-checkbox');

        checkbox.checked = !checkbox.checked;
        customCheckbox.classList.toggle('checked', checkbox.checked);
    }

    // Password strength checker
    document.getElementById('password').addEventListener('input', function () {
        const password = this.value;
        const strengthBar = document.getElementById('strengthBar');
        const strength = getPasswordStrength(password);

        strengthBar.style.width = strength.width;
        strengthBar.className = 'strength-bar ' + strength.class;
    });

    function getPasswordStrength(password) {
        let score = 0;
        if (password.length >= 8) score++;
        if (/[a-z]/.test(password)) score++;
        if (/[A-Z]/.test(password)) score++;
        if (/[0-9]/.test(password)) score++;
        if (/[^A-Za-z0-9]/.test(password)) score++;

        if (score < 3) return { width: '33%', class: 'strength-weak' };
        if (score < 5) return { width: '66%', class: 'strength-medium' };
        return { width: '100%', class: 'strength-strong' };
    }

    // Form validation and submission
    document.getElementById('signupForm').addEventListener('submit', function (e) {
        e.preventDefault();

        if (!validateForm()) return;

        const btn = document.querySelector('.btn-signup');
        const btnText = btn.querySelector('.btn-text');
        const spinner = btn.querySelector('.fa-spinner');

        // Show loading state
        btn.classList.add('loading');
        btnText.textContent = 'Creating Account...';
        spinner.classList.remove('d-none');

        // Simulate API call
        setTimeout(() => {
            alert('Account created successfully!');
            btn.classList.remove('loading');
            btnText.textContent = 'Sign Up';
            spinner.classList.add('d-none');

            // Reset form
            this.reset();
            document.querySelector('.custom-checkbox').classList.remove('checked');
            document.getElementById('strengthBar').style.width = '0%';
        }, 2000);
    });

    function validateForm() {
        const form = document.getElementById('signupForm');
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const terms = document.getElementById('terms').checked;

        // Check if passwords match
        if (password !== confirmPassword) {
            alert('Passwords do not match!');
            return false;
        }

        // Check password length
        if (password.length < 8) {
            alert('Password must be at least 8 characters long!');
            return false;
        }

        // Check terms agreement
        if (!terms) {
            alert('Please agree to the terms and conditions!');
            return false;
        }

        // Check required fields
        const requiredFields = form.querySelectorAll('[required]');
        for (let field of requiredFields) {
            if (!field.value.trim()) {
                alert(`Please fill in the ${field.previousElementSibling.textContent.toLowerCase()}`);
                field.focus();
                return false;
            }
        }

        return true;
    }


    // Initialize checkbox state
    document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.getElementById('terms');
        const customCheckbox = document.querySelector('.custom-checkbox');
        customCheckbox.classList.toggle('checked', checkbox.checked);
    });
</script>

<?php
// Include footer component
include 'components/layout/footer.php';
?>