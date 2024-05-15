<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add - Lab</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .container {
            margin-top: 30px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .form-label {
            font-weight: bold;
        }
        /* Custom style for form input fields */
        .form-control {
            border-radius: 20px; /* Rounded corners */
        }
        .form-control:focus {
            border-color: #007bff; /* Change border color on focus */
            box-shadow: none; /* Remove default box shadow */
        }
        .form-group {
            margin-bottom: 20px; /* Add some space between form groups */
        }
        h2 {
            margin-bottom: 20px; /* Add space below heading */
        }
        /* Custom style for two inputs in a row */
        .form-group.row {
            margin-bottom: 0; /* Remove bottom margin */
        }
        .form-group.row .col {
            padding-right: 5px;
            padding-left: 5px;
        }
    </style>
</head>
@extends('clients.layout')
@section('content')
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Add Client Requests</h2>
                <div class="text-right mb-3">
                    <a href="{{ route('client_requests.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="col-lg-12">
                <form action="{{ route('client_requests.store') }}" method="post">
                    @csrf <!-- CSRF Protection -->
                    <div class="form-group row">
                        <div class="col">
                            <label class="form-label">Service Name</label>
                            <input type="text" name="service_name" class="form-control" required>
                        </div>
                        <div class="col">
                            <label class="form-label">User Name</label>
                            <input type="text" name="user_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label class="form-label">Service Category</label>
                            <input type="text" name="category_name" class="form-control" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label class="form-label">Time</label>
                            <input type="text" name="time" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Add Client Requests</button>
                </form>
            </div>
        </div>
    </div>

</body>
@endsection
</html>
