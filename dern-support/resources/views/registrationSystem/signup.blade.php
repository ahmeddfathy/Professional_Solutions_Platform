<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Technician Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .card-header {

            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        #code-group {
            display: none;
        }
        #code-error {
            display: none;
        }
        .btn-custom {

            border-color: #17a2b8;
            color: #fff;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #138496;
            border-color: #138496;
        }
        .btn-link {
            color: #dc3545;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h2>Sign Up</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('signup') }}" id="signupForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select id="role" name="role" class="form-control" required>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                                <option value="technician">technician</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>

                        <div class="form-group" id="code-group">
                            <label for="code">Code:</label>
                            <input type="text" id="code" name="code" class="form-control">
                            <small id="code-error" class="text-danger">Admin Code Error</small>
                        </div>
                        <button type="submit" id="submit" class="btn btn-custom btn-block btn-primary">Sign Up</button>
                    </form>
                    <div class="mt-3 text-center">
                        <button class="btn " ><a href="/login" style="text-decoration:none;color:black;">Log In</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("role").addEventListener("change", function() {
        var roleInput = document.getElementById("role").value;
        var codeGroup = document.getElementById("code-group");
        if (roleInput === "admin" || roleInput === "technician") {
            codeGroup.style.display = "block";
        } else {
            codeGroup.style.display = "none";
        }
    });

    document.getElementById("signupForm").addEventListener("submit", function(event) {
        var codeValue = document.getElementById("code").value;
        var roleValue = document.getElementById("role").value;

        // Allow form submission if the role is "user" without the need for a code
        if (roleValue === "user") {
            return;
        }

        // Check for admin role and code
        if (roleValue === "admin" && (codeValue === "" || codeValue !== 'admin')) {
            event.preventDefault();
            document.getElementById("code-error").style.display = "block";
        } else {
            document.getElementById("code-error").style.display = "none";
        }

        // Check for technician role and code
        if (roleValue === "technician" && (codeValue === "" || codeValue !== 'tech')) {
            event.preventDefault();
            document.getElementById("code-error").innerhtml = "technician code is error";
            document.getElementById("code-error").style.display = "block";
        } else {
            document.getElementById("code-error").style.display = "none";
        }
    });
</script>

</body>
</html>
