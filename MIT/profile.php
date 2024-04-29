<?php
include "./config/connection.php";
session_start();
if(isset($_GET['logout'])){
    echo "enter";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .profile-header, .profile-footer {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            border-radius: 8px 8px 0 0;
        }
        .profile-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-details, .bio {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }
        .profile-details h1, .bio h2 {
            margin-top: 0;
            font-size: 20px;
            color: #007bff;
            margin-bottom: 10px;
        }
        .profile-details p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.5;
            color: #444;
        }
        .logout {
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff;
            color: #007bff;
            border: 2px solid #007bff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            margin-left: 5px;
            font-weight: bold;
        }
        .logout:hover {
            background-color: #007bff;
            color: #fff;
            border: 2px solid #fff ;
        }
        .logout i {
            margin-right: 5px;
        }
        .profile-details a, .bio a {
            text-decoration: none;
            color: #007bff;
        }
        .profile-details a:hover, .bio a:hover {
            text-decoration: underline;
        }
        h1, h2, p {
            margin: 0;
        }
        .icon {
            margin-right: 10px;
        }
        /* Alternate background color for sections */
        .container > div:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-header">
            <img src="http://localhost/mit/images/mitlogo.png" alt="Profile Picture">
            <h1><?php echo $_SESSION['fullname'] ?></h1>
        </div>
        <div class="profile-details">
            <a href="http://localhost/mit/home.php"><h1><i style="margin-right:10px" class="fa-solid fa-house"></i>Home</h1></a>
            <p>click here to go to home page</p>
        </div>
        <div class="profile-details">
            <a href="http://localhost/mit/notes/bca1stnotes.php"><h1><i class="fas fa-book icon"></i> Notes</h1></a>
            <p>Access your notes here</p>
        </div>
        <div class="bio">
            <a href="http://localhost/mit/download.php"><h2><i class="fas fa-file-download icon"></i> Downloads and Files</h2></a>
            <p>Download your files and documents</p>
        </div>
        <div class="profile-details">
            <a href="http://localhost/mit/topics/topics.php"><h1><i class="fas fa-info-circle icon"></i> Important Topics</h1></a>
            <p>Find important topics and discussions</p>
        </div>
        <div class="bio">
            <a href="#"><h2><i class="fas fa-envelope icon"></i> Contact Us</h2></a>
            <p>Get in touch with us</p>
        </div>
        <div class="profile-details">
            <a href="http://localhost/mit/setting.php"><h1><i class="fas fa-cog icon"></i> Settings</h1></a>
            <p>Manage your account settings</p>
        </div>
        <div class="bio">
            <a href="#"><h2><i class="fas fa-question-circle icon"></i> Help & Support</h2></a>
            <p>Get assistance and support</p>
        </div>
        <div class="profile-footer">
            <a href="http://localhost/mit/aboutus.php" style="color: whitesmoke;" ><i class="fas fa-info-circle icon"></i> About Us</a>
            <a href="http://localhost/mit/login.php?x='logout'" name="logout" class="logout"><i class="fas fa-sign-out-alt icon"></i> Logout</a>
        </div>
    </div>
</body>
</html>
