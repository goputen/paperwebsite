<?php

$imagelogo= "http://localhost/mit/images/mitlogo.png";
$collegelogo="http://localhost/mit/images/college.png";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="http://localhost/mit/images/mitlogo.png">
    <link rel="stylesheet" href="http://localhost/mit/navbar.css">
    <link rel="stylesheet" href="http://localhost/mit/style.css">
    <link rel="stylesheet" href="http://localhost/mit/BCA/bcastyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    .image-logo {
        background-image: url(<?php echo $imagelogo; ?>);
    }
    .image-college{
        background-image: url(<?php echo $collegelogo;?>);
    }
    </style>
<style>
    .paper-list li a span {
        background-color: #ffcc00;
        color: #333;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
        margin-left: 8px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>

<body>

    <div class="icon-bar">
        <a class="active" href="http://localhost/mit/home.php"><i class="fa fa-home"></i></a>
        <a href="http://localhost/mit/search.php"><i class="fa fa-search"></i></a>
        <a href="http://localhost/mit/download.html"><i class="fa-solid fa-download"></i></a>
        <a href="http://localhost/mit/profile.php"><i class="fa-solid fa-user"></i></a>
    </div>

    <div class="navbar-div">
        <div class="image-logo">

        </div>
        <div class="name-college">
            <a href="http://localhost/mit/home.php" style="text-decoration: none;">
                <p>MIT RISHIKESH DHALWALA</p>
            </a>
        </div>

    </div>



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




           
        </div>


    </div>
    </div>


    <div class="header">
        <h1>BCA 3rd Year Learning</h1>
        <p>Click on a subject to view and read online</p>
    </div>
    <div class="section">
        <ul class="paper-list">
            <li><a href="#"><i class="fas fa-globe"></i> Web Technology <span>(Learn)</span></a></li>
            <li><a href="#"><i class="fas fa-database"></i> PL/SQL <span>(Learn)</span></a></li>
            <li><a href="#"><i class="fas fa-network-wired"></i> Distributed System <span>(Learn)</span></a></li>
            <li><a href="#"><i class="fas fa-cogs"></i> Software Testing <span>(Learn)</span></a></li>
            <li><a href="#"><i class="fab fa-php"></i> PHP Programming <span>(Learn)</span></a></li>
            <li><a href="#"><i class="fas fa-code"></i> Software Project Model <span>(Learn)</span></a></li>
            <li><a href="#"><i class="fas fa-diagnoses"></i> Unified Modeling Language <span>(Learn)</span></a></li>
        </ul>
    </div>



    <!-- footer section -->
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
                    <li><a href="#">HNBGU Official website</a></li>
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




    <!-- footer section close -->
</body>

</html>