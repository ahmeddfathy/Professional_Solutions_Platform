<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>Home - AcceptedRequest</title>
</head>
<body>
@extends('Technicians.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>CRUD</h2>
                <div class="pull-right">

                </div>
            </div>
            <div class="col-lg-12">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>service_name</th>
                            <th>user name</th>
                            <th>service_category</th>

                            <th>address</th>
                            <th>phone</th>
                            <th>price</th>
                            <th>date</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requestes as $ele)
                            <td>{{$ele->id}}</td>
                            <td>{{$ele->user_name}}</td>

                            <td>{{$ele->service_name}}</td>
                            <td>{{$ele->category_name}}</td>
                            <td>{{$ele->address}}</td>
                            <td>{{$ele->phone}}</td>
                            <td>{{$ele->price}}</td>
                            <td>{{$ele->time}}</td>
                            <td>
                                <form action="" method="post">
                                <a href="{{route('accepted_req.create')}}" class="btn bg-gradient-info text-white" onclick="acceptRequest({{$ele->id}}, '{{$ele->user_name}}', '{{$ele->service_name}}', '{{$ele->category_name}}', '{{$ele->address}}', '{{$ele->phone}}', '{{$ele->price}}', '{{$ele->time}}')">accept request</a>

                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="reject" class="btn  bg-gradient-danger text-white">
                                </form>

                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!!$requestes ->links()!!}
            </div>
        </div>
    </div>
</body>
@endsection


<script>
    function acceptRequest(serviceName, categoryName, price) {

        document.cookie = `acceptedRequestServiceName=${serviceName}`;
        document.cookie = `acceptedRequestCategoryName=${categoryName}`;
        document.cookie = `acceptedRequestPrice=${price}`;

    }
</script>

</html>




