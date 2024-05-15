


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>Add Category</title>
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .form-container {
            border: 1px solid #ced4da; /* Light border color */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            background-color: #fff; /* White background */
        }
        .btn-primary {
            background-color: #007bff; /* Blue primary button color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }
    </style>
</head>
<body>


@extends('admin.layout')

@section('content')

<div class="container mt-5">


        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-container">
                    <h2 class="text-center mb-4" style="color: #007bff;">Add Category</h2>
                    <div class="text-right mb-3">
                        <a href="{{route('category.index')}}" class="btn btn-primary">Back</a>
                    </div>
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="image">rate</label>
                            <input type="text" name="image" id="image" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control" required>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
