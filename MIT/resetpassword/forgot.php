<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
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
    
    .password-reset-container {
      max-width: 400px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }
    
    .password-reset-header {
      text-align: center;
      margin-bottom: 40px;
    }
    
    .password-reset-header h1 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 10px;
    }
    
    .password-reset-header p {
      font-size: 1.1rem;
      color: #777;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 1rem;
    }
    
    .form-group i {
      position: absolute;
      left: 10px;
      top: 16px;
      color: #aaa;
    }
    
    .form-group label {
      font-size: 1rem;
      color: #555;
      font-weight: bold;
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
  <div class="password-reset-container">
    <div class="password-reset-header">
      <h1>Forgot Password?</h1>
      <p>Enter your mobile number to reset your password.</p>
    </div>
    <form action="#" method="post">
      <div class="form-group">
        <label for="mobile"><i class="fas fa-mobile-alt"></i> Mobile</label>
        <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" pattern="[0-9]{10}" required>
      </div>
      <button type="submit" class="btn">Reset Password</button>
    </form>
  </div>
</body>
</html>
