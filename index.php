<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store Management System</title>
    <link rel="stylesheet" href="Resource/css/bootstrap.css">
    <style>
        .container
        {
            margin-top: 100px;
        }
        .row
        {
            height: 500px;
        }
        .col
        {
            margin: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h3><a href="index.php">Store Management System</a></h3>
        </div>
        <div class="card-body">
            <?php
            if(isset($_GET['msg'])){
                $msg = "Registration Success. Please login...";
                echo "<p class='btn btn-sm btn-success text-center'>".$msg."</p>";
            }
            ?>
            <div class="row">

                <div class="col">
                    <p>If you are new here, please register first.</p>
                    <p><a class="btn btn-sm btn-info btn-block" href="views/register.php">Register</a></p>
                </div>
                <div class="col">
                    <p>If you are already registered, please login.</p>
                    <p><a class="btn btn-sm btn-info btn-block" href="views/login.php">Login</a></p>
                </div>
            </div>
            <p>Admin Email: admin@example.com || Admin Password: 123</p>
            <p>Owner Email: parvej@example.com || Owner Password: 123</p>
            <p>Client Email: rasel@example.com || Client Password: 123</p>
        </div>
        <div class="card-footer text-muted">
            @Pavel Parvej
        </div>
    </div>
</div>

<script src="Resource/js/bootstrap.js"></script>
</body>
</html>