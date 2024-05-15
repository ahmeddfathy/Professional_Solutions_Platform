<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>Edit - Category</title>
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #212529; /* Dark text color */
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: 1px solid #ced4da; /* Light border color */
            border-radius: 10px; /* Rounded corners */
            background-color: #fff; /* White background */
            padding: 30px; /* Add padding */
        }
        .btn-back {
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #17a2b8; /* Aqua blue primary button color */
            border-color: #17a2b8;
        }
        .btn-primary:hover {
            background-color: #138496; /* Darker blue on hover */
            border-color: #138496;
        }
        .form-group{
            margin-top :20px ;
        }
        label{
            margin-bottom : 15px
        }
    </style>
</head>
<body>
@extends('admin.layout')

@section('content')

<button class='btn btn-danger'><a href="/" style='text-decoration:none ; color:black'>log out</a></button>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-4">Edit Category</h2>
                <div class="text-right">
                    <a href="{{route('category.index')}}" class="btn btn-primary btn-back">Back</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <form action="{{route('category.update', $category->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$category->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="image">rate</label>
                            <input type="text" name="image" class="form-control" value="{{$category->image}}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" value="{{$category->description}}" required>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
