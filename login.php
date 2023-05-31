<!DOCTYPE html>
<html lang="en">

<head>
  <!-- DO NOT FORGET TO INCLUDE THESE TAGS -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gymify | Log In</title>
  <!-- Include Global files -->
  <?php require './components/globals.php' ?>
</head>


<body class="login-background">
  <?php require './components/Navigation.php' ?>
  <?php require './components/Login/Validate.php' ?>
  <img src="./assets/logo/svg/logo-no-background.svg" alt="Logo" class="w-28 h-28 my-12 mx-auto">
  <h1 class="text-center text-2xl lg:text-3xl">
    Welcome to The Club!
  </h1>
  <div class="my-10 shadow-lg mx-auto p-8 border border-slate-300 rounded-xl bg-footer-dark w-10/12 md:w-10/12 lg:w-1/2 xl:w-1/3">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <div>
        <label for="email" style="color: #ECEAE2;">Email:</label>
        <input type="text" id="email" name="email" class="login-email" placeholder="Enter your email" value="<?php echo $email; ?>" required>
        <span class="error"><?php echo $emailErr; ?></span>
      </div>
      <div>
        <label for="password" style="color: #ECEAE2;">Password:</label>
        <input type="password" id="password" class="login-password" name="password" placeholder="Enter your password" required>
        <span class="error"><?php echo $passwordErr; ?></span>
      </div>
    </form>
    <button type="submit" class="login-button">Register</button>
    <div class="mt-5 flex items-center content-center justify-center gap-4">
      <a href="forgot_password.php" class="text-sky-300 hover:text-sky-500">Forgot Password?</a>
      <span class="w-0.5 h-5 !bg-slate-300"></span>
      <a href="/register.php" class="text-sky-300 hover:text-sky-500">Don't have an account?</a>
    </div>
  </div>
</body>

</html>
