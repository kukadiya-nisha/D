<?php include 'header.php'; ?>

<style>
    .reset-card {
        max-width: 500px;
        margin: 2rem auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .reset-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .form-control:focus {
        border-color: #dc3545;
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
    <div class="card reset-card">
        <div class="card-body p-4">
            <h2 class="text-center mb-4">Reset Password</h2>
            <p class="text-muted text-center mb-4">Please enter your new password below.</p>

            <form action="login.php">
                <div class="mb-4">
                    <label for="newPassword" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                </div>

                <div class="mb-4">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                </div>

                <button type="submit" class="btn btn-outline-danger w-100 mb-3">Update Password</button>
                
                <div class="text-center">
                    <a href="login.php" class="text-danger text-decoration-none">Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
