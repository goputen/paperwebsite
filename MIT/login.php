<?php
include "config/connection.php";
$logout = '';
if (isset($_GET['x'])) {
  $logout = $_GET['x'];
}
if ($logout == "'logout'") {
  // Unset
  unset($_SESSION['id']);
  unset($_SESSION['fullname']);
  unset($_SESSION['mobile']);
  unset($_SESSION['email']);
  unset($_SESSION['profile']);
  unset($_SESSION['loggedin']);
  session_destroy();
  //redirect
  header("Location: login.php");
  exit;

}



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();

  // Retrieve form data
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Query to fetch user data based on mobile number
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['fullname'] = $row['fullname'];
      $_SESSION['mobile'] = $row['mobile'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['loggedin'] = true;

      // Redirect to dashboard or any other page
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        // Display a success message using JavaScript alert
        echo '<script>alert("You have successfully logged in.");</script>';
        header("Location:home.php");
      } else {
        // Redirect the user to the login page or do something else
        echo "<script>alert('something is wrong');</script>";

        header("Location: login.php");
        exit;
      }
    } else {
      // Password is incorrect
      $error = "Invalid email or password";
      echo "<script>alert(" . $error . ")</script>";

    }
  } else {
    // User does not exist
    $error = "Something went wrong";
    echo "<script>alert(" . $error . ")</script>";


  }
  // Close statement
  // mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
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
      height: 100vh;
    }

    .login-container {
      max-width: 400px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }

    .login-header {
      text-align: center;
      margin-bottom: 40px;
    }

    .login-header h1 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 10px;
    }

    .login-header p {
      font-size: 1.1rem;
      color: #777;
    }

    .form-group {
      margin-bottom: 20px;
      position: relative;
    }

    .form-group input {
      width: calc(100% - 30px);
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 1rem;
    }

    .form-group label {
      font-size: 1rem;
      color: #555;
      font-weight: bold;
      display: inline-block;
      margin-bottom: 5px;
    }

    
    .form-group p {
      margin-top: 5px;
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
  <div class="login-container">
    <div class="login-header">
      <h1>Log In!</h1>
      <p>Create New Account. <a href="http://localhost/mit/signup.php">click here !</a> </p>
    </div>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Enter your email " required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <p><a href="http://localhost/mit/resetpassword/forgot.php">Forgot Password?</a></p>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</body>

</html>


