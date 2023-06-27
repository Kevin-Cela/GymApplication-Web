<?php
require_once("../backend/models/review.php");
require_once("../backend/database.php");


if(!isset($_POST['submit'])){
    header("../index.php");
}

global $database;

$review = new Review();
$review->name = $_POST['name'];
$review->surname = $_POST['surname'];
$review->content = $_POST['content'];
$review->coach_id = $_GET['coach_id'];

$sql = "INSERT into reviews(name, surname, content, coach_id) ";
$sql .= "VALUES('{$review->name}', '{$review->surname}', '{$review->content}', {$review->coach_id})";
if($database->query($sql)){
    
}
header("Location: dashboard.php?id={$review->coach_id}");
?>