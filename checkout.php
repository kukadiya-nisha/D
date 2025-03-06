<?php include 'header.php'; ?>

<style>
.checkout-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.checkout-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.form-control:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.btn-danger {
    transition: all 0.3s ease;
}

.btn-danger:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(220, 53, 69, 0.2);
}
</style>

<div class="container py-5">
    <h2 class="text-center mb-4">Checkout</h2>

    <div class="row">
        <!-- Shipping Information -->
        <div class="col-lg-8 mb-4">
            <div class="card checkout-card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Shipping Information</h5>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">ZIP</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="tel" class="form-control" required>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Payment Information -->
            <div class="card checkout-card mt-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Payment Information</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Card Number</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Expiration Date</label>
                                <input type="text" class="form-control" placeholder="MM/YY" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">CVV</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-4">
            <div class="card checkout-card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Order Summary</h5>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span>Subtotal</span>
                        <span>$134.98</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span>Shipping</span>
                        <span>$5.00</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3">
                        <span>Tax</span>
                        <span>$13.50</span>
                    </div>
                    
                    <hr>
                    
                    <div class="d-flex justify-content-between mb-4">
                        <strong>Total</strong>
                        <strong class="text-danger">$153.48</strong>
                    </div>
                    
                    <button class="btn btn-outline-danger w-100">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
