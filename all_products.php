<?php include 'header.php'; ?>

<style>
    .product-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .product-img {
        transition: transform 0.3s ease;
        position: relative;
    }

    .product-card:hover .product-img {
        transform: scale(1.05);
    }

    .product-title {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .form-select {
        transition: border-color 0.3s ease;
    }

    .form-select:hover {
        border-color: #dc3545;
    }

    .form-select option:hover {
        background-color: #dc3545;
        color: white;
    }

    /* Match dropdown styling from header */
    .form-select option {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .form-select option:checked,
    .form-select option:focus {
        background-color: #dc3545;
        color: white;
    }

    option:hover {
        background-color: #dc3545;
        color: white;
    }

    .wishlist-icon {
        background-color: white;
        padding: 5px;
        border-radius: 50%;
        cursor: pointer;
        transition: transform 0.3s ease;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .wishlist-icon:hover {
        transform: scale(1.05);
    }
</style>

<div class="container py-5">
    <h2 class="text-center mb-4">All Products</h2>

    <!-- Filters Row -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <select class="form-select">
                <option selected>Category</option>
                <option>Electronics</option>
                <option>Fashion</option>
                <option>Home & Living</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <select class="form-select">
                <option selected>Price Range</option>
                <option>Under $50</option>
                <option>$50 - $100</option>
                <option>$100 - $200</option>
                <option>Above $200</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <select class="form-select">
                <option selected>Sort By</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Newest First</option>
                <option>Popular</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <button class="btn btn-outline-danger w-100">Apply Filters</button>
        </div>
    </div>
    <style>
        .product-img {
            height: 200px;
        }
        a{
            text-decoration:none;
            color:black;
        }
    </style>

    <!-- Products Grid -->
    <div class="row g-4">
        <!-- Product Card 1 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
           
            <div class="card h-100 product-card ">
                <div class="overflow-hidden">
                    <img src="./images/p1.webp" class="card-img-top product-img" alt="Product">
                    <a href="wishlist.php"><i class="bi bi-heart wishlist-icon"></i></a>
                </div>
                <a href="product.php">
                <div class="card-body">
                    <h5 class="card-title product-title">Wireless Headphones with Noise Cancellation</h5>
                    <p class="card-text text-danger fw-bold">$99.99</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="cart.php"><button class="btn btn-outline-danger btn-sm">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
                </a>
            </div>
           
        </div>

        <!-- Product Card 2 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="product.php">
            <div class="card h-100 product-card">
                <div class="overflow-hidden">
                    <img src="./images/p2.jpg" class="card-img-top product-img" alt="Product">
                    <a href="wishlist.php"><i class="bi bi-heart wishlist-icon"></i></a>
                </div>
                <a href="product.php">
                <div class="card-body">
                    <h5 class="card-title product-title">Smart Watch with Heart Rate Monitor</h5>
                    <p class="card-text text-danger fw-bold">$149.99</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="cart.php"><button class="btn btn-outline-danger btn-sm">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
                </a>
            </div>
    </a>
        </div>

        <!-- Product Card 3 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="product.php">
            <div class="card h-100 product-card">
                <div class="overflow-hidden">
                    <img src="./images/p3.jpg" class="card-img-top product-img" alt="Product">
                    <a href="wishlist.php"><i class="bi bi-heart wishlist-icon"></i></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title product-title">4K Ultra HD Smart TV 55-inch</h5>
                    <p class="card-text text-danger fw-bold">$599.99</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="cart.php"><button class="btn btn-outline-danger btn-sm">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
    </a>
        </div>

        <!-- Product Card 4 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="product.php">
            <div class="card h-100 product-card">
                <div class="overflow-hidden">
                    <img src="./images/p4.jpg" class="card-img-top product-img" alt="Product">
                    <a href="wishlist.php"><i class="bi bi-heart wishlist-icon"></i></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title product-title">Portable Bluetooth Speaker</h5>
                    <p class="card-text text-danger fw-bold">$79.99</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="cart.php"><button class="btn btn-outline-danger btn-sm">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>
    <style>
        .page-link {
            color: #dc3545;
            transition: all 0.3s ease;
            border-color: #dc3545;
        }

        .page-link:hover {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.2);
        }

        .page-item.active .page-link {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            border-color: #dee2e6;
        }

        .btn-outline-danger {
            transition: all 0.3s ease;
        }

        .btn-outline-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.2);
        }
    </style>


    <!-- Pagination -->
    <nav class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>

<?php include 'footer.php'; ?>