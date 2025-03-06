<?php include 'header.php'; ?>

<style>
    .order-card {
        max-width: 800px;
        margin: 2rem auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .order-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(220, 53, 69, 0.2);
    }

    .form-control:focus {
        border-color:rgb(220, 53, 69);
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
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
    <div class="card order-card">
        <div class="card-body p-4">
            <h2 class="text-center mb-4">My Orders</h2>
            <p class="text-muted text-center mb-4">Here are all your orders</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Product 1</td>
                            <td>$100</td>
                            <td>2</td>
                            <td>$200</td>
                            <td>Delivered</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Product 2</td>
                            <td>$150</td>
                            <td>1</td>
                            <td>$150</td>
                            <td>Processing</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

