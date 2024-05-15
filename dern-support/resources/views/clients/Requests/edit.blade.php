<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Lab</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark text color */
        }
        .container {
            margin-top: 50px;
        }
        .btn-primary {
            background-color: #007bff; /* Blue primary button color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }
        .form-label {
            font-weight: bold;
        }
        /* Custom style for form inputs */
        .form-group {
            margin-bottom: 20px;
        }
        .form-group.row {
            margin-bottom: 0;
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
                <h2>Edit Lab</h2>
                <div class="text-right mb-3">
                    <a href="{{route('client_requests.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="col-lg-12">
                <form action="{{route('client_requests.update', $client_request->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col">
                            <label class="form-label">Service Name</label>
                            <input type="text" name="service_name" class="form-control" value="{{$client_request->service_name}}" required>
                        </div>
                        <div class="col">
                            <label class="form-label">User Name</label>
                            <input type="text" name="user_name" class="form-control" value="{{$client_request->user_name}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label class="form-label">Service Category</label>
                            <input type="text" name="category_name" class="form-control" value="{{$client_request->category_name}}" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$client_request->address}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{$client_request->phone}}" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" value="{{$client_request->price}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label class="form-label">Time</label>
                            <input type="text" name="time" class="form-control" value="{{$client_request->time}}" required>
                        </div>
                    </div>
                    <input type="submit" value="Update Lab" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
</html>
