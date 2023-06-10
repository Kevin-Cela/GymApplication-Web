<!DOCTYPE html>
<html lang="en">

<head>
  <!-- DO NOT FORGET TO INCLUDE THESE TAGS -->
  <title>Gymify | Log In</title>
  <!-- Include Global files -->
  <?php require './components/globals.php' ?>
</head>


<body class="login-background">
  <!-- <?php require './components/Validation/LoginValidate.php' ?> -->
  <?php require './components/Navigation/Navigation.php' ?>

  <img src="./assets/logo/svg/logo-no-background.svg" alt="Logo" class="w-28 h-28 mb-6 pt-3 mx-auto">
  <h1 class="text-center text-2xl lg:text-3xl text-slate-200">
    Welcome Back
  </h1>
  <div class="my-10 shadow-lg drop-shadow-lg mx-auto p-4 lg:p-8 border border-slate-300 rounded-xl bg-body-light w-10/12 md:w-10/12 lg:w-1/2 xl:w-1/3">
    <!-- <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> -->
      <div class="w-full h-fit">
        <label for="email" class="text-slate-800 tracking-wider text-base lg:text-lg">Email</label>
        <input type="text" id="email" name="email" class="input-special" placeholder="Enter your email" value="<?php echo $email; ?>">
        <span class="text-red-700 pb-6"><?php echo $emailErr; ?></span>
      </div>
      <div class="w-full h-fit">
        <label for="password" class="text-slate-800 tracking-wider text-base lg:text-lg">Password</label>
        <input type="password" id="password" class="input-special" name="password" placeholder="Enter your password">
        <span class="text-red-700 pb-6"><?php echo $passwordErr; ?></span>
      </div>
      <input type="submit" name="submit" class="login-button" value="Log In">
    <!-- </form> -->
    <div class="mt-5 flex flex-col lg:flex-row items-center content-center justify-evenly lg:justify-center gap-4">
      <a href="/forgot_password.php" class="text-sky-600 lg:text-center hover:text-sky-500 w-full">Forgot Password?</a>
      <span class="w-0.5 h-5 bg-slate-500 hidden lg:block"></span>
      <a href="/register.php" class="text-sky-600 lg:text-center hover:text-sky-500 w-full">Don't have an account?</a>
    </div>
  </div>
</body>

</html>
