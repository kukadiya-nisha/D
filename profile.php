<?php include 'header.php'; ?>

<style>
    .profile-card {
        max-width: 800px;
        margin: 2rem auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .profile-image {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #dc3545;
        padding: 3px;
        transition: all 0.3s ease;
    }

    .profile-image:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(220, 53, 69, 0.3);
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
    <div class="card profile-card">
        <div class="card-body p-4">
            <div class="text-center mb-4">
                <img src="./images/pngtree-avatar-bussinesman-man-profile-icon-vector-illustration-png-image_7268049.png" alt="Profile Picture" class="profile-image mb-3">
                <h2 class="mb-1">Nisha Kukadiya</h2>
                <p class="text-muted">nisha.kukadiya@rku.ac.in</p>
            </div>

            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" value="Nisha">
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" value="Kukadiya">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" value="nisha.kukadiya@rku.ac.in">
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-outline-danger me-md-2" onclick="window.history.back();">Cancel</button>
                    <button type="submit" class="btn btn-outline-danger">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
