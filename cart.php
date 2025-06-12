<?php
// Include header component
include 'components/layout/header.php';
?>

 <?php include './components/shared/hero-section.php'; ?>


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

                    <a href="./checkout.php" class="btn btn-dark w-100 mb-3">Proceed to Checkout</a>
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