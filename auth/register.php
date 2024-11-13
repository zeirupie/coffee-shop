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
            <div class="binary-login2" style="width:100%; padding-top:80px;">
                <!-- Updated form action to point to register_account.php -->
                <form action="../database/register_account.php" method="POST">
                    <div style="text-align:center;"><i class="fas fa-user-circle"></i></div>

                    <div class="div-cont-form">
                        <p>
                            Full Name <br>
                            <input type="text" name="customer_name" required placeholder="example: Juan Dela Cruz">
                        </p>
                    </div>

                    <div class="div-cont-form">
                        <p class="register-radio">
                            Gender: <br>
                            <input type="radio" name="gender" value="male" checked> Male 
                            <input type="radio" name="gender" value="female" style="margin-left:20px;"> Female
                        </p>
                    </div>

                    <div class="div-cont-form">
                        <p>
                            Email <br>
                            <input type="email" name="email" required placeholder="example: juandelacruz@gmail.com">
                        </p>
                    </div>

                    <div class="div-cont-form">
                        <p>
                            Password <br>
                            <input type="password" name="pass" required placeholder="Enter password">
                        </p>
                    </div>

                    <div class="div-cont-form">
                        <p>
                            Confirm Password <br>
                            <input type="password" name="confirm_pass" required placeholder="Confirm password">
                        </p>
                    </div>

                    <div class="div-cont-form" style="margin-top: 10px;">
                        <button type="submit">Sign-Up</button>
                    </div>

                    <div class="div-cont-form text-center" style="margin-top: 30px;">
                        <p>
                            Already have an account? 
                            <a href="login_form.php">Login</a>
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
                <a href="#"></i>Home</a>
                <a href="../index.php#about_us">About</a>
                <a href="../index.php#menu">Menu</a>
                <a href="../index.php#products">Products</a>
                <a href="../index.php#contact_us">Contact</a>
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