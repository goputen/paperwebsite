<?php
include ".MIT/config/connection.php";

session_start();
if(!isset($_SESSION['fullname'])){
    header("location:login.php");
}

 // Output the session timeout in seconds
?>


<?php

$imagelogo= "http://localhost/MIT/images/mitlogo.png";
$collegelogo="http://localhost/MIT/images/college.png";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIT question paper website</title>
    <link rel="icon" href="http://localhost/MIT/images/mitlogo.png">
    <link rel="stylesheet" href="http://localhost/MIT/style.css">
    <link rel="stylesheet" href="http://localhost/MIT/navbar.css">
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
        <a class="active" href="#"><i class="fa fa-home"></i></a>
        <a href="http://localhost/MIT/search.php"><i class="fa fa-search"></i></a>
        <a href="http://localhost/MIT/download.php"><i class="fa-solid fa-download"></i></a>
        <a href="http://localhost/MIT/profile.php"><i class="fa-solid fa-user"></i></a>
    </div>





    <!-- navbar -->
    <div class="navbar-div">
        <div class="image-logo"></div>
        <div class="name-college">
            <a href="http://localhost/MIT/home.php" style="text-decoration: none;">
                <p>MIT RISHIKESH DHALWALA</p>
            </a>
        </div>

    </div>

    </div>
    <!-- navbar -->
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



    <a href="http://localhost/MIT/learning/learning.php">
        <section class="learning-section">
            <h1>Start Learning From Here</h1>
            <p>Click here and Learn all topics or concept of your course!</p>
        </section>
    </a>

    <!--wrap bca and it  -->

    <div class="wrap-bca-it">

        <div class="bca-year-section">
            <div class="bca-year-subpart">
                <i class="fas fa-graduation-cap icon"></i>
                <h2>BCA 1ST YEAR</h2>
                <p>Welcome to the first year of BCA program. Explore the fundamentals of computer science.</p>
                <a href="http://localhost/MIT/BCA/BCA1ST.php" class="button">Click Here!</a>
            </div>
            <div class="bca-year-subpart">
                <i class="fas fa-graduation-cap icon"></i>
                <h2>BCA 2ND YEAR</h2>
                <p>Advance your skills and knowledge in computer applications during the second year of BCA.</p>
                <a href="http://localhost/MIT/BCA/BCA2ND.php" class="button">Click Here!</a>
            </div>
            <div class="bca-year-subpart">
                <i class="fas fa-graduation-cap icon"></i>
                <h2>BCA 3RD YEAR</h2>
                <p>Complete your BCA journey with specialized courses and practical experience in the third year.</p>
                <a href="http://localhost/MIT/BCA/BCA3RD.php" class="button">Click Here!</a>
            </div>

            <div class="bca-year-section">
                <div class="bca-year-subpart">
                    <i class="fas fa-flask icon"></i>
                    <h2>BSc 1ST YEAR</h2>
                    <p>Welcome to the first year of BSc program. Dive into foundational science courses and labs.</p>
                    <a href="#" class="button">Click Here!</a>
                </div>
                <div class="bca-year-subpart">
                    <i class="fas fa-flask icon"></i>
                    <h2>BSc 2ND YEAR</h2>
                    <p>Explore deeper into scientific principles and conduct experiments in the second year of BSc.</p>
                    <a href="#" class="button">Click Here!</a>
                </div>
                <div class="bca-year-subpart">
                    <i class="fas fa-flask icon"></i>
                    <h2>BSc 3RD YEAR</h2>
                    <p>Specialize in your chosen field of study and engage in research projects during the third year of
                        BSc.</p>
                    <a href="#" class="button">Click Here!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- syllabus section  -->
    <div class="syllabus-section">
        <div class="syllabus-subpart">
            <i class="fas fa-laptop-code icon"></i>
            <h2>Syllabus for BCA</h2>
            <p>Explore the curriculum for Bachelor of Computer Applications (BCA) program.</p>
            <a href="https://www.doonbusinessschool.com/images/cs/BCA_Course_Structure.pdf" class="button">View Syllabus</a>
        </div>
        <div class="syllabus-subpart">
            <i class="fas fa-desktop icon"></i>
            <h2>Syllabus for IT</h2>
            <p>Discover the courses and topics covered in the Information Technology (IT) program.</p>
            <a href="https://hnbgu.ac.in/sites/default/files/2021-08/Syllabus%20Bachelor%20of%20Science%20%28IT%29%20Programme.pdf" class="button">View Syllabus</a>
        </div>
        <div class="syllabus-subpart">
            <i class="fas fa-book-reader icon"></i>
            <h2>Syllabus for NEP</h2>
            <p>Learn about the curriculum following the New Education Policy (NEP).</p>
            <a href="https://hnbgu.ac.in/sites/default/files/2023-08/BCA%20NEP%20SYLLABUS.pdf" class="button">View Syllabus</a>
        </div>
    </div>


    <!-- syllabus section close -->


    <!-- notes section start -->
    <div class="notes-section">
        <div class="notes-subpart">
            <i class="fas fa-book-open icon"></i>
            <h2>BCA 1st Year Notes</h2>
            <p>Access notes for the first year of BCA program.</p>
            <a href="http://localhost/MIT/notes/bca1stnotes.php" class="button">View Notes</a>
        </div>
        <div class="notes-subpart">
            <i class="fas fa-book-open icon"></i>
            <h2>BCA 2nd Year Notes</h2>
            <p>Access notes for the second year of BCA program.</p>
            <a href="http://localhost/MIT/notes/bca2ndnotes.php" class="button">View Notes</a>
        </div>
        <div class="notes-subpart">
            <i class="fas fa-book-open icon"></i>
            <h2>BCA 3rd Year Notes</h2>
            <p>Access notes for the third year of BCA program.</p>
            <a href="http://localhost/MIT/notes/bca3rdnotes.php" class="button">View Notes</a>
        </div>
    </div>

    <!-- notes section close -->






    </div>


    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <div class="brand-logo">
                    <img src="http://localhost/MIT/images/mitlogo.png" alt="Logo">
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
                    <li><a href="http://localhost/MIT/home.php">Home</a></li>
                    <li><a href="http://localhost/MIT/aboutus.php">About Us</a></li>
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

</body>

</html>
