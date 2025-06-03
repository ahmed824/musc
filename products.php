<?php
// Include header component
include 'components/layout/header.php';
?>
 <?php include './components/shared/hero-section.php'; ?>


<!-- Cart Section -->
<section class="product-grid">

  <div class="container">
  <section class="filter-section">
  <div class="container">
    <div class="filter-bar">
      <a href="#" class="filter-item active" data-category="all">All</a>
      <a href="#" class="filter-item" data-category="electrical">Electrical Equipment</a>
      <a href="#" class="filter-item" data-category="lighting">Lighting Equipment</a>
      <a href="#" class="filter-item" data-category="sanitary">Sanitary Ware</a>
    </div>
  </div>
</section>
    <div class="grid-products">
      <!-- Electric Insect Killer -->
      <?php include './components/shared/card.php'; ?>
      <?php include './components/shared/card.php'; ?>
      <?php include './components/shared/card.php'; ?>

      <!-- 10-Meter PVC Adhesive LED -->
      <?php include './components/shared/card.php'; ?>
      <?php include './components/shared/card.php'; ?>
      <?php include './components/shared/card.php'; ?>

      <!-- 80 Feet Water Hose -->
      <?php include './components/shared/card.php'; ?>
      <?php include './components/shared/card.php'; ?>
      <?php include './components/shared/card.php'; ?>

      <!-- 10-Meter Nylon Adhesive LED -->
      <?php include './components/shared/card.php'; ?>
      <?php include './components/shared/card.php'; ?>
      <?php include './components/shared/card.php'; ?>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterItems = document.querySelectorAll('.filter-item');
    const cards = document.querySelectorAll('.card');

    filterItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            filterItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');

            const category = this.getAttribute('data-category');
            cards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (category === 'all' || category === cardCategory) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Quantity controls functionality (from your original code)
    const quantityControls = document.querySelectorAll('.quantity-controls');
    quantityControls.forEach(control => {
        const input = control.querySelector('.quantity-input');
        const minusBtn = control.querySelector('.minus');
        const plusBtn = control.querySelector('.plus');
        
        function updateQuantity(action) {
            let value = parseInt(input.value);
            if (action === 'increase' && value < parseInt(input.max)) value++;
            else if (action === 'decrease' && value > parseInt(input.min)) value--;
            input.value = value;
            updateCartItem(control.closest('.cart-item'), value);
        }
        
        minusBtn.addEventListener('click', () => updateQuantity('decrease'));
        plusBtn.addEventListener('click', () => updateQuantity('increase'));
    });
    
    // Remove item functionality (from your original code)
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
    
    // Update cart item total (from your original code)
    function updateCartItem(cartItem, quantity) {
        const priceElement = cartItem.querySelector('.price');
        const unitPrice = parseFloat(priceElement.textContent.replace('$', ''));
        const total = (unitPrice * quantity).toFixed(2);
        priceElement.textContent = `$${total}`;
        updateOrderSummary();
    }
    
    // Update order summary (from your original code)
    function updateOrderSummary() {
        const prices = Array.from(document.querySelectorAll('.price'))
            .map(price => parseFloat(price.textContent.replace('$', '')));
        const subtotal = prices.reduce((sum, price) => sum + price, 0);
        const tax = subtotal * 0.1;
        const total = subtotal + tax;
        document.querySelector('.order-summary span:nth-child(2)').textContent = `$${subtotal.toFixed(2)}`;
        document.querySelector('.order-summary span:last-child').textContent = `$${tax.toFixed(2)}`;
        document.querySelector('.order-summary strong:last-child').textContent = `$${total.toFixed(2)}`;
    }
});
</script>
  
<?php
// Include footer component
include 'components/layout/footer.php';
?>