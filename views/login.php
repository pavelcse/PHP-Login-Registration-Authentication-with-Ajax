<?php include '../class/Login.php'?>
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
<?php
    if (isset($_POST['login'])){
        $data[] = 0;
        $data = $_POST;

        $login = new Login();
       $msg = $login->login($data);
    }
?>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3>Store Management System</h3>
        </div>
        <div class="card-body">
            <h4 class="bg-info text-center">User login</h4>

            <div class="row">
                <div class="col">
                    <?php if(isset($msg)){?>
                        <h5 class="btn btn-danger btn-sm text-center"><?php echo $msg?></h5>
                    <?php }?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <input type="submit" name="login" class="btn btn-primary btn-block btn-sm" value="Login">
                    </form>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            @Pavel Parvej
        </div>
    </div>
</div>

<script src="../Resource/js/bootstrap.js"></script>
</body>
</html>