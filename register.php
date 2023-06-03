<!DOCTYPE html>
<html>

<head>
  <title>Gymify | Regiser</title>
  <!-- Include Global files -->
  <?php require './components/globals.php' ?>
</head>

<body class="login-background">
  <?php require './components/Navigation.php' ?>
  <?php require './components/Validation/RegisterValidate.php' ?>
  <h1 class="text-center my-6 text-2xl lg:text-3xl text-slate-200">
    Welcome to The Club
  </h1>
  <div class="my-1 shadow-lg drop-shadow-lg mx-auto p-4 lg:p-8 border border-slate-300 rounded-xl bg-body-light w-10/12 md:w-10/12 lg:w-1/2 xl:w-1/3">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <div class="w-full h-fit">
        <label for="fname" class="text-slate-800 tracking-wider text-base lg:text-lg">
          First Name
        </label>
        <input type="text" class="input-register" id="fname" name="fname" placeholder="Enter your first name" value="<?php echo $fname; ?>">
        <span class="error">
          <?php echo $nameErr; ?>
        </span>
      </div>
      <div class="w-full h-fit">
        <label for="lname" class="text-slate-800 tracking-wider text-base lg:text-lg">
          Last Name
        </label>
        <input type="text" class="input-register" id="lname" name="lname" placeholder="Enter your lname" value="<?php echo $lname; ?>">
        <span class="error">
          <?php echo $surnameErr; ?>
        </span>
      </div>
      <div class="w-full h-fit">
        <label for="phone" class="text-slate-800 tracking-wider text-base lg:text-lg">
          Phone Number
        </label>
        <input type="text" id="phone" name="phone" class="input-register" placeholder="Enter your phone number" value="<?php echo $phone; ?>">
        <span class="error">
          <?php echo $phoneErr; ?>
        </span>
      </div>
      <div class="w-full h-fit">
        <label for="email" class="text-slate-800 tracking-wider text-base lg:text-lg">
          Email
        </label>
        <input type="text" class="input-register" id="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
        <span class="error">
          <?php echo $emailErr; ?>
        </span>
      </div>
      <div class="w-full h-fit">
        <label for="password" class="text-slate-800 tracking-wider text-base lg:text-lg">
          Password
        </label>
        <input type="password" id="password" class="input-register" name="password" placeholder="Enter your password" value="<?php echo $password; ?>">
        <span class="error">
          <?php echo $passwordErr; ?>
        </span>
      </div>
      <div class="w-full h-fit">
        <label for="confirm_password" class="text-slate-800 tracking-wider text-base lg:text-lg">
          Confirm Password
        </label>
        <input type="password" class="input-register" id="confirm_password" name="confirm_password" placeholder="Confirm your password" value="<?php echo $confirmPassword; ?>">
        <span class="error">
          <?php echo $confirmPasswordErr; ?>
        </span>
      </div>
      <div class="w-full h-fit flex flex-col space-y-4">
        <button id="submit" name="submit" class="login-button">Register</button>
        <a href="login.php" class="text-sky-600">Have an account?</a>
      </div>
    </form>
  </div>
</body>

</html>
