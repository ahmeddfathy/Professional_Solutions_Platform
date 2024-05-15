<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Services</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark text color */
        }
        .container {
            margin-top: 50px;
        }
        .btn-success {
            background-color: #28a745; /* Green success button color */
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838; /* Darker green on hover */
            border-color: #218838;
        }
        .btn-primary {
            background-color: #007bff; /* Blue primary button color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545; /* Red danger button color */
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333; /* Darker red on hover */
            border-color: #c82333;
        }
        .thead-dark th {
            background-color: #343a40; /* Dark header background color */
            color: #fff; /* White text color */
        }

    </style>
</head>
@extends('admin.layout')

@section('content')

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mt-3 mb-4">Services</h2>
                <div class="text-right mb-3">
                    <a href="{{route('services.create')}}" class="btn bg-gradient-danger text-white ">Add Services</a>
                </div>
            </div>
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col" width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $index => $service)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->description }}</td>
                            <td>{{ $service->category_name }}</td>
                            <td>
                                <form action="{{route('services.destroy',$service->id)}}" method="post">
                                    <a href="{{route('services.edit',$service->id)}}" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination -->
                {!! $services->links() !!}
            </div>
        </div>
    </div>
</body>
@endsection
</html>
