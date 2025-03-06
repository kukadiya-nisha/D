<?php include 'header.php'; ?>

<style>
.product-details {
    transition: transform 0.3s ease;
}

.product-details:hover {
    transform: translateY(-5px);
}

.product-image {
    transition: transform 0.3s ease;
    max-height: 400px;
    object-fit: contain;
}

.product-image:hover {
    transform: scale(1.05);
}

.btn-outline-danger {
    transition: all 0.3s ease;
}

.btn-outline-danger:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(220, 53, 69, 0.2);
}
</style>

<div class="container py-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6 mb-4">
            <div class="card overflow-hidden">
                <img src="./images/p1.webp" class="card-img-top product-image" alt="Product">
            </div>
            
            <!-- Thumbnail Images -->
            <div class="row mt-3 g-2">
                <div class="col-3">
                    <img src="./images/p1.webp" class="img-fluid cursor-pointer border" alt="Thumbnail">
                </div>
                <div class="col-3">
                    <img src="./images/p1.webp" class="img-fluid cursor-pointer border" alt="Thumbnail">
                </div>
                <div class="col-3">
                    <img src="./images/p1.webp" class="img-fluid cursor-pointer border" alt="Thumbnail">
                </div>
                <div class="col-3">
                    <img src="./images/p1.webp" class="img-fluid cursor-pointer border" alt="Thumbnail">
                </div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <div class="product-details">
                <h2 class="mb-3">Wireless Headphones with Noise Cancellation</h2>
                
                <div class="mb-3">
                    <span class="text-danger h3 fw-bold">$99.99</span>
                    <span class="text-decoration-line-through text-muted ms-2">$129.99</span>
                </div>

                <div class="mb-3 text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <span class="text-dark ms-2">(128 reviews)</span>
                </div>

                <p class="mb-4">
                    High-quality wireless headphones featuring active noise cancellation, 
                    premium sound quality, and up to 30 hours of battery life. Perfect for 
                    music lovers and professionals alike.
                </p>

                <div class="mb-4">
                    <h5>Color</h5>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-dark rounded-circle p-3"></button>
                        <button class="btn btn-outline-secondary rounded-circle p-3"></button>
                        <button class="btn btn-outline-danger rounded-circle p-3"></button>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Quantity</label>
                    <div class="input-group" style="width: 150px;">
                        <button class="btn btn-outline-danger">-</button>
                        <input type="number" class="form-control text-center" value="1" min="1">
                        <button class="btn btn-outline-danger">+</button>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <a href="cart.php"><button class="btn btn-outline-danger">Add to Cart</button></a>
                    <a href="checkout.php"><button class="btn btn-outline-danger">Buy Now</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Description -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4">Product Description</h4>
                    <p>Experience premium sound quality with our wireless headphones featuring:</p>
                    <ul>
                        <li>Active Noise Cancellation</li>
                        <li>30-hour battery life</li>
                        <li>Bluetooth 5.0 connectivity</li>
                        <li>Premium comfort with memory foam ear cushions</li>
                        <li>Built-in microphone for calls</li>
                        <li>Touch controls for easy operation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
