<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Coffee - Register</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../fonts/all.css">
</head>
<body>

<?php
session_start();
session_destroy();
?>
    
    <header>
        <h1 style="color:#4A3000;">I COFFEE</h1>
        
        <div class="navigations-cont">
            <nav class="dsktop-nav">
                <ul class="navigations">
                    <li><a href="../">Home</a></li>
                    <li><a href="../index.php#about_us">About</a></li>
                    <li><a href="../index.php#menu">Menu</a></li>
                    <li><a href="../index.php#products">Products</a></li>
                    <li><a href="../index.php#contact_us">Contact</a></li>
                </ul>
            </nav>
            
            <i class="fa fa-shopping-cart"></i>
            
            <div class="loginRegister-cont">
                <button><a href="login.php" style="color: black;text-decoration: none;">Login</a></button>
                <button id="signUpBtn"><a href="register.php" style="color:white;text-decoration: none;">Sign-Up</a></button>
            </div>
        </div>
    </header>

    <div class="login-section">
        <div class="login-section-cont">
            <div class="binary-login">
                <div>
                    <h1>I Coffee</h1>
                    <h2>Login</h2>
                    <p>Log in to enjoy our finest brews and special offers!</p>
                </div>
            </div>
    
            <div class="binary-login2">
                <form action="../database/login.php" method="POST">
                    <div style="text-align:center;"><i class="fas fa-user-circle"></i></div>
                    
                    <div class="div-cont-form">
                        <p>
                            Email: <br>
                            <input type="email" placeholder="Enter your email" name="email" required>
                        </p>
                    </div>

                    <div class="div-cont-form">
                        <p>
                            Password: <br>
                            <input type="password" placeholder="Enter your password" name="pass" required>
                        </p>
                    </div>

                    <div class="div-cont-form text-r">
                        <a href="#">Forgot password?</a>
                    </div>

                    <div class="div-cont-form">
                        <button type="submit" name="login">Login</button>
                    </div>

                    <div class="div-cont-form text-center" style="margin-top: 30px;">
                        <p>
                            Don't have an account yet? 
                            <a href="register.html">Sign-Up</a>
                        </p>
                    </div>
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
                <a href="/"></i>Home</a>
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

<script src="../script.js" defer></script>

</body>
</html>