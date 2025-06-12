<?php
// Include header component
include 'components/layout/header.php';
?>

<section class="checkout-section">
    <div class="checkout-container">
        <h1 class="checkout-title">CHECKOUT</h1>

        <div class="checkout-content">
            <div class="billing-details">
                <h2>BILLING DETAILS</h2>
                <form id="checkoutForm" class="checkout-form" novalidate>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" id="firstName" name="firstName" placeholder="First name *" required>
                            <label for="firstName">First name *</label>
                        </div>
                        <div class="form-group">
                            <input type="text" id="lastName" name="lastName" placeholder="Last name *" required>
                            <label for="lastName">Last name *</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" id="company" name="company" placeholder="Company name (optional)">
                        <label for="company">Company name (optional)</label>
                    </div>
                    <div class="form-group form-group-select">
                        <select id="country" name="country" required>
                            <option value="" disabled selected>Country / Region *</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Oman">Oman</option>
                        </select>
                        <label for="country">Country / Region *</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="street" name="street" placeholder="Street address *" required>
                        <label for="street">Street address *</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="town" name="town" placeholder="Town / City *" required>
                        <label for="town">Town / City *</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="state" name="state" placeholder="State / County *" required>
                        <label for="state">State / County *</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="postcode" name="postcode" placeholder="Postcode / ZIP *" required>
                        <label for="postcode">Postcode / ZIP *</label>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" placeholder="Phone *" required>
                        <label for="phone">Phone *</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email address *" required>
                        <label for="email">Email address *</label>
                    </div>

                    <div id="errorMessages" class="error-messages"></div>
                </form>
            </div>

            <div class="order-summary">
                <h2>Product</h2>
                <div class="product-item">
                    <img src="./utilities/lamp.png" alt="Product PUIUX" class="product-image">
                    <div class="product-details">
                        <p>Size: 15x30cm</p>
                        <p>Type Frame: Without Frame</p>
                        <p>Product PUIUX x 1</p>
                        <p>Choose Color: None</p>
                        <p>Description: Without Frame</p>
                    </div>
                    <div class="product-price">55.00 ر.س</div>
                </div>
                <div class="product-item">
                    <img src="./utilities/lamp.png" alt="Product PUIUX" class="product-image">
                    <div class="product-details">
                        <p>Size: 15x30cm</p>
                        <p>Type Frame: Without Frame</p>
                        <p>Product PUIUX x 1</p>
                        <p>Choose Color: None</p>
                        <p>Description: Without Frame</p>
                    </div>
                    <div class="product-price">55.00 ر.س</div>
                </div>
                <div class="summary-total">
                    <p>Subtotal</p>
                    <p id="subtotal">110.00 ر.س</p>
                </div>
                <div class="summary-total total">
                    <p>Total</p>
                    <p id="total">110.00 ر.س</p>
                </div>
                <div class="payment-options">
                    <label><input type="radio" name="payment" value="bank" checked> Direct bank transfer</label>
                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                    <label><input type="radio" name="payment" value="cash"> Cash on delivery</label>
                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                </div>
                <button type="button" class="place-order-btn" onclick="placeOrder()">Place Order</button>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.checkout-form');
        const inputs = document.querySelectorAll('.form-group input, .form-group select');
        const errorMessages = document.querySelector('.error-messages');

        // Validation patterns
        const patterns = {
            email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
            phone: /^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/,
            postcode: /^[0-9]{5}(?:-[0-9]{4})?$/
        };

        // Error messages
        const errorMessagesText = {
            required: 'This field is required',
            email: 'Please enter a valid email address',
            phone: 'Please enter a valid phone number',
            postcode: 'Please enter a valid postcode',
            select: 'Please select a country'
        };

        // Calculate total
        function updateTotal() {
            const productPrices = document.querySelectorAll('.product-price');
            let subtotal = 0;
            productPrices.forEach(price => {
                subtotal += parseFloat(price.textContent.replace(' ر.س', ''));
            });
            document.getElementById('subtotal').textContent = `${subtotal.toFixed(2)} ر.س`;
            document.getElementById('total').textContent = `${subtotal.toFixed(2)} ر.س`;
        }

        // Initial total calculation
        updateTotal();

        // Clear all error messages
        function clearErrors() {
            document.querySelectorAll('.error-message').forEach(error => {
                error.style.opacity = '0';
                setTimeout(() => error.remove(), 300);
            });
            document.querySelectorAll('.form-group.error').forEach(group => {
                group.classList.remove('error');
            });
        }

        // Show error message
        function showError(input, message) {
            const formGroup = input.closest('.form-group');
            formGroup.classList.add('error');
            
            // Remove existing error message if any
            const existingError = formGroup.querySelector('.error-message');
            if (existingError) {
                existingError.remove();
            }
            
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.textContent = message;
            
            formGroup.appendChild(errorDiv);
            
            // Trigger animation
            setTimeout(() => {
                errorDiv.style.opacity = '1';
            }, 10);
        }

        // Validate single input
        function validateInput(input) {
            const value = input.value.trim();
            const isRequired = input.hasAttribute('required');
            
            // Clear previous error
            const formGroup = input.closest('.form-group');
            formGroup.classList.remove('error');
            const existingError = formGroup.querySelector('.error-message');
            if (existingError) {
                existingError.style.opacity = '0';
                setTimeout(() => existingError.remove(), 300);
            }

            // Check if required field is empty
            if (isRequired && !value) {
                showError(input, errorMessagesText.required);
                return false;
            }

            // Skip further validation if field is empty and not required
            if (!isRequired && !value) return true;

            // Validate based on input type
            switch(input.type) {
                case 'email':
                    if (!patterns.email.test(value)) {
                        showError(input, errorMessagesText.email);
                        return false;
                    }
                    break;
                case 'tel':
                    if (!patterns.phone.test(value)) {
                        showError(input, errorMessagesText.phone);
                        return false;
                    }
                    break;
                case 'text':
                    if (input.id === 'postcode' && !patterns.postcode.test(value)) {
                        showError(input, errorMessagesText.postcode);
                        return false;
                    }
                    break;
            }

            // Special handling for select
            if (input.tagName === 'SELECT' && isRequired && !value) {
                showError(input, errorMessagesText.select);
                return false;
            }

            return true;
        }

        // Initialize floating labels and validation
        inputs.forEach(input => {
            // Set initial state
            if (input.value) {
                input.parentElement.classList.add('has-value');
            }

            // Handle focus
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
                // Clear error on focus
                const formGroup = this.closest('.form-group');
                formGroup.classList.remove('error');
                const error = formGroup.querySelector('.error-message');
                if (error) error.remove();
            });

            // Handle blur
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
                if (this.value) {
                    this.parentElement.classList.add('has-value');
                } else {
                    this.parentElement.classList.remove('has-value');
                }
                // Validate on blur
                validateInput(this);
            });

            // Handle input change
            input.addEventListener('input', function() {
                if (this.value) {
                    this.parentElement.classList.add('has-value');
                } else {
                    this.parentElement.classList.remove('has-value');
                }
            });

            // Handle select change
            if (input.tagName === 'SELECT') {
                input.addEventListener('change', function() {
                    if (this.value) {
                        this.parentElement.classList.add('has-value');
                    } else {
                        this.parentElement.classList.remove('has-value');
                    }
                    // Validate on change
                    validateInput(this);
                });
            }
        });

        // Place order function
        window.placeOrder = function() {
            clearErrors();
            let isValid = true;
            
            // Validate all inputs
            inputs.forEach(input => {
                if (!validateInput(input)) {
                    isValid = false;
                }
            });

            if (isValid) {
                const formData = {
                    firstName: document.getElementById('firstName').value,
                    lastName: document.getElementById('lastName').value,
                    company: document.getElementById('company').value,
                    country: document.getElementById('country').value,
                    street: document.getElementById('street').value,
                    town: document.getElementById('town').value,
                    state: document.getElementById('state').value,
                    postcode: document.getElementById('postcode').value,
                    phone: document.getElementById('phone').value,
                    email: document.getElementById('email').value,
                    payment: document.querySelector('input[name="payment"]:checked')?.value || 'credit_card',
                    total: document.getElementById('total').textContent,
                    orderDate: new Date().toLocaleString('en-US', { timeZone: 'Asia/Riyadh' })
                };

                // Show success message
                const successMessage = document.createElement('div');
                successMessage.className = 'success-message';
                successMessage.textContent = 'Order placed successfully!';
                errorMessages.appendChild(successMessage);

                // Log order details
                console.log('Order Submitted:', formData);

                // Show order confirmation
                alert(`Order placed successfully!\nOrder Date: ${formData.orderDate}\nTotal: ${formData.total}`);

                // Reset form after delay
                setTimeout(() => {
                    form.reset();
                    updateTotal();
                    // Remove success message
                    const successMsg = document.querySelector('.success-message');
                    if (successMsg) successMsg.remove();
                }, 2000);
            }
        };

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            placeOrder();
        });
    });
</script>

<?php
// Include footer component
include 'components/layout/footer.php';
?>