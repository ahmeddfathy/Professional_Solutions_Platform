<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Services</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .container {
            margin-top: 50px;
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
            color: red;
        }
        .form-control {
            border-color: #ced4da;
        }
    </style>
</head>
@extends('admin.layout')

@section('content')

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Add Services</h2>
                <div class="float-right mb-3">
                    <a href="{{route('services.index')}}" class="btn bg-gradient-danger text-white">Back</a>
                </div>
            </div>
            <div class="col-lg-12">
                <form action="{{ route('services.store') }}" method="post">
                    @csrf <!-- CSRF token should be hidden -->
                    <div class="form-group">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control mb-3">
                    </div>
                    <div class="form-group">
                        <label for="category_name" class="form-label">Category Name:</label>
                        <input type="text" id="category_name" name="category_name" class="form-control mb-3">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description:</label>
                        <input type="text" id="description" name="description" class="form-control mb-3">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-danger text-white">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
</html>
