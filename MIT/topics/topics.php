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
    <style>
        .image-logo {
            background-image: url(http://localhost/mit/images/mitlogo.png);
        }

        .image-college {
            background-image: url(http://localhost/mit/images/college.png);
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

    <div class="navbar-div">
        <div class="image-logo">

        </div>
        <div class="name-college">
            <a href="http://localhost/mit/home.php" style="text-decoration: none;">
                <p>MIT RISHIKESH DHALWALA</p>
            </a>
        </div>

    </div>

    <div class="header">
        <h1>BCA TOPICS</h1>
        <p>Click on a subject to view and Important topics</p>
    </div>

    <div class="section">
        <ul class="paper-list">
            <li><a href=""><i class="fas fa-code"></i> Programming in C <span>(topics)</span></a></li>
            <li><a href="#"><i class="fas fa-desktop"></i> Fundamental of Computer <span>(topics)</span></a></li>
            <li><a href="#"><i class="fas fa-comments"></i> English Communication <span>(topics)</span></a></li>
            <li><a href="#"><i class="fas fa-calculator"></i> Mathematics <span>(topics)</span></a></li>
            <li><a href="#"><i class="fas fa-database"></i> Data Structure and Algorithm <span>(topics)</span></a></li>
            <li><a href="#"><i class="fas fa-cogs"></i> OOPs in C++ <span>(topics)</span></a></li>
            <li><a href="#"><i class="fas fa-leaf"></i> Environment Studies <span>(topics)</span></a></li>
            <li><a href="#"><i class="fas fa-database"></i> Database Management System <span>(topics)</span></a></li>
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
