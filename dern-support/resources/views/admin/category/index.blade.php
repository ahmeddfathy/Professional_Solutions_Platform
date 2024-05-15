<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Category</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #212529; /* Dark text color */
        }
        .container {
            margin-top: 50px;
        }
        .btn-add {
            margin-bottom: 20px;
        }
        .table th, .table td {
            vertical-align: middle; /* Center cell content vertically */
        }
        .table th {
            text-align: center; /* Center table headers */
        }
        .table-actions {
            width: 150px;
        }
    </style>
</head>
@extends('admin.layout')

@section('content')

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-4">CRUD - Category</h2>
                <div class="text-right">
                    <a href="{{route('category.create')}}" class="btn bg-gradient-danger btn-add text-white">Add Category</a>
                </div>
            </div>
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">rate</th>
                            <th scope="col" class="table-actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->image}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary mr-2">Edit</a>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $categories->links() !!} <!-- Pagination -->
            </div>
        </div>
    </div>
    <button class="btn btn-danger"><a href="services" style="text-decoration:none;" class="bg-gradient-danger  text-white"> Go to Services</a></button>
    @endsection
</body>
</html>
