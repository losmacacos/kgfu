<?php

session_start();

if( isset($_SESSION['user_id']) ){
    header("Location: /");
}

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):
    
    // Enter the new user in the database
    $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

    if( $stmt->execute() ):
        $message = 'Successfully created new user';
    else:
        $message = 'Sorry there must have been an issue creating your account';
    endif;

endif;

?>

<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Blog - Hola</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>


<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html"><img src="images/logo.png" alt="Homepage"></a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li><a href="index.html#home" title="home">Home</a></li>
                <li><a href="index.html#about" title="about">About</a></li>
                <li><a href="index.html#works" title="works">Works</a></li>
                <li class="current"><a href="blog.html" title="blog">Blog</a></li>
                <li><a href="index.html#contact" title="contact">Contact</a></li>	
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- page header
    ================================================== -->
    <section class="page-header page-hero" style="background-image:url(images/blog/blog-bg-01.jpg)">

        <div class="row page-header__content">
            <article class="col-full">

                <div class="page-header__info">
                    <div class="page-header__cat">
                        <a href="#0">Branding</a><a href="#0">Design</a>
                    </div>
                    <div class="page-header__date">
                        Sept 16, 2017
                    </div>
                </div>
            </article>
        </div>

    </section> <!-- end page-header -->


    <!-- blog
    ================================================== -->
    <section class="blog-content-wrap">

        <div class="row blog-content">
            <div class="col-full">

            <div class="header">
                    <a href="/">KungFu Atibaia II</a>
                </div>

                <?php if(!empty($message)): ?>
                    <p><?= $message ?></p>
                <?php endif; ?>

                <h1>Cadastre-se</h1>
                <span>or <a href="blog.php">Clique aqui para logar</a></span>

                <form action="newuser.php" method="POST">
                    
                    <input type="text" placeholder="Enter your email" name="email">
                    <input type="password" placeholder="and password" name="password">
                    <input type="password" placeholder="confirm password" name="confirm_password">
                    <input type="submit">

                </form>




            </div> <!-- end col-full -->
        </div> <!-- end blog-content -->

    </section> <!-- end blog-content-wrap -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="images/logo.png" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-twitter" aria-hidden="true"></i>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-behance" aria-hidden="true"></i>
                        <span>Behance</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-pinterest" aria-hidden="true"></i>
                        <span>Pinterest</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Hola 2017</span> 
                    <span>Design by <a href="https://www.styleshout.com/">styleshout</a></span>	
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <div id="preloader"> 
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>