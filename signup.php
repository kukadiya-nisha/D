<?php include 'header.php'; ?>

<style>
    .signup-card {
        max-width: 500px;
        margin: 2rem auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .signup-card:hover {
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

    .social-signup-btn {
        transition: all 0.3s ease;
    }

    .social-signup-btn:hover {
        transform: translateY(-2px);
        opacity: 0.9;
    }
</style>

<div class="container py-5">
    <div class="card signup-card">
        <div class="card-body p-4">
            <h2 class="text-center mb-4">Create Account</h2>
            <p class="text-muted text-center mb-4">Join us today and start exploring!</p>

            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Create password">
                </div>

                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms">
                    <label class="form-check-label" for="terms">I agree to the Terms & Conditions</label>
                </div>

                <button type="submit" class="btn btn-outline-danger w-100 mb-3">Sign Up</button>
                <div class="text-center">
                    <p class="mb-0">Already have an account? 
                        <a href="login.php" class="text-danger text-decoration-none">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
