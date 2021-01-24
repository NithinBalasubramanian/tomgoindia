<?php session_start(); ?>
<?php include 'config/connection.php'; ?>
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
    
    <?php if(!$_SESSION['log']){ 
        echo "<script>window.location.href='login.php';</script>";
     }else{ ?>
      <div class="admin_header">
        <div class="flex" style="margin:0px;">
            <div class="admin_sidebar">
                <h1>Tomgoindia Admin</h1>
                <div class="lists">
                    <a href="admin.php">
                        <div class="list_itm active_list">
                            New Enquiries
                        </div>
                    </a>
                    <a href="list_query.php">
                        <div class="list_itm">
                            Done Enquiries
                        </div>
                    </a>
                    <a href="list_all.php">
                        <div class="list_itm">
                            List Enquiries
                        </div>
                    </a>
                </div>
            </div>
            <div class="mainbar">
                <div class="main_card">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center">New Enquiries</h1>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-bordered table-stripped">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $sql = "SELECT * FROM enquiry WHERE status='1' AND enq_status='1'";
                                            $result = mysqli_query($db,$sql);
                                            $i = 1;
                                            if(mysqli_num_rows($result) > 0 ){ 
                                                while($row = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row["name"]; ?></td>
                                                        <td><?php echo $row["contact"]; ?></td>
                                                        <td><?php echo $row["email"]; ?></td>
                                                        <td><?php echo $row["message"]; ?></td>
                                                        <td><a href="delete.php?id=<?php echo $row['id']; ?>&action=update" class="btn btn-primary btn-sm">Connect</a></td>
                                                        <td><a href="delete.php?id=<?php echo $row['id']; ?>&action=delete" class="btn btn-sm btn-danger">Delete</a></td>
                                                    </tr>
                                             <?php  $i++; }
                                            }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <?php } ?>
    
    
</body>
</html>