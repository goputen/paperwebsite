<?php
include "./config/connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - College Resource Hub</title>
    <!-- Add your CSS links here -->
   <link rel="stylesheet" href="http://localhost/mit/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <style>

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
        /* Custom styles for this page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        nav {
            background-color: #007bff;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .settings {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .setting-item {
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px); /* Adjusted width */
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Ensure padding is included in the width */
        }

        button[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
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
            border: 2px solid #fff;
        }
        .logout i {
            margin-right: 5px;
        }
        
    </style>
</head>

<body>
    <!-- Navigation bar -->
  

    <!-- Settings section -->
    <div class="profile-header">
        <img src="http://localhost/mit/images/mitlogo.png" alt="Profile Picture">
        <h1><?php echo $_SESSION['fullname'];?></h1>
    </div>
    <section class="settings">
        
        <h1>Settings</h1>
        <div class="setting-item">
            <h2>Change Password</h2><br><br>
            <form action="" method="post">
                <label for="current-password">Current Password:</label>
                <input type="password" id="current-password" name="current-password" required><br><br>
                <label for="new-password">New Password:</label>
                <input type="password" id="new-password" name="new-password" required><br><br>
                <label for="confirm-password">Confirm New Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                <br><br>
                <button type="submit"><i class="fas fa-key"></i> Change Password</button>
            </form>
        </div>
        <!-- <div class="setting-item">
            <h2>Profile Settings</h2>
            <form action="update_profile.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                <button type="submit"><i class="fas fa-user"></i> Update Profile</button>
            </form>
        </div> -->
      
    </section>
    <div class="profile-footer">
        <a style="color: #fff;" href="http://localhost/mit/aboutus.php" ><i class="fas fa-info-circle icon"></i> About Us</a>
        <a href="http://localhost/mit/home.php" class="logout"><i class="fas fa-sign-out-alt icon"></i>Exit</a>
    </div>

    <!-- Footer -->
    
</body>

</html>
