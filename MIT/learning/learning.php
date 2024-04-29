
<?php

$imagelogo= "http://localhost/mit/images/mitlogo.png";
$collegelogo="http://localhost/mit/images/college.png";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning online : all topics </title>
    <link rel="icon" href="http://localhost/mit/images/mitlogo.png">
    <link rel="stylesheet" href="http://localhost/mit/style.css">
    <link rel="stylesheet" href="http://localhost/mit/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .image-logo {
            background-image: url(<?php echo $imagelogo; ?>);
        }
        .image-college{
            background-image: url(<?php echo $collegelogo;?>);
        }
        </style>
</head>

<body>
    <div class="icon-bar">
        <a class="active" href="http://localhost/mit/home.php"><i class="fa fa-home"></i></a>
        <a href="http://localhost/mit/search.php"><i class="fa fa-search"></i></a>
        <a href="http://localhost/mit/download.php"><i class="fa-solid fa-download"></i></a>
        <a href="http://localhost/mit/profile.php"><i class="fa-solid fa-user"></i></a>
    </div>

    <!-- navbar -->
    <div class="navbar-div">
        <div class="image-logo">

        </div>
        <div class="name-college">
            <a href="http://localhost/mit/home.php" style="text-decoration: none;">
                <p>MIT RISHIKESH DHALWALA</p>
            </a>
        </div>

    </div>

    </div>

    <section class="sections">
        <div class="div-welcome-message">
            <h3>Welcome To</h3>
            <h2>
                MIT RISHIKESH
            </h2>

        </div>
        <div class="image-college">
        </div>

    </section>




    <a href="http://localhost/mit/learning/learning.php">
        <section class="learning-section">
            <h1>Start Learning From Here</h1>
            <p>select your course year and learn all topics of that subject!</p>
        </section>
    </a>


    <div class="wrap-bca-it">

        <div class="bca-year-section">
            <div class="bca-year-subpart">
                <i class="fas fa-graduation-cap icon"></i>
                <h2>BCA 1ST YEAR Learning</h2>
                <p>"Unlocking the Gateway to Digital Discovery: Embracing the First Steps of BCA Journey"</p>
                <a href="http://localhost/mit/learning/BCA/bca1st.php" class="button">Click Here!</a>
            </div>
            <div class="bca-year-subpart">
                <i class="fas fa-graduation-cap icon"></i>
                <h2>BCA 2ND YEAR Learning</h2>
                <p>"Building Bridges to Advanced Expertise: Elevating BCA Proficiency in the 2nd Year"</p> <a
                    href="http://localhost/mit/learning/BCA/bca2nd.php" class="button">Click Here!</a>
            </div>
            <div class="bca-year-subpart">
                <i class="fas fa-graduation-cap icon"></i>
                <h2>BCA 3RD YEAR Learning</h2>
                <p>"Unveiling Potential: Unleashing Innovation and Leadership in BCA's Final Year"






                </p>
                <a href="http://localhost/mit/learning/BCA/bca3rd.php" class="button">Click Here!</a>
            </div>


        </div>
    </div>


    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <div class="brand-logo">
                    <img src="http://localhost/mit/images/mitlogo.png" alt="Logo">
                </div>
                <div class="footer-info">
                    <p><i class="fas fa-map-marker-alt"></i> <span>Address:</span> DHALWALA, City, RISHIKESH</p>
                    <p><i class="fas fa-envelope"></i> <span>Email:</span> shivanisachin@gmail.com</p>
                    <p><i class="fas fa-phone-alt"></i> <span>Phone:</span> +1234567890</p>
                </div>
            </div>
            <div class="footer-section">
                <h3>Important Links</h3>
                <ul>
                    <li><a href="http://localhost/mit/home.php">Home</a></li>
                    <li><a href="http://localhost/mit/aboutus.php">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Social Links</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                <h3>Subscribe to Our Newsletter</h3>
                <form class="newsletter-form" action="#">
                    <input type="email" name="email" placeholder="Your Email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </footer>


</body>

</html>