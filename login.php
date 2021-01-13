<?php session_start(); ?>
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
    <?php if($_SESSION['log']){ 
        echo "<script>window.location.href='admin.php';</script>";
     }else{ ?>
        <div class="log">
            <div class="form">
                <form action="">
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
</body>
</html>