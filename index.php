<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.button {
  display: inline-block;
  padding: 15px 25px;
  background-color: #4CAF50;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  border-radius: 5px;
  border: none;
  transition: background-color 0.3s;
}

.button:hover {
  background-color: #45a049;
}

@media (max-width: 600px) {
  .button {
    padding: 10px 20px;
    font-size: 14px;
  }
}

  </style>
</head>
<body>
  <a href="./MIT/home.php" class="button">Click here to open the app</a>
</body>
</html>

