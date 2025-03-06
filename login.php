<?php include 'header.php'; ?>

<style>
.login-card {
    max-width: 400px;
    margin: 2rem auto;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.login-card:hover {
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

.social-login-btn {
    transition: all 0.3s ease;
}

.social-login-btn:hover {
    transform: translateY(-2px);
    opacity: 0.9;
}
</style>

<div class="container py-5">
    <div class="card login-card">
        <div class="card-body p-4">
            <h3 class="card-title text-center mb-4">Login</h3>
            
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                
                <button type="submit" class="btn btn-outline-danger w-100 mb-3">Login</button>
                
                <div class="text-center mb-3">
                    <a href="forgot.php" class="text-danger text-decoration-none">Forgot password?</a>
                </div>
                <div class="text-center">
                    <p class="mb-0">Don't have an account? 
                        <a href="signup.php" class="text-danger text-decoration-none">Sign up</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
