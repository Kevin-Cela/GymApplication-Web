<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <!-- Include Global files -->
  <?php require './components/globals.php' ?>

  <style>
    body {
      margin: 0;
      font-family: ./assets/font/Spectral Bold.ttf;
      background-color: #f1f1f1;
    }
    .container {
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #dddddd;
      border-radius: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
      margin-bottom: 30px;
      max-width: 400px;
      
      

    }
    .fjala {
      text-align: center;
      font-size: 30px;
      }
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      background-color: lightgrey;

      border-radius: 20px;
    }
    .container button {
      background-color: #EA3C12;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 20px;

    }
    .container button:hover {
      opacity: 0.8;
      transition-duration: 1s;


    }
    .error {
      color: red;
      margin-bottom: 10px;
    }
    .logo_vogel{
      width: 100px;
      height: 100px;
      margin: 0 auto;
    }
        .links {
      text-align: center;
      margin-top: 10px;
    }
    .links a {
      text-decoration: none;
      margin: 0 5px;
    }
  </style>
</head>
<body>
  <?php require './components/Navigation.php' ?>

  <?php
    $nameErr = $emailErr = $passwordErr = '';
    $name = $email = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
      } else {
        $email = test_input($_POST['email']);
      }

      if (empty($_POST['password'])) {
        $passwordErr = 'Password is required';
      } else {
        $password = test_input($_POST['password']);
      }

      if (empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
        header('Location: success.php');
        exit();
      }
    }


  ?>

<img src="./assets/logo/png/Logo_black_2.png" alt="Logo" class="logo_vogel">

<div class="fjala">
  <h1> Welcome to The Club! </h1>
</div>


  <div class="container bg-footer-dark w-9/12 md:w-1/2 lg:w-1/3">

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <label for="email" style = "color: #ECEAE2;">Email:</label>
      <input type="text" id="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>" required>
      <span class="error"><?php echo $emailErr; ?></span>

      <label for="password" style = "color: #ECEAE2;">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <span class="error"><?php echo $passwordErr; ?></span>

    </form>
          <button type="submit">Register</button>
          <div class="links">
      <a href="forgot_password.php" style = "color: #89CFF0;">Forgot Password?</a>
      <span>|</span>
      <a href="/register.php" class="text-[#89CFF0]">Don't have an account?</a>
    </div>
      </div>
  <?php require './components/Footer/Footer.php' ?>

</body>
</html>


