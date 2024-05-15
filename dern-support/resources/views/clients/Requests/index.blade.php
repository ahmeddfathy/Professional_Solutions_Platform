<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>Home - Lab</title>

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
        .table {
            background-color: #fff; /* White table background */
        }
    </style>
</head>
@extends('clients.layout')
@section('content')
<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mt-3 mb-4">Requests</h2>
                <div class="text-right mb-3">
                    <a href="{{route('client_requests.create')}}" class="btn bg-gradient-primary text-white">Add Request</a>
                </div>
            </div>
            <div class="col-lg-12">
                <table class="table bg-primary">
                    <thead class="thead">
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Service Category</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                            <th scope="col" width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($client_requests as $index => $request)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            <td>{{ $request->service_name }}</td>
                            <td>{{ $request->user_name }}</td>
                            <td>{{ $request-> category_name }}</td>
                            <td>{{ $request->address }}</td>
                            <td>{{ $request->phone }}</td>
                            <td>{{ $request->price }}</td>
                            <td>{{ $request->date }}</td>
                            <td>
                                <form action="{{route('client_requests.destroy',$request->id)}}" method="post">
                                    <a href="{{route('client_requests.edit',$request->id)}}" class="btn bg-gradient-primary text-white">Edit</a>
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
                {!! $client_requests->links() !!}
            </div>
        </div>
    </div>
</body>
@endsection
</html>


