
<style>
.navbar-nav .nav-link {
    position: relative;
    transition: color 0.3s ease;
}

.navbar-nav .nav-link:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #fff;
    transition: width 0.3s ease;
}

.navbar-nav .nav-link:hover:before {
    width: 100%;
}

.dropdown-item:hover {
    background-color: #dc3545;
    color: white;
}
</style>

<!-- Add Bootstrap Icons CSS -->

<style>
.footer-link {
    transition: color 0.3s ease, transform 0.2s ease;
    display: inline-block;
}

.footer-link:hover {
    color: #ffc107 !important;
    transform: translateX(5px);
}

.social-icon {
    transition: transform 0.3s ease;
}

.social-icon:hover {
    transform: scale(1.2);
}

.newsletter-input:focus {
    box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
    border-color: #fff;
}

.footer-subscribe-btn {
    transition: all 0.3s ease;
}

.footer-subscribe-btn:hover {
    background-color: #fff;
    color: #dc3545;
}
</style>
<style>
.footer-link {
    position: relative;
    transition: color 0.3s ease;
}

.footer-link:before {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #fff;
    transition: width 0.3s ease;
}

.footer-link:hover:before {
    width: 100%;
}

.footer-link:hover {
    color: #fff !important;
    transform: none;
}
</style>


<footer class="bg-danger text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <h5 class="mb-3 fw-bold">About E-Shop</h5>
                <p class="text-light opacity-75">Your one-stop destination for all your shopping needs. Quality products, competitive prices, and exceptional service.</p>
                <div class="d-flex gap-3">
                    <a href="#" class="text-light social-icon"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-light social-icon"><i class="bi bi-twitter fs-4"></i></a>
                    <a href="#" class="text-light social-icon"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" class="text-light social-icon"><i class="bi bi-linkedin fs-4"></i></a>
                </div>
            </div>
            
            <div class="col-6 col-md-2 mb-4">
                <h5 class="mb-3 fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none footer-link">Home</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none footer-link">Products</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none footer-link">Categories</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none footer-link">Special Offers</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-3 mb-4">
                <h5 class="mb-3 fw-bold">Customer Care</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none footer-link">Track Order</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none footer-link">Shipping Policy</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none footer-link">Return Policy</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none footer-link">Contact Support</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-3 mb-4">
                <h5 class="mb-3 fw-bold">Newsletter</h5>
                <p class="text-light opacity-75">Stay updated with our latest offers and products</p>
                <form class="d-flex gap-2">
                    <input type="email" class="form-control me-2" placeholder="Your email" style="border-color: #fff;">
                    <button type="submit" class="btn btn-outline-light footer-subscribe-btn">Join</button>
                </form>
            </div>
        </div>

        <hr class="my-4 opacity-25">
        
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="mb-0 opacity-75">&copy; 2025 E-Shop. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <img src="images/payment-methods.png" alt="Payment Methods" class="img-fluid" style="max-width: 250px;">
            </div>
        </div>
    </div>
</footer>
