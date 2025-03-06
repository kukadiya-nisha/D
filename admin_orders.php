<?php include 'admin_header.php'; ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Order Management</h2>
            
            <!-- Order Filters -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12 col-md-3">
                            <select class="form-select" aria-label="Filter by status">
                                <option selected>Filter by Status</option>
                                <option value="pending">Pending</option>
                                <option value="processing">Processing</option>
                                <option value="shipped">Shipped</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="date" class="form-control" placeholder="Filter by date">
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="text" class="form-control" placeholder="Search orders...">
                        </div>
                        <div class="col-12 col-md-2">
                            <button class="btn btn-danger w-100">Apply Filters</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders Table -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle" style="transition: all 0.3s;">
                                    <td>#ORD-001</td>
                                    <td>John Doe</td>
                                    <td>2023-07-20</td>
                                    <td>$299.99</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#orderModal1">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success me-1" data-bs-toggle="modal" data-bs-target="#updateStatusModal1">
                                            <i class="bi bi-arrow-clockwise"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="tooltip" title="Cancel Order">
                                            <i class="bi bi-x-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="align-middle" style="transition: all 0.3s;">
                                    <td>#ORD-002</td>
                                    <td>Jane Smith</td>
                                    <td>2023-07-19</td>
                                    <td>$149.99</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#orderModal2">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success me-1" data-bs-toggle="modal" data-bs-target="#updateStatusModal2">
                                            <i class="bi bi-arrow-clockwise"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="tooltip" title="Cancel Order">
                                            <i class="bi bi-x-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Orders pagination" class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
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
            </div>
        </div>
    </div>
</div>

<!-- Update Status Modal 1 -->
<div class="modal fade" id="updateStatusModal1" tabindex="-1" aria-labelledby="updateStatusModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="updateStatusModalLabel1">Update Order Status - #ORD-001</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateStatusForm1">
                    <div class="mb-3">
                        <label for="orderStatus1" class="form-label">Select New Status</label>
                        <select class="form-select" id="orderStatus1" required>
                            <option value="">Choose status...</option>
                            <option value="pending">Pending</option>
                            <option value="processing">Processing</option>
                            <option value="shipped">Shipped</option>
                            <option value="delivered">Delivered</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="updateStatusForm1" class="btn btn-danger">Update Status</button>
            </div>
        </div>
    </div>
</div>

<!-- Update Status Modal 2 -->
<div class="modal fade" id="updateStatusModal2" tabindex="-1" aria-labelledby="updateStatusModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="updateStatusModalLabel2">Update Order Status - #ORD-002</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateStatusForm2">
                    <div class="mb-3">
                        <label for="orderStatus2" class="form-label">Select New Status</label>
                        <select class="form-select" id="orderStatus2" required>
                            <option value="">Choose status...</option>
                            <option value="pending">Pending</option>
                            <option value="processing">Processing</option>
                            <option value="shipped">Shipped</option>
                            <option value="delivered">Delivered</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="statusNote2" class="form-label">Add Note (Optional)</label>
                        <textarea class="form-control" id="statusNote2" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="updateStatusForm2" class="btn btn-danger">Update Status</button>
            </div>
        </div>
    </div>
</div>

<!-- Order Detail Modal 1 -->
<div class="modal fade" id="orderModal1" tabindex="-1" aria-labelledby="orderModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="orderModalLabel1">Order Details - #ORD-001</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Customer Information</h6>
                        <p>Name: John Doe<br>
                        Email: john@example.com<br>
                        Phone: (555) 123-4567</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Shipping Address</h6>
                        <p>123 Main Street<br>
                        Apt 4B<br>
                        New York, NY 10001</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Smartphone X</td>
                                <td>1</td>
                                <td>$249.99</td>
                                <td>$249.99</td>
                            </tr>
                            <tr>
                                <td>Phone Case</td>
                                <td>1</td>
                                <td>$50.00</td>
                                <td>$50.00</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end fw-bold">Subtotal:</td>
                                <td>$299.99</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end fw-bold">Shipping:</td>
                                <td>$0.00</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end fw-bold">Total:</td>
                                <td class="fw-bold">$299.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <h6 class="fw-bold">Order Status History</h6>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge bg-warning me-2">Pending</span>
                            2023-07-20 10:30 AM
                        </li>
                        <li class="list-group-item">
                            <span class="badge bg-info me-2">Order Placed</span>
                            2023-07-20 10:00 AM
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#updateStatusModal1">Update Status</button>
            </div>
        </div>
    </div>
</div>

<!-- Order Detail Modal 2 -->
<div class="modal fade" id="orderModal2" tabindex="-1" aria-labelledby="orderModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="orderModalLabel2">Order Details - #ORD-002</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Customer Information</h6>
                        <p>Name: Jane Smith<br>
                        Email: jane@example.com<br>
                        Phone: (555) 987-6543</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Shipping Address</h6>
                        <p>456 Park Avenue<br>
                        Suite 789<br>
                        Los Angeles, CA 90001</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Wireless Earbuds</td>
                                <td>1</td>
                                <td>$149.99</td>
                                <td>$149.99</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end fw-bold">Subtotal:</td>
                                <td>$149.99</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end fw-bold">Shipping:</td>
                                <td>$0.00</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end fw-bold">Total:</td>
                                <td class="fw-bold">$149.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <h6 class="fw-bold">Order Status History</h6>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge bg-success me-2">Delivered</span>
                            2023-07-20 2:30 PM
                        </li>
                        <li class="list-group-item">
                            <span class="badge bg-primary me-2">Shipped</span>
                            2023-07-19 3:00 PM
                        </li>
                        <li class="list-group-item">
                            <span class="badge bg-info me-2">Order Placed</span>
                            2023-07-19 10:00 AM
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#updateStatusModal2">Update Status</button>
            </div>
        </div>
    </div>
</div>

<style>
    .table tbody tr:hover {
        background-color: rgba(220, 53, 69, 0.1) !important;
        transform: translateY(-2px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .btn-outline-primary:hover,
    .btn-outline-success:hover,
    .btn-outline-danger:hover {
        transform: scale(1.1);
        transition: transform 0.2s;
    }
    
    .card {
        transition: all 0.3s;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .modal.fade .modal-dialog {
        transition: transform 0.3s ease-out;
    }

    .modal.show .modal-dialog {
        transform: none;
    }
</style>

<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Handle form submissions
    document.getElementById('updateStatusForm1').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        $('#updateStatusModal1').modal('hide');
    });

    document.getElementById('updateStatusForm2').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        $('#updateStatusModal2').modal('hide');
    });
</script>

<?php include 'admin_footer.php'; ?>
