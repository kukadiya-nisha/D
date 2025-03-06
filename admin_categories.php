<?php include 'admin_header.php'; ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0">Category Management</h5>
                </div>
                <div class="card-body">
                    <!-- Search and Add Category -->
                    <div class="row mb-4">
                        <div class="col-12 col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search categories...">
                                <button class="btn btn-danger" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-3 mt-md-0 text-md-end">
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                                <i class="bi bi-plus-circle"></i> Add New Category
                            </button>
                        </div>
                    </div>

                    <!-- Categories Table -->
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
    $select="select * from categories";
    $table=mysqli_query($con,$select);
    while($row=$table->fetch_assoc()){
?>
        <tr class="align-middle">
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['c_name'] ?></td>
                                    <td><span class="badge bg-<?php
if($row['status']=="active")
    echo "success";
else
    echo "danger";
                                ?>"><?= $row['status'] ?></span></td>
                                    <td class="d-flex">
                                        <form method="post">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <input class="btn btn-sm btn-outline-primary me-1" type="submit" name="viewCategory" value="View">
                                        </form>
                                        <form method="post">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <input class="btn btn-sm btn-outline-warning me-1" type="submit" name="editCategory" value="Edit">
                                        </form>
                                        <form method="post">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <input class="btn btn-sm btn-outline-danger me-1" type="submit" name="deleteCategory" value="Delete">
                                        </form>
                                    </td>
                                </tr>
<?php
    }
?>
                                
                              
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Category pagination" class="mt-4">
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

<!-- View Category Modal -->
<div class="modal fade" id="viewCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Category Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Category Name:</strong> Electronics</p>
                <p><strong>Status:</strong> <span class="badge bg-success">Active</span></p>
            </div>
        </div>
    </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCategoryForm">
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control" value="Electronics">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="editCategoryForm" class="btn btn-danger">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Add New Category</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm" method="post">
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control" required name="Category_Name">
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" form="addCategoryForm" class="btn btn-danger" value="Add Category" name="Add_Category">
            </div>
            </form>
<?php 
if (isset($_POST['Add_Category'])) {
    $Category_Name=$_POST['Category_Name'];
    $insert="insert into categories (c_name) values ('$Category_Name')";
    mysqli_query($con,$insert);
}
?>
        </div>
    </div>
</div>

<style>
    /* Hover effects */
    .table tbody tr {
        transition: all 0.3s ease;
    }

    .table tbody tr:hover {
        background-color: rgba(220, 53, 69, 0.1);
        transform: translateX(5px);
    }

    .btn-outline-primary:hover,
    .btn-outline-warning:hover,
    .btn-outline-danger:hover {
        transform: scale(1.1);
        transition: transform 0.2s ease;
    }

    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .table-responsive {
            font-size: 0.9rem;
        }
        
        .btn-sm {
            padding: 0.25rem 0.4rem;
        }
    }
</style>

<?php include 'admin_footer.php'; ?>
