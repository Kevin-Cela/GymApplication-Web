<?php
require('SanitizeData.php');
require('Authenthicate.php');
$nameErr = $emailErr = $passwordErr = '';
$password = $email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    } else {
      $emailErr = "";
    }
    $email = test_input($_POST['email']);
  }

  if (empty($_POST['password'])) {
    $passwordErr = 'Password is required';
  } else {
    $len = preg_match('/.{8,20}/', $_POST['password']);
    $ucl = preg_match('/[A-Z]/', $_POST['password']);
    $dig = preg_match('/\d/', $_POST['password']);

    if (!$len) {
      $passwordErr = "Password must be between 8-20 characters long!<br>";
    } else if (!$ucl) {
      $passwordErr = "Password needs to contain at least one upper case letter!<br>";
    } else if (!$dig) {
      $passwordErr = "Password needs to contain at least one number!<br>";
    }

    $password = test_input($_POST['password']);
  }

  if (empty($emailErr) && empty($passwordErr)) {
    authenthicate($email,$password,$database);
    
    //exit();
  }
}

