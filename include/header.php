<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tomgoindia</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Cleaning Company Website Template" name="keywords">
        <meta content="Cleaning Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- fontawesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

    <a href="https://api.whatsapp.com/send?phone=919731668852&text=Welcome to Tomgo India" target="_blank" class="watsapp">
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </a>
    <a href="https://www.youtube.com/channel/UCd2E5RX1c19kq4XpLhRU5Vw" target="_blank" class="social_link_you">
        <i class="fab fa-youtube" aria-hidden="true"></i>
    </a>
    <a href="https://www.facebook.com/thomas.melina.1" target="_blank" class="social_link_fb">
        <i class="fab fa-facebook-f" aria-hidden="true"></i>
    </a>
    <a href="" class="social_link_in" target="_blank">
        <i class="fab fa-instagram" aria-hidden="true"></i>
    </a>

    <?php include 'config/connection.php'; ?>

    <!-- query insertion -->

    <?php if(isset($_POST['query_submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];
        $product = $_POST['product'];
        $enq_status = '1';
        $status = '1';

        $ins_sql = "INSERT INTO enquiry (name,email,contact,message,product,enq_status,status) VALUES ('$name','$email','$contact','$message','$product','$enq_status','$status')";
        //echo $ins_sql; exit;
        mysqli_query($db,$ins_sql);

} ?>

        <!-- Modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modTitle" id="exampleModalLabel">PRODUCT ENQUIRY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
                <p>Submit your contact information and the your enquiry; we will get back to you shortly.</p>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="text" class="form-control" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="">Product</label>
                    <input type="text" class="form-control" name="product" required>
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea rows="5" type="text" class="form-control" name="message" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary btn-sm" style="background-color:rgba(241, 107, 34);border:1px solid rgba(241, 107, 34);outline:none;" value="Send" name="query_submit">
            </div>
            </form>
            </div>
        </div>
        </div>
    <?php
        function active($currect_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);  
            if($currect_page == $url){
                echo 'active'; //class name in css 
            } 
        }
?>
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header home">
                <div class="header_cont">
                    <div class="header-top row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand">
                                <a href="index.php">
                                    <!-- Tomgoindia -->
                                    <img src="img/tomgo/logo.jpg" alt="Logo">
                                </a>
                                <div class="navbar-toggler menu"  style="border:none;float:right;margin-right:20px;margin-top:20px;">
                                        <span class="navbar-toggler-icon" >
                                            <i class="fa fa-bars menu_on" style="font-size: 28px;" aria-hidden="true"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <div class="toggle toggle_off justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="index.php" class="nav-item nav-link <?php active('index.php');?> <?php active('');?>">Home</a>
                                        <a href="about.php" class="nav-item nav-link <?php active('about.php');?>">About Us</a>
                                        <a href="product.php" class="nav-item nav-link <?php active('product.php');?>">Products</a>
                                        <a href="service.php" class="nav-item nav-link <?php active('service.php');?>">Services</a>
                                        <a href="contact.php" class="nav-item nav-link <?php active('contact.php');?>">Contact Us</a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="quote nav-item nav-link">Get A Quote</a>
                                        <!-- <div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Sub Item 1</a>
                                                <a href="#" class="dropdown-item">Sub Item 2</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->