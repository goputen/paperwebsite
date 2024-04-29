<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - College Resource Hub</title>
  <!-- Add your CSS links here -->
  <link rel="stylesheet" href="styles.css">
  <!-- Add Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Custom styles for this page */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      color: #333;
    }

    header {
      background-color: #007bff;
      color: white;
      text-align: center;
      padding: 50px 0;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 36px;
      margin-bottom: 20px;
    }

    h2 {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 24px;
      color: #007bff;
      margin-top: 30px;
      margin-bottom: 15px;
    }

    p {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .icon {
      font-size: 24px;
      margin-right: 10px;
      color: #007bff;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    li {
      margin-bottom: 10px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    footer {
      text-align: center;
      padding: 20px 0;
      background-color: #007bff;
      color: white;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    footer p {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 16px;
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
      font-weight: bold;
    }
    .logout:hover{
      background-color: #2196f3;
      color: #fff;
      border: 2px solid #fff;

    }

   .logout:hover > i {
    color:#fff;
   }
    .logout i {
      margin-right: 5px;
    }



    .profile-footer {
      background-color: #007bff;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      border-radius: 8px 8px 0 0;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header>
    <h1>About Us</h1>
    <p>Welcome to Our website - Your ultimate destination for academic resources and support!</p>
  </header>

  <!-- Main content -->
  <div class="container">
    <h2><i class="fas fa-users icon"></i> Our Team</h2>
    <p>Meet the talented individuals behind College Resource Hub:</p>
    <ul>
      <li><strong>Founder & CEO : </strong>Shivani</li>
      <li><strong>Marketing Director : </strong>Shivani</li>
      <li><strong>Lead Developer : </strong>Shivani And Sachin</li>
      <li><strong>Content Manager : </strong>Shivani And Sachin</li>
    </ul>

    <h2><i class="fas fa-lightbulb icon"></i> Our Mission</h2>
    <p>In Our website, our mission is to empower students with the knowledge and resources they need to succeed in their
      academic journey.</p>

    <h2><i class="fas fa-globe icon"></i> Our Vision</h2>
    <p>We envision a world where every student has access to quality education and opportunities for growth.</p>

    <h2><i class="fas fa-heart icon"></i> Our Values</h2>
    <p>We are committed to:</p>
    <ul>
      <li><strong>Excellence:</strong> Striving for the highest standards in everything we do.</li>
      <li><strong>Accessibility:</strong> Ensuring that our resources are accessible to all students.</li>
      <li><strong>Innovation:</strong> Embracing creativity and innovation to drive positive change.</li>
      <li><strong>Community:</strong> Building a supportive community where students can thrive.</li>
    </ul>
  </div>

  <!-- Footer -->
  <footer>
    <div class="profile-footer">
      <a  href="http://localhost/mit/home.php" class="logout"><i class="fas fa-sign-out-alt icon"></i>Exit</a>
    </div>
  </footer>
</body>

</html>