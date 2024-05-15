<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <style>


        .card {
            width: 400px;
            border: none;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            position: relative;
            left:80%
        }

        .image img {
            border-radius: 50%;
            width: 155px;
            height: 155px;
        }

        .stats {
            background: #f2f5f8 !important;
            color: #000 !important;
            margin-top: 20px;
            padding: 10px;
            border-radius: 10px;
        }

        .button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
<?php
    // Determine which layout to extend based on the user role
    $layout = '';
    switch ($_COOKIE['user_role']) {
        case 'admin':
            $layout = 'admin.layout';
            break;
        case 'user':
            $layout = 'clients.layout';
            break;
        case 'technician':
            $layout = 'Technicians.layout';
            break;
        default:
        $layout= 'index';
            break;
    }


?>
@extends($layout);
@section('content');


<div class="container">


    <div class="col-4">
    <div class="card ms-5">

<div class="image">
    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" alt="Profile Image">
</div>

<div class="mt-3">
<div class="mt-3">
    <h5>User Information</h5>
    <p> ID: <?php echo isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] :"" ?></p>
    <p>Name: <?php echo isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] :"" ?></p>
    <p>Email: <?php echo isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] :"" ?></p>
    <p>Role:<?php echo isset($_COOKIE['user_role']) ? $_COOKIE['user_role'] :"" ?></p>
</div>
</div>

<div class="stats">
    <div>

    <div>
        <span>Rating</span>
        <span>8.9</span>
    </div>
</div>

<div class="button mt-2">

    <button class="btn btn-sm btn-primary w-100 mt-2">Follow</button>
</div>



</div>
    </div>

</div>


</body>
@endsection
</html>
