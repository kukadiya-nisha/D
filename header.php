<!-- git change -->
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <script src="css/bootstrap.bundle.min.js"></script>
    <script src="./css/jquery-3.6.0.min.js"></script>
    <script src="./css/jquery.validate.min.js"></script>
    <script src="./css/additional-methods.min.js"></script>
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
                            <?php 
$select="select * from categories where status='active'";
$table=mysqli_query($con,$select);
while($row=$table->fetch_assoc())
{
    ?>
 <li><a class="dropdown-item" href="all_products.php"><?= $row['c_name'] ?></a></li>
    <?php
}
                            ?>
                           
                            
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
                <div class="d-flex mx-2">
                    <a href="cart.php" class="btn btn-outline-light me-2">
                        <i class="bi bi-cart"></i> Cart
                    </a>
                    <a href="login.php" class="btn btn-outline-light">
                        <i class="bi bi-person"></i> Login
                    </a>
                </div>
                <div class="nav-item dropdown">
                    <a class="btn btn-outline-light dropdown-toggle" href="#" id="profileDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i> Profile
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                        <li><a class="dropdown-item" href="orders.php">My Orders</a></li>
                        <li><a class="dropdown-item" href="wishlist.php">Wishlist</a></li>
                        <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>