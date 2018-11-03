<?php include '../class/User.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store Management System</title>
    <link rel="stylesheet" href="../Resource/css/bootstrap.css">
    <style>
        .container
        {
            margin-top: 100px;
        }
    </style>
</head>
<body>
<?php
$id = $_GET['id'];
$type = 2;
$user = new User();
$data = $user->userLogin($id, $type);
?>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3>Store Management System</h3>
        </div>
        <div class="card-body">
            <h4 class="btn btn-block btn-dark text-white text-center">Client Information</h4>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>:</td>
                    <td><?php echo $data['f_name']." ".$data['l_name']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td><?php echo $data['email']; ?></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td>:</td>
                    <td><?php echo $data['country']; ?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>:</td>
                    <td><?php echo $data['city']; ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>:</td>
                    <td><?php echo $data['address']; ?></td>
                </tr>
                <tr>
                    <th>Postal Code</th>
                    <td>:</td>
                    <td><?php echo $data['code']; ?></td>
                </tr>
            </table>
            <a class="btn btn-block btn-sm btn-secondary" href="../">Logout</a>
        </div>
        <div class="card-footer text-muted text-center">
            @Pavel Parvej
        </div>
    </div>
</div>

<script src="../Resource/js/bootstrap.js"></script>
</body>
</html>