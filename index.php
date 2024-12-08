<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Coffee</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="fonts/all.css">
    <link rel="stylesheet" href="secondary.css">
    <script src=script1.js defer></script>
</head>
<body>

<?php
session_start();
?>

<header>
    <h1 style="color:#4A3000;">I COFFEE</h1>
    
    <div class="navigations-cont">
        <nav class="dsktop-nav">
            <ul class="navigations">
                <li><a href="">Home</a></li>
                <li><a href="index.php#about_us">About</a></li>
                <li><a href="index.php#menu">Menu</a></li>
                <li><a href="index.php#products">Products</a></li>
                <li><a href="index.php#contact_us">Contact</a></li>
            </ul>
        </nav>
        
        <i class="fa fa-shopping-cart"></i>
        <!--
        <div class="loginRegister-cont">
            <button><a href="auth/login.php" style="color: black;text-decoration: none;">Login</a></button>
            <button id="signUpBtn"><a href="auth/register.php" style="color:white;text-decoration: none;">Sign-Up</a></button>
        </div>

        -->

        <?php

            include "database/config.php";

            if(isset($_SESSION['logged_in']))
            {

                $check_name = "SELECT customer_name FROM customer_account_tbl WHERE email = ?";
                $stmt = $conn->prepare($check_name);
                $stmt->bind_param("s", $_SESSION['email']);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {

                    $stmt->bind_result($cus_name);
                    $stmt->fetch();

                    echo
                    "
                        <div class='profile' id='profile' style='cursor:pointer;display:flex;justify-content:center;align-items:center;'>
                            <h3 style='margin-right:10px;color:gray;'>".$cus_name."</h3>
                            <div class='profile_pic' style='width:50px;height:50px;background-color:#DEB887;border-radius:25px;overflow:hidden;'>
                                <img src='' alt=''>
                            </div>
                        </div>
                    ";
                    
                }
            }
            else
                {
                    echo
                    "
                        <div class='loginRegister-cont'>
                            <button><a href='auth/login.php' style='color: black;text-decoration: none;'>Login</a></button>
                            <button id='signUpBtn'><a href='auth/register.php' style='color:white;text-decoration: none;'>Sign-Up</a></button>
                        </div>
                    ";
                }

        ?>

        <div class="profile-menu" id="profile_menu" style="display:none;height:300px;width:250px;background-color:white;position:fixed;top:80px;text-align:center;padding-top:15px;right:10px">
            
            <button onclick="window.location.href='auth/login.php'" style="padding:7px;width:100%;"><h3>logout</h3></button>
            
        </div>

    </div>
</header>

    <div class="hero-section">
        <div class="hero-text-cont">
            <h1>Experience Premium Coffee Every Day</h1>
            <p>From carefully selected beans to expertly crafted brews, we bring you the perfect cup of coffee to start your day right.</p>
            <button>Order Now</button>
        </div>
    </div>

    <div class="aboutUs-section" id="about_us">
        <div class="aboutUs-cont">
            <div class="aboutUs-img">
                <img src="images/about.avif" alt="Coffee Shop Interior" class="img-1">
                <img src="images/about-2.avif" class="img-2">
                <img src="images/about-4.avif" alt="Coffee Shop Interior" class="img-3">
            </div>
            <div class="aboutUs-text-cont">
                <h2>About Us</h2>
                <h1>Your Daily Dose of Premium Coffee</h1>
                <p>Welcome to I Coffee, where passion meets perfection in every cup. Our expert baristas craft each beverage with precision and care, using only the finest beans sourced from sustainable farms worldwide. Experience the art of coffee making in a warm, inviting atmosphere designed for coffee lovers.</p>
                <button>Learn More</button>
            </div>
        </div>
    </div>

    <div class="menu-section" id="menu" >
        <h2>Menu</h2>
        <h1>Our Signature Beverages</h1>
        <div class="menu-category-cont">
            
            <?php
                include "database/signature_beverages.php";
            ?>
        </div>
    </div>

    <div class="products-section" id="products" >
            <div class="title-cont">
                <h2>Products</h2>
                <h1>Premium Coffee Beans</h1>
            </div>
        <div class="products-cont">

            <?php
                include "database/home_product.php";
            ?>

        </div>
    </div>

    <div class="contact-section" id="contact_us" >
        <div class="contact-cont">
            <div class="contact-binary contact-info">
                <h2>Contact Us</h2>
                <h1>Get in Touch</h1>
                <p><i class="fa-solid fa-phone"></i> Tel: 09xxxxxxxxx</p>
                <p><i class="fa fa-envelope"></i> Email: icoffee@gmail.com</p>
                <p><i class="fa-solid fa-location-crosshairs"></i> Location: Metro Manila</p>
            </div>
            <div class="contact-binary contact-form">
                <form action="">
                    <p style="text-align:left;">
                        Full name
                        <div></i><input type="text"></div>
                    </p>
                    <p style="text-align:left;">
                        Email
                        <div></i><input type="email"></div>
                    </p>
                    <p style="text-align:left;">
                        Message
                    </p>
                    <textarea name="" id=""></textarea>
                    <div class="Contact-submit-btn"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
    <div class="footer-cont">
        <div class="footer-binary">
            <h1>I COFFEE</h1>
            <p>Follow us on our social media for the latest coffee trends, exclusive offers, and more!</p>
            <p>
                <a href="#" class="ftr-socials"><i class="fab fa-facebook"></i></a>
                <a href="#" class="ftr-socials"><i class="fab fa-instagram"></i></a>
                <a href="#" class="ftr-socials"><i class="fab fa-twitter"></i></a>
            </p>
        </div>
        
        <div class="footer-binary">
            <h2>COFFEE SHOP</h2>
            <p class="footer-nav">
                <a href="#"></i>Home</a>
                <a href="index.php#about_us">About</a>
                <a href="index.php#menu">Menu</a>
                <a href="index.php#products">Products</a>
                <a href="index.php#contact_us">Contact</a>
            </p>
        </div>
    </div>
    
    <div class="copyright">
        <p>&copy; 2024 I Coffee Shop. All rights reserved.</p>
        <p>This website is created with love for coffee enthusiasts.</p>
    </div>
</div>

</body>
</html>
