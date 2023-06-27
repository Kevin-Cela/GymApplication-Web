<?php
require_once('backend/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/backend/models/user.php');


function authenthicate($email, $password, $database)
{
  $stm = $database->connection->prepare("SELECT * FROM members WHERE password = (?) AND email = (?)");
  $stm->bind_param("ss", $password, $email);
  $stm->execute();
  $res = $stm->get_result();
  $row = $res->fetch_assoc();

  if ($row != null) {
    session_start();
    $member = new User($row['id'], $row['password'], $row['first_name'], $row['last_name'], $row['email'], $row['phone_number']);
    $_SESSION['user'] = serialize($member);
    $_SESSION['role'] = 'MEMBER';
    header('Location: index.php');
    exit();
  } else {
    $stm = $database->connection->prepare("SELECT * FROM coaches WHERE password = (?) AND email = (?)");
    $stm->bind_param("ss", $password, $email);
    $stm->execute();
    $res = $stm->get_result();
    $row = $res->fetch_assoc();
    if ($row != null) {
      session_start();
      $coach = new User($row['id'], $row['password'], $row['first_name'], $row['last_name'], $row['email'], $row['phone_number']);
      $_SESSION['user'] = $coach;
      $_SESSION['role'] = 'COACH';
      header('Location: index.php');
      exit();
    } else {
      $stm = $database->connection->prepare("SELECT * FROM managers WHERE password = (?) AND email = (?)");
      $stm->bind_param("ss", $password, $email);
      $stm->execute();
      $res = $stm->get_result();
      $row = $res->fetch_assoc();
      if ($row != null) {
        session_start();
        $manager = new User($row['id'], $row['password'], $row['first_name'], $row['last_name'], $row['email'], $row['phone_number']);
        $_SESSION['user'] = $manager;
        $_SESSION['role'] = 'MANAGER';
        header('Location: index.php');
        exit();
      }
    }
  }
}

function isEmailInUse($email, $database)
{
  $stm1 = $database->connection->prepare("SELECT email FROM `members` WHERE email=(?)");
  $stm1->bind_param("s", $email);
  $stm1->execute();
  $res1 = $stm1->get_result();
  $row1 = $res1->fetch_assoc();

  $stm2 = $database->connection->prepare("SELECT email FROM `coaches` WHERE email=(?)");
  $stm2->bind_param("s", $email);
  $stm2->execute();
  $res2 = $stm2->get_result();
  $row2 = $res2->fetch_assoc();

  $stm3 = $database->connection->prepare("SELECT email FROM `managers` WHERE email=(?)");
  $stm3->bind_param("s", $email);
  $stm3->execute();
  $res3 = $stm3->get_result();
  $row3 = $res3->fetch_assoc();

  if ($row1 == null && $row2 == null && $row3 == null) {
    return false;
  } else {
    return true;
  }
}

function register($fname, $lname, $phone, $email, $password, $database)
{
  $stm = $database->connection->prepare("INSERT INTO members (password, first_name, last_name, email, phone_number) VALUES (?,?,?,?,?)");

  $stm->bind_param("sssss", $password, $fname, $lname, $email, $phone);
  $stm->execute();

  authenthicate($email, $password, $database);
}
