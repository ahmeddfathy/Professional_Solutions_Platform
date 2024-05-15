<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Services</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: red; /* Dark text color */
        }
        .container {
            margin-top: 50px;
        }
        .btn-primary {
            background-color: #007bff; /* Blue primary button color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: red !important; /* Darker blue on hover */
            border-color: #0056b3;
        }
        .form-label {
            color: #007bff; /* Blue form label color */
        }
        .form-control {
            border-color: #ced4da; /* Light border color for form controls */
        }
    </style>
</head>
<body>
@extends('admin.layout')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-4">Edit Services</h2>
                <div class="float-right mb-3">
                    <a href="{{ route('services.index') }}" class="btn bg-gradient-danger text-white">Back</a>
                </div>
            </div>
            <div class="col-lg-12">
                <form action="{{ route('services.update', $service->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $service->name }}">
                    </div>
                    <div class="form-group">
                        <label for="category_name" class="form-label">Category Name:</label>
                        <input type="text" name="category_name" id="category_name" class="form-control" value="{{ $service->category_name }}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description:</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ $service->description }}">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-danger text-white">Update Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
</html>
