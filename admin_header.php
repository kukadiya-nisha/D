<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="css/bootstrap.bundle.min.js"></script>
    <script src="css/jquery-3.6.0.min.js"></script>
    <script src="css/jquery.validate.min.js"></script>
    <script src="css/additional-methods.min.js"></script>
</head>
<body>
<?php 
    $con=mysqli_connect("localhost","root","","4dced");
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">E-Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="all_products.php" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="all_products.php">Electronics</a></li>
                            <li><a class="dropdown-item" href="all_products.php">Fashion</a></li>
                            <li><a class="dropdown-item" href="all_products.php">Home & Living</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="all_products.php">All Categories</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="deals.php">Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex mb-2 mb-lg-0 mx-2" action="all_products.php">
                    <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>

                <div class="nav-item dropdown">
                    <a class="btn btn-outline-light dropdown-toggle" href="#" id="profileDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i> Profile
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                        <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #dc3545;
            transition: all 0.3s;
        }
        .sidebar .nav-link {
            color: #fff;
            padding: 0.8rem 1rem;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        .sidebar .nav-link:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #fff;
            transition: width 0.3s ease;
        }
        .sidebar .nav-link:hover:before {
            width: 100%;
        }
        .sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }
        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-3 col-lg-2 px-0 sidebar d-none d-md-block">
                <div class="d-flex flex-column">
                    <div class="p-3">
                        <h5 class="text-light">Admin Dashboard</h5>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="admin_dashboard.php">
                                <i class="bi bi-speedometer2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_products.php">
                                <i class="bi bi-box"></i> Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_orders.php">
                                <i class="bi bi-cart"></i> Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_customers.php">
                                <i class="bi bi-people"></i> Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_categories.php">
                                <i class="bi bi-tags"></i> Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reports.php">
                                <i class="bi bi-graph-up"></i> Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="settings.php">
                                <i class="bi bi-gear"></i> Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Offcanvas Sidebar for Mobile -->
            <div class="offcanvas offcanvas-start bg-danger" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-light" id="sidebarLabel">Admin Dashboard</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="admin_dashboard.php">
                                <i class="bi bi-speedometer2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="admin_products.php">
                                <i class="bi bi-box"></i> Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="admin_orders.php">
                                <i class="bi bi-cart"></i> Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="admin_customers.php">
                                <i class="bi bi-people"></i> Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="admin_categories.php">
                                <i class="bi bi-tags"></i> Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="reports.php">
                                <i class="bi bi-graph-up"></i> Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="settings.php">
                                <i class="bi bi-gear"></i> Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Main content -->
            <div class="col-12 col-md-9 col-lg-10 px-3 px-md-4">
                <!-- Toggle button for mobile -->
                <button class="btn btn-danger d-md-none mb-3" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebar">
                    <i class="bi bi-list"></i>
                </button>
