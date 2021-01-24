
<?php include 'config/connection.php'; ?>
<?php

    if($_GET['action'] == 'delete'){
        $id = $_GET['id'];
        $sql = "DELETE FROM enquiry WHERE id='$id'";
        mysqli_query($db,$sql);
        echo "<script>window.location.href='admin.php';</script>";
    }

    if($_GET['action'] == 'update'){
        $id = $_GET['id'];
        $sql = "UPDATE enquiry SET enq_status='2' WHERE id='$id'";
        mysqli_query($db,$sql);
        echo "<script>window.location.href='list_query.php';</script>";
    }

    if($_GET['action'] == 'update_con'){
        $id = $_GET['id'];
        $sql = "UPDATE enquiry SET enq_status='1' WHERE id='$id'";
        mysqli_query($db,$sql);
        echo "<script>window.location.href='admin.php';</script>";
    }
    
?>