<?php
include "./config/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="icon" href="/images/mitlogo.png">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .signup-container {
      max-width: 400px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }

    .signup-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .signup-header h1 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 10px;
    }

    .signup-header p {
      font-size: 1.1rem;
      color: #777;
    }

    .form-group {
      margin-bottom: 20px;
      position: relative;
    }

    .form-group input {
      width: calc(100% - 50px);
      padding: 12px;
      padding-left: 40px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 1rem;
    }

    .form-group i {
      position: absolute;
      left: 10px;
      top: 65%;
      transform: translateY(-50%);
      color: #aaa;
      margin-top: 3px;
      /* Adjusted margin-top */
    }

    .form-group label {
      font-size: 1rem;
      color: #555;
      font-weight: bold;
      display: inline-block;
      vertical-align: middle;
    }

    .btn-otp {
      padding: 14px;
      background-color: #4CAF50;
      /* Greenish color */
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-otp:hover {
      background-color: #45a049;
      /* Darker shade on hover */
    }

    .btn {
      width: 100%;
      padding: 14px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="signup-container">
    <div class="signup-header">
      <h1>Sign up!</h1>
      <p>Already have an account? <a href="http://localhost/mit/login.php">Click here to login</a></p>
    </div>
    <form action="otp.php" method="post">
      <div class="form-group">
        <i class="fas fa-user"></i>
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <i class="fas fa-mobile-alt"></i>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Enter your Email" required>
      </div>

      <div class="form-group">
        <i class="fas fa-lock"></i>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <i class="fas fa-lock"></i>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password"
          required>
      </div>
      <!-- <div class="form-group">
        <i class="fas fa-camera"></i>
        <label for="photo">Profile Photo</label>
        <input type="file" id="photo" name="photo" accept="image/*" required>
      </div> -->
      <button type="submit" class="btn">Sign Up</button>
    </form>
  </div>
</body>

</html>