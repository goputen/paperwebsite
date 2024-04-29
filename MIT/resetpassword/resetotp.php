<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OTP Verification</title>
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
    
    .otp-verification-container {
      max-width: 400px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }
    
    .otp-verification-header {
      text-align: center;
      margin-bottom: 40px;
    }
    
    .otp-verification-header h1 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 10px;
    }
    
    .otp-verification-header p {
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
  <div class="otp-verification-container">
    <div class="otp-verification-header">
      <h1>OTP Verification</h1>
      <p>An OTP has been sent to your mobile number. Please enter the OTP below to reset your password.</p>
    </div>
    <form action="#" method="post">
      <div class="form-group">
        <label for="otp"><i class="fas fa-key"></i> OTP</label>
        <input type="text" id="otp" name="otp" placeholder="Enter the OTP" required>
      </div>
      <button type="submit" class="btn">Verify OTP</button>
    </form>
  </div>
</body>
</html>
