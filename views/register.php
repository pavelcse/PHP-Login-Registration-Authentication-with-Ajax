<?php include '../class/Registration.php'?>
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
            margin-top: 10px;
        }
    </style>
    <script src="../Resource/custom/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $("#owner").hide();
            });
            $("#show").click(function(){
                $("#owner").show();
            });
        });
    </script>
    <script type="text/javascript">
        function checkPass()
        {
            //Store the password field objects into variables ...
            var password = document.getElementById('password');
            var confpassword = document.getElementById('confpassword');
            //Store the Confimation Message Object ...
            var message = document.getElementById('confirmMessage');
            //Set the colors we will be using ...
            var goodColor = "#66cc66";
            var badColor = "#ff6666";
            //Compare the values in the password field
            //and the confirmation field
            if(password.value == confpassword.value){
                //The passwords match.
                //Set the color to the good color and inform
                //the user that they have entered the correct password
                confpassword.style.backgroundColor = goodColor;
                message.style.color = goodColor;
                message.innerHTML = "Passwords Match!"
            }else{
                //The passwords do not match.
                //Set the color to the bad color and
                //notify the user.
                confpassword.style.backgroundColor = badColor;
                message.style.color = badColor;
                message.innerHTML = "Passwords Do Not Match!"
            }
        }
    </script>
</head>
<body>
<?php
    if (isset($_POST['submit'])){
        $data[] = 0;
        $data = $_POST;

        $reg = new Registration();
        $data = $reg->newRegistration($data);
    }
?>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3>Store Management System</h3>
        </div>
        <div class="card-body">
            <h4 class="text-center bg-info">Registration Form</h4>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="f_name">First Name</label>
                    <input name="f_name" type="text" class="form-control" id="f_name" placeholder="Your first name here" required>
                </div>

                <div class="form-group">
                    <label for="l_name">Last Name</label>
                    <input name="l_name" type="text" class="form-control" id="l_name" placeholder="Your last name here" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email address here" required>
                    <?php if(isset($data)){?>
                        <span class="btn btn-danger btn-sm float-right"><?php echo $data?></span>
                    <?php }?>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Your Password here" required>
                </div>

                <div class="form-group">
                    <label for="confpassword">Confirm Password</label>
                    <input name="confpassword" type="password" class="form-control" id="confpassword" onkeyup="checkPass(); return false;" placeholder="Confirm your password" required>
                    <span id="confirmMessage" class="confirmMessage"></span>
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input name="country" type="text" class="form-control" id="country" value="Bangladesh" required>
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <select name="city" id="city" class="form-control" required>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Chittagong">Chittagong</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control" id="address" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="code">Postal Code</label>
                    <input name="code" type="text" class="form-control" id="code" placeholder="Postal code here" required>
                </div>
                <div class="form-group">
                    <label for="type">User Type</label>
                    <select name="type" id="type" class="form-control" required>
                        <option id="show" value="1">Shop Owner</option>
                        <option id="hide" value="2">Client</option>
                    </select>
                </div>

                <div id="owner">
                    <div class="form-group">
                        <label for="shop_name">Shop Name</label>
                        <input name="shop_name" type="text" class="form-control" id="shop_name" placeholder="Shop Name">
                    </div>
                    <div class="form-group">
                        <label for="shop_address">Shop Address</label>
                        <textarea name="shop_address" class="form-control" id="shop_address" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <input class="btn btn-block btn-primary" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
        <div class="card-footer text-muted text-center">
            @Pavel Parvej
        </div>
    </div>
</div>
<script src="../Resource/js/bootstrap.js"></script>
</body>
</html>