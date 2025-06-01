<?php
// Include header component
include 'components/layout/header.php';
?>
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


                <a href="#mainCat" class="scroll-circle-container  scroll-circle-container-page" id="scrollCircle">
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
            </div>
        </div>

    </div>
</section>

<!-- Cart Section -->
<section class="cart-section py-5">
    <div class="container">
        <h1 class="section-title text-center mb-5">Shopping Cart</h1>

        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="cart-items">
                    <!-- Sample Cart Item -->
                    <div class="cart-item mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <img src="utilities/logo.svg" alt="Product" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <h5 class="mb-0">Product Name</h5>
                                <small class="text-muted">Category</small>
                            </div>
                            <div class="col-md-3">
                            <div class="quantity-selector">
                    <button class="quantity-btn" onclick="changeQuantity(-1)">-</button>
                    <span class="quantity-value">1</span>
                    <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
                </div>
                            </div>
                            <div class="col-md-2">
                                <span class="price">$99.99</span>
                            </div>
                            <div class="col-md-1 text-end">
                                <button class="btn btn-link text-danger p-0 remove-item">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Add more cart items here -->
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="order-summary p-4">
                    <h4 class="mb-4">Order Summary</h4>

                    <div class="d-flex justify-content-between mb-3">
                        <span>Subtotal</span>
                        <span>$99.99</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Tax</span>
                        <span>$10.00</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between mb-4">
                        <strong>Total</strong>
                        <strong>$109.99</strong>
                    </div>

                    <button class="btn btn-dark w-100 mb-3">Proceed to Checkout</button>
                    <button class="btn btn-outline-dark w-100">Continue Shopping</button>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Quantity controls functionality
    const quantityControls = document.querySelectorAll('.quantity-controls');

    quantityControls.forEach(control => {
        const input = control.querySelector('.quantity-input');
        const minusBtn = control.querySelector('.minus');
        const plusBtn = control.querySelector('.plus');

        function updateQuantity(action) {
            let value = parseInt(input.value);

            if (action === 'increase' && value < parseInt(input.max)) {
                value++;
            } else if (action === 'decrease' && value > parseInt(input.min)) {
                value--;
            }

            input.value = value;
            updateCartItem(control.closest('.cart-item'), value);
        }

        minusBtn.addEventListener('click', () => updateQuantity('decrease'));
        plusBtn.addEventListener('click', () => updateQuantity('increase'));
    });

    // Remove item functionality
    const removeButtons = document.querySelectorAll('.remove-item');
    removeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const cartItem = this.closest('.cart-item');
            cartItem.style.opacity = '0';
            setTimeout(() => {
                cartItem.remove();
                updateOrderSummary();
            }, 300);
        });
    });

    // Update cart item total
    function updateCartItem(cartItem, quantity) {
        const priceElement = cartItem.querySelector('.price');
        const unitPrice = parseFloat(priceElement.textContent.replace('$', ''));
        const total = (unitPrice * quantity).toFixed(2);
        priceElement.textContent = `$${total}`;
        updateOrderSummary();
    }

    // Update order summary
    function updateOrderSummary() {
        const prices = Array.from(document.querySelectorAll('.price'))
            .map(price => parseFloat(price.textContent.replace('$', '')));

        const subtotal = prices.reduce((sum, price) => sum + price, 0);
        const tax = subtotal * 0.1; // 10% tax
        const total = subtotal + tax;

        document.querySelector('.order-summary span:nth-child(2)').textContent = `$${subtotal.toFixed(2)}`;
        document.querySelector('.order-summary span:last-child').textContent = `$${tax.toFixed(2)}`;
        document.querySelector('.order-summary strong:last-child').textContent = `$${total.toFixed(2)}`;
    }
});
function changeQuantity(change) {
    const quantityElement = document.querySelector('.quantity-value');
    let quantity = parseInt(quantityElement.textContent);
    quantity += change;
    if (quantity < 1) quantity = 1; // Prevent quantity from going below 1
    quantityElement.textContent = quantity;
}
</script>

<?php
// Include footer component
include 'components/layout/footer.php';
?>