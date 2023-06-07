<?php 
session_start();
echo $_SESSION['role'];
session_unset();
session_destroy();


?>