<?php
include('backend/database.php');

function authenthicate($email, $password, $database){
$stm = $database->connection->prepare("SELECT * FROM members WHERE password = (?) AND email = (?)");

$stm->bind_param("ss", $password, $email);
$stm->execute();
$res = $stm->get_result();
$row = $res->fetch_assoc();

if($row!=null){
    session_start();
    $a = $row['first_name'];
    $a .= " ";
    $a .= $row['last_name'];
    $_SESSION['username'] = $a;
    header('Location: components/Validation/test.php');
    exit();
}
}

function register($fname, $lname, $phone, $email, $password, $database){
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
?>