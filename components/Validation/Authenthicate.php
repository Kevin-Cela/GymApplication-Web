<?php
require_once('backend/database.php');
require('backend/models/member.php');
require('backend/models/coach.php');
require('backend/models/manager.php');

function authenthicate($email, $password, $database)
{
  $stm = $database->connection->prepare("SELECT * FROM members WHERE password = (?) AND email = (?)");
  $stm->bind_param("ss", $password, $email);
  $stm->execute();
  $res = $stm->get_result();
  $row = $res->fetch_assoc();

  if ($row != null) {
    session_start();
    $member = new Member($row['id'], $row['password'], $row['first_name'], $row['last_name'], $row['email'], $row['phone_number']);
    $_SESSION['user'] = $member;
    $_SESSION['role'] = 'MEMBER';
    header('Location: components/Validation/test.php');
    exit();
  } else {
    $stm = $database->connection->prepare("SELECT * FROM coaches WHERE password = (?) AND email = (?)");
    $stm->bind_param("ss", $password, $email);
    $stm->execute();
    $res = $stm->get_result();
    $row = $res->fetch_assoc();
    if ($row != null) {
      session_start();
      $coach = new Coach($row['id'], $row['password'], $row['first_name'], $row['last_name'], $row['email'], $row['phone_number']);
      $_SESSION['user'] = $coach;
      $_SESSION['role'] = 'COACH';
      header('Location: components/Validation/test.php');
      exit();
    } else {
      $stm = $database->connection->prepare("SELECT * FROM managers WHERE password = (?) AND email = (?)");
      $stm->bind_param("ss", $password, $email);
      $stm->execute();
      $res = $stm->get_result();
      $row = $res->fetch_assoc();
      if ($row != null) {
        session_start();
        $manager = new Manager($row['id'], $row['password'], $row['first_name'], $row['last_name'], $row['email'], $row['phone_number']);
        $_SESSION['user'] = $manager;
        $_SESSION['role'] = 'MANAGER';
        header('Location: components/Validation/test.php');
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

  $stm2 = $database->connection->prepare("SELECT email FROM `coaches` WHERE email=(?)");
  $stm2->bind_param("s", $email);
  $stm2->execute();
  $res2 = $stm2->get_result();

  $stm3 = $database->connection->prepare("SELECT email FROM `managers` WHERE email=(?)");
  $stm3->bind_param("s", $email);
  $stm3->execute();
  $res3 = $stm3->get_result();

  if ($res1 == null && $res2 == null && $res3 == null) {
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
  $res = $stm->get_result();

  session_start();
  $a = $fname;
  $a .= " ";
  $a .= $lname;
  $_SESSION['username'] = $a;
  header('Location: components/Validation/test.php');
  exit();
}

