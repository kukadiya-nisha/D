<?php include 'header.php'; ?>

<style>
    /* Hover effect for the Update Password button */
    .btn-change-password:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(220, 53, 69, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    /* Subtle hover lift for the card */
    .card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Change Password</h3>
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="currentPassword" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="currentPassword" name="current_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="newPassword" name="new_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required>
                        </div>
                        <button type="submit" class="btn btn-outline-danger w-100 btn-change-password">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
