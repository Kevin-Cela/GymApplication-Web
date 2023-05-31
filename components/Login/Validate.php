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
