<?php
session_start();
include "functions.php";
login();
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
    <!-- End Google Tag Manager -->
    <title>Event Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets-login/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets-login/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets-login/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets-login/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets-login/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets-login/css/skins/default.css">
    <style>.login-15 {
    background: rgba(0, 0, 0, 0.04) url(https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=755&q=80) top left repeat;
    background-size: cover;
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}
    
    
    </style>
</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 15 start -->
<div class="login-15">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-section">
                    <div class="btn-section">
                      
					<?php
                    if (isset($_GET['error']) == true) {
                        echo '<div id="username_password" class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Errore! </strong> Username o password errati, ricontrolla i dati inseriti.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>';
                                                }

                            ?>
                                                
                    </div>
                    <div class="login-inner-form">
                        <div class="details">
                            <form action="index.php" method="POST">
                                <div class="form-group">
                                    <label class="text-dark">Username</label>
                                    <input type="text" name="username" class="input-text" required>
                                </div>
                                <div class="form-group mb-35">
                                    <label  class="text-dark">Password</label>
                                    <input type="password" name="password" class="input-text" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-6">
                                        <button type="submit" name="submit" class="btn-md btn-theme">Entra</button>
                                    </div>
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 15 end -->

<!-- External JS libraries -->
<script src="assets-login/js/jquery-2.2.0.min.js"></script>
<script src="assets-login/js/popper.min.js"></script>
<script src="assets-login/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->

</body>

<!-- Mirrored from storage.googleapis.com/themevessel-products/logdy/main/login-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 16:54:12 GMT -->
</html>