<?php include 'header.php'; ?>

<style>
    .otp-card {
        max-width: 500px;
        margin: 2rem auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .otp-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .form-control:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    }

    .otp-input {
        width: 50px;
        height: 50px;
        text-align: center;
        font-size: 1.5rem;
        margin: 0 5px;
        transition: all 0.3s ease;
    }

    .otp-input:hover {
        transform: translateY(-2px);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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
    <div class="card otp-card">
        <div class="card-body p-4">
            <h2 class="text-center mb-4">Enter OTP</h2>
            <p class="text-muted text-center mb-4">Please enter the verification code sent to your email</p>

            <form action="reset.php">
                <div class="d-flex justify-content-center mb-4">
                    <input type="text" class="form-control otp-input" maxlength="1" autofocus oninput="moveToNext(this, 0)">
                    <input type="text" class="form-control otp-input" maxlength="1" oninput="moveToNext(this, 1)">
                    <input type="text" class="form-control otp-input" maxlength="1" oninput="moveToNext(this, 2)">
                    <input type="text" class="form-control otp-input" maxlength="1" oninput="moveToNext(this, 3)">
                    <input type="text" class="form-control otp-input" maxlength="1" oninput="moveToNext(this, 4)">
                    <input type="text" class="form-control otp-input" maxlength="1" oninput="moveToNext(this, 5)">
                </div>

                <button type="submit" class="btn btn-outline-danger w-100 mb-3">Verify OTP</button>
                
                <div class="text-center mb-3">
                    <p class="text-muted mb-0">Didn't receive the code?</p>
                    <a href="#" class="text-danger text-decoration-none">Resend OTP</a>
                </div>

                <div class="text-center">
                    <a href="login.php" class="text-danger text-decoration-none">Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function moveToNext(input, index) {
    if(input.value.length === input.maxLength) {
        if(index < 5) {
            input.parentElement.children[index + 1].focus();
        }
    }
}
</script>

<?php include 'footer.php'; ?>
