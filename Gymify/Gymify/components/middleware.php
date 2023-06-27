<?php
$protocol  = $_SERVER['SERVER_PORT'] === "8080" ? "http://"  : "https://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$protected_paths = ["manager/profile.php", "coach/profile.php", "course/create.php"];
// Check if user is in a protected path
$result = array_filter($protected_paths, function ($v) {
  return $v == $_SERVER['REQUEST_URI'];
}, ARRAY_FILTER_USE_BOTH);

// check if user exists in session
if (!array_key_exists('user', $_SESSION) && !array_key_exists('role', $_SESSION)) {
  // check if user is trying to acces a protected path that he does not have access to ;
  if (count($result) !== 0) {
    echo "USER ON PROTECTED PATH AND NOT SIGNED IN";
  } else {
    echo "USER NOT ON PROTECTED PATH AND NOT SINGED IN";
  }
}
