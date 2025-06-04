<?php
// Include header component
include 'components/layout/header.php';
?>

<!-- Login Section -->
<div class="sign-up-section">
    <div class="container d-flex">
        <div class="left px-5">
            <?php
            // Include login-head component
            include 'components/shared/login-head.php';
            ?>
        </div>

        <div class="signup-form-container right w-100">
            <h2 class="form-title">Please Login</h2>

            <form id="loginForm" novalidate>
                <div class="form-group">
                    <label class="form-label" for="email">Email address</label>
                    <div class="position-relative">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control with-icon" id="email" placeholder="yourname@email.com"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <div class="position-relative">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control with-icon" id="password" placeholder="••••••••"
                            required>
                        <i class="fas fa-eye password-toggle" onclick="togglePassword('password')"></i>
                    </div>
                </div>

                <button type="submit" class="btn-form-signup">
                    <span class="btn-text">Login</span>
                    <i class="fas fa-spinner fa-spin d-none"></i>
                </button>

                <div class="login-link">
                    Don't have an account? <a href="#" class="login-link">Sign Up</a>
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

    // Form validation and submission
    document.getElementById('loginForm').addEventListener('submit', function (e) {
        e.preventDefault();

        if (!validateForm()) return;

        const btn = document.querySelector('.btn-form-signup');
        const btnText = btn.querySelector('.btn-text');
        const spinner = btn.querySelector('.fa-spinner');

        // Show loading state
        btn.classList.add('loading');
        btnText.textContent = 'Logging In...';
        spinner.classList.remove('d-none');

        // Simulate API call for login
        setTimeout(() => {
            alert('Login successful!');
            btn.classList.remove('loading');
            btnText.textContent = 'Login';
            spinner.classList.add('d-none');

            // Reset form
            this.reset();
        }, 2000);
    });

    function validateForm() {
        const form = document.getElementById('loginForm');
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Check required fields
        const requiredFields = form.querySelectorAll('[required]');
        for (let field of requiredFields) {
            if (!field.value.trim()) {
                alert(`Please fill in the ${field.previousElementSibling.textContent.toLowerCase()}`);
                field.focus();
                return false;
            }
        }

        // Basic email validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address!');
            document.getElementById('email').focus();
            return false;
        }

        // Check password length
        if (password.length < 8) {
            alert('Password must be at least 8 characters long!');
            document.getElementById('password').focus();
            return false;
        }

        return true;
    }
</script>

<?php
// Include footer component
include 'components/layout/footer.php';
?>