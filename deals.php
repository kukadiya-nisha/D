<?php include 'header.php'; ?>

<style>
    .deal-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .deal-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .deal-img {
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .deal-card:hover .deal-img {
        transform: scale(1.05);
    }

    .countdown {
        background: rgba(220, 53, 69, 0.9);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .discount-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #28a745;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
    }

    a {
        text-decoration: none;
        color: black;
    }
</style>

<div class="container py-5">
    <h2 class="text-center mb-4">Hot Deals</h2>
    <p class="text-center text-muted mb-5">Don't miss out on these amazing offers!</p>

    <div class="row g-4">
        <!-- Deal Card 1 -->
        <div class="col-12 col-sm-6 col-lg-4">
            <a href="product.php">
                <div class="card h-100 deal-card">
                    <div class="position-relative overflow-hidden">
                        <img src="./images/p1.webp" class="card-img-top deal-img" alt="Deal Product">
                        <div class="countdown">Ends in: 2d 15h 30m</div>
                        <div class="discount-badge">-40%</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Premium Wireless Headphones</h5>
                        <div class="d-flex align-items-center mb-3">
                            <span class="text-danger fw-bold fs-4">$59.99</span>
                            <span class="text-decoration-line-through text-muted ms-2">$99.99</span>
                        </div>
                        <div class="progress mb-3" style="height: 10px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted small mb-3">75% of deal claimed</p>
                        <button class="btn btn-outline-danger w-100">Grab Deal</button>
                    </div>
                </div>
            </a>
        </div>

        <!-- Deal Card 2 -->
        <div class="col-12 col-sm-6 col-lg-4">
            <a href="product.php">
                <div class="card h-100 deal-card">
                    <div class="position-relative overflow-hidden">
                        <img src="./images/p2.jpg" class="card-img-top deal-img" alt="Deal Product">
                        <div class="countdown">Ends in: 1d 8h 45m</div>
                        <div class="discount-badge">-50%</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Smart Fitness Watch</h5>
                        <div class="d-flex align-items-center mb-3">
                            <span class="text-danger fw-bold fs-4">$74.99</span>
                            <span class="text-decoration-line-through text-muted ms-2">$149.99</span>
                        </div>
                        <div class="progress mb-3" style="height: 10px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted small mb-3">60% of deal claimed</p>
                        <button class="btn btn-outline-danger w-100">Grab Deal</button>
                    </div>
                </div>
            </a>
        </div>

        <!-- Deal Card 3 -->
        <div class="col-12 col-sm-6 col-lg-4">
            <a href="product.php">
                <div class="card h-100 deal-card">
                    <div class="position-relative overflow-hidden">
                        <img src="./images/p3.jpg" class="card-img-top deal-img" alt="Deal Product">
                        <div class="countdown">Ends in: 3d 20h 15m</div>
                        <div class="discount-badge">-30%</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">4K Smart TV</h5>
                        <div class="d-flex align-items-center mb-3">
                            <span class="text-danger fw-bold fs-4">$419.99</span>
                            <span class="text-decoration-line-through text-muted ms-2">$599.99</span>
                        </div>
                        <div class="progress mb-3" style="height: 10px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 45%;"
                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted small mb-3">45% of deal claimed</p>
                        <button class="btn btn-outline-danger w-100">Grab Deal</button>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Featured Deals Section -->
    <h3 class="text-center mt-5 mb-4">Featured Deals</h3>
    <div class="row g-4">
        <div class="col-12 col-md-6">
            <a href="product.php">
                <div class="card deal-card">
                    <div class="row g-0">

                        <div class="col-4">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="./images/p4.jpg" class="w-100 h-100 object-fit-cover" alt="Featured Deal">
                                <div class="discount-badge">-25%</div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">Bluetooth Speaker</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="text-danger fw-bold">$59.99</span>
                                    <span class="text-decoration-line-through text-muted ms-2">$79.99</span>
                                </div>
                                <button class="btn btn-outline-danger">View Deal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-6">
            <a href="product.php">
                <div class="card deal-card">
                    <div class="row g-0">
                        <div class="col-4">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="./images/p1.webp" class="w-100 h-100 object-fit-cover" alt="Featured Deal">
                                <div class="discount-badge">-35%</div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">Wireless Earbuds</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="text-danger fw-bold">$45.99</span>
                                    <span class="text-decoration-line-through text-muted ms-2">$69.99</span>
                                </div>
                                <button class="btn btn-outline-danger">View Deal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>