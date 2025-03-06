<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with jQuery Validation</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

    <!-- Optional: Include jQuery Validation CSS for default styling -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validation/1.19.5/themes/smoothness/jquery-ui.css">

    <script>
        $(document).ready(function () {
            // Initialize the form validation
            $("#myForm").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    number: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    password: {
                        required: true,
                        pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/
                    },
                    message: {
                        required: true,
                        minlength: 10
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        minlength: "Your name must be at least 3 characters long"
                    },
                    email: {
                        required: "Please enter an email address",
                        email: "Please enter a valid email address"
                    },
                    number: {
                        required: "Please enter a number",
                        number: "Please enter a valid number",
                        minlength: "Number must be exactly 10 digits",
                        maxlength: "Number must be exactly 10 digits"
                    },
                    password: {
                        required: "Please enter a password",
                        pattern: "Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one digit, and one special character (@$!%*?&)."
                    },
                    message: {
                        required: "Please enter a message",
                        minlength: "Your message must be at least 10 characters long"
                    }
                },
                errorClass: "is-invalid", // Add Bootstrap's invalid class to the input
                errorElement: "div", // Use a div for error messages
                errorPlacement: function (error, element) {
                    error.addClass("invalid-feedback"); // Add Bootstrap's invalid-feedback class
                    element.closest(".mb-3").append(error); // Append error message after the input
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass(errorClass).removeClass(validClass); // Highlight the input
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass(errorClass).addClass(
                    validClass); // Unhighlight the input
                },
                submitHandler: function (form) {
                    form.submit(); // If form is valid, submit it
                }
            });
        });
    </script>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Contact Us</h2>
                    </div>
                    <div class="card-body">
                        <form id="myForm" action="" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="number" class="form-label">Number:</label>
                                <input type="number" id="number" name="number" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message:</label>
                                <textarea id="message" name="message" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number=$_POST['number'];
    $password = $_POST['password'];
    $message = $_POST['message'];

    // Output with Bootstrap CSS
    echo '<div class="container mt-5">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-md-6">';
    echo '<div class="card shadow">';
    echo '<div class="card-header bg-primary text-white">';
    echo '<h3 class="text-center">Form Submission Details</h3>';
    echo '</div>';
    echo '<div class="card-body">';
    echo '<p class="card-text"><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>';
    echo '<p class="card-text"><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>';
    echo '<p class="card-text"><strong>Number:</strong> ' . htmlspecialchars($number).'</p>';
    echo '<p class="card-text"><strong>Password:</strong> ' . htmlspecialchars($password).'</p>';
    echo '<p class="card-text"><strong>Message:</strong> ' . htmlspecialchars($message) . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>