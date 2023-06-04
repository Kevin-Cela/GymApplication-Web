<?php require 'SanitizeData.php'?>
<?php
$nameErr = $surnameErr = $phoneErr = $emailErr = $passwordErr = $confirmPasswordErr = '';
$name = $surname = $phone = $email = $password = $confirmPassword = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = test_input($_POST['name']);
    }

    if (empty($_POST['surname'])) {
        $surnameErr = 'Surname is required';
    } else {
        $surname = test_input($_POST['surname']);
    }

    if (empty($_POST['phone'])) {
        $phoneErr = 'Phone number is required';
    } else {
        $phone = test_input($_POST['phone']);
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
      } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
        else{
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
            $passwordErr = "Password must be between 8-20 characters long!";
        } else if (!$ucl) {
            $passwordErr = "Password needs to contain at least one upper case letter!";
        } else if (!$dig) {
            $passwordErr = "Password needs to contain at least one number!";
        }

        $password = test_input($_POST['password']);
    }

    if (empty($_POST['confirm_password'])) {
        $confirmPasswordErr = 'Confirm password is required!';
    } else {
        $confirmPassword = test_input($_POST['confirm_password']);
        if ($confirmPassword != $password){
            $confirmPasswordErr = 'Passwords do not match!';
        }
    }

    // If there are no errors, you can process the form data further (e.g., store in a database)
    if (empty($nameErr) && empty($surnameErr) && empty($phoneErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {

        header('Location: Authenthicate.php');
        exit();
    }
}

?>
