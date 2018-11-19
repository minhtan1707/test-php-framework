<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    
    </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container" style="max-width:940px;">
            <a class="navbar-brand text-light" href="#">CI Projects</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo '?admin/products/index'?>">Product List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo '?admin/products/add'; ?>">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo '?admin/categories/index'; ?>">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo '?admin/orders/index'; ?>">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo '?admin/users/index'; ?>">Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>