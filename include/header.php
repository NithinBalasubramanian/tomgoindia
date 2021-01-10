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
    </head>

    <body>
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
            <div class="modal-body">
                <p>Submit your contact information and the your enquiry; we will get back to you shortly.</p>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Product</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea rows="5" type="text" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" style="background-color:rgba(241, 107, 34);border:1px solid rgba(241, 107, 34);outline:none;">Send</button>
            </div>
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
                                <a href="index.html">
                                    Tomgoindia
                                    <!-- <img src="img/logo.png" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+91 9842106636"><i class="fa fa-phone-alt"></i>+91 9842106636</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@tomgoindia.com"><i class="fa fa-envelope"></i>info@tomgoindia.com</a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="index.php" class="nav-item nav-link <?php active('index.php');?> <?php active('');?>">Home</a>
                                        <a href="about.php" class="nav-item nav-link <?php active('about.php');?>">About Us</a>
                                        <a href="product.php" class="nav-item nav-link <?php active('product.php');?>">Products</a>
                                        <a href="service.php" class="nav-item nav-link <?php active('service.php');?>">Services</a>
                                        <a href="contact.php" class="nav-item nav-link <?php active('contact.php');?>">Contact Us</a>
                                        <!-- <div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Sub Item 1</a>
                                                <a href="#" class="dropdown-item">Sub Item 2</a>
                                            </div>
                                        </div> -->
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="btn">Get A Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->