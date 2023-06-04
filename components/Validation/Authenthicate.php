<?php
require_once '../../backend/database.php';
//$password = "henri123";
//$first_name = "henri";

$stm = $database->connection->prepare("SELECT * FROM members WHERE password = (?) AND first_name = (?)");

$stm->bind_param("ss", $password, $first_name);
$stm->execute();
$res = $stm->get_result();
$row = $res->fetch_assoc();
//echo $row["first_name"];

?>