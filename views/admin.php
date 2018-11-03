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


$owners = $user->getOwner();

$clients = $user->getClient();

?>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3>Store Management System</h3>
        </div>
        <div class="card-body">
            <h4 class="btn btn-block btn-dark text-white text-center">Admin Panel</h4>

            <h5 class="btn btn-block btn-secondary text-white text-center">Owner List</h5>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Shop Name</th>
                    <th>Shop Address</th>
                </tr>
                <?php foreach($owners as $owner){ ?>
                <tr>
                    <td><?php echo $owner['f_name']." ".$owner['l_name']; ?></td>
                    <td><?php echo $owner['email']; ?></td>
                    <td><?php echo $owner['shop_name']; ?></td>
                    <td><?php echo $owner['shop_address']; ?></td>
                </tr>
                <?php } ?>
            </table>

            <br>

            <h5 class="btn btn-block btn-secondary text-white text-center">Client List</h5>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
                <?php foreach($clients as $client){ ?>
                    <tr>
                        <td><?php echo $client['f_name']." ".$client['l_name']; ?></td>
                        <td><?php echo $client['email']; ?></td>
                        <td><?php echo $client['address']; ?></td>
                    </tr>
                <?php } ?>
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