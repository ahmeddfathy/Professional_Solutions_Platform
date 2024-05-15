@php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (!empty($_POST["role"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        // Set cookies with form data
        setcookie("email", $_POST["email"], time() + (86400 * 30), "/"); // 30 days expiry
        setcookie("role", $_POST["role"], time() + (86400 * 30), "/"); // 30 days expiry
        // Only set the code cookie if the role is not "user"
        if ($_POST["role"] !== "user" && !empty($_POST["code"])) {
            setcookie("code", $_POST["code"], time() + (86400 * 30), "/"); // 30 days expiry
        }
    } else {
        $error = "Please fill in all required fields.";
    }
}

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function toggleCodeInput() {
            var role = document.getElementById("role").value;
            var codeInput = document.getElementById("code_input");

            if (role === "user") {
                codeInput.style.display = "none";
            } else {
                codeInput.style.display = "block";
            }
        }

        // Ensure code input visibility on page load
        window.onload = toggleCodeInput;
    </script>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select id="role" name="role" class="form-control" onchange="toggleCodeInput()">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                                <option value="tech">Technician</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ isset($_COOKIE['email']) ? $_COOKIE['email'] : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group" id="code_input">
                            <label for="code">Code:</label>
                            <input type="text" id="code" name="code" class="form-control" value="{{ isset($_COOKIE['code']) ? $_COOKIE['code'] : '' }}">
                        </div>
                        <button type="submit" id='login' class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
