<?php session_start(); ?>
<html>
<head>
    <title>Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

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
    <?php $_SESSION['log'] = 'hi'; ?>
    <?php if(!$_SESSION['log']){ 
        echo "<script>window.location.href='login.php';</script>";
     }else{ ?>
      <div class="admin_header">
        <div class="flex" style="margin:0px;">
            <div class="admin_sidebar">
                <h1>Tomgoindia Admin</h1>
                <div class="lists">
                    <div class="list_itm active_list">
                        New Enquiries
                    </div>
                    <div class="list_itm">
                        List Enquiries
                    </div>
                    <div class="list_itm">
                        Deleted Enquiries
                    </div>
                </div>
            </div>
            <div class="mainbar">
                <div class="main_card">

                </div>
            </div>
        </div>
      </div>
    <?php } ?>
    
    
</body>
</html>