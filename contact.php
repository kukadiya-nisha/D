<?php include 'header.php'; ?>

<style>
.contact-icon {
    font-size: 2.5rem;
    color: #dc3545;
    transition: transform 0.3s ease;
}

.contact-icon:hover {
    transform: scale(1.1); 
}

.contact-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-card:hover {
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

.error {
    color: #dc3545;
    font-size: 0.875em;
    margin-top: 0.25rem;
}
</style>

<div class="container py-5">
    <h2 class="text-center mb-5">Contact Us</h2>
    
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card h-100 contact-card">
                <div class="card-body text-center">
                    <i class="bi bi-geo-alt contact-icon mb-3"></i>
                    <h5 class="card-title">Our Location</h5>
                    <p class="card-text">RK University, Rajkot - 360020</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100 contact-card">
                <div class="card-body text-center">
                    <i class="bi bi-envelope contact-icon mb-3"></i>
                    <h5 class="card-title">Email Us</h5>
                    <p class="card-text">nisha.kukadiya@rku.ac.in</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100 contact-card">
                <div class="card-body text-center">
                    <i class="bi bi-telephone contact-icon mb-3"></i>
                    <h5 class="card-title">Call Us</h5>
                    <p class="card-text">+91 1234567890</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="ratio ratio-4x3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1659942574455!5m2!1sen!2s" 
                    class="border rounded" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Send us a Message</h5>
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                            <div class="error-message"></div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                            <div class="error-message"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            <div class="error-message"></div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
                            <div class="error-message"></div>
                        </div>
                        <button type="submit" class="btn btn-outline-danger w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[A-Za-z\s]+$/i.test(value);
    }, "Please enter letters only");

    $("#contactForm").validate({
        rules: {
            name: {
                required: true,
                lettersonly: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true,
                minlength: 5
            },
            message: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                lettersonly: "Name should contain only letters",
                minlength: "Name must be at least 3 characters long"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            subject: {
                required: "Please enter a subject",
                minlength: "Subject must be at least 5 characters long"
            },
            message: {
                required: "Please enter your message",
                minlength: "Message must be at least 10 characters long"
            }
        },
        errorPlacement: function(error, element) {
            element.next('.error-message').html(error);
        },
        highlight: function(element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {
            alert("Form submitted successfully!");
            form.submit();
        }
    });
});
</script>

<?php include 'footer.php'; ?>
