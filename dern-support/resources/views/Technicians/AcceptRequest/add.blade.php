<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accept - clientRequest</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
@extends('Technicians.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Accept Client_requests</h2>
                <div class="pull-right">
                    <!-- Link to go back to category index -->
                    <a href="{{ route('accepted_req.index') }}" class="btn  bg-gradient-danger text-white">Back</a>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- Form to add a new category -->
                <form action="{{ route('accepted_req.store') }}" method="post">
                    @csrf <!-- CSRF Protection -->

                    <div class="mb-3">
                        <label class="form-label">Service Name</label>
                        <select name="service_name" class="form-control" required>
                            @foreach($requestes as $ele)
                                <option value="{{ $ele->service_name }}">{{ $ele->service_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Service Category</label>
                        <select name="category" class="form-control" required>
                            @foreach($requestes as $ele)
                                <option value="{{ $ele->service_name }}">{{ $ele-> category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <select name="price" class="form-control" required>
                            @foreach($requestes as $ele)
                                <option value="{{ $ele->service_name }}">{{ $ele->price }}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="submit" value="Accept client_requests" class="btn  bg-gradient-info text-white">
                    
                </form>
            </div>
        </div>
    </div>
    {!! $requestes -> links()  !!}
</body>
@endsection

<script>

    var serviceName = "{{ session('acceptedRequestServiceName') }}";
    var categoryName = "{{ session('acceptedRequestCategoryName') }}";
    var price = "{{ session('acceptedRequestPrice') }}";


    document.getElementsByName('service_name')[0].value = serviceName;
    document.getElementsByName('name')[0].value = ''; // يمكنك تعبئة هذا حسب الحاجة
    document.getElementsByName('category')[0].value = categoryName;
    document.getElementsByName('price')[0].value = price;
</script>

</html>



