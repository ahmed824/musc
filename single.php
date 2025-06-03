<?php
// Include header component
include 'components/layout/header.php';
?>

 <?php include './components/shared/hero-section.php'; ?>

<!-- Product Details Section -->
<section class="product-details">
    <div class="container">
        <div class="row product-content">
            <div class="col-md-5 ">
                <div class="product-image">
                    <img src="./utilities/cam.png" alt="Electric Insect Killer">
                </div>
            </div>
            <div class="col-md-7 product-info">
                <h2>Electric Insect Killer</h2>
                <p class="price">20 RS</p>
                <p class="description">A Powerful 15-Watt Light Ideal for Living Rooms and Spacious Areas. Designed to
                    Provide Northern Lighting with High Efficiency. Environmentally Friendly. Suitable for Both
                    Residential and Work Spaces.</p>
                    <div class="quantity-selector">
                    <button class="quantity-btn" onclick="changeQuantity(-1)">-</button>
                    <span class="quantity-value">1</span>
                    <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
                </div>
                    <div class="delivery-info">
                    <div class="info-item">
                        <div class="icon-text">
                            <i class="fas fa-truck"></i>
                            <div class="">
                                <p><strong>Free Delivery</strong></p>
                                <p>Shipping Services Are Available Across All Regions Of The Kingdom.</p>
                            </div>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="icon-text">
                            <i class="fas fa-tools"></i>
                            <div class="">
                            <p><strong>INSTALL</strong></p>
                            <p>Installation And Maintenance Services Are Limited To Jeddah Only</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action-buttons">
                    <button class="btn buy-now ">Add to Cart</button>
                    <button class="btn add-to-cart ">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './components/single/explore-also.php'; ?>



<script>
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
 