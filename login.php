<?php session_start(); ?>
<?php include 'config/connection.php'; ?>
<html>
<head>
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <style>
        .log{
            width:30%;
            margin:250px auto; 
            padding:30px;
            border-radius:20px;
            border:2px solid black;
        }
        .log h2{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php if(isset($_SESSION['log'])){ 
        echo "<script>window.location.href='admin.php';</script>";
     }else{ ?>
        <div class="log">
            <div class="form">
                <form action="" method="post">
                    <h2>Login</h2>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password : </label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="login" name="login" class="btn btn-sm btn-primary" style="float:right;">
                    </div>
                    <br>
                </form>
            </div>
        </div>
    <?php } ?>
    <?php if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM admin WHERE email='$email'AND password='$password'";
            $result = mysqli_query($db,$sql);
            if(!$result || mysqli_num_rows($result) > 0 ){
               $_SESSION['log'] = 'admin';
               echo "<script>window.location.href='admin.php';</script>";
            }else{
                echo "<script>window.location.href='login.php';</script>";
            }   
    } ?>
</body>
</html>