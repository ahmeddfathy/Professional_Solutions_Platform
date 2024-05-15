<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dern-Support</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f3f3; /* Light Gray */
            color: #333; /* Dark Gray */
        }
        header {
            background-color: #007bff; /* Blue */
            padding-top: 20px;
            padding-bottom: 20px;
        }
        header .navbar-brand {
            font-weight: bold;
            color: #fff; /* White */
            font-size: 24px;
        }
        header .nav-link {
            color: #fff; /* White */
        }
        section {
            padding-top: 50px;
            padding-bottom: 50px;
        }
        footer {

            color: #fff; /* White */
            padding: 20px 0;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #333; /* Dark Gray */
            font-weight: bold;
        }
        .btn-custom {
            background-color: #007bff; /* Blue */
            border-color: #007bff; /* Blue */
            color: #fff; /* White */
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #0056b3; /* Darker Blue */
            border-color: #0056b3; /* Darker Blue */
        }
        *{
            font-size : 15px;
            font-family : "Helvetica Neue",
        }
    </style>
</head>
<body>

<!-- Header Section -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Dern-Support</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Introduction Section -->
<section id="introduction" class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome to Dern-Support</h1>
                <p class="lead">Dern-Support is your go-to destination for professional IT technical support. We specialize in repairing computer systems for businesses and individual customers.</p>
                <div class="cardmt-5" >

                    <div class="card" style="width: 18rem; margin-left:40%">
                        <div class="card-body">
                            <h4 class="card-title">Sign In</h4>
                            <p class="card-text">To use the site and the service, please sign in as a technician.</p>
                            <a href="signup" class="btn btn-custom btn-lg">Sign In</a>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <h4 class="text-center mb-4">Our Services</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">On-Site Support</h4>
                        <p class="card-text">We provide on-site support for businesses, ensuring minimal downtime and maximum productivity.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Repair Services</h4>
                        <p class="card-text">Individual customers can rely on us for reliable repair services for their computer systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Knowledge Base</h4>
                        <p class="card-text">Access our knowledge base for troubleshooting tips and instructions on fixing minor hardware and software issues.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h4>Contact Us</h4>
                <p>If you have any questions or need assistance, feel free to reach out to us. Our team is here to help!</p>
                <ul class="list-unstyled">
                    <li>Email: support@dernsupport.com</li>
                    <li>Phone: 123-456-7890</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-primary text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2024 Dern-Support. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-right">
                <a href="#" class="text-light mr-3">Privacy Policy</a>
                <a href="#" class="text-light">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
